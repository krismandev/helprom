<div>
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Login untuk masuk kedalam sistem</p>
            @if (session()->has('loginError'))
                <div class="mb-2">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h5><i class="icon fas fa-ban"></i>Peringatan !</h5>
                        {{ session('loginError') }}
                    </div>
                </div>
            @endif

            <form wire:submit.prevent="authenticate" method="post">
                <label for="email" class="d-block">Email</label>
                <div class="input-group mb-3">
                    <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror"
                        placeholder=Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>
                <label for="password" class='d-block'>Password</label>
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
