<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [

            [
                'name' => 'role-list',
                'guard_name' => 'web',
                'title' => 'roles List',
                'route_name' => 'admin.roles.index,admin.roles.show'
            ],
            [
                'name' => 'role-create',
                'guard_name' => 'web',
                'title' => 'add Role',
                'route_name' => 'admin.roles.create,admin.roles.store'
            ],
            [
                'name' => 'role-edit',
                'guard_name' => 'web',
                'title' => 'update role',
                'route_name' => 'admin.roles.edit,admin.roles.update'
            ],
            [
                'name' => 'role-delete',
                'guard_name' => 'web',
                'title' => 'delete Role',
                'route_name' => 'admin.roles.destroy'
            ],

            //USERS
            [
                'name' => 'admin-list',
                'guard_name' => 'web',
                'title' => 'admins list',
                'route_name' => 'admin.admins.index,admin.admins.show'
            ],
            [
                'name' => 'admin-create',
                'guard_name' => 'web',
                'title' => 'add admins',
                'route_name' => 'admin.admins.create,admin.admins.store'
            ],
            [
                'name' => 'admin-edit',
                'guard_name' => 'web',
                'title' => 'update admins',
                'route_name' => 'admin.admins.edit,admin.admins.update'
            ],
            [
                'name' => 'admin-delete',
                'guard_name' => 'web',
                'title' => 'delete admin',
                'route_name' => 'admin.admins.destroy'
            ],
            [
                'name' => 'users-list',
                'guard_name' => 'web',
                'title' => 'users list',
                'route_name' => 'admin.users.list,admin.users.show'
            ],
            [
                'name' => 'users-create',
                'guard_name' => 'web',
                'title' => 'add users',
                'route_name' => 'admin.users.create,admin.users.store'
            ],
            [
                'name' => 'users-edit',
                'guard_name' => 'web',
                'title' => 'update users',
                'route_name' => 'admin.users.edit,admin.users.update'
            ],
            [
                'name' => 'users-delete',
                'guard_name' => 'web',
                'title' => 'delete users',
                'route_name' => 'admin.users.destroy'
            ],
            [
                'name' => 'post-list',
                'guard_name' => 'web',
                'title' => 'posts lost',
                'route_name' => 'admin.post.index,admin.posts.show'
            ],
            [
                'name' => 'post-create',
                'guard_name' => 'web',
                'title' => 'add post',
                'route_name' => 'admin.posts.create,admin.posts.store'
            ],
            [
                'name' => 'post-edit',
                'guard_name' => 'web',
                'title' => 'update post',
                'route_name' => 'admin.posts.edit,admin.posts.update'
            ],
            [
                'name' => 'post-delete',
                'guard_name' => 'web',
                'title' => 'delete post',
                'route_name' => 'admin.posts.destroy'
            ],

        ];
        foreach ($permissions as $permission) {

            Permission::create($permission);

        }
    }
}
