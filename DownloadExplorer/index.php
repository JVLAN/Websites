<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" integrity="sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>JVLan Downloads</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js" integrity="sha512-X/YkDZyjTf4wyc2Vy16YGCPHwAY8rZJY+POgokZjQB2mhIRFJCckEGc6YyX9eNsPfn0PzThEuNs+uaomE5CO6A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href='https://fonts.googleapis.com/css?family=Dancing Script' rel='stylesheet'>
    <style>
        body {
            background-color: #2b2b2b;
        }
        .card {
            background-color: #17191a;
            color: #e8e6e3;
            border-color: #1c1c21;
        }
        .image {
            position: relative;
            text-align: center;
        }
        .centered {
            position: absolute;
            top: 85%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-family: 'Dancing Script';font-size: 29px;
            color: #e8e6e3;
        }
        .card-title {
            margin-top: 16px;
        }
        h5, a{
            display: inline-block;
            vertical-align: middle;
            margin: 10px 0;
        }
    </style>
  </head>
  <body class="p-3 m-0 border-0 bd-example m-0 border-0">
    <div class="row row-cols-1 row-cols-md-6 g-4">
    
    <?php

    $scan = array_diff(scandir("."), array('..', '.', 'index.php'));
    
    foreach($scan as $folder) {
        echo '  <div class="col">
        <div class="card">
        <div class="image">
            <img class="bd-placeholder-img card-img-top" height="500" src="' . "$folder" . '/logo.png" focusable="false"></img>
            <div class="centered"">' . "$folder" . '</div>
        </div>
          <div class="card-body">
            <h5 class="card-title">' . "$folder" . '</h5>
            <a href="' . "$folder" . '/download.zip" class="btn btn-dark" style="float: right;">Téléchargement (ZIP)</a>
          </div>
        </div>
      </div>
    ';
    }

    ?>

    </div>
    <!-- End Example Code -->
  </body>
</html>