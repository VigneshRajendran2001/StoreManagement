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
   <!-- /*******************************************************plugin for multi select and dropdown data**************************/ -->

  <link rel="stylesheet" href="../../assets/vendors/select2/select2.min.css">
  <link rel="stylesheet" href="../../assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css">

   <!-- /*******************************************************plugin for multi select and dropdown data**************************/ -->


<!-- /**********************************************************************TELEPHONE INPUT************************************/ -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

<!-- /**********************************************************************TELEPHONE INPUT************************************/ -->
<!-- /**************************************************MODAL*******************************************************/ -->

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">


<!-- /**************************************************MODAL*******************************************************/ -->

  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
  <style>
    #addsubmit {
      margin-left: 42%;
      background-color: #f2a654;
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

    .btn-submit {
      transform: translateY(0);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-submit:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 20px #f2a654;
      border-color: #f2a654;
    }

    .btn-cancel {
      transform: translateY(0);
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-cancel:hover {
      transform: translateY(-3px);
      box-shadow: 0 0 20px red;
      border: 2px solid;
      border-color: #fff;
    }

    input[type=file]::file-selector-button {
      border: 2px solid #faf3f3;
      padding: .4em .5em;
      border-radius: .4em;
      background-color: #f2a654;
      /* transition: 1s; */
      transition: background-color 0.3s, border-color 0.3s, color 0.3s;
      color: #fff;
    }

    input[type=file]::file-selector-button:hover {
      background-color: #ff8400;
      border: 2px solid #ff8400;
      border-color: #ff8400;
    }

    .custom-file-upload {
      border: 1px solid rgb(230, 226, 226);
      width: 100%;
      border-radius: .2em;
    }

    /* #status {
      margin-left: 40%;
    } */
/***********************************telephone********************************/

.iti {
  width: 100%;
}

#telephone {
  width: 100%;
}

/***********************************telephone********************************/

/************************************email address**************************/

.email-field {
  display: flex;
  align-items: center;
  margin-bottom: 10px;
}

.email-input {
  flex: 1;
  margin-right: 10px;
}

.add-email-button {
  padding: 10px 13px;
  border-radius:3px;
}
.remove-email-button{
  padding: 10px 13px;
  border-radius:3px;
}


/************************************email address**************************/
.btn-modal{
  margin-left:80%;
  background-color:#f2a654;
  transform:translateY(0);
  transition:transform 0.3s ease , box-shadow: 0.3s ease;
  font-weight:900;
}
.btn-modal:hover{
  transform:translateY(-3px);
  box-shadow:0 0 20px #f2a654;
  border:2px solid #fff;
  background-color:#f2a654;
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
        <h3 class="welcome-sub-text" style="text-decoration:underline;"><b>CARD SCANNER</b> </h3>
    <button type="submit" class="btn btn-primary btn-modal"  data-bs-toggle="modal" data-bs-target="#exampleModal" id="Modal">MODAL</button>
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
            <h4 class="card-title">CARD SCANNER</h4>
            <form class="forms-sample" id="add-user" enctype="multipart/form-data">
              <div class="form-group row">
                <label for="user_img" class="col-sm-2 col-form-label"><b>Upload Image<span class="mandatory-field">*</span></b></label>
                <div class="col-sm-8">
                  <div id="thumbnail-preview"></div>
                  <input type="file" class="form-control-file custom-file-upload" name="category_img" id="user_img" placeholder="Category Image">
                </div>
              </div>

              <div class="form-group row">
                <label for="user_img" class="col-sm-2 col-form-label"><b>Mobile Number<span class="mandatory-field">*</span></b></label>
                <div class="col-sm-8">
                  <div id="thumbnail-preview"></div>
                  <input type="tel" placeholder="" id="telephone" class="form-control">
                </div>
              </div>



              <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label"><b>Email Address<span class="mandatory-field">*</span></b></label>
                <div class="col-sm-8" id="email-container">
                  <div class="email-field">
                    <input type="email" placeholder="Email Address" name="email[]" class="form-control email-input">
                    <button type="button" class="btn btn-success add-email-button"><b>+</b></button>
                  </div>
                </div>
              </div>



              <button type="submit" class="btn btn-primary me-2 btn-submit" id="addsubmit">Submit</button>
              <a href="/StoreManagement/dist/pages/tables/users-table.php">
                <button type="button" class="btn btn-danger btn-cancel">Cancel</button>
              </a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<!-- /****************************************************MODAL***********************************************************/ -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="crossclose-modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="modal-form">
          <div class="row form-group">
            <div class="col-4">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="name" required>
           </div>
           <div class="col-4 ms-auto">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" required>
          </div>
          </div>
          <!-- <div class="form-group">
            <label for="email" class="col-form-label">Email:</label>
            <input type="email" class="form-control" id="email" required>
          </div> -->
          <div class="form-group">
            <label for="designation" class="col-form-label">Designation:</label>
            <input type="text" class="form-control" id="designation" required>
          </div>
          <div class="form-group">
            <label for="role" class="col-form-label">Role:</label>
            <input type="text" class="form-control" id="role" required>
          </div>
          <div class="form-group">
            <label for="password" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="password" required>
          </div>
        </form>
      </div>
      <div class="mx-auto">
        <button type="button" class="btn btn-secondary" data-dismiss="modal" id="close-modal">Close</button>
        <button type="button" class="btn btn-primary" id="modal-submit">Submit</button>
      </div>
    </div>
  </div>
</div>

<!-- /****************************************************MODAL***********************************************************/ -->

      <!-- <div class="main-panel">
        <div class="content-wrapper" id="add-table">
          <div class="row">
            <div class="col-md-8 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">CARD SCANNER</h4>
                 
                  <form class="forms-sample" id="add-user">
                    

                    <div class="form-group row">
                      <label for="exampleInputMobile" class="col-sm-2 col-form-label"><b>Upload Image<span
                            class="mandatory-field">*</span></b></label>
                      <div class="col-sm-8">
                        <input type="file" class="form-control-file custom-file-upload" name="category_img"
                          id="user_img" placeholder="Category Image">
                      </div>
                    </div>


                    <button type="submit" class="btn btn-primary me-2 btn-submit" id="addsubmit">Submit</button>
                    <a href="/StoreManagement/dist/pages/tables/users-table.php" <button
                      class="btn btn-danger btn-cancel">Cancel</button></a>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div> -->
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

<!-- /**************************************************MODAL*******************************************************/ -->

<!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>



<!-- /**************************************************MODAL*******************************************************/ -->


<!-- /***************************************************************************MODAL*****************************************************/ -->

<script>
  document.getElementById('Modal').addEventListener('click', function() {
    $('#exampleModal').modal('show');
  });
  document.getElementById('close-modal').addEventListener('click', function() {
    $('#exampleModal').modal('hide');
  });
  document.getElementById('crossclose-modal').addEventListener('click', function() {
    $('#exampleModal').modal('hide');
  });

  document.getElementById('modal-submit').addEventListener('click', function() {
    // Perform form validation and submission logic here
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var designation = document.getElementById('designation').value;
    var role = document.getElementById('role').value;
    var password = document.getElementById('password').value;

    if (name && email && designation && role && password) {
      // You can submit the form data via AJAX or any other method here
      console.log('Form submitted:', { name, email, designation, role, password });
      $('#exampleModal').modal('hide');
    } else {
      alert('Please fill in all fields');
    }
  });
</script>
<!-- /***************************************************************************MODAL*****************************************************/ -->


<!-- /***************************************************************************************TELEPHONE NUMBER******************************************/ -->


<script>
  document.addEventListener("DOMContentLoaded", function() {
    const input = document.querySelector("#telephone");
    window.intlTelInput(input, {
      initialCountry: "auto",
      geoIpLookup: function(callback) {
        fetch('https://ipinfo.io/json', { headers: { 'Accept': 'application/json' }})
          .then(response => response.json())
          .then(data => callback(data.country))
          .catch(() => callback('us'));
      },
      utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"
    });
  });
</script>

<!-- /***************************************************************************************TELEPHONE NUMBER******************************************/ -->

<script>
$(document).ready(function() {

  // <!-- /********************************************************EMAIL ADDRESS******************************************************/ -->
  function addEmailField() {
      const emailFieldDiv = $(`
        <div class="email-field">
          <input type="email" placeholder="Email Address" name="email[]" class="form-control email-input" required>
          <button type="button" class="btn btn-danger remove-email-button"><b>-</b></button>
        </div>
      `);
      $('#email-container').append(emailFieldDiv);
    }

    $(document).on('click', '.add-email-button', function() {
      addEmailField();
    });

    $(document).on('click', '.remove-email-button', function() {
      $(this).closest('.email-field').remove();
    });

  // <!-- /********************************************************EMAIL ADDRESS******************************************************/ -->

  // Display thumbnail preview when an image is selected
  $('#user_img').on('change', function() {
    var file = this.files[0];
    if (file) {
      var reader = new FileReader();
      reader.onload = function(e) {
        $('#thumbnail-preview').html(`
          <div style="position: relative; display: inline-block;">
            <img src="${e.target.result}" alt="Thumbnail" style="max-width: 200px; max-height: 200px;">
            <button type="button" id="remove-thumbnail" style="position: absolute; top: 5px; right: 5px; background: rgba(255, 255, 255, 0.7); border: none; cursor: pointer;">&times;</button>
          </div>
        `);

        // Add click event for removing thumbnail
        $('#remove-thumbnail').on('click', function() {
          $('#thumbnail-preview').empty();
          $('#user_img').val(''); // Clear the file input
        });
      }
      reader.readAsDataURL(file);
    }
  });

  // Handle form submission using AJAX
  $('#add-user').on('submit', function(e) {
    e.preventDefault();

    var formData = new FormData(this);

    $.ajax({
      url: 'upload_image.php', // Server script to process the upload
      type: 'POST',
      data: formData,
      contentType: false,
      processData: false,
      success: function(response) {
        alert(response.message);
      },
      error: function(jqXHR, textStatus, errorThrown) {
        console.error('Error uploading image: ' + textStatus, errorThrown);
      }
    });
  });
});

  



// upload-script.js
// $(document).ready(function() {
//   $('#add-user').on('submit', function(event) {
//     event.preventDefault();
    
//     var fileInput = $('#user_img')[0].files[0];
//     if (fileInput) {
//       var reader = new FileReader();
//       reader.onload = function(event) {
//         var imageData = event.target.result.split(',')[1]; // Extract base64 data
//         // console.log(imageData);
//         // alert('hi')
//         // Redirect to add-user.html with base64 image data
//         window.location.href = 'CardScanner-add-user.php?imageData=' + encodeURIComponent(imageData);
//       };
//       reader.readAsDataURL(fileInput); // Read the file as Data URL
//     } else {
//       alert('Please select an image file.');
//     }
//   });
// });



  //   $(document).ready(function() {
 
  // $('#add-user').submit(function(event) {
  //   event.preventDefault(); // Prevent default form submission

  //   // Get the uploaded image file
  //   var file = $('#user_img')[0].files[0];
  //   if (file) {
  //     // Convert file to Base64 string
  //     var reader = new FileReader();
  //     reader.readAsDataURL(file);
  //     reader.onload = function() {
  //       var imageData = reader.result; // Base64 string of the image
  //       // Store imageData in localStorage
  //       localStorage.setItem('uploadedImage', imageData);
       

  //       // Redirect to #add-user form
  //       window.location = '/StoreManagement/dist/pages/tables/CardScanner-add-user.php';
  //     };
  //     reader.onerror = function(error) {
  //       console.error('Error reading file: ', error);
  //     };
  //   }
  // });
  //   });
</script>
</html>