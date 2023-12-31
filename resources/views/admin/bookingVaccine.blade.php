<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
    <meta name="author" content="AdminKit">
    <meta name="keywords"
        content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="../img/icons/icon-48x48.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/" />

    <title>Booking Vaccine</title>

        <!-- App CSS -->  
        <link id="theme-style" rel="stylesheet" href="../assets/css/portal.css">
    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link href="../css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;1,100;1,300;1,400&display=swap"
        rel="stylesheet">
</head>
<style>
* {
    font-family: 'Lato', sans-serif;
}




.flatpickr-day.selected {
  background-color: #3A55A4!important;
  color:"white";
  border-color: #3A55A4;
}

/* Change the border and fill color of the today's date */


/* Change the border and fill color of the hovered date */
.flatpickr-day:hover {
  background-color: white;
  border-color: blue;
}
</style>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar" >
            <div  style="background-color:#3389fc;" class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                  <span class=" align-middle">  
             
                  <img src="../Profile.jpg" class="rounded-circle" height="80px" width="60px"></span>
                  
                </span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">
                        Pages
                    </li>

                    <li class="sidebar-item " >
                        <a class="sidebar-link" href="parentOverview" style="background-color:#3389fc;">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Home</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parentProfile" style="background-color:#3389fc;">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Profile</span>
                        </a>
                    </li>



                    <li class="sidebar-item"> 
                        <a class="sidebar-link" href="parentSchedule" style="background-color:#3389fc;">
                            	<i class="align-middle me-2" data-feather="calendar"></i></i> <span class="align-middle">Schedule</span>
                        </a>
                    </li>

                    <li class="sidebar-header">
                        Tools & Components
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parentAppointment" style="background-color:#3389fc;">
                            <i class="align-middle" data-feather="square"></i> <span class="align-middle">Appointment</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{url('/parentHospitals')}}" style="background-color:#3389fc;">
                            <i class="align-middle" data-feather="check-square"></i> <span
                                class="align-middle">Hospitals</span>
                        </a>
                    </li>

         

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parentVaccine" style="background-color:#3389fc;">
                            <i class="align-middle" data-feather="database"></i> <span
                                class="align-middle">Vaccines</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="parentMedicalreport"style="background-color:#3389fc;">
                            <i class="align-middle" data-feather="user"></i> <span class="align-middle">Medical Report</span>
                        </a>
                    </li>
                   


             
                </ul>


            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>

                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">

   
    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                        <button class="btn btn-primary"  type="button">
                        <div  data-feather="search">
</div>
                                </button>
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                
                            </div>
                        </div>
                    </form>

<li class="nav-item dropdown">
    <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
        <div class="position-relative">
            <i class="align-middle" data-feather="bell"> f</i>
            <span class="indicator">4</span>
        </div>
    </a>
    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
        <div class="dropdown-menu-header">
            4 New Notifications
        </div>
        <div class="list-group">
            <a href="#" class="list-group-item">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <i class="text-danger" data-feather="alert-circle"></i>
                    </div>
                    <div class="col-10">
                        <div class="text-dark">cancelled appointment</div>
                        <div class="text-muted small mt-1">Sarah Cancelled appointment 11-12-1 </div>
                        <div class="text-muted small mt-1">30m ago</div>
                    </div>
                </div>
            </a>

            <a href="#" class="list-group-item">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <i class="text-primary" data-feather="home"></i>
                    </div>
                    <div class="col-10">
                        <div class="text-dark">Login from sarah</div>
                        <div class="text-muted small mt-1">5h ago</div>
                    </div>
                </div>
            </a>
            <a href="#" class="list-group-item">
                <div class="row g-0 align-items-center">
                    <div class="col-2">
                        <i class="text-success" data-feather="user-plus"></i>
                    </div>
                    <div class="col-10">
                        <div class="text-dark">New Request</div>
                        <div class="text-muted small mt-1">Sarah sent an appointment request.
                        </div>
                        <div class="text-muted small mt-1">14h ago</div>
                    </div>
                </div>
            </a>
        </div>
        <div class="dropdown-menu-footer">
            <a href="notification" class="text-muted">Show all notifications</a>
        </div>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
        <i class="align-middle" data-feather="settings"></i>
    </a>

    <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
        <img src="../img/avatars/avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" />
        <span class="text-dark">Admin</span>
    </a>
    <div class="dropdown-menu dropdown-menu-end">
        <a class="dropdown-item" href="profile"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="index.html"><i class="align-middle me-1" data-feather="settings"></i>
            Settings</a>

        <div class="dropdown-divider"></div>
        <a class="dropdown-item" href="#">Log out</a>
    </div>
</li>
</ul>
</div>
</nav>

<main class="content">
    <div class="container-fluid p-0">



        <div class="row">
            <div class="col-8 col-lg-12 d-flex">
                <div class="card flex-fill">
                    <div class="card-header">

                        <table>
                            <tr>
                                <h4 style="color: #3389fc;" class=" mb-0">Book Vaccine</h4>

                            </tr>
                            <table>
                    </div>

                </div>

                   <div class="col-md-6 col-lg-12 d-flex align-items-center">
                                <div class="card-body p-4 p-lg-5 text-black">
                                    <div class="text-center mt-4">
                                        <h1 style="color:#203C71;  font-size:30px;" class="h2">Book Appointment, Get Covid Free
                                        </h1>
                                        <p class="lead">You will be notified if Your request get accepted</p>
                                    </div>
                                    <div class="text-center">
                                        <img src="../anti-covid_logo.png" alt="logo" class="img-fluid" width="132"
                                            height="142" />
                                    </div>
                                    <br>
                                    <form method="POST" action="/bookingVaccinePOST" enctype="multipart/form-data">
                                        @csrf

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Patient Name</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="fname" placeholder="Enter Patient Name" />
                                                    @error('fname')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Date Of Birth</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="dob" placeholder="Enter Date of Birth " />
                                                    @error('dob')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Age</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="age" placeholder="Enter Age" />
                                                    @error('age')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                           
                                                <div class="mb-3">
                                                    <label class="form-label">Timing</label>
                                                    <select class="form-control form-control-lg" name="Timing">
                                                        <option value="">Select Appointment Timing</option>
                                                        <option value="12:00 am to 9:00 am">12:00 am to 9:00 am</option>
                                                        <option value="9:00 am to 6:00 pm">9:00 am to 6:00 pm</option>
                                                        <option value="6:00 pm to 3:00 am">6:00 pm to 3:00 am</option>
                                                    </select>
                                                    @error('Timing')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Vaccine Type</label>
                                                    <select class="form-control form-control-lg" name="vaccineType">
                                                        <option value="">Select Hospital Timing</option>
                                                        <option value="polio">Pfizer-BioNTech</option>
                                                        <option value="hepatis">Moderna</option>
                                                        <option value="hepatis">AstraZeneca</option>
                                                        <option value="hepatis">Sinopharm</option>
                                                        <option value="hepatis">Sinovac</option>
                                                    
                                                    </select>
                                                    @error('vaccineType')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                            </div>

                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="form-label">Last name</label>
                                                    <input class="form-control form-control-lg" type="text" 
                                                        name="lname" placeholder="Enter last name" />
                                                    @error('lname')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">If any Medical Issue</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="medicalIssue" placeholder="Medical Issue" />
                                                    @error('medicalIssue')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Weight</label>
                                                    <input class="form-control form-control-lg" type="text"
                                                        name="weight" placeholder="Enter Weight" />
                                                    @error('weight')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>
                                            
                                            

                                                <div class="mb-3">
                                                    <label class="form-label">Date</label>
                                                    <select class="form-control form-control-lg" name="date">
                                                        <option value="">Select Appointment Date</option>
                                                        <option value="01 January">01 January</option>
                                                        <option value="02 January">02 January</option>
                                                        <option value="03 January">03 January</option>
                                                        <option value="04 January">04 January</option>
                                                        <option value="05 January">05 January</option>
                                                        <option value="06 January">06 January</option>
                                                  
                                                    </select>
                                                    @error('date')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label">Patient Images</label>
                                                    <input class="form-control form-control-lg" type="file" 
                                                        name="childImage" placeholder="Enter hospital Images" />
                                                    @error('childImage')
                                                    <div class="text-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>

                                                <input class="form-control form-control-lg" type="hidden" 
                                                      value=" @if(session('email'))
                                               {{session('id')}}
                                           @endif"  name="parentId"  />

                                                        <input class="form-control form-control-lg" type="hidden" 
                                                        value="{{$h->id}}"   name="hospitalId" />

                                            </div>
                                        </div>


                                        @if(session('message'))
                                        <div class="alert alert-success">
                                            {{session('message')}}
                                        </div>
                                        @endif

                                        <div class="text-center mt-3">
                                            <button type="submit" class="btn btn-lg btn-primary">Book</button>
                                        </div>

                                    </form>
    <script src="../js/app.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
    var gradient = ctx.createLinearGradient(0, 0, 0, 225);
    gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
    gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
    // Line chart
    new Chart(document.getElementById("chartjs-dashboard-line"), {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                "Dec"
            ],
            datasets: [{
                label: "Sales ($)",
                fill: true,
             
                backgroundColor: gradient,
                borderColor:"#3389fc",
                data: [
                    2115,
                    1562,
                    1584,
                    1892,
                    1587,
                    1923,
                    2566,
                    2448,
                    2805,
                    3438,
                    2917,
                    3327
                ]
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            tooltips: {
                intersect: false
            },
            hover: {
                intersect: true
            },
            plugins: {
                filler: {
                    propagate: false
                }
            },
            scales: {
                xAxes: [{
                    reverse: true,
                    gridLines: {
                        color: "rgba(0,0,0,0.0)"
                    }
                }],
                yAxes: [{
                    ticks: {
                        stepSize: 1000
                    },
                    display: true,
                    borderDash: [3, 3],
                    gridLines: {
                        color: "rgba(0,0,0,0.0)"
                    }
                }]
            }
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Pie chart
    new Chart(document.getElementById("chartjs-dashboard-pie"), {
        type: "pie",
        data: {
            labels: ["Chrome", "Firefox", "IE"],
            datasets: [{
                data: [4306, 3801, 1689],
                backgroundColor: [
                    window.theme.primary,
                    window.theme.warning,
                    window.theme.danger
                ],
                borderWidth: 5
            }]
        },
        options: {
            responsive: !window.MSInputMethodContext,
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            cutoutPercentage: 75
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    // Bar chart
    new Chart(document.getElementById("chartjs-dashboard-bar"), {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov",
                "Dec"
            ],
            datasets: [{
                label: "This year",
                color:"#3A55A4",
                backgroundColor:"#3A55A4",
                borderColor: "#3A55A4",
                hoverBackgroundColor: "#3A55A4",
                hoverBorderColor:"#3A55A4",
                data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
                barPercentage: .75,
                categoryPercentage: .5
            }]
        },
        options: {
            maintainAspectRatio: false,
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: false
                    },
                    stacked: false,
                    ticks: {
                        stepSize: 20
                    }
                }],
                xAxes: [{
                    stacked: false,
                    gridLines: {
                        color: "#3389fc"
                    }
                }]
            }
        }
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var markers = [{
            coords: [31.230391, 121.473701],
            name: "Shanghai"
        },
        {
            coords: [28.704060, 77.102493],
            name: "Delhi"
        },
        {
            coords: [6.524379, 3.379206],
            name: "Lagos"
        },
        {
            coords: [35.689487, 139.691711],
            name: "Tokyo"
        },
        {
            coords: [23.129110, 113.264381],
            name: "Guangzhou"
        },
        {
            coords: [40.7127837, -74.0059413],
            name: "New York"
        },
        {
            coords: [34.052235, -118.243683],
            name: "Los Angeles"
        },
        {
            coords: [41.878113, -87.629799],
            name: "Chicago"
        },
        {
            coords: [51.507351, -0.127758],
            name: "London"
        },
        {
            coords: [40.416775, -3.703790],
            name: "Madrid "
        }
    ];
    var map = new jsVectorMap({
        map: "world",
        selector: "#world_map",
        zoomButtons: true,
        markers: markers,
        markerStyle: {
            initial: {
                r: 9,
                strokeWidth: 7,
                stokeOpacity: .4,
                fill: window.theme.primary
            },
            hover: {
                fill: window.theme.primary,
                stroke: window.theme.primary
            }
        },
        zoomOnScroll: false
    });
    window.addEventListener("resize", () => {
        map.updateSize();
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
    var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
    document.getElementById("datetimepicker-dashboard").flatpickr({
        inline: true,
        prevArrow: "<span title=\"Previous month\">&laquo;</span>",
        nextArrow: "<span title=\"Next month\">&raquo;</span>",
        defaultDate: defaultDate
    });
});
</script>


</body>

</html>


