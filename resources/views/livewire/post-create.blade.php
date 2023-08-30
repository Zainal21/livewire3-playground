<?php
use App\Models\User;
use App\Models\Post;
use Livewire\WithPagination;
use function Livewire\Volt\{layout, state, rules, computed, usesPagination};

// hooks pagination
usesPagination(theme: 'bootstrap');
// initial state
state(['count' => 1, 'userCount' => fn() => User::count(), 'name' => '', 'email' => '']);

// function event
$increment = fn() => $this->count++;

// validation
rules([
    'name' => 'required|min:6',
    'email' => 'required|email',
]);

$submit = function () {
    $this->validate();
};

// live search
state(['search'])->url();

$posts = computed(function () {
    return Post::where('title', 'LIKE', '%' . $this->search . '%')->paginate(10);
});

?>

<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <span>Basic Example (Increment)</span>
                </div>
                <div class="card-body">
                    <h1>{{ $count }}</h1>
                    <button class="btn btn-sm btn-danger" wire:click="increment">Increment</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <span>Basic Example (UserCount)</span>
                </div>
                <div class="card-body">
                    <h1>{{ $userCount }}</h1>
                    <a class="btn btn-sm btn-danger" wire:navigate href="{{ route('home') }}">See User Page</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <span>Basic Example (Validation)</span>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="submit">
                        <div class="form-group my-2">
                            <label for="name">Name</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                wire.model="name" name="name" id="name" placeholder="Please input your Name">
                            @error('name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="Email">Email</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror"
                                wire.model="email" name="name" id="name" placeholder="Please input your Email">
                            @error('email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Live Search
                </div>
                <div class="card-body">
                    <div class="form-group my-2">
                        <input type="text" name="name" wire:model.live="search" id="name"
                            class="form-control" placeholder="Please input name for search data">
                    </div>

                    <p>Search Results : </p>
                    <ul class="list-group">
                        @forelse ($this->posts as $item)
                            <li class="list-group-item" wire:key="{{ $item->id }}">{{ $item->title }}</li>
                        @empty
                            <li class="list-group-item text-muted text-center">Data no available</li>
                        @endforelse
                    </ul>
                    {{ $this->posts->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
