<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
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
        .navbar {
            margin-left: 250px; /* Added margin to prevent overlap with sidebar */
            background-color: #e0f7fa; /* Light blue background */
            z-index: 1000; /* Ensure it stays above other content */
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
                    <a class="nav-link" href="{{ route('admin.dashboard') }}">
                        <i class="fas fa-tachometer-alt"></i> Dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <h6 class="text-muted mt-3">Laravel Examples</h6>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white bg-primary" href="{{ route('admin.users') }}">
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
        <a class="navbar-brand" href="#">User Profile</a>
        <div class="ml-auto dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="userDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: #007bff; color: white;">
                <i class="fas fa-user-circle"></i> {{ $user ? $user->name : 'Guest' }} <!-- Display the authenticated user's name or 'Guest' -->
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
            <h2>All Users</h2>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $index => $user)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                        <td>{{ $user->created_at->format('d/m/y') }}</td>
                        <td>
                            <a href="{{ route('users.edit', $user->_id) }}" class="btn btn-primary">Edit</a>
                            <form action="{{ route('users.destroy', $user->_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-success" onclick="window.location='{{ route('users.create') }}'">+ New User</button>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>