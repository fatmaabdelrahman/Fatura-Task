<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->delete();

        $users = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '123456',
            ],
            [
                'name' => 'fatura',
                'email' => 'task@fatura.com',
                'password' => '123456',
            ],

        ];

        foreach ($users as $item) {
            $user = \App\Models\User::create($item);
            $admin=$user->first();
            $admin->assignRole(Role::where('name', 'Super Admin')->first());
        }
    }
}
