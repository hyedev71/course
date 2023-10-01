<?php

namespace App\Livewire;

use Livewire\Component;
use App\Livewire\Forms\ContactUsForm;
use Livewire\Attributes\Rule;

class ContactUs extends Component
{
	public ContactUsForm $form;

	public function submitForm()
	{
		//sleep(3);

		$this->form->validate();

		// sending email ...
		$this->form->sendEmail();

		session()->flash('success', 'Form Submitted!');

		$this->form->reset('email', 'subject', 'message');
	}

    public function render()
    {
        return view('livewire.contact-us');
    }
}
