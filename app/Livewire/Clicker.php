<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\User;

class Clicker extends Component
{
	
	#[Rule('required|min:2|max:50')]
	public $name = '';

	#[Rule('required|email|unique:users')]
	public $email = '';

	#[Rule('required|min:2')]
	public $password = '';

    public function createNewUser()
	{
		$this->validate();

		User::create([
			'name' => $this->name,
			'email' => $this->email,
			'password' => $this->password,
		]);
	}

    public function render()
    {
		$users = User::all();

		return view('livewire.clicker', [
			'users' => $users,
		]);
    }

}
