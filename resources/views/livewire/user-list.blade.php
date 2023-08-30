<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group my-2">
                        <input type="text" name="name" wire:model.live="search" id="name"
                            class="form-control" placeholder="Please input name for search data">
                    </div>
                </div>
                <div class="col-md-6 ms-auto mt-2">
                    <a wire:navigate href="{{ route('users.create') }}" class="btn btn-primary">Create User</a>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($this->users as $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td><button class="btn btn-danger btn-sm"
                                        wire:click="delete('{{ $item->id }}')">Delete</button></td>
                            </tr>
                        @empty
                            <tr class="text-center text-muted">
                                <td colspan="5">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            {{ $this->users->links() }}
        </div>
    </div>
</div>
