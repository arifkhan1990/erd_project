@extends('layouts.user')



@section('content')
    <section class="section">
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif
        <div class="section-body">
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Application From</h4>
                        </div>
                        <div class="card-body">
                            <form id="wizard_with_validation" action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
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
                                <input type="hidden" name="user_id" value="{{Auth::id()}}">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
