@extends('layouts.user')



@section('content')
    <section class="section">
        <div class="section-body">
            <div class="row mt-sm-4">
                <div class="col-12 col-md-12 col-lg-4">
                    <div class="card author-box">
                        <div class="card-body">
                            <div class="author-box-center">
                                <img alt="image" src="{{$user->profile_pic}}"
                                    class="rounded-circle author-box-picture">
                                <div class="clearfix"></div>
                                <div class="author-box-name">
                                    <a href="#">{{ $user->name }}</a>
                                </div>
                                <div class="author-box-job">{{ $user->occupation }}</div>
                            </div>
                            <div class="text-center">
                                <div class="author-box-description">
                                    <p>
                                        {{$user->bio}}
                                    </p>
                                </div>
                                <div class="mb-2 mt-3">
                                    <div class="text-small font-weight-bold">Follow {{$user->name}} On</div>
                                </div>
                                <a href="#" class="btn btn-social-icon mr-1 btn-facebook">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-twitter">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-github">
                                    <i class="fab fa-github"></i>
                                </a>
                                <a href="#" class="btn btn-social-icon mr-1 btn-instagram">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                <div class="w-100 d-sm-none"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-8">
                    <div class="card">
                        <div class="padding-20">
                            <ul class="nav nav-tabs" id="myTab2" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab2" data-toggle="tab" href="#about"
                                        role="tab" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab2" data-toggle="tab" href="#settings" role="tab"
                                        aria-selected="false">Setting</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab3" data-toggle="tab" href="#password_change" role="tab"
                                        aria-selected="false">Change Password</a>
                                </li>
                            </ul>
                            <div class="tab-content tab-bordered" id="myTab3Content">
                                <div class="tab-pane fade show active" id="about" role="tabpanel"
                                    aria-labelledby="home-tab2">
                                    @if($user->personal)
                                        @include('user.profile.info', ['user' => $user])
                                    @endif
                                </div>
                                <div class="tab-pane fade" id="settings" role="tabpanel" aria-labelledby="profile-tab2">
                                    @include('user.profile.settings', ['user' => $user])
                                </div>
                                <div class="tab-pane fade" id="password_change" role="tabpanel" aria-labelledby="profile-tab3">
                                    @include('user.profile.password_change', ['user' => $user])
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
