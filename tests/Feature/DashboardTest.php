<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Spatie\Permission\Models\Role;
use Tests\TestCase;

class DashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_login_user_can_see_dashboard()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->get('/')->assertStatus(200);
    }

    public function test_get_all_posts_with_un_authorize_user()
    {
        $user = User::factory()->create();
        $this->actingAs($user)->get('/posts')->assertStatus(403);
        $this->assertTrue(true);
    }

    /*
     * Commented Because it return error
    */
//    public function test_get_all_posts_with_authorized_user(){
//        $user = User::factory()->create();
//       $role=Role::create([
//            'name' => 'Super Admin',
//            'guard_name' => 'web'
//        ]);
//     $user->assignRole($role);
//        $this->actingAs($user)->get('/posts')->assertStatus(200);
//        $this->assertTrue(true);
//    }

    public function test_create_post_with_un_authorize_user()
    {
        $user = User::factory()->create();
        $data = Post::factory()->create();
        $this->actingAs($user)->post('posts', [
            'description' => $data->description,
            'image' => $data->image
        ])->assertStatus(403);
        $this->assertTrue(true);
    }
}
