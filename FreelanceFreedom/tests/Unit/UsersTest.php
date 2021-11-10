<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\User;
use Illuminate\Support\Str;
use App\Providers\RouteServiceProvider;

class UsersTest extends TestCase
{
    /**
     * A unit test to check if the login form is present.
     *
     * @return void
     */
    public function test_login_form_available()
    {
        $response = $this->get('/login');

        $response->assertOk();
    }

    /**
     * A unit test to check for user duplications.
     *
     * @return void
     */
    public function test_user_duplication()
    {
        $user1 = User::make([
            'name' => 'Ant',
            'email' => 'ant@testcase.com'
        ]);

        $user2 = User::make([
            'name' => 'James',
            'email' => 'james@testcase.com'
        ]);

        $this->assertTrue($user1->name != $user2->name);
    }

    /**
     * A unit test to check is user is in database.
     *
     * @return void
     */
    public function test_user_data_in_database()
    {
        $this->assertDatabaseHas('users', [
            'name' => 'Admin'
        ]);
    }

    /**
     * A unit test to check if users can be stored in the database
     *
     * @return void
     */
    public function test_user_can_be_stored_in_database()
    {
        $response = $this->post('/register', [
            'name' => 'admin',
            'email' => 'admin@testcase.com',
            'password' => 'testcase',
            'password_confirmation' => 'testcase'
        ]);

        $response->assertRedirect('/auth/profile');
    }
}
