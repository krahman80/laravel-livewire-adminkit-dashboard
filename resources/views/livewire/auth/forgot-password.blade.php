<div class="d-table-cell align-middle">

    <div class="text-center mt-4">
        <h1 class="h2">Reset Password</h1>
        {{-- <p class="lead">
            Start creating the best possible user experience for you customers.
        </p> --}}
    </div>



    <div class="card">
        <div class="card-body">
            @if ($showDemoNotification)
            <div class="px-3 pt-3">
                <div wire:model="showDemoNotification" class="alert alert-info alert-dismissible fade show"
                    role="alert">
                    <span class="alert-text text-secondary">{{ __(' You are in a demo version, you can\'t update
                        the
                        profile.') }}</span>
                    <button wire:click="$set('showDemoNotification', false)" type="button" class="btn-close"
                        data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
            @endif

            @if ($showSuccesNotification)
            <div class="px-3 pt-3">
                <div wire:model="showSuccesNotification" class="mt-3 alert alert-primary alert-dismissible fade show"
                    role="alert">
                    <span class="alert-icon text-white"><i class="ni ni-like-2"></i></span>
                    <span class="alert-text text-white">{{ __(' An email for resetting your password has
                        been
                        sent!') }}</span>
                    <button wire:click="$set('showSuccesNotification', false)" type="button" class="btn-close"
                        data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
            @endif

            @if ($showFailureNotification)
            <div class="px-3 pt-3">
                <div wire:model="showFailureNotification" class="mt-3 alert alert-primary alert-dismissible fade show"
                    role="alert">
                    <span class="alert-text text-white">
                        {{ __('You are not registered as a user. Please sign
                        up') }}
                        <a class="text-info" href="{{ route('register') }}">here</a></span>
                    <button wire:click="$set('showFailureNotification', false)" type="button" class="btn-close"
                        data-bs-dismiss="alert" aria-label="Close">
                    </button>
                </div>
            </div>
            @endif

            <div class="m-sm-4">
                <form wire:submit.prevent="recoverPassword" action="#" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input wire:model.defer="email" id="email" class="form-control form-control-lg" type="email"
                            name="email" placeholder="Enter your email" />
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="text-center mt-3 d-grid gap-2">
                        {{-- <a href="index.html" class="btn btn-lg btn-primary">Register</a> --}}
                        <button type="submit" class="btn btn-lg btn-primary" wire:loading.attr="disabled">
                            <span wire:loading>Loading...</span>
                            <span wire:loading.remove>{{ __('Recover
                                your
                                password') }}</span></button>
                        </button>
                    </div>
                    <div class="form-group mt-2 mb-0 row">
                        <div class="col-12 mt-3 text-left">
                            <a href="{{ route('login') }}" class="text-primary small"><i
                                    class="mdi mdi-login"></i>&nbsp;Back to
                                login
                                page</a>
                        </div>
                    </div>
                </form>
            </div>


        </div>
    </div>


</div>