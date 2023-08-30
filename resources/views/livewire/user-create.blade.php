<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    Create a new User
                </div>
                <form wire:submit="save">
                    <div class="card-body">
                        <div class="form-group ">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" wire:model="form.name" class="@error('form.name') is-invalid @enderror form-control">
                            @error('form.name')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group my-2 ">
                            <label for="email">Email</label>
                            <input type="text" name="email" id="email" wire:model="form.email" class="@error('form.email') is-invalid @enderror form-control">
                            @error('form.email')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group my-2 ">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" wire:model="form.password"
                                class="@error('form.password') is-invalid @enderror form-control">
                            @error('form.password')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group my-2 ">
                            <label for="password_confirmation">Password Confirmation</label>
                            <input type="password" name="password_confirmation" wire:model="form.password_confirmation"
                                id="password_confirmation" class="@error('form.password_confirmation') is-invalid @enderror form-control">
                            @error('form.password_confirmation')
                                <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>
                        <a href="{{ route('home') }}" wire:navigate class="btn btn-danger">Back</a>
                        <button class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
