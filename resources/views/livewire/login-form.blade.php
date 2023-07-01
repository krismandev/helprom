<div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login untuk masuk kedalam sistem</p>
            @if (session()->has('loginError'))
                <div class="mb-2">
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                </div>
            @endif

            <form wire:submit.prevent="authenticate" method="post">
                <div class="input-group mb-3">
                    <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror"
                        placeholder="Username">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('name')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="input-group mb-3">
                    <input type="password" wire:model="password"
                        class="form-control @error('password')
                        is-invalid
                    @enderror"
                        placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                    @error('password')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <div class="row justify-content-end">
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Login</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mb-1">
                <a href="forgot-password.html">Lupa password ?</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
