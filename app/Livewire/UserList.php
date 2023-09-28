<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Livewire\Attributes\Computed;

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
		// update user list	
	}

	public function mount($search)
	{
		$this->search = $search;
		
		unset($this->users);
	}
	
	#[Computed()]
	public function users()
	{
		return User::latest()->where('name', 'like', "%$this->search%")->paginate(4);
	}

	/*
    public function render()
    {
		//sleep(3); // Only for throttling testing. Remove or comment this when you do not need it
		
		return view('livewire.user-list', []);
    }
	 */
}
