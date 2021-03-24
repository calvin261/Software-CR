<?php

namespace App\Http\Livewire;

use App\Http\Requests\RequestUpdateUser;
use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\TemporaryUploadedFile;

class LiveModal extends Component
{
    use WithFileUploads;
    public $showModel = 'hidden';
    public $name = '';
    public $email = '';
    public $role = '';
    public $action = '';
    public $method = '';
    public $id_user = 0;
    public $password = '';
    public $password_confirmation = '';
    public $user = null;
    public $profile_photo_path = null;


    protected $listeners = [
        'showModal',
        'showModalNewUser'
    ];

    public function render()
    {
        return view('livewire.live-modal');
    }

    public function showModal($user){
        $this->id_user = $user['id'];
        $this->user = $user;
        $this->name = $user['name'];
        $this->email = $user['email'];
        $this->role = $user['role'];
        $this->showModel = "";

        $this->action = 'Actualizar';
        $this->method = 'actualizarUsuario';
    }
    public function closeModal(){
        $this->resetErrorBag();
        $this->resetValidation();
        $this->reset();
     }
    public function actualizarUsuario(){
        $user = User::find($this->id_user);
        $requestUser = new RequestUpdateUser();
        $values = $this->validate($requestUser->rules( $this->user),$requestUser->messages());

        $this->removeImage($user->profile_photo_path);
        $img = null;
        if($values['profile_photo_path']){
            $img = $this->loadImage($values['profile_photo_path']);
        }

       $user->update([
           'name' => $values['name'],
            'email' => $values['email'],
            'role' => $values['role'],
            'profile_photo_path' => $img,
       ]);

       $this->emit('userListUpdate');


       $this->resetErrorBag();
       $this->resetValidation();
       $this->reset();

    }

    public function updated($label){

        $requestUser = new RequestUpdateUser();
        $this->validateOnly($label, $requestUser->rules($this->user),$requestUser->messages());

    }
    public function showModalNewUser(){
        $this->user = null;
        $this->action = 'Registrar';
        $this->method = 'registrarUsuario';
        $this->showModel = "";
    }

    public function registrarUsuario(){

        $requestUser = new RequestUpdateUser();

        $values = $this->validate($requestUser->rules( $this->user),$requestUser->messages());

        $user = new User;

        $user->fill($values);
        if($values['profile_photo_path']){
            $user->profile_photo_path = $this->loadImage($values['profile_photo_path']);
        }
        $user->password = Hash::make($values['password']);
        $user->save();

        $this->closeModal();

    }
    private function loadImage(TemporaryUploadedFile $image) {

        $extension = $image->getClientOriginalExtension();

        $location = Storage::disk('public')->put('img',$image);

        return $location;
    }
    private function removeImage($profile_photo_path){
        if(!$profile_photo_path){
            return;
        }
        if( Storage::disk('public')->exists($profile_photo_path)){
            Storage::disk('public')->delete($profile_photo_path);
        }

    }
}
