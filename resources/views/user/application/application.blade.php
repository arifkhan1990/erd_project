@extends('layouts.user')



@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Application From</h4>
                        </div>
                        <div class="card-body">
                            <form id="wizard_with_validation" method="POST">
                                <h3>Personal Information</h3>
                                <fieldset>
                                    <div class="form-row">
                                        <div class="form-group form-float col-6">
                                            <div class="form-line">
                                                <label class="form-label">Username <span
                                                        style="color: red;">**</span></label>
                                                <input type="text" class="form-control" name="username" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-float col-6">
                                            <div class="form-line">
                                                <label class="form-label">Password<span
                                                        style="color: red;">**</span></label>
                                                <input type="password" class="form-control" name="password" id="password"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group form-float col-6">
                                            <div class="form-line">
                                                <label class="form-label">Username<span
                                                        style="color: red;">**</span></label>
                                                <input type="text" class="form-control" name="username" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-float col-6">
                                            <div class="form-line">
                                                <label class="form-label">Password<span
                                                        style="color: red;">**</span></label>
                                                <input type="password" class="form-control" name="password" id="password"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group form-float col-6">
                                            <div class="form-line">
                                                <label class="form-label">Username<span
                                                        style="color: red;">**</span></label>
                                                <input type="text" class="form-control" name="username" required>
                                            </div>
                                        </div>
                                        <div class="form-group form-float col-6">
                                            <div class="form-line">
                                                <label class="form-label">Password<span
                                                        style="color: red;">**</span></label>
                                                <input type="password" class="form-control" name="password" id="password"
                                                    required>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Educational Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">First Name<span style="color: red;">**</span></label>
                                            <input type="text" name="name" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Last Name<span style="color: red;">**</span></label>
                                            <input type="text" name="surname" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Email<span style="color: red;">**</span></label>
                                            <input type="email" name="email" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Address<span style="color: red;">**</span></label>
                                            <textarea name="address" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <label class="form-label">Age<span style="color: red;">**</span></label>
                                            <input min="18" type="number" name="age" class="form-control"
                                                required>
                                        </div>
                                        <div class="help-info">The warning step will show up if age is less than 18</div>
                                    </div>
                                </fieldset>
                                <h3>Terms &amp; Conditions - Finish</h3>
                                <fieldset>
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
