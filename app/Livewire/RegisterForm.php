<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\WithFileUploads;

class RegisterForm extends Component
{
	use WithFileUploads;

	#[Rule('required|min:2|max:50')]
	public $name;

	#[Rule('required|email|unique:users')]
	public $email;

	#[Rule('required|min:2')]
	public $password;

	#[Rule('nullable|sometimes|image|max:1024')]
	public $image;

    public function create()
	{
		$validated = $this->validate();

		if ($this->image) {
			$validated['image'] = $this->image->store('uploads', 'public');
		}

		User::create($validated);

		$this->reset(['name', 'email', 'password', 'image']);
		
		request()->session()->flash('success', 'User Created!');
	}

    public function render()
    {
        return view('livewire.register-form');
    }
}
