@extends('dashboard.layouts.master')
@section('title', 'Profile')

@section('content')
    <div class="container-fluid">
        <nav aria-label="breadcrumb" class="main-breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Profile</li>
            </ol>
        </nav>

        <div id="user_crud" class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="d-flex flex-column align-items-center mt-4">
                            <div class="rounded-circle overflow-hidden" style="width: 150px; height: 150px;">
                                <img class="w-100 h-100"
                                    src="{{ asset(auth()->user()->profile_picture ?? 'frontend/img/p5.jpg') }}"
                                    alt="profile picture">
                            </div>
                            <div class="mt-3 text-center">
                                <h5>[[ currentUser.name ]]</h5>
                                <h5>[[ currentUser.role ]]</h5>
                                <h5>[[ currentUser.address ]]</h5>
                            </div>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fas fa-globe mr-2"></i>Website</h6>
                                <span class="text-secondary">[[ currentUser.website ]]</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fab fa-github mr-2"></i>GitHub</h6>
                                <span class="text-secondary">[[ currentUser.github ]]</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fab fa-telegram mr-2"></i>Telegram</h6>
                                <span class="text-secondary">[[ currentUser.telegram ]]</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><i class="fab fa-facebook mr-2"></i>Facebook</h6>
                                <span class="text-secondary">[[ currentUser.facebook ]]</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="border px-4 pt-2 pb-3">
                            <br>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    [[ currentUser.name ]]
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    [[ currentUser.email ]]
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Gender</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    [[ currentUser.gender ]]
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Role</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    [[ currentUser.role ]]
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    [[ currentUser.phone ]]
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Address</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    [[ currentUser.address ]]
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Status</h6>
                                </div>
                                <div class="col-sm-9 text-secondary">
                                    <span :class="currentUser.active ? 'text-success' : 'text-danger'">
                                        [[ currentUser.active ? 'Active' : 'Inactive' ]]
                                    </span>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-info" @click="openModal()" data-bs-toggle="modal"
                                        data-bs-target="#profileModal">
                                        Edit
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- This closes the row div that was missing -->

            <!-- Edit Profile Modal -->
            <div class="modal fade" id="profileModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Edit Profile</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col-12">
                                        <!-- Name Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Name <span class="text-danger">*</span></label>
                                            <input class="form-control"
                                                :class="{ 'is-invalid': errors.name, 'is-valid': FormData.name && !errors.name }"
                                                placeholder="Enter Name" v-model="FormData.name"
                                                @blur="validateField('name')" required>
                                            <div class="invalid-feedback" v-if="errors.name">
                                                [[ errors.name ]]
                                            </div>
                                        </div>

                                        <!-- Email Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Email <span class="text-danger">*</span></label>
                                            <input type="email" class="form-control"
                                                :class="{ 'is-invalid': errors.email }" placeholder="Enter Email"
                                                v-model="FormData.email" disabled>
                                        </div>

                                        <!-- Role Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Role <span class="text-danger">*</span></label>
                                            <select class="form-control"
                                                :class="{ 'is-invalid': errors.role, 'is-valid': FormData.role && !errors.role }"
                                                v-model="FormData.role" @change="validateField('role')">
                                                <option :value="null">Select Role</option>
                                                <option value="admin">Admin</option>
                                                <option value="manager">Manager</option>
                                                <option value="user">User</option>
                                            </select>
                                            <div class="invalid-feedback" v-if="errors.role">
                                                [[ errors.role ]]
                                            </div>
                                        </div>

                                        <!-- Language Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Language <span class="text-danger">*</span></label>
                                            <select class="form-control"
                                                :class="{
                                                    'is-invalid': errors.language,
                                                    'is-valid': FormData.language && !
                                                        errors.language
                                                }"
                                                v-model="FormData.language" @change="validateField('language')">
                                                <option :value="null">Select Language</option>
                                                <option value="kh">Khmer</option>
                                                <option value="en">English</option>
                                            </select>
                                            <div class="invalid-feedback" v-if="errors.language">
                                                [[ errors.language ]]
                                            </div>
                                        </div>

                                        <!-- Status Field -->
                                        <div class="mb-3">
                                            <label class="form-label">Status <span class="text-danger">*</span></label>
                                            <select class="form-control"
                                                :class="{
                                                    'is-invalid': errors.active,
                                                    'is-valid': FormData.active !== null && !
                                                        errors.active
                                                }"
                                                v-model="FormData.active" @change="validateField('active')">
                                                <option :value="null">Select Status</option>
                                                <option :value="true">Active</option>
                                                <option :value="false">Inactive</option>
                                            </select>
                                            <div class="invalid-feedback" v-if="errors.active">
                                                [[ errors.active ]]
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" @click="resetForm()">Clear</button>
                            <button @click="updateRecord()" type="button" class="btn btn-warning"
                                :disabled="isFormInvalid">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        var app = new Vue({
            el: '#user_crud',
            delimiters: ['[[', ']]'],
            data: {
                currentUser: {
                    name: 'Khem Hengngoun',
                    email: 'khem.hengngoun@example.com',
                    gender: 'Male',
                    role: 'Manager',
                    phone: '+855123456789',
                    address: 'Phnom Penh',
                    active: true,
                    website: 'https://yourwebsite.com',
                    github: 'https://github.com/username',
                    telegram: 'https://t.me/username',
                    facebook: 'https://facebook.com/username'
                },
                FormData: {
                    id: null,
                    name: null,
                    email: null,
                    role: null,
                    active: null,
                    language: null,
                },
                errors: {
                    name: null,
                    email: null,
                    role: null,
                    active: null,
                    language: null,
                },
            },

            computed: {
                isFormInvalid() {
                    return Object.values(this.errors).some(error => error !== null) ||
                        !this.FormData.name ||
                        !this.FormData.role ||
                        this.FormData.active === null ||
                        !this.FormData.language;
                }
            },

            methods: {
                openModal() {
                    this.resetForm();
                    // Copy current user data to form
                    this.FormData = {
                        id: 1, // In real app, this would be the user ID
                        name: this.currentUser.name,
                        email: this.currentUser.email,
                        role: this.currentUser.role.toLowerCase(),
                        active: this.currentUser.active,
                        language: 'en' // Default language
                    };
                },

                closeModal() {
                    $('#profileModal').modal('hide');
                    this.resetForm();
                },

                updateRecord() {
                    if (!this.validateForm()) return;

                    // In a real app, you would make an API call here
                    // axios.put('/api/profile', this.FormData)
                    //     .then(response => {
                    //         this.updateSuccessful(response.data);
                    //     })
                    //     .catch(error => {
                    //         this.handleUpdateError(error);
                    //     });

                    // For demo purposes, we'll just update the local data
                    this.updateSuccessful({
                        name: this.FormData.name,
                        role: this.FormData.role.charAt(0).toUpperCase() + this.FormData.role.slice(1),
                        active: this.FormData.active,
                        language: this.FormData.language
                    });
                },

                updateSuccessful(updatedData) {
                    // Update the current user data
                    Object.assign(this.currentUser, updatedData);

                    Swal.fire({
                        position: "top-end",
                        icon: 'success',
                        title: 'Profile updated successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    });

                    this.closeModal();
                },

                handleUpdateError(error) {
                    let errorMessage = error.response?.data?.message || 'Error updating profile';
                    if (error.response?.data?.errors) {
                        // Update form errors from server response
                        Object.keys(error.response.data.errors).forEach(field => {
                            this.errors[field] = error.response.data.errors[field][0];
                        });
                        errorMessage = 'Please correct the errors in the form';
                    }

                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        html: errorMessage
                    });
                },

                validateField(fieldName) {
                    const value = this.FormData[fieldName];
                    this.errors[fieldName] = null;

                    const validations = {
                        name: () => {
                            if (!value) return 'Name is required';
                            if (value.length < 3) return 'Name must be at least 3 characters';
                            if (value.length > 50) return 'Name must be less than 50 characters';
                            return null;
                        },
                        role: () => {
                            if (!value) return 'Role is required';
                            if (!['admin', 'manager', 'user'].includes(value))
                                return 'Invalid role selected';
                            return null;
                        },
                        language: () => {
                            if (!value) return 'Language is required';
                            if (!['kh', 'en'].includes(value)) return 'Invalid language selected';
                            return null;
                        },
                        active: () => {
                            if (value === null) return 'Status is required';
                            return null;
                        }
                    };

                    if (validations[fieldName]) {
                        const error = validations[fieldName]();
                        if (error) this.errors[fieldName] = error;
                    }
                },

                validateForm() {
                    Object.keys(this.FormData).forEach(field => {
                        if (field !== 'id' && field !== 'email') {
                            this.validateField(field);
                        }
                    });
                    return !Object.values(this.errors).some(error => error !== null);
                },

                resetForm() {
                    this.FormData = {
                        id: null,
                        name: null,
                        email: null,
                        role: null,
                        active: null,
                        language: null,
                    };
                    this.clearErrors();
                },

                clearErrors() {
                    this.errors = {
                        name: null,
                        email: null,
                        role: null,
                        active: null,
                        language: null,
                    };
                }
            }
        });
    </script>
@endsection
