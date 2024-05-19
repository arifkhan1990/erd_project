<form method="post" class="needs-validation" action="{{ route('user.update', ['id' => Auth::id()]) }}">
        @csrf
        @method('PUT')
    <div class="card-header">
        <h4>Edit Profile</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6 col-12">
                <label>Name</label>
                <input type="text" class="form-control" value="{{ $user->name }}" name="name">
                <div class="invalid-feedback">
                    Please fill in the Name
                </div>
            </div>
            <div class="form-group col-md-6 col-12">
                <label>Occupation</label>
                <input type="text" class="form-control" value="{{ $user->occupation }}" name="occupation">
                <div class="invalid-feedback">
                    Please fill in the Occupation
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-7 col-12">
                <label>Email</label>
                <input type="email" class="form-control" value="{{ $user->email }}" name="email">
                <div class="invalid-feedback">
                    Please fill in the email
                </div>
            </div>
            <div class="form-group col-md-5 col-12">
                <label>Phone</label>
                <input type="tel" class="form-control" value="" name="phone">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label>Bio</label>
                <textarea class="form-control summernote-simple" name="bio">{{ $user->bio }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="form-group mb-0 col-12">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" name="remember"
                        class="custom-control-input" id="newsletter">
                    <label class="custom-control-label" for="newsletter">Subscribe
                        to newsletter</label>
                    <div class="text-muted form-text">
                        You will get new information about products, offers and
                        promotions
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary" type="submit">Save Changes</button>
    </div>
</form>