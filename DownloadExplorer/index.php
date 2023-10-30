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
      background-color: #353535;
      color: white;
      border-radius: 15px;
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
      font-family: 'Dancing Script';
      font-size: 29px;
      color: #e8e6e3;
    }

    .card-title {
      margin-top: 16px;
    }

    h5,
    a {
      display: inline-block;
      vertical-align: middle;
      margin: 10px 0;
    }

    .bd-placeholder-img {
      border-radius: 15px;
    }
  </style>


  <nav class="navbar col-sm-9 navbar-expand-lg bg-light mx-auto" style="background-color: #353535 !important; border-radius: 25px; margin-top:20px; margin-bottom : 20px; margin-right: 50px; margin-left: 50px;">
    <div class="container-fluid" style="margin-left: 10px;">
      <a style="color: white;" class="navbar-brand" href="#">JVLAN Download Explorer</a>
      <ul class="navbar-nav float-right" style="padding-right: 30px;">
        <li class="nav-item">
          <a style="color: white;" class="nav-link active btn btn-secondary" aria-current="page" href="https://intranet.jvlan.ch">Retour Intranet</a>
        </li>
      </ul>
    </div>
  </nav>

</head>


<body>
  <div class="col-sm-9 mx-auto" style="color: white; padding-left: 20px;">Un guide d'installation très simple est trouvable dans chaque fichier .zip nommé "Guide-NomDuJeu.txt"</div><br><br>
  <div class="p-3 m-0 border-0 bd-example m-0 border-0 col-sm-9 mx-auto">
    <div class="row row-cols-1 row-cols-md-4 g-4 d-flex align-items-stretch">

      <?php

      $scan = array_diff(scandir("."), array('..', '.', 'index.php'));

      foreach ($scan as $folder) {
        echo '  <div class="col-lg-3 mb-3 d-flex align-items-stretch">
        <div class="card card-body d-flex flex-column">
        <div class="image">
            <img class="bd-placeholder-img card-img-top" height="500" src="' . "$folder" . '/logo.png" focusable="false"></img>
        </div>
          <div class="card-body">
            <h5 class="card-title">' . "$folder" . '</h5>
            <a href="' . "$folder" . '/' . "$folder" . '-JVLAN.zip" class="btn btn-dark" style="float: right;">Téléchargement (ZIP)</a>
          </div>
        </div>
      </div>
    ';
      }

      ?>

    </div>
  </div>
</body>

</html>
