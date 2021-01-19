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
                        <h3 class="card-title"> Designer</h3>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Age
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            Habib
                                        </td>
                                        <td>
                                            22
                                        </td>
                                        <td>
                                            habib@gmail.com
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
