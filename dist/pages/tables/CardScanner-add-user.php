<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Store Management </title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/vendors/typicons/typicons.css">
  <link rel="stylesheet" href="../../assets/vendors/simple-line-icons/css/simple-line-icons.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  <style>
    #addsubmit {
      margin-left: 42%;
      border: 2px solid;
      border-color: #fff;
    }

    #add-table {
      margin-left: 15%;
    }

    .mandatory-field {
      color: red;
      font-size: 20px;
    }
    .btn-submit{
      transform: translateY(0);
      transition: transform 0.3s ease,box-shadow 0.3s ease;
      background-color: #f2a654;
    }
    .btn-submit:hover{
      transform: translateY(-3px);
      box-shadow: 0 0 20px #f2a654;
      background-color: #f2a654;
      border-color: #f2a654;
    }
    .btn-cancel{
      transform: translateY(0);
      transition: transform 0.3s ease,box-shadow 0.3s ease;
    }
    .btn-cancel:hover{
  transform: translateY(-3px);
  box-shadow: 0 0 20px rgb(221, 97, 97);
  border: 2px solid;
  border-color: #fff;
    }
    #status{
      margin-left: 40%;
    }
  </style>
 
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <div class="me-3">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
            <span class="icon-menu"></span>
          </button>
        </div>
        <div>
          <a class="navbar-brand brand-logo" href="../../index.html">
            <img src="../../assets/images/store-management-logo-1.svg" alt="logo" />
          </a>
          <a class="navbar-brand brand-logo-mini" href="../../index.html">
            <img src="../../assets/images/logo-mini.svg" alt="logo" />
          </a>
        </div>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-top">
        <h3 class="welcome-sub-text" style="text-decoration:underline;"><b>ADD USER</b> </h3>
        <hr>

        <!-- <ul class="navbar-nav">
            <li class="nav-item fw-semibold d-none d-lg-block ms-0">
              <h1 class="welcome-text">Good Morning, <span class="text-black fw-bold">John Doe</span></h1>
              <h3 class="welcome-sub-text">Your performance summary this week </h3>
            </li>
          </ul> -->
        <ul class="navbar-nav ms-auto">
          <!-- <li class="nav-item dropdown d-none d-lg-block">
              <a class="nav-link dropdown-bordered dropdown-toggle dropdown-toggle-split" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false"> Select Category </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 fw-medium float-start">Select category</p>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Bootstrap Bundle </p>
                    <p class="fw-light small-text mb-0">This is a Bundle featuring 16 unique dashboards</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Angular Bundle</p>
                    <p class="fw-light small-text mb-0">Everything you’ll ever need for your Angular projects</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">VUE Bundle</p>
                    <p class="fw-light small-text mb-0">Bundle of 6 Premium Vue Admin Dashboard</p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">React Bundle</p>
                    <p class="fw-light small-text mb-0">Bundle of 8 Premium React Admin Dashboard</p>
                  </div>
                </a>
              </div>
            </li> -->


          <!-- <li class="nav-item d-none d-lg-block">
              <div id="datepicker-popup" class="input-group date datepicker navbar-date-picker">
                <span class="input-group-addon input-group-prepend border-right">
                  <span class="icon-calendar input-group-text calendar-icon"></span>
                </span>
                <input type="text" class="form-control">
              </div>
            </li>
            <li class="nav-item">
              <form class="search-form" action="#">
                <i class="icon-search"></i>
                <input type="search" class="form-control" placeholder="Search Here" title="Search here">
              </form>
            </li> -->


          <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="icon-bell"></i>
                <span class="count"></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                <a class="dropdown-item py-3 border-bottom">
                  <p class="mb-0 fw-medium float-start">You have 4 new notifications </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-alert m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">Application Error</h6>
                    <p class="fw-light small-text mb-0"> Just now </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-lock-outline m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">Settings</h6>
                    <p class="fw-light small-text mb-0"> Private message </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item py-3">
                  <div class="preview-thumbnail">
                    <i class="mdi mdi-airballoon m-auto text-primary"></i>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject fw-normal text-dark mb-1">New user registration</h6>
                    <p class="fw-light small-text mb-0"> 2 days ago </p>
                  </div>
                </a>
              </div>
            </li> -->

          <!-- <li class="nav-item dropdown">
              <a class="nav-link count-indicator" id="countDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="icon-mail icon-lg"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="countDropdown">
                <a class="dropdown-item py-3">
                  <p class="mb-0 fw-medium float-start">You have 7 unread mails </p>
                  <span class="badge badge-pill badge-primary float-end">View all</span>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face10.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Marian Garner </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face12.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">David Grey </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="../../assets/images/faces/face1.jpg" alt="image" class="img-sm profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow py-2">
                    <p class="preview-subject ellipsis fw-medium text-dark">Travis Jenkins </p>
                    <p class="fw-light small-text mb-0"> The meeting is cancelled </p>
                  </div>
                </a>
              </div>
            </li> -->

          <!-- <li class="nav-item dropdown d-none d-lg-block user-dropdown">
              <a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="img-xs rounded-circle" src="../../assets/images/faces/face8.jpg" alt="Profile image"> </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <div class="dropdown-header text-center">
                  <img class="img-md rounded-circle" src="../../assets/images/faces/face8.jpg" alt="Profile image">
                  <p class="mb-1 mt-3 fw-semibold">Allen Moreno</p>
                  <p class="fw-light text-muted mb-0">allenmoreno@gmail.com</p>
                </div>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-account-outline text-primary me-2"></i> My Profile <span class="badge badge-pill badge-danger">1</span></a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-message-text-outline text-primary me-2"></i> Messages</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-calendar-check-outline text-primary me-2"></i> Activity</a>
                <a class="dropdown-item"><i class="dropdown-item-icon mdi mdi-help-circle-outline text-primary me-2"></i> FAQ</a>
                <a class="dropdown-item" href="/StoreManagement/home/index.html"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
              </div>
            </li> -->
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-bs-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->

      
     <!-- /*************************************************************************SIDENAVBAR************************************************************* */ -->

   <?php include "sidenavbar.php";?>


   <!-- /*************************************************************************SIDENAVBAR************************************************************* */ -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper" id="add-table">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">ADD USER</h4>
                  <!-- <p class="card-description"> Horizontal form layout </p> -->
                  <form class="forms-sample" id="add-user">
                    <div class="form-group row">
                      <label for="exampleInputUsername2" class="col-sm-3 col-form-label"><b>Name<span
                            class="mandatory-field">*</span></b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="add-name" placeholder="Username" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputEmail2" class="col-sm-3 col-form-label"><b>Email<span
                            class="mandatory-field">*</span></b></label>
                      <div class="col-sm-9">
                        <input type="email" class="form-control" id="add-email" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-3 col-form-label"><b>Password<span
                            class="mandatory-field">*</span></b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="add-password" placeholder="Password" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputPassword2" class="col-sm-3 col-form-label"><b>Designation<span
                            class="mandatory-field">*</span></b></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" id="add-designation" placeholder="Designation"
                          required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label"><b>Role<span
                            class="mandatory-field">*</span></b></label>
                      <div class="col-sm-4">
                        <!-- <input type="text" class="form-control" id="add-role" placeholder="Role" required> -->
                        <select id="add-role" name="role" class="form-select add-role" required>
                          <option value="">Select a role</option>
                          <option value="1">Super Admin</option>
                          <option value="2">Admin</option>
                          <option value="3">User</option>
                        </select>
                      </div>

                      <label for="exampleInputConfirmPassword2" class="col-sm-2 ms-10px col-form-label"><b id="status">Status<span
                        class="mandatory-field">*</span></b></label>
                  <div class="col-sm-3">
                    <select id="add-status" name="status" class="form-control add-status" required>
                      <option value="">Select a status</option>
                      <option value="1">Active</option>
                      <option value="2">InActive</option>
                    </select>
                  </div>
                    </div>
                    <!-- <div class="form-group row">
                      <label for="exampleInputConfirmPassword2" class="col-sm-3 col-form-label"><b>Status<span
                            class="mandatory-field">*</span></b></label>
                      <div class="col-sm-9">
                        <select id="add-status" name="status" class="form-control add-status" required>
                          <option value="">Select a status</option>
                          <option value="1">Active</option>
                          <option value="2">InActive</option>
                        </select>
                      </div>
                    </div> -->
                    <button type="submit" class="btn btn-primary me-2 btn-submit" id="addsubmit">Submit</button>
                    <a href="/StoreManagement/dist/pages/tables/users-table.php" <button
                      class="btn btn-danger btn-cancel">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->

        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="../../assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="../../assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="../../assets/vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/template.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="../../assets/js/file-upload.js"></script>
  <script src="../../assets/js/typeahead.js"></script>
  <script src="../../assets/js/select2.js"></script>
  <!-- End custom js for this page-->
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>


<script>
 $(document).ready(function() {
  
  if ($('#add-user').length > 0) {
    var imageData = localStorage.getItem('uploadedImage');
  console.log(imageData);
 

    if (imageData) {
        var extractedData = extractDataFromImage(imageData);
  console.log(extractedData);

  alert('Hi')

       $('#add-name').val(extractedData.name);
    $('#add-email').val(extractedData.email);
    $('#add-password').val(extractedData.password);
    $('#add-designation').val(extractedData.designation);
    $('#add-role').val(extractedData.role);
    $('#add-status').val(extractedData.status);
     
    }
   
    localStorage.removeItem('uploadedImage');
  }
});

 

// Simulated function to extract data from base64 image
function extractDataFromImage(imageData) {
  // For demonstration, extract dummy data
  return {
    name: imageData,
    email: "johndoe@example.com",
    password: "Manager"
    // designation: "Manager"
    // role: "Manager"
    // status: "0"
    // Add other fields as needed
  };
}
 






// if (imageData) {
//     // Simulate image analysis to extract data (name, email, designation)
//     var extractedData = extractDataFromImage(imageData);

//     // Populate form fields with extracted data
//     $('#add-name').val(extractedData.name);
//     $('#add-email').val(extractedData.email);
//     $('#add-designation').val(extractedData.designation);
//   }

//   $('#add-user-form').on('submit', function(event) {
//     event.preventDefault();
    
//     // Gather form data and perform submission or further processing
//     var formData = {
//       name: $('#add-name').val(),
//       email: $('#add-email').val(),
//       designation: $('#add-designation').val()
//       // Add other fields as needed
//     };

//     console.log(formData);
//     // Perform AJAX submission or other actions
//     alert('Form submitted!');
//   });
// });




//  var imageData = localStorage.getItem('uploadedImage');
//  if (imageData) {
//   console.log(imageData);
//   alert('data')
//  //   $('#user-image').attr('src', imageData); // Assuming there's an <img> tag with id="user-image"
//  }
//  localStorage.removeItem('uploadedImage');


</script>



<!-- <script>
  $(document).ready(function () {

    $('#add-user').submit(function (event) {


      event.preventDefault();
      if ($('#add-user').length > 0) {
    // Retrieve imageData from localStorage
    var imageData = localStorage.getItem('uploadedImage');
    if (imageData) {
     console.log(imageData);
     alert('data')
    //   $('#user-image').attr('src', imageData); // Assuming there's an <img> tag with id="user-image"
    }

    // Optional: Clear imageData from localStorage after use
    localStorage.removeItem('uploadedImage');
  }

    //   var formData = {
    //     name: $('#add-name').val(),
    //     email: $('#add-email').val(),
    //     password: parseInt($('#add-password').val()),
    //     designation: $('#add-designation').val(),
    //     role:  parseInt($('#add-role').val()),
    //     status:  parseInt($('#add-status').val()),
    //   };
    //   console.log(formData)
    //   var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
    //   var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
    //   var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/users';
    // //   Swal.fire({
    // //     title: 'Are you sure want to update this user?',
    // //     text: "You won't be able to revert this!",
    // //     icon: 'warning',
    // //     showCancelButton: true,
    // //     confirmButtonColor: '#3085d6',
    // //     cancelButtonColor: '#d33',
    // //     confirmButtonText: 'Yes!',
    // //     cancelButtonText: 'No',
    // //   }).then((result) => {
    // //     if (result.isConfirmed) {
    //       $.ajax({
    //         type: 'POST',
    //         url: apiurl,
    //         data: JSON.stringify(formData),
    //         dataType: 'json',
    //         contentType: 'application/json',
    //         headers: {
    //           'apikey': apikey,
    //           'pkey': pkey,
    //         },
    //         success: function (data) {
    //           Swal.fire({
    //             position: "top-end",
    //             icon: "success",
    //             title: "User added successfully...!",
    //             showConfirmButton: false,
    //             timer: 1500

    //           });

    //           // console.log(data);
    //           // alert('Update successful!');
    //           setTimeout(function () {
    //             window.location = "/StoreManagement/dist/pages/tables/users-table.php";
    //           }, 2000);

    //           // window.location = "/StoreManagement/dist/pages/tables/users-table.php";
    //         },
    //         error: function (xhr, status, error) {

    //           Swal.fire(
    //             'Error!',
    //             'Failed to add user. Please try again.',
    //             'error'
    //           );
    //           console.error(xhr.responseText);
    //           // alert('Update failed. Please check the console for details.');
    //         }
    //       });
    // //     }

    // //   });
    });

  });
</script> -->

</html>