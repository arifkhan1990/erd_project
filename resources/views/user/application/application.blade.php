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
                                    @include('user.application.form.personal')
                                </fieldset>
                                <h3>Educational Information</h3>
                                <fieldset>
                                    @include('user.application.form.educational')
                                </fieldset>
                                <h3>Banking Information</h3>
                                <fieldset>
                                    @include('user.application.form.banking')
                                </fieldset>
                                <h3>Travel Information</h3>
                                <fieldset>
                                    @include('user.application.form.travel')
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
