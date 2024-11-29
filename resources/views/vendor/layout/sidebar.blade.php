<style>
    /* Ensure the container and row take up the full height of the viewport */
.full-height-container {
    min-height: 100vh; /* Full viewport height */
   
}

.full-height-row {
    min-height: 100vh; /* Ensures the row spans the full height */
    
}

/* Styling for the entire sidebar */
.left-sidebar {
    background-color: #2d6a4f !important; 
    color:  #ffffff !important; 
    height: 100vh; /* Full height */
    overflow-y: auto; /* Allow scrolling if content overflows */
    padding: 0;
    width: 280px;
}

/* Styling for sidebar content */
.left-sidebar .sidebar-content {
    padding: 1rem;
}

/* Links inside the sidebar */
.left-sidebar a.nav-link {
    color: #ffffff ; 
    transition: color 0.3s ease;
}

.left-sidebar a.nav-link.active,
.left-sidebar a.nav-link:hover {
    color:#95d5b2 ; 
    font-weight: bold;
}



</style>

<div class="container-fluid full-height-container">
    <div class="row full-height-row">
        
    <div class="col-lg-3 left-sidebar">
    <div class="sidebar-content">
        <nav class="navbar">
            <div class="d-flex align-items-center ms-4 mb-4">
                <div class="position-relative">
                    <img class="rounded-circle" src="{{asset('img/user.jpg')}}" alt="" style="width: 40px; height: 40px;">
                    <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0">{{ Auth::guard('vendor')->user()->name }}</h6>
                    <span>Admin</span>
                </div>
            </div>
            <div class="navbar-nav w-100">
                <a href="{{ route('dashboard') }}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                <a type="button" href="{{route('create_post')}}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Posts</a>
            </div>
        </nav>
    </div>
</div>
        </div>
        </div>