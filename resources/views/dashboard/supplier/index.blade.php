@extends('dashboard.layouts.master')
@section('title', 'user')

@section('content')

<div class="container-fluid ps-4 pe-4" id="user_crud">
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-between py-3 px-4">
            <div>
                <a href="{{ url()->previous() }}" class="btn btn-secondary">
                    <span class="me-2"><i class="fa-solid fa-backward-step"></i></span>Back
                </a>
            </div>

            <div class="">
                <button @click="openModal()" type="button" class="btn btn-primary">
                    <i class="fa-solid fa-plus me-1"></i>
                    New Supplier
                </button>
            </div>
        </div>
          
        <div class="card-body">
            <div class="table-responsive">
                <div>
                    <h4>Supplier</h4>
                </div>
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark-blue" style="background: color(srgb red green blue);">
                        <tr class="text-center">
                            <th>Name</th>
                            <th>Gender</th>
                            <th>Phone</th>
                            <th>Start date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        
                        <tr>
                            <td> Long Heang</td> <!-- Use the @ to prevent Blade from parsing this -->
                            <td class="text-center">Male</td>
                            <td class="text-center">087 342 094</td>
                            <td class="text-center">27-01-2025</td>
                            <td class="text-center">
                                <button @click="openModal(user)" class="btn btn-warning">Edit</button>
                                <button @click="deleteUser(index)" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="modalTitle" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Product 1</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label ps-2">Name</label>
                            <input v-model="currentUser.name" type="text" class="form-control" id="name">
                        </div>

                        <select v-model="currentUser.gender" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                            <option value="" selected>Select Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Femal</option>
                        </select>

                        <div class="mb-3">
                            <label for="department" class="form-label ps-2">Department</label>
                            <input v-model="currentUser.department" type="text" class="form-control" id="department">
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label ps-2">Position</label>
                            <input v-model="currentUser.position" type="text" class="form-control" id="position">
                        </div>

                        <div class="mb-3">
                            <label for="phone" class="form-label ps-2">Phone</label>
                            <input v-model="currentUser.phone" type="text" class="form-control" id="phone">
                        </div>
                        
                        <div class="">
                            <label for="date" class="form-label ps-2">Start date</label>
                            <input v-model="currentUser.startdate" type="date" class="form-control" id="date">
                        </div>
                        
                    </form>
                </div>
                <div class="modal-footer">
                    <template>
                        <button @click="resetForm" type="button" class="btn btn-secondary">Reset</button>
                        <button @click="saveProduct" type="submit" class="btn btn-primary">Save</button>
                    </template>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection