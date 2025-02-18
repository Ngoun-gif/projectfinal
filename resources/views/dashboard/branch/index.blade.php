@extends('dashboard.layouts.master')
@section('title', 'Branches')

@section('content')

<div class="container-fluid ps-4 pe-4">
    
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-between py-3 px-4">
            <div>
                <a href="/users" class="btn btn-secondary">
                    <span class="me-2"><i class="fa-solid fa-backward-step"></i></span>Back
                </a>
            </div>
            <div class="">
              <a href="/create_user" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i>Add User</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>
                            <th>Age</th>
                            <th>Start date</th>
                            <th>Salary</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <tr>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>$320,800</td>
                        </tr>
                        <tr>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>$170,750</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection