<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;

class UserList extends Component
{
	use WithPagination;

	public $search;

	/*
	#[On('user-created')]
	public function updateList($user = null)
	{
		// .... update user list
	}
	 */

	public function placeholder()
	{
		return view('placeholder');
	}

	public function update()
	{
	
	}

    public function render()
    {
		//sleep(3); // Only for throttling testing. Remove or comment this when you do not need it
		
		return view('livewire.user-list', [
			'users' => User::latest()->where('name', 'like', "%$this->search%")->paginate(5),
			'user_count' => User::count(),
		]);
    }
}
