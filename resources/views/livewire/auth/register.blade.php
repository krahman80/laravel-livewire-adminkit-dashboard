<div class="d-table-cell align-middle">

    <div class="text-center mt-4">
        <h1 class="h2">Get started</h1>
        <p class="lead">
            Start creating the best possible user experience for you customers.
        </p>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="m-sm-4">
                <form wire:submit.prevent="register" action="#" method="POST">
                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input wire:model.defer="name"
                            class="form-control form-control-lg @error('name') is-invalid @enderror" type="text"
                            name="name" placeholder="Enter your name" />
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input wire:model.defer="email" id="email"
                            class="form-control form-control-lg @error('email') is-invalid @enderror" type="email"
                            name="email" placeholder="Enter your email" />
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input wire:model.defer="password" id="password"
                            class="form-control form-control-lg @error('password') is-invalid @enderror" type="password"
                            name="password" placeholder="Enter your password" />
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="text-center mt-3 d-grid gap-2">
                        {{-- <a href="index.html" class="btn btn-lg btn-primary">Register</a> --}}
                        <button type="submit" class="btn btn-lg btn-primary" wire:loading.attr="disabled">
                            <span wire:loading>Loading...</span>
                            <span wire:loading.remove>Register</span></button>
                        </button>
                    </div>
                    <div class="form-group mt-2 mb-0 row">
                        <div class="col-12 mt-3 text-left">
                            <a href="{{ route('login') }}" class="text-primary small">Already have account?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>