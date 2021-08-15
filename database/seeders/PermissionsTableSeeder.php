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
            [
                'name' => 'users-list',
                'guard_name' => 'web',
                'title' => 'users list',
                'route_name' => 'admin.users.index,admin.users.show'
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
                'route_name' => 'admin.posts.index,admin.posts.show,api.posts.index'
            ],
            [
                'name' => 'post-create',
                'guard_name' => 'web',
                'title' => 'add post',
                'route_name' => 'admin.posts.create,admin.posts.store,api.posts.store'
            ],
            [
                'name' => 'post-edit',
                'guard_name' => 'web',
                'title' => 'update post',
                'route_name' => 'admin.posts.edit,admin.posts.update,api.posts.update'
            ],
            [
                'name' => 'post-delete',
                'guard_name' => 'web',
                'title' => 'delete post',
                'route_name' => 'admin.posts.destroy'
            ],

        ];
        \DB::table('permissions')->insert($permissions);
    }
}
