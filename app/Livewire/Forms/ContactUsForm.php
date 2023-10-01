<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Rule;

class ContactUsForm extends Form
{
	#[Rule('required|email|max:255')]
	public $email;

	#[Rule('required|min:3|max:255')]
	public $subject;

	#[Rule('required|min:3|max:255')]
	public $message;

	public function sendEmail()
	{
		sleep(3);
	}
}
