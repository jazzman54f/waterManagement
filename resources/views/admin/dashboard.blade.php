<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    @vite(['resources/js/app.js'])
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
        }
        .sidebar {
            height: 100vh; /* Full height */
            background-color: #ffffff; /* White background */
            padding: 20px;
            position: fixed;
            width: 250px; /* Fixed width for sidebar */
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }
        .sidebar-content {
            width: 80%; /* Limit content to 80% of sidebar width */
            margin: 0 auto; /* Center the content */
        }
        .sidebar-header {
            display: flex;
            align-items: center; /* Center vertically */
            margin-bottom: 20px; /* Space below the header */
        }
        .sidebar img {
            width: 40px; /* Adjust logo size */
            margin-right: 10px; /* Space between logo and title */
        }
        .sidebar h5 {
            margin: 0; /* Remove default margin */
            font-size: 1.5rem; /* Adjust font size */
        }
        .divider {
            height: 2px; /* Line height */
            background-color: #e0e0e0; /* Line color */
            margin-bottom: 20px; /* Space below the line */
        }
        .nav-link {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .nav-link.active {
            background-color: #007bff; /* Light blue background for active link */
        }

        .nav-link i {
            margin-right: 10px; /* Space between icon and text */
        }

        .text-muted {
            font-size: 0.9rem; /* Slightly smaller font for section headers */
        }
        .main-content {
            margin-left: 270px; /* Adjusted for sidebar width */
            padding: 20px;
        }
        .card-custom {
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        .navbar {
            margin-left: 250px; /* Added margin to prevent overlap with sidebar */
            background-color: #e0f7fa; /* Light blue background */
            z-index: 1000; /* Ensure it stays above other content */
        }
        .special {
            width: -webkit-fill-available;
        }
        .custom-card {
            width: 275px;
        }
    </style>
</head>
<body>

    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header mt-2">
            <img src="{{ asset('adminimg/logo-ct.png') }}" alt="Logo"> <!-- Logo -->
            <h7 class="fw-bold">WaterManagement</h7>
        </div>
        <div class="divider"></div> <!-- Line under the title -->
        <div class="sidebar-content"> <!-- Container for sidebar content -->
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active text-white bg-primary" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <h6 class="text-muted mt-3">Laravel Examples</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.users') }}">
                        <i class="fas fa-user"></i> User Profile
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-users"></i> User Management
                    </a>
                </li>
                <li class="nav-item">
                    <h6 class="text-muted mt-3">Example Pages</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-table"></i> Tables
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fas fa-file-invoice"></i> Billing
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#">Dashboard</a>
        <div class="ml-auto dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #007bff; color: white;">
                <i class="fas fa-user-circle"></i> {{ $user->name }} <!-- Display the authenticated user's name -->
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown" style="background-color: #e0f7fa;">
                <div class="text-center">
                    <a class="dropdown-item" href="#">Settings</a>
                    <div class="dropdown-divider"></div>
                    <form action="{{ route('logout') }}" method="POST" style="margin: 0;">
                        @csrf
                        <button type="submit" class="btn btn-link dropdown-item" style="padding: 0; color: inherit;">Log Out</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <div class="main-content">
        <div class="container-fluid">
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert" id="success-alert">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="row special">
               <!-- Cards Section -->
                <div class="d-flex flex-wrap justify-content-between">
                    <!-- Active Sensors Card -->
                    <div class="card card-custom p-3 text-center m-2" style="width: 280px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-grow-1">
                                <h6>Capteurs Actifs</h6>
                                <h4 class="fw-bold">50</h4>
                            </div>
                            <div class="icon-box">
                                <i class="fas fa-plug fa-2x"></i> <!-- Sensor Icon -->
                            </div>
                        </div>
                    </div>

                    <!-- Successful Interventions Card -->
                    <div class="card card-custom p-3 text-center m-2" style="width: 280px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-grow-1">
                                <h6>Interventions Réussites</h6>
                                <h4 class="fw-bold">30 <span class="text-success">85%</span></h4>
                            </div>
                            <div class="icon-box">
                                <i class="fas fa-check-circle fa-2x"></i> <!-- Check Circle Icon -->
                            </div>
                        </div>
                    </div>

                    <!-- Alerts Processed Card -->
                    <div class="card card-custom p-3 text-center m-2" style="width: 280px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-grow-1">
                                <h6>Alertes Traités</h6>
                                <h4 class="fw-bold">30 <span class="text-danger">20%</span></h4>
                            </div>
                            <div class="icon-box">
                                <i class="fas fa-bell fa-2x"></i> <!-- Bell Icon -->
                            </div>
                        </div>
                    </div>

                    <!-- Covered Area Card -->
                    <div class="card card-custom p-3 text-center m-2" style="width: 280px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="flex-grow-1">
                                <h6>Superficie Couverte</h6>
                                <h4 class="fw-bold">80% <span class="text-success">+5%</span></h4>
                            </div>
                            <div class="icon-box">
                                <i class="fas fa-map-marked-alt fa-2x"></i> <!-- Map Marked Icon -->
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Widgets Section -->
            <div class="row mt-4">
                <div class="col-md-6 mb-4">
                    <div class="card card-custom p-4">
                        <h5>PH Calcul</h5>
                        <p>(+23%) than last week</p>
                        <canvas id="activeUsersChart" style="height: 200px;"></canvas> <!-- Canvas for the chart -->
                        <div class="d-flex justify-content-between mt-3">
                            <div>
                                <span class="text-info">6-7</span> Bien
                            </div>
                            <div>
                                <span class="text-success">5-8</span> Moyen
                            </div>
                            <div>
                                <span class="text-danger">autre</span> danger
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card card-custom p-4">
                        <h5>Water Pressure Over Time</h5>
                        <canvas id="waterPressureChart" style="height: 300px;"></canvas>
                    </div>
                </div>
            </div>

            <!-- Sales Overview Graph -->
            <div class="row mt-4 col-md-12 ">
                <div class="col-md-12">
                    <div class="card card-custom p-4">
                        <h5>Chlore</h5>
                        <p>4% more in 2025</p>
                        <canvas id="salesChart" style="height: 400px;"></canvas> <!-- Canvas for the chart -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script src="{{ asset('js/app.js') }}"></script>
    <script>
        // Automatically hide the alert after 3 seconds
        $(document).ready(function() {
            setTimeout(function() {
                $('#success-alert').alert('close');
            }, 3000); // 3000 milliseconds = 3 seconds
        });
    </script>
</body>
</html>