<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\Hash;

class UserCreate extends Component
{
    public UserForm $form;

    public function render()
    {
        return view('livewire.user-create')->extends('components.layouts.app');
    }

    public function save()
    {
        $this->validate();
        $data = $this->form->all();
        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        return redirect(route('home'))->with('success', 'User created Successfully');
    }
}
