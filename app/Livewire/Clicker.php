<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class Clicker extends Component
{

	public $username= "testuser";

    public function createNewUser()
	{
		User::create([
			'name' => 'Test User 2',
			'email' => 'test2@test.com',
			'password' => '123123123',
		]);
	}

    public function render()
    {
		$title = "Test";
		$users = User::all();

		return view('livewire.clicker', [
			'title' => $title,
			'users' => $users,
		]);
    }

}
