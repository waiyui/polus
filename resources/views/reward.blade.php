@extends('layouts.app', ['title' => __('User Profile')])

@section('content')
    @include('users.partials.header_chat', [
        'class' => 'col-lg-8'
    ])

    <div class="container-fluid mt--8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"> Leaderboard</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Level
                                    </th>
                                    <th>
                                        Department
                                    </th>
                                    <th class="text">
                                        Points
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Vivian
                                        </td>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            Manager
                                        </td>
                                        <td class="text">
                                            <span class="badge badge-pill badge-lg badge-warning">900 POINTS</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            Huey Miin
                                        </td>
                                        <td>
                                            5
                                        </td>
                                        <td>
                                            Developer
                                        </td>
                                        <td class="text">
                                        <span class="badge badge-pill badge-lg badge-warning">850 POINTS</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
