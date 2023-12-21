<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../public/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="../../public/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="../../public/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="../../public/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
    <link rel="stylesheet" href="../../public/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" type="text/css" href="../../public/admin/js/select.dataTables.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../../public/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../../public/admin/images/favicon.png" />
    <style>
        .delete {
            padding: 5px;
            background-color: red;
            color: white;
            border-radius: 10px;
        }

        .edit {
            padding: 5px 10px;

            background-color: blue;
            color: white;
            border-radius: 10px;
        }

        a:hover {
            color: white;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper">
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item">
                        <a class="nav-link" href="dashboard">
                            <i class="icon-grid menu-icon"></i>
                            <span class="menu-title">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order_list">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Orders</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tables" data-toggle="collapse" aria-expanded="false"
                            aria-controls="tables">
                            <i class="icon-grid-2 menu-icon"></i>
                            <span class="menu-title">Products</span>
                            <i class="menu-arrow"></i>
                        </a>
                    </li>
                    <div class="collapse" id="tables">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="products">Add Product</a></li>
                            <li class="nav-item"> <a class="nav-link" href="list">Product List</a></li>
                        </ul>
                    </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="registered">
                            <i class="icon-head menu-icon"></i>
                            <span class="menu-title">Registered Users</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="chart">
                            <i class="icon-bar-graph menu-icon"></i>
                            <span class="menu-title">Charts</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="payment">
                            <i class="icon-paper menu-icon"></i>
                            <span class="menu-title">Payments</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
                <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                    <!-- <a class="navbar-brand brand-logo mr-5" href="index.html"><img src="../public/admin/images/logo.svg" class="mr-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="../public/admin/images/logo-mini.svg" alt="logo"/></a> -->
                    <h3 class="text-primary">Admin Panel</h3>
                </div>
                <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
                    <button class="navbar-toggler navbar-toggler align-self-center" type="button"
                        data-toggle="minimize">
                        <span class="icon-menu"></span>
                    </button>
                    <ul class="navbar-nav mr-lg-2">
                        <li class="nav-item nav-search d-none d-lg-block">
                            <div class="input-group">
                                <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                                    <span class="input-group-text" id="search">
                                        <i class="icon-search"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="navbar-search-input"
                                    placeholder="Search now" aria-label="search" aria-describedby="search">
                            </div>
                        </li>
                    </ul>
                    <ul class="navbar-nav navbar-nav-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
                                data-toggle="dropdown">
                                <i class="icon-bell mx-0"></i>
                                <span class="count"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
                                aria-labelledby="notificationDropdown">
                                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-success">
                                            <i class="ti-info-alt mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Application Error</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Just now
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-warning">
                                            <i class="ti-settings mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">Settings</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            Private message
                                        </p>
                                    </div>
                                </a>
                                <a class="dropdown-item preview-item">
                                    <div class="preview-thumbnail">
                                        <div class="preview-icon bg-info">
                                            <i class="ti-user mx-0"></i>
                                        </div>
                                    </div>
                                    <div class="preview-item-content">
                                        <h6 class="preview-subject font-weight-normal">New user registration</h6>
                                        <p class="font-weight-light small-text mb-0 text-muted">
                                            2 days ago
                                        </p>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item nav-profile dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                                <img src="../../public/admin/images/faces/face28.jpg" alt="profile" />
                            </a>
                            <div class="dropdown-menu dropdown-menu-right navbar-dropdown"
                                aria-labelledby="profileDropdown">
                                <a class="dropdown-item">
                                    <i class="ti-settings text-primary"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item">
                                    <i class="ti-power-off text-primary"></i>
                                    Logout
                                </a>
                            </div>
                        </li>
                    </ul>
                    <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                        data-toggle="offcanvas">
                        <span class="icon-menu"></span>
                    </button>
                </div>
            </nav>

            <div class="main-panel">
                <div class="content-wrapper">
                    <!-- Edit Modal -->



                   
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">Edit Product</h5>
                            </div>
                            <div class="card-body">
                            <form action="<?= site_url('update') ?>" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                <input type="hidden" class="form-control" name="id" value="<?= $data['id'] ?>" required>
                                    <label for="name" class="form-label">Product Name</label>
                                    <input type="text" class="form-control" name="name"  value="<?= $data['name'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="price" class="form-label">Product Price</label>
                                    <input type="number" class="form-control" name="price"  value="<?= $data['price'] ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="image" class="form-label">Product Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Product Description</label>
                                    <textarea class="form-control" name="description" rows="3"
                                        required><?= $data['description'] ?></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="stocks" class="form-label">Product Stock</label>
                                    <input type="number" class="form-control" name="stocks"
                                        value="<?= $data['stocks'] ?>" required>
                                </div>
                                <div class="button">
                                    <button class="btn btn-primary" type="submit">Update Product</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</body>

</html>