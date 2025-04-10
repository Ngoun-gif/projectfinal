@extends('dashboard.layouts.master')
@section('title', 'Management User')

@section('content')
<div class="container-fluid ps-4 pe-4" id="user_crud">
    <div class="card shadow mb-4">
        <div class="d-flex justify-content-between py-3 px-4">
            <div>
                <a href="{{ url()->previous() }}" class="btn btn-secondary btn-icon-split">
                    <span class="icon text-white-50">
                        <i class="fa-solid fa-backward-step me-1"></i>
                    </span>
                    <span class="text">Back</span>
                </a>
            </div>
            <div class="">
                <button @click="openModal()" type="button" 
                    class="btn btn-primary btn-icon-split">
                        <span class="icon text-white-50">
                            <i class="fas fa-user-plus"></i>
                        </span>
                        <span class="text">Create User</span>
                </button>
            </div>
        </div>
          
        <div class="card-body">
            <div class="table-responsive">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4>Users Management</h4>
                    
                </div>
                
                <table class="table table-hover table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="thead-dark-blue">
                        <tr class="text-center">
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Level</th>
                            <th>Language</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <!-- DataTables will populate this automatically -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- User Modal -->
    <div class="modal fade" id="userModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="userModalLabel">[[status == 'add' ? 'Create User' : 'Edit User']]</h5>
                    <button type="button" class="btn-close" @click="closeModal()" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <!-- Name -->
                                <div class="mb-3">
                                    <label class="form-label">Name <span class="text-danger">*</span></label>
                                    <input
                                        class="form-control"
                                        :class="{ 'is-invalid': errors.name, 'is-valid': FormData.name && !errors.name }"
                                        placeholder="Enter Name"
                                        v-model="FormData.name"
                                        @blur="validateField('name', FormData.name)"
                                        required>
                                    <div class="invalid-feedback" v-if="errors.name">
                                        [[ errors.name ]]
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <label class="form-label">Email <span class="text-danger">*</span></label>
                                    <input
                                        type="email" 
                                        class="form-control"
                                        :class="{ 'is-invalid': errors.email, 'is-valid': FormData.email && !errors.email }"
                                        placeholder="Enter Email"
                                        v-model="FormData.email"
                                        @blur="validateField('email', FormData.email)"
                                        :disabled="status === 'edit'"
                                        required>
                                    <div class="invalid-feedback" v-if="errors.email">
                                        [[ errors.email ]]
                                    </div>
                                </div>

                                <!-- Password (only shown when adding) -->
                                <div v-if="status == 'add'" class="mb-3">
                                    <label class="form-label">Password <span class="text-danger">*</span></label>
                                    <input
                                        type="password" 
                                        class="form-control"
                                        :class="{ 'is-invalid': errors.password, 'is-valid': FormData.password && !errors.password }"
                                        placeholder="Enter password (min 8 characters)"
                                        v-model="FormData.password"
                                        @blur="validateField('password', FormData.password)"
                                        required>
                                    <div class="invalid-feedback" v-if="errors.password">
                                        [[ errors.password ]]
                                    </div>
                                </div>

                                <!-- Level -->
                                <div class="mb-3">
                                    <label class="form-label">Level <span class="text-danger">*</span></label>
                                    <select 
                                        class="form-control"
                                        :class="{ 'is-invalid': errors.level, 'is-valid': FormData.level && !errors.level }"
                                        v-model="FormData.level"
                                        @change="validateField('level', FormData.level)">
                                        <option value="">Select Level</option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">User</option>
                                    </select>
                                    <div class="invalid-feedback" v-if="errors.level">
                                        [[ errors.level ]]
                                    </div>
                                </div>

                                <!-- Language -->
                                <div class="mb-3">
                                    <label class="form-label">Language <span class="text-danger">*</span></label>
                                    <select 
                                        class="form-control"
                                        :class="{ 'is-invalid': errors.language, 'is-valid': FormData.language && !errors.language }"
                                        v-model="FormData.language"
                                        @change="validateField('language', FormData.language)">
                                        <option value="">Select Language</option>
                                        <option value="kh">Khmer</option>
                                        <option value="en">English</option>
                                    </select>
                                    <div class="invalid-feedback" v-if="errors.language">
                                        [[ errors.language ]]
                                    </div>
                                </div>

                                <!-- Active -->
                                <div class="mb-3">
                                    <label class="form-label">Status <span class="text-danger">*</span></label>
                                    <select 
                                        class="form-control"
                                        :class="{ 'is-invalid': errors.active, 'is-valid': FormData.active !== null && !errors.active }"
                                        v-model="FormData.active"
                                        @change="validateField('active', FormData.active)">
                                        <option :value="null">Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
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
                    <button
                        @click="status == 'add' ? createRecord() : updateRecord()"
                        type="button"
                        class="btn"
                        :class="status == 'add' ? 'btn-primary' : 'btn-warning'"
                        :disabled="isFormInvalid">
                        [[status == 'add' ? 'Save' : 'Update']]
                    </button>
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
            user_list: [],
            status: 'add',
            FormData: { 
                id: null,
                name: null,
                email: null,
                password: null,
                level: null,
                active: null,
                language: null,   
            },
            errors: {
                name: null,
                email: null,
                password: null,
                level: null,
                active: null,
                language: null,
            },
            dataTable: null,
            pageLength: 10,
            searchQuery: '',
            isLoading: false
        },
        
        computed: {
            isFormInvalid() {
                return Object.values(this.errors).some(error => error !== null) || 
                       !this.FormData.name || 
                       !this.FormData.email || 
                       (this.status === 'add' && !this.FormData.password) || 
                       !this.FormData.level || 
                       this.FormData.active === null || 
                       !this.FormData.language;
            }
        },
        
        created() {
            this.fetchData();
        },
        
        methods: {
            fetchData() {
                
                let vm = this;
                $.LoadingOverlay("show");
                
                axios.get('/dashboard/user/fetchDataRecord')
                    .then(function (response) {
                        vm.user_list = response.data;

                        vm.initDataTable();

                        $.LoadingOverlay("hide");
                    })
                    .catch(function (error) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Failed to fetch users: ' + error.message,
                        });
                    })
            },
            createRecord() {
                if (!this.validateForm()) return;
                
                
                axios.post('/dashboard/user/createUserRecord', this.FormData)
                    .then(() => {
                        Swal.fire({
                            position: "top-end",
                            icon: 'success',
                            title: 'Success',
                            text: 'User created successfully!✅',
                            showConfirmButton: false,
                            timer: 1500

                        });
                        this.closeModal();
                        this.fetchData();
                       

                    })
                    .catch(error => {
                        let errorMessage = error.response?.data?.message || 'Error creating user';
                        if (error.response?.data?.errors) {
                            errorMessage = Object.values(error.response.data.errors).join('<br>');
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            html: errorMessage
                        });
                    })
                    .finally(() => {
                        window.location.reload();
                    });
            },
            
            updateRecord() {
                if (!this.validateForm()) return;
                
                
                axios.post('/dashboard/user/updateUserRecord', this.FormData)
                    .then(() => {
                        Swal.fire({
                            position: "top-end",
                            icon: 'success',
                            title: 'Success',
                            text: 'User updated successfully!✅',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        this.closeModal();
                        this.fetchData();
                    })
                    .catch(error => {
                        let errorMessage = error.response?.data?.message || 'Error updating user';
                        if (error.response?.data?.errors) {
                            errorMessage = Object.values(error.response.data.errors).join('<br>');
                        }
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            html: errorMessage
                        });
                    })
                    .finally(() => {
                        window.location.reload();
                    });
            },
            
            confirmDelete(userId) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!⚠️",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Yes, delete it!',
                    cancelButtonText: 'Cancel',
                    timer: 1500
                }).then((result) => {
                    if (result.isConfirmed) {
                        this.deleteRecord(userId);
                    }
                });
            },
            
            deleteRecord(userId) {
                $.LoadingOverlay("show");
                axios.delete(`/dashboard/user/deleteUserRecord/${userId}`)
                    .then(response => {
                        Swal.fire({
                            position: "top-end",
                            icon: 'success',
                            title: 'Deleted!🛑',
                            text: response.data.message,
                            showConfirmButton: false,
                            timer: 1500

                            
                        });
                        this.fetchData();
                    })
                    .catch(error => {
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: error.response?.data?.message || 'Failed to delete user'
                        });
                    })
                    .finally(() => {
                        window.location.reload();
                    });
            },
            
            initDataTable() {
                if (this.dataTable) {
                    this.dataTable.destroy();
                }
                
                this.dataTable = $('#dataTable').DataTable({
                    data: this.user_list,
                    columns: [
                        { 
                            data: null,
                            render: (data, type, row, meta) => meta.row + 1,
                            className: 'text-center'
                        },
                        { data: 'name' },
                        { data: 'email' },
                        { 
                            data: 'password',
                            render: () => '********',
                            className: 'text-center'
                        },
                        { 
                            data: 'level',
                            render: (data) => {
                                const levels = {1: 'Admin', 2: 'Manager', 3: 'User'};
                                return levels[data] || '';
                            },
                            className: 'text-center'
                        },
                        { 
                            data: 'language',
                            render: (data) => data === "kh" ? 'Khmer' : 'English',
                            className: 'text-center'
                        },
                        { 
                            data: 'active',
                            render: (data) => {
                                return data == 1 ? 
                                    '<span class="badge bg-success">Active</span>' : 
                                    '<span class="badge bg-danger">Inactive</span>';
                            },
                            className: 'text-center'
                        },
                        { 
                            data: null,
                            render: (data, type, row) => `
                                <div class="d-flex justify-content-center">
                                    <button class="btn btn-sm btn-warning mx-1 edit-btn" data-id="${row.id}" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger mx-1 delete-btn" data-id="${row.id}" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                            `,
                            className: 'text-center',
                            orderable: false
                        }
                    ],
                    responsive: true,
                    destroy: true,
                    pageLength: this.pageLength,
                    lengthMenu: [[5, 10, 25, 50, 100], [5, 10, 25, 50, 100]],
                    language: {
                        emptyTable: "No users found",
                        info: "Showing _START_ to _END_ of _TOTAL_ users",
                        infoEmpty: "Showing 0 to 0 of 0 users",
                        search: "_INPUT_",
                        searchPlaceholder: "Search users..."
                    }
                });
                
                this.setupTableEvents();
            },

            setupTableEvents() {
                const vm = this;
                
                // Edit button
                $('#dataTable').on('click', '.edit-btn', function() {
                    const userId = $(this).data('id');
                    const user = vm.user_list.find(u => u.id == userId);
                    if (user) {
                        vm.openModal(user);
                    }
                });

                // Delete button
                $('#dataTable').on('click', '.delete-btn', function() {
                    const userId = $(this).data('id');
                    vm.confirmDelete(userId);
                });
            },
            
            changePageLength() {
                if (this.dataTable) {
                    this.dataTable.page.len(this.pageLength).draw();
                }
            },

            searchTable() {
                if (this.dataTable) {
                    this.dataTable.search(this.searchQuery).draw();
                }
            },
            
            openModal(user = null) {
                this.resetForm();
                
                if (user) {
                    this.status = 'edit';
                    this.FormData = {
                        id: user.id,
                        name: user.name,
                        email: user.email,
                        password: null, // Don't load password for edit
                        level: user.level,
                        active: user.active,
                        language: user.language
                    };
                } else {
                    this.status = 'add';
                    this.FormData = {
                        id: null,
                        name: null,
                        email: null,
                        password: null,
                        level: '3', // Default to User level
                        active: '1', // Default to Active
                        language: 'kh' // Default to Khmer
                    };
                }
                
                $('#userModal').modal('show');
            },
            
            closeModal() {
                $('#userModal').modal('hide');
                this.resetForm();
            },
            
            resetForm() {
                this.FormData = {
                    id: null,
                    name: null,
                    email: null,
                    password: null,
                    level: null,
                    active: null,
                    language: null,
                };
                
                this.clearErrors();
            },
            
            clearErrors() {
                this.errors = {
                    name: null,
                    email: null,
                    password: null,
                    level: null,
                    active: null,
                    language: null,
                };
            },
            
            validateField(fieldName, value) {
                this.errors[fieldName] = null;
                
                switch(fieldName) {
                    case 'name':
                        if (!value) this.errors.name = 'Name is required';
                        else if (value.length < 3) this.errors.name = 'Name must be at least 3 characters';
                        break;
                        
                    case 'email':
                        if (!value) this.errors.email = 'Email is required';
                        else if (!/^\S+@\S+\.\S+$/.test(value)) this.errors.email = 'Invalid email format';
                        break;
                        
                    case 'password':
                        if (this.status === 'add' && !value) {
                            this.errors.password = 'Password is required';
                        } else if (value && value.length < 8) {
                            this.errors.password = 'Password must be at least 8 characters';
                        }
                        break;
                        
                    case 'level':
                        if (!value) this.errors.level = 'Level is required';
                        break;
                        
                    case 'language':
                        if (!value) this.errors.language = 'Language is required';
                        break;
                        
                    case 'active':
                        if (value === null) this.errors.active = 'Status is required';
                        break;
                }
            },
            
            validateForm() {
                this.validateField('name', this.FormData.name);
                this.validateField('email', this.FormData.email);
                if (this.status === 'add') {
                    this.validateField('password', this.FormData.password);
                }
                this.validateField('level', this.FormData.level);
                this.validateField('language', this.FormData.language);
                this.validateField('active', this.FormData.active);
                
                return !Object.values(this.errors).some(error => error !== null);
            },
            
        }
    });
</script>
@endsection