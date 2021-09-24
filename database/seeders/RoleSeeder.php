<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name'=>'Admin']);
        $role2 = Role::create(['name'=>'Gestor']);
        $role3 = Role::create(['name'=>'Capturista']);
        $role4 = Role::create(['name'=>'Blogger']);

        permission::create(['name' => 'admin.index','description' => 'Ver el Dashboard'])->syncRoles([$role1, $role2, $role3, $role4]);

        permission::create(['name' => 'admin.user.index','description' => 'Ver el Listado de Usuarios'])->syncRoles([$role1]);
        permission::create(['name' => 'admin.user.create','description' => 'Crear Usuarios'])->syncRoles([$role1]);
        permission::create(['name' => 'admin.user.edit','description' => 'Editar Usuarios'])->syncRoles([$role1]);
        permission::create(['name' => 'admin.user.update','description' => 'Editar Usuarios'])->syncRoles([$role1]);
        permission::create(['name' => 'admin.user.destroy','description' => 'Borrar Usuarios'])->syncRoles([$role1]);

        permission::create(['name' => 'admin.personas.index','description' => 'Ver el listado de Personas'])->syncRoles([$role1, $role2, $role3]);
        permission::create(['name' => 'admin.personas.create','description' => 'Crear Personas'])->syncRoles([$role1, $role2, $role3]);
        permission::create(['name' => 'admin.personas.edit','description' => 'Editar Personas'])->syncRoles([$role1, $role2]);
        permission::create(['name' => 'admin.personas.destroy','description' => 'Borrar Personas'])->syncRoles([$role1]);

        permission::create(['name' => 'admin.gestions.index','description' => 'Ver listado de Gestiones'])->syncRoles([$role1, $role2, $role3]);
        permission::create(['name' => 'admin.gestions.create','description' => 'Crear Gestiones'])->syncRoles([$role1, $role2, $role3]);
        permission::create(['name' => 'admin.gestions.edit','description' => 'Editar Gestiones'])->syncRoles([$role1, $role2, $role3]);
        permission::create(['name' => 'admin.gestions.destroy','description' => 'Borrar Gestiones'])->syncRoles([$role1]);

        permission::create(['name' => 'admin.noticiasints.index','description' => 'Ver Listado de Noticias Internas'])->syncRoles([$role1, $role4]);
        permission::create(['name' => 'admin.noticiasints.create','description' => 'Craer Noticia Interna'])->syncRoles([$role1, $role4]);
        permission::create(['name' => 'admin.noticiasints.edit','description' => 'Editar Noticia Interna'])->syncRoles([$role1, $role4]);
        permission::create(['name' => 'admin.noticiasints.destroy','description' => 'Borrar Noticia Interna'])->syncRoles([$role1]);

        permission::create(['name' => 'admin.noticias.index','description' => 'Ver listado de Noticias'])->syncRoles([$role1, $role4]);
        permission::create(['name' => 'admin.noticias.create','description' => 'Crear Noticias'])->syncRoles([$role1, $role4]);
        permission::create(['name' => 'admin.noticias.edit','description' => 'Editar Noticias'])->syncRoles([$role1, $role4]);
        permission::create(['name' => 'admin.noticias.destroy','description' => 'Borrar Noticia'])->syncRoles([$role1]);

        permission::create(['name' => 'admin.roles.index','description' => 'Ver listado de Gestiones'])->syncRoles([$role1]);
        permission::create(['name' => 'admin.roles.create','description' => 'Crear Gestiones'])->syncRoles([$role1]);
        permission::create(['name' => 'admin.roles.edit','description' => 'Editar Gestiones'])->syncRoles([$role1]);
        permission::create(['name' => 'admin.roles.destroy','description' => 'Borrar Gestiones'])->syncRoles([$role1]);

    }
}
