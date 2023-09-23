<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class UserList extends Component
{
	use WithPagination;

	#[On('user-created')]
	public function updateList($user = null)
	{
		// .... update user list
	}

    public function render()
    {
		return view('livewire.user-list', [
			'users' => User::latest()->paginate(4),
		]);
    }
}
