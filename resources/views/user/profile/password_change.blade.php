@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post" class="needs-validation" action="{{ route('user.profile.password_change', ['id' => Auth::id()]) }}" id="passwordForm" novalidate>
    @csrf
    @method('PUT')
    <div class="card-body">
        <div class="form-group row">
            <label for="current_password" class="col-sm-3 col-form-label">Current Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="current_password" placeholder="Current Password" name="current_password" required>
                <div class="invalid-feedback">
                    Please provide your current password.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="password" class="col-sm-3 col-form-label">Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                <div class="invalid-feedback">
                    Please provide a password.
                </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="confirm_password" class="col-sm-3 col-form-label">Confirm Password</label>
            <div class="col-sm-9">
                <input type="password" class="form-control" id="confirm_password" placeholder="Confirm Password" name="confirm_password" required>
                <div class="invalid-feedback" id="confirmPasswordError">
                    Passwords do not match.
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Reset Password</button>
    </div>
</form>

<script>
    document.getElementById('passwordForm').addEventListener('submit', function(event) {
        let password = document.getElementById('password').value;
        let confirmPassword = document.getElementById('confirm_password').value;
        let passwordInput = document.getElementById('password');
        let confirmPasswordInput = document.getElementById('confirm_password');
        let confirmPasswordError = document.getElementById('confirmPasswordError');

        // Reset classes
        passwordInput.classList.remove('is-valid', 'is-invalid');
        confirmPasswordInput.classList.remove('is-valid', 'is-invalid');

        if (password !== confirmPassword) {
            event.preventDefault();
            confirmPasswordInput.classList.add('is-invalid');
            confirmPasswordError.style.display = 'block';
        } else {
            passwordInput.classList.add('is-valid');
            confirmPasswordInput.classList.add('is-valid');
            confirmPasswordError.style.display = 'none';
        }
    });

    // Real-time validation
    document.getElementById('confirm_password').addEventListener('input', function() {
        let password = document.getElementById('password').value;
        let confirmPassword = document.getElementById('confirm_password').value;
        let confirmPasswordInput = document.getElementById('confirm_password');
        let confirmPasswordError = document.getElementById('confirmPasswordError');

        // Reset class
        confirmPasswordInput.classList.remove('is-valid', 'is-invalid');

        if (password !== confirmPassword) {
            confirmPasswordInput.classList.add('is-invalid');
            confirmPasswordError.style.display = 'block';
        } else {
            confirmPasswordInput.classList.add('is-valid');
            confirmPasswordError.style.display = 'none';
        }
    });
</script>

<style>
    .is-invalid {
        border-color: #dc3545 !important;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url('data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" fill="%23dc3545" viewBox="0 0 16 16"%3e%3cpath d="M16 8a8 8 0 1 1-16 0 8 8 0 0 1 16 0zM4.646 4.646a.5.5 0 1 0-.708.708L7.293 8l-3.355 3.354a.5.5 0 0 0 .708.708L8 8.707l3.354 3.355a.5.5 0 0 0 .708-.708L8.707 8l3.355-3.354a.5.5 0 0 0-.708-.708L8 7.293 4.646 4.646z"%3e%3c/path%3e%3c/svg%3e');
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }
    .is-valid {
        border-color: #28a745 !important;
        padding-right: calc(1.5em + 0.75rem);
        background-image: url('data:image/svg+xml,%3csvg xmlns="http://www.w3.org/2000/svg" fill="%2328a745" viewBox="0 0 16 16"%3e%3cpath fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM6.5 11.5L3 8l1.5-1.5L6.5 9 11 4.5 12.5 6 6.5 11.5z"%3e%3c/path%3e%3c/svg%3e');
        background-repeat: no-repeat;
        background-position: right calc(0.375em + 0.1875rem) center;
        background-size: calc(0.75em + 0.375rem) calc(0.75em + 0.375rem);
    }
</style>
