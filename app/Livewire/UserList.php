<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UserList extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        return view('livewire.user-list')->extends('components.layouts.app');
    }

    public function getUsersProperty()
    {
        return User::when(!empty($this->search), function ($query) {
            $query->where('name', 'LIKE', '%' . $this->search . '%')->orWhere('email', 'LIKE', '%' . $this->search . '%');
        })->latest()->paginate(10);
    }

    public function delete($id)
    {
        User::destroy($id);

        return redirect()->back()->with('success', 'User has been deleted');
    }
}
