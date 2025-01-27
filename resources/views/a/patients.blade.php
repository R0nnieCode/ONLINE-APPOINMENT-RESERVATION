@extends('layouts.admin')
@section('content')
<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-primary">Patients List</h1>
        <!--<p class="alert alert-info mb-4" role="alert">Here you can see all the official registered users.</p>-->

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary"></h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-stripped table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Birthdate</th>
                                <!--<th>Brgy.</th>-->
                                <th>City</th>
                                <!--<th>Province</th>-->
                                <!--<th>Postal Code</th>-->
                                <th>Email</th>
                                <th>Account Type</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Age</th>
                                <th>Birthdate</th>
                                <!--<th>Brgy.</th>-->
                                <th>City</th>
                                <!--<th>Province</th>-->
                                <!--<th>Postal Code</th>-->
                                <th>Email</th>
                                <th>Account Type</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ( $users as $user )
                            <tr>
                                <td>{{$user->name}}</td>
                                <td>{{$user->age}}</td>
                                <td>{{$user->birthdate}}</td>
                                <!--<td>{{$user->barangay}}</td>-->
                                <td>{{$user->city}}</td>
                                <!--<td>{{$user->province}}</td>-->
                                <!--<td>{{$user->postal_code}}</td>-->
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                            </tr>
                            @endforeach
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

</div>
<!-- End of Content Wrapper -->
@endsection()