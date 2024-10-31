
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/vendors/feather/feather.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Skydash Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/feather/feather.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="images/favicon.png" />

    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_navbar.html -->
        @include('partials.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_settings-panel.html -->
            <div class="theme-setting-wrapper">
                <div id="settings-trigger"><i class="ti-settings"></i></div>
                <div id="theme-settings" class="settings-panel">
                    <i class="settings-close ti-close"></i>
                    <p class="settings-heading">SIDEBAR SKINS</p>
                    <div class="sidebar-bg-options selected" id="sidebar-light-theme">
                        <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
                    </div>
                    <div class="sidebar-bg-options" id="sidebar-dark-theme">
                        <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
                    </div>
                    <p class="settings-heading mt-2">HEADER SKINS</p>
                    <div class="color-tiles mx-0 px-4">
                        <div class="tiles success"></div>
                        <div class="tiles warning"></div>
                        <div class="tiles danger"></div>
                        <div class="tiles info"></div>
                        <div class="tiles dark"></div>
                        <div class="tiles default"></div>
                    </div>
                </div>
            </div>
            <div id="right-sidebar" class="settings-panel">
                <i class="settings-close ti-close"></i>
                <ul class="nav nav-tabs border-top" id="setting-panel" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" id="todo-tab" data-toggle="tab" href="#todo-section" role="tab"
                            aria-controls="todo-section" aria-expanded="true">TO DO LIST</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="chats-tab" data-toggle="tab" href="#chats-section" role="tab"
                            aria-controls="chats-section">CHATS</a>
                    </li>
                </ul>
                <div class="tab-content" id="setting-content">
                    <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel"
                        aria-labelledby="todo-section">
                        <div class="add-items d-flex px-3 mb-0">
                            <form class="form w-100">
                                <div class="form-group d-flex">
                                    <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                                    <button type="submit" class="add btn btn-primary todo-list-add-btn"
                                        id="add-task">Add</button>
                                </div>
                            </form>
                        </div>
                        <div class="list-wrapper px-3">
                            <ul class="d-flex flex-column-reverse todo-list">
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Team review meeting at 3.00 PM
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Prepare for presentation
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox">
                                            Resolve all the low priority tickets due today
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Schedule meeting for next week
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                                <li class="completed">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="checkbox" type="checkbox" checked>
                                            Project review
                                        </label>
                                    </div>
                                    <i class="remove ti-close"></i>
                                </li>
                            </ul>
                        </div>
                        <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 11 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Creating component page build a js</p>
                            <p class="text-gray mb-0">The total number of sessions</p>
                        </div>
                        <div class="events pt-4 px-3">
                            <div class="wrapper d-flex mb-2">
                                <i class="ti-control-record text-primary mr-2"></i>
                                <span>Feb 7 2018</span>
                            </div>
                            <p class="mb-0 font-weight-thin text-gray">Meeting with Alisa</p>
                            <p class="text-gray mb-0 ">Call Sarah Graves</p>
                        </div>
                    </div>
                    <!-- To do section tab ends -->
                    <div class="tab-pane fade" id="chats-section" role="tabpanel" aria-labelledby="chats-section">
                        <div class="d-flex align-items-center justify-content-between border-bottom">
                            <p class="settings-heading border-top-0 mb-3 pl-3 pt-0 border-bottom-0 pb-0">Friends</p>
                            <small
                                class="settings-heading border-top-0 mb-3 pt-0 border-bottom-0 pb-0 pr-3 font-weight-normal">See
                                All</small>
                        </div>
                        <ul class="chat-list">
                            <li class="list active">
                                <div class="profile"><img src="images/faces/face1.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Thomas Douglas</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">19 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face2.jpg" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <div class="wrapper d-flex">
                                        <p>Catherine</p>
                                    </div>
                                    <p>Away</p>
                                </div>
                                <div class="badge badge-success badge-pill my-auto mx-2">4</div>
                                <small class="text-muted my-auto">23 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face3.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Daniel Russell</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">14 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face4.jpg" alt="image"><span
                                        class="offline"></span></div>
                                <div class="info">
                                    <p>James Richardson</p>
                                    <p>Away</p>
                                </div>
                                <small class="text-muted my-auto">2 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face5.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Madeline Kennedy</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">5 min</small>
                            </li>
                            <li class="list">
                                <div class="profile"><img src="images/faces/face6.jpg" alt="image"><span
                                        class="online"></span></div>
                                <div class="info">
                                    <p>Sarah Graves</p>
                                    <p>Available</p>
                                </div>
                                <small class="text-muted my-auto">47 min</small>
                            </li>
                        </ul>
                    </div>
                    <!-- chat tab ends -->
                </div>
            </div>
            <!-- partial -->
            <!-- partial:partials/_sidebar.html -->
            @include('partials.sidebar')
            <!-- partial -->
                    <!-- Main Panel -->
                    <div class="main-panel">
                <div class="content-wrapper ml-2 mr-2">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title mb-0">Guests Table</h4>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addGuestModal">
                                            <i class="fas fa-user-plus"></i> Add Guest
                                        </button>
                                    </div>

                                    <!-- Add Guest Modal -->
                                    <div class="modal fade" id="addGuestModal" tabindex="-1" role="dialog" aria-labelledby="addGuestModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form id="addGuestForm" method="post" action="{{ route('admin.guests.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="addGuestModalLabel">Add Guest</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="guestName">Name</label>
                                                            <input type="text" class="form-control" id="guestName" name="name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="guestEmail">Email</label>
                                                            <input type="email" class="form-control" id="guestEmail" name="email" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="guestBio">Bio</label>
                                                            <textarea class="form-control" id="guestBio" name="bio"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="guestPhone">Phone Number</label>
                                                            <input type="text" class="form-control" id="guestPhone" name="phonenumber">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Guest</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Guests Table -->
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Bio</th>
                                                    <th>Phone Number</th>
                                                    <th>Created At</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($guests as $guest)
                                                    <tr>
                                                        <td>{{ $guest->name }}</td>
                                                        <td>{{ $guest->email }}</td>
                                                        <td>{{ $guest->bio }}</td>
                                                        <td>{{ $guest->phonenumber }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($guest->created_at)->toDateString() }}</td>
                                                        <td>
                                                            <div class="d-inline-flex align-items-center">
                                                                <!-- Edit Button -->
                                                                <a href="#" class="btn btn-sm btn-outline-secondary edit-guest mr-1 mb-2" data-toggle="modal" data-target="#editGuestModal{{ $guest->id }}" data-id="{{ $guest->id }}">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>

                                                                <!-- Delete Button -->
                                                                <form action="{{ route('admin.guests.destroy', $guest->id) }}" method="POST" class="delete-form mt-2">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Edit Guest Modal -->
                                                    <div class="modal fade" id="editGuestModal{{ $guest->id }}" tabindex="-1" role="dialog" aria-labelledby="editGuestModalLabel{{ $guest->id }}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form id="editGuestForm{{ $guest->id }}" action="{{ route('admin.guests.update', $guest->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editGuestModalLabel{{ $guest->id }}">Edit Guest</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="id" value="{{ $guest->id }}">
                                                                        <div class="form-group">
                                                                            <label for="editGuestName{{ $guest->id }}">Name</label>
                                                                            <input type="text" class="form-control" id="editGuestName{{ $guest->id }}" name="name" value="{{ $guest->name }}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="editGuestEmail{{ $guest->id }}">Email</label>
                                                                            <input type="email" class="form-control" id="editGuestEmail{{ $guest->id }}" name="email" value="{{ $guest->email }}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="editGuestBio{{ $guest->id }}">Bio</label>
                                                                            <textarea class="form-control" id="editGuestBio{{ $guest->id }}" name="bio">{{ $guest->bio }}</textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="editGuestPhone{{ $guest->id }}">Phone Number</label>
                                                                            <input type="text" class="form-control" id="editGuestPhone{{ $guest->id }}" name="phonenumber" value="{{ $guest->phonenumber }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                @include('partials.footer')
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <!-- plugins:js -->
    <script src="/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/vendors/chart.js/Chart.min.js"></script>
    <script src="/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
    <script src="/js/dataTables.select.min.js"></script>

    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/js/off-canvas.js"></script>
    <script src="/js/hoverable-collapse.js"></script>
    <script src="/js/template.js"></script>
    <script src="/js/settings.js"></script>
    <script src="/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="/js/dashboard.js"></script>
    <script src="/js/Chart.roundedBarCharts.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
                <div class="content-wrapper ml-2 mr-2">
                    <div class="row">
                        <div class="col-lg-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                        <h4 class="card-title mb-0">Guests Table</h4>
                                        <button type="button" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#addGuestModal">
                                            <i class="fas fa-user-plus"></i> Add Guest
                                        </button>
                                    </div>

                                    <!-- Add Guest Modal -->
                                    <div class="modal fade" id="addGuestModal" tabindex="-1" role="dialog" aria-labelledby="addGuestModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <form id="addGuestForm" method="post" action="{{ route('admin.guests.store') }}" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="addGuestModalLabel">Add Guest</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="guestName">Name</label>
                                                            <input type="text" class="form-control" id="guestName" name="name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="guestEmail">Email</label>
                                                            <input type="email" class="form-control" id="guestEmail" name="email" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="guestBio">Bio</label>
                                                            <textarea class="form-control" id="guestBio" name="bio"></textarea>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="guestPhone">Phone Number</label>
                                                            <input type="text" class="form-control" id="guestPhone" name="phonenumber">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Save Guest</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Guests Table -->
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <th>Bio</th>
                                                    <th>Phone Number</th>
                                                    <th>Created At</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($guests as $guest)
                                                    <tr>
                                                        <td>{{ $guest->name }}</td>
                                                        <td>{{ $guest->email }}</td>
                                                        <td>{{ $guest->bio }}</td>
                                                        <td>{{ $guest->phonenumber }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($guest->created_at)->toDateString() }}</td>
                                                        <td>
                                                            <div class="d-inline-flex align-items-center">
                                                                <!-- Edit Button -->
                                                                <a href="#" class="btn btn-sm btn-outline-secondary edit-guest mr-1 mb-2" data-toggle="modal" data-target="#editGuestModal{{ $guest->id }}" data-id="{{ $guest->id }}">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </a>

                                                                <!-- Delete Button -->
                                                                <form action="{{ route('admin.guests.destroy', $guest->id) }}" method="POST" class="delete-form mt-2">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-sm btn-outline-danger">
                                                                        <i class="far fa-trash-alt"></i>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- Edit Guest Modal -->
                                                    <div class="modal fade" id="editGuestModal{{ $guest->id }}" tabindex="-1" role="dialog" aria-labelledby="editGuestModalLabel{{ $guest->id }}" aria-hidden="true">
                                                        <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                                <form id="editGuestForm{{ $guest->id }}" action="{{ route('admin.guests.update', $guest->id) }}" method="POST">
                                                                    @csrf
                                                                    @method('PUT')
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="editGuestModalLabel{{ $guest->id }}">Edit Guest</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <input type="hidden" name="id" value="{{ $guest->id }}">
                                                                        <div class="form-group">
                                                                            <label for="editGuestName{{ $guest->id }}">Name</label>
                                                                            <input type="text" class="form-control" id="editGuestName{{ $guest->id }}" name="name" value="{{ $guest->name }}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="editGuestEmail{{ $guest->id }}">Email</label>
                                                                            <input type="email" class="form-control" id="editGuestEmail{{ $guest->id }}" name="email" value="{{ $guest->email }}" required>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="editGuestBio{{ $guest->id }}">Bio</label>
                                                                            <textarea class="form-control" id="editGuestBio{{ $guest->id }}" name="bio">{{ $guest->bio }}</textarea>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label for="editGuestPhone{{ $guest->id }}">Phone Number</label>
                                                                            <input type="text" class="form-control" id="editGuestPhone{{ $guest->id }}" name="phonenumber" value="{{ $guest->phonenumber }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>