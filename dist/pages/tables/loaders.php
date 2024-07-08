
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
    border: 16px solid #f2a654;
    border-radius: 50%;
    border-top: 16px solid #f3f3f3;
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
    /* background-color: white; */
    background-color: rgba(0,0,0,0.5);
    z-index: 2;
  }
</style>

<!-- Overlay with Loader -->
<div class="overlay" id="overlay">
  <div class="loader"></div>
</div>

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
      }, 1000); // Adjust the time delay as needed
    });
  });
</script>
