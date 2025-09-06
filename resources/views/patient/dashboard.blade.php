@extends('layouts.dashboard')


@section('sidebar')
<!-- sidebar -->
<ul class="sidebar-nav">
    <!-- Dashboard -->
    <li class="sidebar-item">
        <a href="#" class="sidebar-link">
            <i class="bx bxs-dashboard"></i>
            <span>Home</span>
        </a>
    </li>

    <!-- Appointment -->
    <li class="sidebar-item">
        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse" data-bs-target="#appointment" aria-expanded="false" aria-controls="appointment">
            <i class="bx bxs-calendar"></i>
            <span>Appointment</span>
        </a>
        <ul id="appointment" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">Book Appointment</a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">Check Appointment</a>
            </li>
            <li class="sidebar-item">
                <a href="#" class="sidebar-link">Reschedule Appointment</a>
            </li>
        </ul>
    </li>

    <!-- Appointment History -->
    <li class="sidebar-item">
        <a href="#" class="sidebar-link">
            <i class="bx bxs-time"></i>
            <span>Appointment History</span>
        </a>
    </li>


    <!-- Notification -->
    <li class="sidebar-item">
        <a href="#" class="sidebar-link">
            <i class="bx bxs-bell-ring"></i>
            <span>Notification</span>
        </a>
    </li>

    <!-- Settings -->
    <li class="sidebar-item">
        <a href="#" class="sidebar-link">
            <i class="bx bxs-cog"></i>
            <span>Settings</span>
        </a>
    </li>
</ul>
@endsection


@section('content')
<main class="content px-3 pt-3 pb-0">
    <div class="container-fluid">
        <div class="mb-3">
            <div class="mb-3">
                <h3 class="fw-bold fs-4 mb-1">{{ $patient['name'] }}</h3>

                <div class="text-muted small">
                    <div>Email: {{ $patient['email'] }}</div>
                    <div>Phone: {{ $patient['phone'] }}</div>
                </div>
            </div>
            <div class="row">
                <!-- Upcoming Appointment -->
                <div class="col-12 col-md-4">
                    <div class="card shadow">
                        <div class="card-body py-4">
                            <h6 class="mb-2 fw-bold">Upcoming Appointment</h6>
                            <p class="fw-bold mb-2">Sep 5, 2025 • 3:30 PM</p>
                            <div class="small text-success fw-semibold">Dr. Ayesha Rahman</div>
                            <div class="small text-muted">VisionCare Eye Hospital</div>
                        </div>
                    </div>
                </div>
                
                <!-- Last visit -->
                <div class="col-12 col-md-4">
                    <div class="card shadow">
                        <div class="card-body py-4">
                            <h6 class="mb-2 fw-bold">Last Visit</h6>
                            <p class="fw-bold mb-2">Sep 5, 2025 • 3:30 PM</p>
                            <div class="small text-success fw-semibold">Dr. Ayesha Rahman</div>
                            <div class="small text-muted">Optimo Eye Clinic</div>
                        </div>
                    </div>
                </div>

                <!-- Notification -->
                <div class="col-12 col-md-4">
                    <div class="card shadow">
                        <div class="card-body py-4">
                            <h6 class="mb-2 fw-bold">Notifications</h6>
                            <p class="fw-bold mb-2 text-success">3 New</p>
                            <div class="small text-muted">Your follow-up is confirmed for Sep 10, 2025 at 3:00 PM.</div>
                            <div class="small text-muted">Lab report: OCT Retina is now available.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h3 class="fw-bold fs-4 my-3">Reports</h3>
                    <table class="table table-striped" id="reports-table">
                        <thead>
                            <tr class="highlight">
                                <th scope="col" class="text-center">SL</th>
                                <th scope="col" class="text-center">Report Date</th>
                                <th scope="col" class="text-center">Type</th>
                                <th scope="col" class="text-center">Findings</th>
                                <th scope="col" class="text-center">Status</th>
                                <th scope="col" class="text-center">Report</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th colspan="6" class="text-center text-muted">No reports found</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('scripts')
<script>
    console.log('script loaded');
    $(document).ready(function() {
        $.ajax({
            url: "{{ route('patient.reports') }}",
            type: "GET",
            success: function(html) {
                $("#reports-table tbody").html(html);
            },
            error(xhr, status, error) {
                let message = 'Something went wrong!';

                if(xhr.responseJSON && xhr.responseJSON.message) {
                    message = xhr.responseJSON.message;
                } else if(xhr.responseText) {
                    message = xhr.responseText;
                }

                Swal.fire({
                    icon: 'error',
                    title: 'Request Failed',
                    html:  `<strong>Status</strong> ${status}<br>
                            <strong>Error:</strong> ${error}<br>
                            <strong>Message:</strong> ${message}`,
                })
            }
        });
    });
</script>
@endpush