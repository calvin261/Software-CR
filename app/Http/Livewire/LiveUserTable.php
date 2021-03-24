<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class LiveUserTable extends Component
{
    use WithPagination;
    public $search = '';
    public $icon = '-circle';
    public $perPage = 5;
    public $camp = null;
    public $order = null;
    public $user_role = '';
    public $showModel = 'hidden';

    protected $queryString = [
        'search' => ['except' => ''],
        'camp' => ['except' => null],
        'order' => ['except' => null],
    ];

    protected $listeners = [
        'userListUpdate' => 'render',
        'deleteUserList' => 'deleteUser'
    ];
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function render()
    {
        $users = User::termino($this->search)
            ->role($this->user_role);

        if ($this->camp && $this->order) {
            $users = $users->orderBy($this->camp, $this->order);
        } else {
            $this->camp = null;
            $this->order = null;
        }
        $users = $users->paginate($this->perPage);

        return view('livewire.live-user-table', [
            'users' => $users
        ]);
    }
    public function sortable($camp)
    {
        if ($camp !== $this->camp) {
            $this->order = null;
        }
        switch ($this->order) {
            case null:
                $this->order = 'asc';

                break;
            case 'asc':
                $this->order = 'desc';

                break;
            case 'desc':
                $this->order = null;

                break;
        }
        $this->icon = $this->iconDirection($this->order);
        $this->camp = $camp;
    }

    public function mount()
    {
        $this->icon = $this->iconDirection($this->order);
    }
    public function clear()
    {
        $this->reset();
    }
    public function iconDirection($sort): string
    {
        if (!$sort) {
            return '-circle';
        }
        return $sort === 'asc' ? '-arrow-circle-up' : '-arrow-circle-down';
    }

    public function showModal(User $user)
    {
        if ($user->name) {
            $this->emit('showModal', $user);
        }else{
            $this->emit('showModalNewUser');
        }

    }
    public function deleteUser(User $user){
        $user->delete();
        $this->emit('deleteUser', $user);
    }
}
