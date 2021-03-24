<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $administrador = User::factory()->create([

            'name' => 'calvin',
            'email' => 'calvin@gmail.com',
        ]);
        $usuarioBasicoCompania1 = User::factory()->create([

            'name' => 'basico',
            'email' => 'basico@basico.com',
        ]);
        $usuarioSupervisorCompania1 = User::factory()->create([

            'name' => 'supervisor',
            'email' => 'supervisor@supervisor.com',
        ]);
        $usuarioGerenteCompania1 = User::factory()->create([

            'name' => 'gerente',
            'email' => 'gerente@gerente.com',
        ]);

        $admin = Role::create(['name' => 'administrador']);
        $gerenteC = Role::create(['name' => 'gerente']);
        $supervisorC = Role::create(['name' => 'supervisor']);
        $basicoC = Role::create(['name' => 'basico']);

        $permissions = [
            'create',
            'read',
            'update',
            'delete',
        ];

        foreach (Role::all() as $rol) {
            foreach ($permissions as $p) {
                Permission::create(['name' => "{$rol->name} $p"]);
            }
        }
        $admin->syncPermissions(Permission::all());
        $gerenteC->syncPermissions(Permission::where('name','like',"%gerente%")->get());
        $supervisorC->syncPermissions(Permission::where('name','like',"%supervisor%")->get());
        $basicoC->syncPermissions(Permission::where('name','like',"%basico%")->get());

        $administrador->assignRole('administrador');
        $usuarioGerenteCompania1->assignRole('gerente');
        $usuarioSupervisorCompania1->assignRole('supervisor');
        $usuarioBasicoCompania1->assignRole('basico');

        \App\Models\User::factory(90)->create();
    }
}
