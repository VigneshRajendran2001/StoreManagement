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
    .icon-button {
      cursor: pointer;
      padding: 10px;
      border: 2px solid transparent;
      border-radius: 5px;
      font-size: 20px;
      margin-right: 20px;
    }

    .icon-button:hover {
      background-color: #f5f5f5;
    }

    .icon-button:last-child {
      margin-right: 0;
    }

    #action {
      margin-left: 10px !important;

    }

    .btn-add-user {
      transform: translateY(0);
      /* Initial position */
      transition: transform 0.3s ease, box-shadow 0.3s ease;
      /* Transition effect for transform and box-shadow */
      box-shadow: 0 0 10px rgba(0, 123, 255, 0);
      /*Initial box-shadow (no glow)*/
      background-color: #f2a654;
    }

    .btn-add-user:hover {
      transform: translateY(-3px);
      /* Move button up on hover */
      box-shadow: 0 0 30px#e0aa6f;
      /* Glow effect on hover */
      border-color: #fff;
      border:2px solid;
      background-color: #f2a654;
    }
    #manage{
      font-size:initial;
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
        <h3 class="welcome-sub-text" style="text-decoration:underline;"><b>STORE MANAGEMENT LIST</b> </h3>
        <hr>


        <!-- <a href="/StoreManagement/dist/pages/tables/add-users.php"<button class="btn btn-primary" >Add User</button></a> -->


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

          <div class="ms-auto">
            <a href="/StoreManagement/dist/pages/tables/add-storemanagement.php" class="btn btn-primary btn-add-user"><i class="menu-icon fa fa-plus"></i>
            <b id="manage">  Manage</b></a>
          </div>
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
     <?php include "loaders.php";?>
   <?php include "sidenavbar.php";?>


   <!-- /*************************************************************************SIDENAVBAR************************************************************* */ -->
   
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <!-- <a href="#" class="btn btn-outline-primary " role="button" aria-pressed="true"><b>Add User</b></a> -->
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h3 class="card-title"><b>STORE MANAGEMENT LIST</b></h3>
                  <div class="table-responsive">
                    <table class="table table-hover" id="storemanagement-table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Store Name</th>
                          <th>Store Manager</th>
                          <th>Product</th>
                          <th>Category</th>
                          <th>Sub Category </th>
                          <!-- <th>Price</th> -->
                          <th>Quantity</th>
                          <th>Status</th>
                          <th>Date</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
        <!-- content-wrapper ends -->

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
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/template.js"></script>
  <script src="../../assets/js/settings.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.4/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/buttons/2.1.0/js/dataTables.buttons.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.print.min.js"></script>
<script>
  $(document).ready(function () {



    var apikey = 'xgGEHQTWl89KsFPHojMIw7Q3YbACaJwF';
    var pkey = '3fdee6c11c06f9a43fe21eefcdfb5bd7';
    var apiurl = 'https://dev-aniwatch.gateway.apiplatform.io/v1/storemanagement';

    $.ajax({
      type: 'GET',
      url: apiurl,
      dataType: 'json',
      contentType: 'application/json',
      headers: {
        'apikey': apikey,
        'pkey': pkey,
      },
      success: function (data) {
        console.log(data)
        // Initialize DataTable with fetched data
        var table = $('#storemanagement-table').DataTable({
          "data": data,
          "columns": [
            {
              "data": null, // Use null for an index column
              "render": function (data, type, row, meta) {
                return meta.row + 1; // meta.row provides the index
                console.log(data);
              }
            },


            { "data": "storeName" },
            { "data": "storeManager" },
            // { "data": "product_img",
            //   "render": function(data){
            //     if(data){
            //      var imagePath ='/StoreManagement/dist/assets/images/productImage/' + data ;

            //       return '<div class="row align-items-center"><div class="col-auto"><img src="'+ imagePath +'" alt="Product Image" style="width=100px; height=100px;display: flex; align-items: center;" class="img-fluid"></div>><div class="col">'+ data +'</div></div> ';
                  
            //     }else{
            //       return "N/A";
            //     }
            //   }
            //  },
             { "data": "product" },
             { "data": "category" },
             { "data": "subcategory" },
            // { "data": "price" },
            { "data": "quantity" },
            {
              "data": "status",
              "render": function (data) {
                      //  var badge = data == 1 ? 'badge badge-success' : 'badge badge-danger' ;
                      //  var statusText = data == 1 ? 'In Stock' : 'Out of Stock' ;
                      //  return '<span class="'+ badge +'">'+ statusText +'</span>'
                switch (data) {
                    case 1:
                      return  '<span class="badge badge-danger"><b>Pending</b></Span>';
                    
                    case 2:
                      return  '<span class="badge badge-info"><b>In Progress</b></Span>';
                      case 3:
                        return '<span class="badge badge-success"><b>Sent</b></Span>';
                      case 4:
                        return  '<span class="badge badge-primary"><b>Received</b></Span>';
                  default:
                    return "N/A";
                }
              }
            },
            {"data":"date"},
            {
              "data": null,
              "render": function (data, type, row) {
                var editUrl = '<a href="/StoreManagement/dist/pages/tables/edit-storemanagement.php?id=' + row.id + '"><i class="fa fa-pencil-square-o icon-button" title="Click to Edit"></i></a>';
                var deleteButton = '<a href="#" class="delete-button" data-id="' + row.id + '"><i class="fa fa-trash icon-button delete-button" title="Click to Delete"></i></a>';
                // var addButton = '<a href="/StoreManagement/dist/pages/tables/add-users.php"><i class="fa fa-plus icon-button" title="Click to Add User"></i></a>';
                return editUrl + ' | ' + deleteButton;
              }
            }
          ],
          "paging": true,
          "lengthChange": true,
          "pageLength": 10,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": false,
          "responsive": true, 
          "language": {
            "paginate": {
              "first": '<i class="mdi mdi-chevron-double-left"></i>',
              "previous": '<i class="mdi mdi-chevron-left"></i>',
              "next": '<i class="mdi mdi-chevron-right"></i>',
              "last": '<i class="mdi mdi-chevron-double-right"></i>'
            }
          }
        
         
        });

        // for (i = 0; i < data.length; i++) {
        //   var res = data[i];
        //   var index = data.length - i;
        //   var editbutton = '<a href="/StoreManagement/dist/pages/tables/edit-users.php?id='+ res.id +'"><i class="fa fa-pencil-square-o icon-button" title="Click to Edit"></i></a>';
        //   var deletebutton = '<a href="#" class="delete-button" data-id="'+ res.id +'"><i class="fa fa-trash icon-button delete-button"  title="Click to Delete"></i></a>';
        //   var adduser = '<a href="/StoreManagement/dist/pages/tables/add-users.php"><i class="fa fa-plus icon-button" title="Click to Add User"></i></a>';

        //   var buttons = editbutton + deletebutton + adduser;
        // var tableData = '<tr><td><b>' + index + '</b></td><td>' + res.name + '</td><td>' + res.email + '</td><td>' + res.password + '</td><td>' + res.designation + '</td><td>' + res.role + '</td><td>'+ buttons +'</td></tr>';
        // $('#users-table tbody').prepend(tableData);
        // }
      },
      error: function (xhr, status, error) {
        console.error(xhr.responseText);
        // alert('Signup failed. Please check the console for details.');
      }
    });

    $(document).on('click', '.delete-button', function (e) {
      e.preventDefault();
      var userId = $(this).data('id');

      Swal.fire({
        title: 'Are you sure want to delete this Product?',
        // text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes!',
        cancelButtonText: 'No',

      }).then((result) => {
        if (result.isConfirmed) {

          $.ajax({
            type: 'DELETE',
            url: apiurl + '/' + userId,
            headers: {
              'apikey': apikey,
              'pkey': pkey,
            },
            success: function (data) {

              Swal.fire(
                'Deleted!',
                'Deleted Successfully...!',
                'success'
              ).then((result) => {

                location.reload();
              });
            },
            error: function (xhr, status, error) {
              console.error(xhr.responseText);

              Swal.fire(
                'Error!',
                'Failed to Product user. Please try again.',
                'error'
              );
            }
          });
        }
      });
    });

  });
</script>

</html>