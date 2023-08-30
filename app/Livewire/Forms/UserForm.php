<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Form;

class UserForm extends Form
{
    #[Rule('required')]
    public $name = '';

    #[Rule('required|unique:users,email|email')]
    public $email = '';

    #[Rule('required|confirmed')]
    public $password = '';

    #[Rule('required')]
    public $password_confirmation = '';
}
