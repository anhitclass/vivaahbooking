@extends('vendor.layout.master')
@section('content')

<style>
 
/* Right Sidebar Styling  */
.right-sidebar {
    background-color:#baf6cc ; 
    color: #2d6a4f ; 
    height: 100vh;
    overflow-y: auto;
    padding: 0;
    margin-left:19.5%;
    margin-top: -47.5%;
    width: 79%;
}

.right-sidebar h6,
.right-sidebar a {
    color: #2d6a4f  ; 
}

/* Calendar Styling */
.calendar-content {
    width: 100%;
    /* height: calc(100vh - 150px); */
    background-color: #f6f9f8;
    border: 2px solid #ddd;
    border-radius: 5px;
}
</style>
<div class="dashboard">
<div class="col-lg-9 right-sidebar">
            <div class="h-100 p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">Calendar</h6>
                    <a href="">Show All</a>
                </div>
                <div id="calender" class="calendar-content"></div>
            </div>
        </div>
        </div>
@endsection