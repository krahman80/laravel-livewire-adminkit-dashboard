<div class="d-table-cell align-middle">
    <div class="text-center mt-4">
        <h1 class="h2">Welcome back</h1>
        <p class="lead">
            Sign in to your account to continue
        </p>
    </div>

    <div class="card">
        <div class="card-body">
            <div class="m-sm-4">
                <div class="text-center">
                    <img src="{{ asset('img/avatars/avatar-1.png') }}" alt="avatar" class="img-fluid rounded-circle"
                        width="100" height="100" />
                </div>
                <form wire:submit.prevent="login">
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
                    <div>
                        <label class="form-check">
                            <input wire:model="remember_me" class="form-check-input" type="checkbox">
                            <span class="form-check-label">
                                Remember me next time
                            </span>
                        </label>
                    </div>
                    <div class="text-center mt-3 d-grid gap-2">
                        <!--<a href="index.html" class="btn btn-lg btn-primary">Sign in</a> -->
                        <button type="submit" class="btn btn-lg btn-primary" wire:loading.attr="disabled">
                            <span wire:loading>Loading...</span>
                            <span wire:loading.remove>Log In</span></button>
                        </button>
                    </div>
                    <div class="text-left mt-4 small">
                        <p class="p-0 m-0">Don't have an account? <a href="{{ route('register')}}"
                                class="text-primary"><i class="mdi mdi-account-circle"></i>
                                register here</a></p>

                        <p class="p-0 m-0">
                            <a href="{{ route('forgot-password') }}">Forgot password?</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>