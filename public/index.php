<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/isiton.css">

    <title>Is It On?</title>
  </head>
  <body>

    <div class="container mt-4">
      <div class="row">
        <div class="col">
          <div class="card border-primary mb-3">
            <div class="card-header bg-primary text-center">
              <h1>Is It On?</h1>
            </div>
            <div class="card-body">
              <p class="text-muted text-center">
                Check your access to social media platforms and other services from your device
              </p>

              <div id="platforms">
                <div class="platform mb-2 d-none" id="platform-prototype">
                  <span class="platform-title">Platform Name</span>
                  <span class="platform-status status-checking badge badge-warning ml-2">checking...</span>
                  <span class="platform-status status-ok badge badge-success ml-2 d-none">it is on!</span>
                  <span class="platform-status status-error badge badge-danger ml-2 d-none">cannot be reached</span>
                </div>
              </div><!--/platforms-->

              <button type="button" id="refresh" class="btn btn-primary w-100 text-center mt-3">Refresh</button>
            </div>
          </div><!--/card-->
        </div><!--/col-->
      </div><!--/row-->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>-->
    <!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>-->
    <!--<script src="/assets/jquery.min.js"></script>-->
    <script src="/assets/isiton.js"></script>
  </body>
</html>
