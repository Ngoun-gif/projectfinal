@extends('dashboard.layouts.master')
@section('title', 'Create User')

@section('content')

<div class="container-fluid ps-4 pe-4">
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-start py-3 px-4">
            <div>
                <a href="/users" class="btn btn-secondary">
                    <span class="me-2"><i class="fa-solid fa-backward-step"></i></span>Back
                </a>
            </div>
        </div>
        
        <div class="card-body">
            <div class="table-responsive d-flex justify-content-center">
                <div class=" ms-4 me-4 col-md-6 mb-5">
                    <form action="">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- /.container-fluid -->
@endsection