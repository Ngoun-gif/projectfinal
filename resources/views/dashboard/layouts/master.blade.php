<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- **============================** -->
        <!-- Custom fonts for this template-->
        <link href="{{ asset('dashboard-template/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="{{ asset('dashboard-template/css/sb-admin-2.min.css') }}" rel="stylesheet">
        <link href="{{ asset('dashboard-template/css/customstyle.css') }}" rel="stylesheet">
        <!-- Custom styles for this page -->
        <link href="{{ asset('dashboard-template/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    
    <!-- **============================** -->

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.css">

</head>
<body id="page-top">

    <div id="wrapper">
        @include('dashboard.layouts.sidebar')
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                @include('dashboard.layouts.headerdashboard')
                <!-- End of Content -->
                @yield('content')

            </div>
            @include('dashboard.layouts.footerdashboard')
        </div>
        
    </div>
    
    <!-- **============================** -->
    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('dashboard-template/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('dashboard-template/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('dashboard-template/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('dashboard-template/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('dashboard-template/vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('dashboard-template/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('dashboard-template/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('dashboard-template/js/demo/datatables-demo.js') }}"></script>
    <!-- **============================** -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
</body>
    <script src="https://cdn.jsdelivr.net/npm/vue@2.7.16/dist/vue.js"></script>
    
    <script>
        var app = new Vue({
            el: '#user_crud',
            data: {
                users: [],
                currentUser: {
                    id: null,
                    name: null,
                    gender: '',
                    department: '',
                    position: '',
                    phone: '',
                    startdate: ''
                },
                modalTitle: 'Add User',
                isEditMode: false,
            },
            mounted() {
                // Load users from localStorage
                const savedUsers = localStorage.getItem('users');
                this.users = savedUsers ? JSON.parse(savedUsers) : [];
            },

            methods: {
                openModal(user = null) {
                    this.resetForm();
                    if (user) {
                        this.isEditMode = true;
                        this.modalTitle = 'Edit User';
                        this.currentUser = { ...user }; // Copy user data
                    } else {
                        this.isEditMode = false;
                        this.modalTitle = 'Add User';
                    }
                    const modal = new bootstrap.Modal(document.getElementById('userModal'));
                    modal.show();
                },
                
                saveUser() {
                    if (!this.currentUser.name || !this.currentUser.gender || !this.currentUser.position) {
                        Swal.fire('Please fill in all required fields!', '', 'warning');
                        return;
                    }

                    if (this.isEditMode) {
                        const index = this.users.findIndex(user => user.id === this.currentUser.id);
                        if (index !== -1) this.users.splice(index, 1, { ...this.currentUser });
                    } else {
                        this.currentUser.id = Date.now(); // Unique ID
                        this.users.push({ ...this.currentUser });
                    }
                        
                    this.updateStorage();
                    Swal.fire('Success!', `User ${this.isEditMode ? 'updated' : 'added'} successfully!`, 'success');
                    this.closeModal();
                },

                deleteUser(index) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'This action cannot be undone!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: 'Yes, delete it!',
                        cancelButtonText: 'Cancel'
                    }).then(result => {
                        if (result.isConfirmed) {
                            this.users.splice(index, 1);
                            this.updateStorage();
                            Swal.fire('Deleted!', 'The user has been deleted.', 'success');
                        }
                    });
                },

                updateStorage() {
                    localStorage.setItem('users', JSON.stringify(this.users));
                },
                closeModal() {
                    const modal = bootstrap.Modal.getInstance(document.getElementById('userModal'));
                    if (modal) modal.hide();
                },
                
                resetForm() {
                    this.currentUser = {
                        id: null,
                        name: '',
                        gender: '',
                        department: '',
                        position: '',
                        phone: '',
                        startdate: ''
                    };
                }
            }
        });
    </script>

    <!-- development version, includes helpful console warnings -->
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
@yield('js')
</html>