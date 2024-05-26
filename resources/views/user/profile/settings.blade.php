<form method="post" class="needs-validation" action="{{ route('user.update', ['id' => Auth::id()]) }}">
        @csrf
        @method('PUT')
    <div class="card-header">
        <h4>Edit Profile</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="form-group col-md-6 col-12">
                <label style="color: #282424 !important;">Name</label>
                <input type="text" class="form-control" value="{{ $user->name }}" name="name">
                <div class="invalid-feedback">
                    Please fill in the Name
                </div>
            </div>
            <div class="form-group col-md-6 col-12">
                <label style="color: #282424 !important;">Occupation</label>
                <input type="text" class="form-control" value="{{ $user->occupation }}" name="occupation">
                <div class="invalid-feedback">
                    Please fill in the Occupation
                </div>
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-7 col-12">
                <label style="color: #282424 !important;">Email</label>
                <input type="email" class="form-control" value="{{ $user->email }}" name="email">
                <div class="invalid-feedback">
                    Please fill in the email
                </div>
            </div>
            <div class="form-group col-md-5 col-12">
                <label style="color: #282424 !important;">Phone</label>
                <input type="tel" class="form-control" value="" name="phone">
            </div>
        </div>
        <div class="row">
            <div class="form-group col-12">
                <label style="color: #282424 !important;">Bio</label>
                <textarea class="form-control summernote-simple" name="bio">{{ $user->bio }}</textarea>
            </div>
        </div>
    </div>
    <div class="card-footer text-right">
        <button class="btn btn-primary" type="submit">Save Changes</button>
    </div>
</form>