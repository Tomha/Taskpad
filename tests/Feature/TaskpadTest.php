<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TaskpadTest extends TestCase
{
    public function testGuestHomePage() {
        $this->get('/')->assertSee('Welcome to Taskpad');
    }

    public function testGuestLoginPage() {
        $this->get('/login')->assertSee('Log In');
    }

    public function testGuestRegisterPage() {
        $this->get('/register')->assertSee('Register');
    }

    public function testUserTasksPage() {

    }
}


