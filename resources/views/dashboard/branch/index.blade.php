@extends('dashboard.layouts.master')
@section('title', 'Branch')
@section('content')

    <div id="app" class="container-fluid ps-4 pe-4">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="text-right py-3 px-4">
                {{-- <div>
                    <a href="/users" class="btn btn-secondary">
                        <span class="me-2"><i class="fa-solid fa-backward-step"></i></span>Back
                    </a>
                </div> --}}
                <div class="">
                    <a href="/create_user" class="btn btn-primary"><i class="fa-solid fa-plus me-1"></i>Add Branch</a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Location</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-light">
                            <tr v-for="(item, index) in branch_list" :key="index">
                                <td>[[index + 1]] </td>
                                <td>[[item.name]]</td>
                                <td>[[item.phone]]</td>
                                <td>[[item.location]]</td>
                                <td class="text-right">
                                    <a class="btn btn-outline-warning" @click="editMajorRecord(item)">
                                        <i class="fas fa-edit"></i>
                                        Edit
                                    </a>
                                    <button type="button" class="btn btn-outline-danger"
                                        @click="deleteMajorRecord(item.id)">
                                        <i class="fas fa-trash"></i> Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <!-- Vue Script -->
    <script>
        var app = new Vue({
            el: '#app', // Vue instance will control the element with id 'app'
            delimiters: ['[[', ']]'], // Custom delimiters for Vue template syntax
            // Data properties
            data: {
                id: null, // Stores the id of the course to be edited or deleted
                name: null, // Stores the course code
                location: null, // Stores the course name
                phone: null, // Stores the duration of the course
                branch_list: [], // List of courses fetched from the server
                status: 'add', // Tracks whether the form is in 'add' or 'edit' mode
            },
            // Lifecycle hook: Called when the Vue instance is created
            created() {
                this.fetchData(); // Fetch initial data when the component is created
            },
            // Methods
            methods: {
                // Fetches course data from the server
                fetchData() {
                    let vm = this; // Reference to the Vue instance
                    // $.LoadingOverlay("show");
                    axios.get('/dashboard/branch/fetchDataRecord')
                        .then(function(response) {
                            console.log(response);
                            // On success, update the courses_list with the fetched data
                            vm.branch_list = response.data;
                            $.LoadingOverlay("hide");
                        })
                        .catch(function(error) {
                            // On error, show an alert with the error message
                            alert(error);
                        });
                },
                // Creates a new course record
                createMajorRecord() {
                    let vm = this; // Reference to the Vue instance
                    let input = vm.FormData; // Form data to be sent to the server
                    axios.post('/dashboard/major/createMajorRecord', input)
                        .then(function(response) {
                            // On success, show a success message
                            Swal.fire({
                                position: "top-end",
                                icon: "success",
                                title: "Success!",
                                text: "Major created successfully!✅",
                                showConfirmButton: false,
                                timer: 2000, // Auto-close after 2 seconds
                            }).then(() => {
                                // Refresh the page after the Swal alert is closed
                                window.location.reload();
                            });

                            // Reset form data
                            vm.resetData();
                        })
                        .catch(function(error) {
                            // On error, show an error message
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: "Error creating Major: " + error.response.data.message,
                            });
                        });
                },

                // Prepares the form for editing
                editMajorRecord(item) {
                    this.status = 'edit'; // Set status to 'edit'
                    this.FormData.id = item.id; // Set the ID
                    this.FormData.major_type = item.major_type; // Set the course code
                    this.FormData.description = item.description; // Set the course name
                    this.FormData.status = item.status; // Set the status
                    this.showModal(); // Show the modal
                },
                // Saves the edited course record
                updateMajorRecord() {
                    let vm = this; // Reference to the Vue instance
                    let input = vm.FormData; // Form data to be sent to the server
                    // Use PUT or PATCH for updates
                    axios.post('/dashboard/major/updateMajorRecord', input)
                        .then(function(response) {
                            if (response.data.success) {
                                // On success, show a success message
                                Swal.fire({
                                    position: "top-end",
                                    icon: "success",
                                    title: "Success!",
                                    text: "Major updated successfully!✅",
                                    showConfirmButton: false,
                                    timer: 1500, // Auto-close after 1.5 seconds
                                });
                                // Reset the status to 'add'
                                vm.status = 'add';

                                // Reset form data
                                vm.resetData();

                                // Refresh the course list
                                vm.fetchData();

                                // Hide the modal
                                vm.hideModal();
                            } else {
                                // Handle case where no course was found
                                Swal.fire({
                                    icon: "error",
                                    title: "Error",
                                    text: response.data.message,
                                });
                            }
                        })
                        .catch(function(error) {
                            // On error, show an error message
                            let errorMessage = "Error updating Major.";
                            if (error.response && error.response.data && error.response.data.message) {
                                errorMessage = error.response.data.message;
                            }
                            Swal.fire({
                                icon: "error",
                                title: "Error",
                                text: errorMessage,
                            });
                        });
                },

                // Deletes a Major record
                deleteMajorRecord(majorId) {
                    Swal.fire({
                        title: "Are you sure?",
                        text: "This record will be permanently removed! ⚠️",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Yes, delete it!",
                        cancelButtonText: "Cancel",
                    }).then((result) => {
                        if (result.isConfirmed) {
                            let vm = this; // Reference to the Vue instance
                            axios.delete(`/dashboard/major/deletMajorRecord/${majorId}`)
                                .then(function(response) {
                                    // On success, show a success message
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "success",
                                        title: "Permanently Remove! 🛑",
                                        text: response.data.message,
                                        showConfirmButton: false,
                                        timer: 2000, // Auto-close after 1.5 seconds
                                    });

                                    // Refresh the Major list
                                    vm.fetchData();
                                })
                                .catch(function(error) {
                                    // On error, show an error message
                                    Swal.fire({
                                        position: "top-end",
                                        icon: "error",
                                        title: "Error",
                                        text: "Error deleting Major: " + error.response.data
                                            .message,
                                    });
                                });
                        }
                    });
                },

                // Resets form data and hides the modal
                resetData() {
                    this.FormData = {
                        major_type: null,
                        description: null,
                        status: '1',
                    };
                    this.status = 'add'; // Set status back to 'add'
                    this.hideModal(); // Hide the modal
                },

                // Clears all form fields
                clearData() {
                    this.major_type = null;
                    this.description = null;
                    this.status = '1';
                },

                // Shows the modal
                showModal() {
                    $('#staticBackdrop').modal('show'); // Show the modal using jQuery
                },

                // Hides the modal
                hideModal() {
                    $('#staticBackdrop').modal('hide'); // Hide the modal using jQuery
                }
            },
        });
    </script>
@endsection
