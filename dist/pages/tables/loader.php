<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Loader Example</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Loader CSS */
    .loader {
      position: fixed;
      left: 50%;
      top: 50%;
      z-index: 9999;
      width: 100px;
      height: 100px;
      margin: -50px 0 0 -50px;
      border: 16px solid #f3f3f3;
      border-radius: 50%;
      border-top: 16px solid #3498db;
      animation: spin 2s linear infinite;
    }

    @keyframes spin {
      0% { transform: rotate(0deg); }
      100% { transform: rotate(360deg); }
    }

    /* Overlay CSS */
    .overlay {
      display: none;
      position: fixed;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: rgba(0,0,0,0.5);
      z-index: 2;
    }
  </style>
</head>
<body>
  <!-- Overlay with Loader -->
  <div class="overlay" id="overlay">
    <div class="loader"></div>
  </div>

  <!-- Your existing HTML content -->

  <!-- Sidebar -->
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="../../index.html">
          <i class="mdi mdi-grid-large menu-icon"></i>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">User & Product Details</li>
      <li class="nav-item">
        <a class="nav-link" href="/StoreManagement/dist/pages/tables/category-table.html">
          <i class="menu-icon fa fa-cubes"></i>
          <span class="menu-title">Category</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/StoreManagement/dist/pages/tables/sub-category-table.php">
          <i class="menu-icon fa fa-sitemap"></i>
          <span class="menu-title">Sub Category</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/StoreManagement/dist/pages/tables/products-table.php">
          <i class="menu-icon fa fa-cube"></i>
          <span class="menu-title">Products</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/StoreManagement/dist/pages/tables/users-table.php">
          <i class="menu-icon fa fa-users"></i>
          <span class="menu-title">Users</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/StoreManagement/dist/pages/tables/stores-table.php">
          <i class="menu-icon fa fa-codepen"></i>
          <span class="menu-title">Store</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/StoreManagement/dist/pages/tables/StoreManagement-table.php">
          <i class="menu-icon fa fa-list-ul"></i>
          <span class="menu-title">Store Management</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/StoreManagement/dist/pages/tables/analytics.php">
          <i class="menu-icon fa fa-bar-chart-o"></i>
          <span class="menu-title">Analytics</span>
        </a>
      </li>
      <li class="nav-item" id="logout">
        <a class="nav-link" href=" /StoreManagement/home/index.html">
          <i class="menu-icon fa fa-sign-out"></i>
          <span class="menu-title" id="logout-title">Logout</span>
        </a>
      </li>
    </ul>
  </nav>

  <!-- Ensure jQuery is included before Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script>
    $(document).ready(function() {
      $('.nav-link').on('click', function(event) {
        event.preventDefault();
        var targetUrl = $(this).attr('href');
        $('#overlay').fadeIn();
        setTimeout(function() {
          window.location.href = targetUrl;
        }, 3000); // Adjust the time delay as needed
      });
    });
  </script>
</body>
</html>
