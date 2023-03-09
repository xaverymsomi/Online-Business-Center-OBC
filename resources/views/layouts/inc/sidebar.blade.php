<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../icon.png" type="image/png">
    <title>OBC</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('All/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('All/css/kvm.css') }}" rel="stylesheet">
    
     <!-- Custom styles for this page -->
     
    <link href="{{ asset('All/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        .bg {
            background-color: #024e5a;
        }
        .vms-btn {
            background-color: #024e5a;
            color: whitesmoke;
            transition: ease-in 0.4s all;
        }
        .vms-btn:hover {
            background-color: #024e5a;
            color: whitesmoke;
        }

        .vms-btn:focus {
            background-color: #024e5a;
            color: whitesmoke;
        }

        .btn-success {
            background-color: #024e5a;
        }

        .kvm-bg {
            background-color: #024e5a;
        }

        .kvm-color {
            color: #024e5a;
        }

        #search_date, #search_exipendture_type {
            cursor: pointer;
        }
        #search_date, #search_exipendture_type:hover {
            color: #04AA6D;
        }

        .form-control{
            border: none;
            border-radius: 0px;
            margin-top: 10px;
            margin-bottom: 20px;
            border-bottom: 1px solid #024e5a;
        }
        .form-control: focus{
            outline: none;
            box-shadow: none;
            border: none;
            border-radius: 0px;
            margin-top: 13px;
            margin-bottom: 20px;
            border-bottom: 1px solid #024e5a;
        }

        /*checkbox customization*/
             .checkbox input {
            cursor: pointer;
        }

        .checkbox input[type='checkbox'] {
            display: none;
        }

        .checkbox span {
            background-color: #fff;
            padding: 10px 30px;
            color: #024e5a;
            border-radius: 30px;
            position: relative;
            display: inline-block;
            font-size: 16px;
            user-select: none;
            overflow: hidden;
            transition: 0.5s all;
            border: 1px solid #024e5a;
        }

        .checkbox span:hover {
            background-color: #024e5a;
            padding: 10px 30px;
            color: #fff;
            border-radius: 30px;
            position: relative;
            display: inline-block;
            font-size: 16px;
            user-select: none;
            overflow: hidden;
        }

        .checkbox input[type='checkbox']:checked ~ span {
            background-color: #024e5a;
            box-shadow: 0 2px 10px #024e5a;
            color: #fff;
        }
        /*end checkbox customization*/

    </style>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav kvm-bg sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-store-alt"></i>
                </div>
                <div class="sidebar-brand-text mx-3">OBC</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="#">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#Component"
                    aria-expanded="true" aria-controls="Component">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                    <span> Shop Management</span>
                </a>
                <div id="Component" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Shop Management:</h6>
                        <a class="collapse-item" href="#"> 
                            <i class="fa fa-user text-danger"></i> Driver
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fa fa-user-circle text-danger"></i> User
                        </a>
                    </div>
                </div>
            </li>

              <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#carcomponent"
                    aria-expanded="true" aria-controls="carcomponent">
                    <i class="fa fa-first-order" aria-hidden="true"></i>
                    <span>  Order Management  </span>
                </a>
                <div id="carcomponent" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Order:</h6>
                        <a class="collapse-item" href="#">
                            <i class="fas fa-fw fa-car text-danger"></i> vehicle
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fas fa-fw fa-wrench text-danger"></i> Maintainance
                        </a>
                        <h6 class="collapse-header">Car Components:</h6>
                        <a class="collapse-item" href="#">
                            <i class="fa fa-database text-danger"></i> Brand
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fa fa-database fa-sm text-danger"></i> Engine
                        </a>
                        <a href="#" class="collapse-item">
                            <i class="fas fa-gas-pump text-danger"></i> Fuel type
                        </a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">
               <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#income"
                    aria-expanded="true" aria-controls="Component">
                    <i class="fa fa-database" aria-hidden="true"></i>
                    <span> Inventory </span>
                </a>
                <div id="income" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <h6 class="collapse-header">Inventory Management:</h6>
                        <a class="collapse-item" href="#">
                            <i class="fa fa-money text-danger"></i> income
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fa fa-list text-danger"></i> Income Source
                        </a>
                        
                        <h6 class="collapse-header">Accounts Management:</h6>
                        <a class="collapse-item" href="#"> 
                            <i class="fa fa-bank text-danger"></i> Account Balance
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fa fa-list text-danger"></i> Account Chart
                        </a>

                        <h6 class="collapse-header">Expenditure Management:</h6>
                        <a class="collapse-item" href="#"> 
                            <i class="fa fa-money text-danger"></i> Expenditures
                        </a>
                        <a class="collapse-item" href="#">
                            <i class="fa fa-gears text-danger"></i> Expenditure type
                        </a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <div class="main-panel">
                    @include('layouts.inc.adminnav')
                </div>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    