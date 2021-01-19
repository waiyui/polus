@extends('layouts.app')

@section('content')
    @include('layouts.headers.cards')
    <div class="container-fluid mt--8">
    <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Task List</h3>
                            </div>
                            <div class="col text-right">
                                <a href="#!" class="btn btn-sm btn-primary">+ New Task List</a>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col" class="text-center">No</th>
                                    <th scope="col">Task name</th>
                                    <th scope="col">Due Date</th>
                                    <th scope="col">Progress</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="cell-1" data-toggle="collapse" data-target="#demo">
                                    <td class="text-center">1</td>
                                    <td>MAP Prototype</td>
                                    <td>21-21-2021</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">60%</span>
                                                <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                        </div>
                                    </td>
                                    <td class="table-elipse" data-toggle="collapse" data-target="#demo">
                                        <span class="badge badge-pill badge-lg badge-primary"> Subtask</span>
                                        <i class="ni ni-bold-down"></i>
                                    </td>
                                </tr>
                                <tr id="demo" class="collapse cell-1 row-child">
                                    <td class="text-center" colspan="1"></td>
                                    <td colspan="3">User Interface</td>
                                    <td class="text">
                                        <div class="switch">
                                            <label> Done
                                                <input type="checkbox" checked>
                                                    <span class="lever md-1"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <tr id="demo" class="collapse cell-1 row-child">
                                    <td class="text-center" colspan="1"></td>
                                    <td colspan="3">Splash Screen</td>
                                    <td class="text">
                                        <div class="switch">
                                            <label> Done
                                                <input type="checkbox" checked>
                                                    <span class="lever- md-1"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>

                                <tr class="cell-1" data-toggle="collapse" data-target="#demo-2">
                                    <td class="text-center">2</td>
                                    <td>ULAB Debate</td>
                                    <td>21-21-2021</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="mr-2">60%</span>
                                                <div>
                                                <div class="progress">
                                                    <div class="progress-bar bg-gradient-danger" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
                                                    </div>
                                                </div>
                                        </div>
                                    </td>
                                    <td class="table-elipse" data-toggle="collapse" data-target="#demo-2">
                                        <span class="badge badge-pill badge-lg badge-primary"> Subtask</span>
                                        <i class="ni ni-bold-down"></i>
                                    </td>
                                </tr>
                                <tr id="demo-2" class="collapse cell-1 row-child">
                                    <td class="text-center" colspan="1"></td>
                                    <td colspan="3">Topic proposal</td>
                                    <td class="text">
                                        <div class="switch">
                                            <label> Done
                                                <input type="checkbox" checked>
                                                    <span class="lever-primary md-1"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                <h3 class="mb-0">Points Reward</h3>
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Quest</th>
                                    <th scope="col">Reward</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">
                                        Add New Task
                                    </th>
                                    <td>
                                        <span class="badge badge-pill badge-lg badge-warning">20 POINTS</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Complete Subtask
                                    </th>
                                    <td>
                                        <span class="badge badge-pill badge-lg badge-warning">10 POINTS</span>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">
                                        Complete Task
                                    </th>
                                    <td>
                                        <span class="badge badge-pill badge-lg badge-warning">40 POINTS</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
