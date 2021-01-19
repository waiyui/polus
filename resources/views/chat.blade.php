@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header_chat', [
        'class' => 'col-lg-8'
    ])

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col">
                <div class="card bg-secondary shadow" style="width: 100%;">
                    <div class="card-header lg-8 bg-white border-1">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-1-800x800.jpg">
                            </span>
                        <div class="media-body ml-2 d-none d-lg-block">
                            <span class="mb-0 text-sm  font-weight-bold">{{ auth()->user()->name }}</span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mt-4">
                            <div class="card-body bg-info border-1">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <span class="avatar avatar-sm rounded-circle">
                                            <img alt="Image placeholder" src="{{ asset('argon') }}/img/theme/team-4-800x800.jpg">
                                        </span>
                                        <h4>Vivian</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-8 mt-4">
                            <div class="card-body bg-info border-1">
                                <div class="panel panel-default">
                                    <div class="panel-body">A Basic Panel</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        @include('layouts.footers.auth')
    </div>
@endsection
