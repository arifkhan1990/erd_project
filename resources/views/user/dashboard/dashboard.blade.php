@extends('layouts.user')

@section('content')
    <section class="section">
        <div class="row">
            <div class="col-12 col-sm-12 col-lg-12">
                <div class="card ">
                    <div class="card-body">
                        <div class="card-header"
                            style="text-align:center; justify-content: center; display: flex; flex-direction: column;">
                            <h5 class="text-gray-600">If you are eligible for the
                                scholarship then Apply
                                right
                                now.
                            </h5>
                            <div class="buttons pt-2">
                                @if ($user->personal && $user->personal->count() > 0)
                                <a href="{{ route('user.profile', ['id' => $user->id]) }}" class="btn btn-lg rounded-full btn-success"
                                    style="padding: 0.55rem 1.5rem !important;">Already
                                    Applied</a>
                                @else
                                    <a href="{{ route('user.application') }}" class="btn btn-lg rounded-full btn-primary"
                                    style="padding: 0.55rem 1.5rem !important;">Apply Now</a>
                                @endif
                            </div>
                        </div>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Application Status</h5>
                                        @if(auth()->user()->application()->count() > 0)
                                            
                                            <div class="">
                                                <button
                                                    class="m-auto d-block btn @if(auth()->user()->application->status == 'pending') btn-warning @elseif(auth()->user()->application->status == 'accepted') btn-success @elseif(auth()->user()->application->status == 'rejected') btn-danger @endif status">{{ \Illuminate\Support\Str::ucfirst(auth()->user()->application->status) }}
                                                </button>
                                            </div>

                                        @else
                                            <div class="">
                                                <button
                                                    class="m-auto d-block btn btn-info status">Not yet applied
                                                </button>
                                            </div>

                                        @endif
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/1.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Application Deadline</h5>
                                        <p class="mb-3 font-18 col-orange"><span>{{ $time_difference }}</span> Days left</p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/3.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="card">
                    <div class="card-statistic-4">
                        <div class="align-items-center justify-content-between">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                                    <div class="card-content">
                                        <h5 class="font-15">Get your certification</h5>
                                        <h2 class="mb-3 font-18">

                                        </h2>
                                        <a href="#" class="btn btn-icon icon-left btn-info"><i
                                                class="far fa-file"></i> Certification</a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                                    <div class="banner-img">
                                        <img src="assets/img/banner/4.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
