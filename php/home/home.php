<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="stylesheet" href="../../css/colormodes.css" />
  <link rel="stylesheet" href="../../css/navbar.css" />
  <link rel="stylesheet" href="../../css/carousel.css" />
  <link rel="stylesheet" href="../../css/home.css" />
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark" aria-label="Main navigation">
    <div class="container-fluid">
      <a class="navbar-brand" href="../home/home.php">Uniten Esports</a>
      <button class="navbar-toggler p-0 border-0" type="button" id="navbarSideCollapse" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="navbar-collapse offcanvas-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="../home/home.php">Home</a>
          </li>

          <?php
          session_start();
          if (isset($_SESSION["role"])) :
            if ($_SESSION["role"] == "participant") :
          ?>

              <!-- participant -->
              <li class="nav-item">
                <a class="nav-link" href="../registration/registration.php">Join Event</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../profile/profile.php">Profile</a>
              </li>
        </ul>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-fill justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="../signout/signout.php">Sign Out</a>
          </li>
        </ul>

      <?php else : ?>

        <!-- admin -->
        <li class="nav-item">
          <a class="nav-link" href="../event/event.php">Manage Event</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../participant/participant.php">Manage Participant</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../profile/profile.php">Profile</a>
        </li>
        </ul>

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-fill justify-content-end">
          <li class="nav-item">
            <a class="nav-link" href="../signout/signout.php">Sign Out</a>
          </li>
        </ul>

      <?php
            endif;
          else : ?>

      <!-- visitor -->
      <li class="nav-item">
        <a class="nav-link" href="../registration/registration.php">Join Event</a>
      </li>
      </ul>

      <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex flex-fill justify-content-end">
        <li class="nav-item">
          <a class="nav-link" href="../signin/signin.php">Sign In</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../signup/signup.php">Sign Up</a>
        </li>
      </ul>

    <?php endif; ?>
      </div>
    </div>
  </nav>

  <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
    <symbol id="check2" viewBox="0 0 16 16">
      <path d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
    </symbol>
    <symbol id="circle-half" viewBox="0 0 16 16">
      <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
    </symbol>
    <symbol id="moon-stars-fill" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
      <path d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
    </symbol>
    <symbol id="sun-fill" viewBox="0 0 16 16">
      <path d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
    </symbol>
  </svg>

  <div class="dropdown position-fixed bottom-0 end-0 mb-3 me-3 bd-mode-toggle">
    <button class="btn btn-bd-primary py-2 dropdown-toggle d-flex align-items-center" id="bd-theme" type="button" aria-expanded="false" data-bs-toggle="dropdown" aria-label="Toggle theme (auto)">
      <svg class="bi my-1 theme-icon-active" width="1em" height="1em">
        <use href="#circle-half"></use>
      </svg>
      <span class="visually-hidden" id="bd-theme-text">Toggle theme</span>
    </button>
    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="bd-theme-text">
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="light" aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#sun-fill"></use>
          </svg>
          Light
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center" data-bs-theme-value="dark" aria-pressed="false">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#moon-stars-fill"></use>
          </svg>
          Dark
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
      <li>
        <button type="button" class="dropdown-item d-flex align-items-center active" data-bs-theme-value="auto" aria-pressed="true">
          <svg class="bi me-2 opacity-50 theme-icon" width="1em" height="1em">
            <use href="#circle-half"></use>
          </svg>
          Auto
          <svg class="bi ms-auto d-none" width="1em" height="1em">
            <use href="#check2"></use>
          </svg>
        </button>
      </li>
    </ul>
  </div>

  <main>
    <div id="myCarousel" class="carousel slide mb-6 pt-5" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="object-fit-cover w-100 h-100" src="../../assets/images/carouselvalorant.jpg" />
          <div class="container">
            <div class="text-white carousel-caption text-start">
              <h1>Valorant</h1>
              <p class="opacity-75">9 March 2024, 11.00AM</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="object-fit-cover w-100 h-100" src="../../assets/images/carouselcounterstrike.jpg" />
          <div class="container">
            <div class="text-white carousel-caption">
              <h1>Counter-Strike 2</h1>
              <p class="opacity-75">9 March 2024, 1.00PM</p>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="object-fit-cover w-100 h-100" src="../../assets/images/carouseleafc.jpg" />
          <div class="container">
            <div class="text-white carousel-caption text-end">
              <h1>EA Sports FC 24</h1>
              <p class="opacity-75">9 March 2024, 3.00PM</p>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    <!-- Marketing messaging and featurettes
  ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="140" width="140" viewBox="0 0 50 50">
            <path d="M4.781 6.375C4.515 6.044 4.067 5.916 3.669 6.057 3.268 6.197 3 6.575 3 7v18c0 .232.081.457.228.636l14 17C17.418 42.866 17.701 43 18 43h14c.384 0 .735-.221.901-.566.167-.347.12-.758-.121-1.059L4.781 6.375zM46.336 7.059c-.396-.146-.842-.02-1.11.309l-18 22c-.245.299-.295.712-.13 1.062C27.262 30.777 27.614 31 28 31h14c.304 0 .591-.138.781-.375l4-5C46.923 25.447 47 25.228 47 25V8C47 7.577 46.734 7.2 46.336 7.059z"></path>
          </svg>
          <h2 class="fw-normal">Valorant</h2>
          <p>
            5v5. Best of 3 Maps.
            <br />
            9 March 2024, 11.00AM
            <br /><br />
            Join the battle, showcase your skills, and compete with the best
            in our electrifying Valorant tournament. Are you ready to outplay
            and outgun your opponents?
          </p>
          <p>
            <a class="btn btn-secondary" href="../registration/registration.php">Join event &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" height="140" width="140" viewBox="0 0 50 50">
            <path d="M 27.003906 5.0078125 C 26.843875 5.016875 26.684797 5.0458594 26.529297 5.0996094 C 24.651297 5.4376094 23.664281 7.8385156 24.488281 9.4785156 C 24.388281 9.5705156 24.289453 9.6648594 24.189453 9.7558594 C 23.827453 9.2588594 23.182922 9.3965313 22.669922 9.5195312 C 21.584922 9.8855312 20.887438 10.886781 20.523438 11.925781 C 20.071437 13.146781 20.110578 14.474094 20.267578 15.746094 C 19.763578 15.986094 19.194734 15.833672 18.677734 16.013672 C 18.640734 17.030672 18.573484 18.048734 18.396484 19.052734 C 18.355484 19.349734 18.294297 19.658219 18.404297 19.949219 C 18.861297 20.055219 19.31525 20.173375 19.78125 20.234375 C 19.49525 20.288375 19.222797 20.393297 18.966797 20.529297 C 18.966797 20.529297 18.817578 20.642453 18.767578 20.689453 C 18.613578 22.014453 19.071203 23.297094 19.033203 24.621094 C 18.420203 24.491094 18.443328 25.207422 18.361328 25.607422 C 18.445328 25.684422 18.528281 25.763797 18.613281 25.841797 C 18.533281 25.980797 18.467063 26.123438 18.414062 26.273438 C 18.522062 26.653438 18.413953 27.102766 18.751953 27.384766 C 18.572953 28.508766 18.365047 29.630672 18.248047 30.763672 C 18.200047 31.137672 18.438734 31.508047 18.302734 31.873047 C 18.175734 32.286047 17.859625 32.611016 17.765625 33.041016 C 17.273625 33.528016 17.002594 34.17825 16.683594 34.78125 C 16.412594 35.26325 16.464516 35.828516 16.353516 36.353516 C 16.059516 36.865516 15.635531 37.363328 15.644531 37.986328 C 15.639531 38.320328 15.574469 38.701172 15.855469 38.951172 C 15.631469 40.146172 15.263328 41.308234 14.986328 42.490234 C 14.942328 42.939234 14.913047 43.429703 15.123047 43.845703 C 16.018047 44.100703 16.953234 43.97725 17.865234 43.90625 C 17.926234 43.50625 17.937281 43.099328 17.738281 42.736328 C 17.414281 41.581328 17.730687 40.327734 18.304688 39.302734 C 18.808688 39.210734 18.981562 38.721109 19.101562 38.287109 C 19.364563 37.324109 19.989406 36.502531 20.191406 35.519531 C 20.236406 35.210531 20.043828 34.89475 20.173828 34.59375 C 20.315828 34.26675 20.40075 33.870109 20.71875 33.662109 C 21.01175 33.472109 21.158203 33.149891 21.283203 32.837891 C 21.379203 32.548891 21.741719 32.497141 21.886719 32.244141 C 22.156719 31.774141 22.021672 31.191984 22.263672 30.708984 C 22.580672 29.964984 22.740703 29.110297 23.345703 28.529297 C 23.631703 28.282297 23.614469 27.866703 23.855469 27.595703 C 24.024469 27.925703 24.163734 28.287594 24.427734 28.558594 C 24.656734 28.657594 24.915156 28.632438 25.160156 28.648438 C 25.785156 29.562438 26.401531 30.481391 27.019531 31.400391 C 27.280531 31.828391 27.870594 31.914469 28.308594 31.730469 C 28.439594 31.948469 28.642172 32.139531 28.701172 32.394531 C 28.663172 32.786531 28.611844 33.177266 28.589844 33.572266 C 28.347844 33.799266 28.170375 34.113078 28.234375 34.455078 C 28.315375 35.158078 28.379594 35.865266 28.433594 36.572266 C 28.516594 37.056266 28.76675 37.505719 28.71875 38.011719 C 28.78575 38.067719 28.919328 38.180328 28.986328 38.236328 C 28.941328 39.011328 29.154969 39.788641 29.042969 40.556641 C 28.693969 41.234641 28.677328 42.015188 28.486328 42.742188 C 28.936328 43.266188 29.649375 42.975234 30.234375 42.990234 C 30.838375 43.060234 31.393625 43.394328 32.015625 43.361328 C 32.823625 43.349328 33.6385 43.422391 34.4375 43.275391 C 34.4905 42.987391 34.512391 42.694969 34.400391 42.417969 C 34.034391 42.181969 33.636703 42.000953 33.220703 41.876953 C 32.778703 41.765953 32.534188 41.351016 32.242188 41.041016 C 31.975187 40.693016 31.582203 40.393734 31.533203 39.927734 C 31.464203 39.292734 31.494672 38.646766 31.513672 38.009766 C 31.613672 37.737766 31.826547 37.504312 31.810547 37.195312 C 31.952547 36.593312 31.601469 36.009156 31.730469 35.410156 C 31.939469 34.084156 32.1045 32.745391 32.0625 31.400391 C 31.9915 31.299391 31.921516 31.199609 31.853516 31.099609 C 31.831516 30.878609 31.808156 30.661359 31.785156 30.443359 C 31.610156 30.366359 31.411047 30.289125 31.373047 30.078125 C 30.983047 28.989125 30.536156 27.922859 30.035156 26.880859 C 29.548156 25.960859 28.91575 25.125469 28.21875 24.355469 C 28.09475 23.993469 28.055797 23.607328 27.966797 23.236328 C 28.035797 23.097328 28.104781 22.958313 28.175781 22.820312 C 28.487781 22.864313 28.898203 23.168047 29.158203 22.873047 C 29.455203 22.419047 29.694063 21.909516 29.664062 21.353516 C 29.660062 20.405516 29.931875 19.466484 29.796875 18.521484 C 29.721875 18.087484 29.372219 17.777266 28.949219 17.697266 C 29.034219 17.390266 29.115969 17.080578 29.167969 16.767578 C 30.280969 17.339578 31.409453 18.125281 32.689453 18.238281 C 33.397453 18.342281 33.744531 17.678047 34.269531 17.373047 C 34.953531 16.886047 34.772359 15.934328 35.068359 15.236328 C 35.274359 15.167328 35.484359 15.106875 35.693359 15.046875 C 35.585359 14.367875 35.309469 13.713672 35.355469 13.013672 C 35.728469 12.734672 36.165359 12.431563 36.318359 11.976562 C 36.463359 11.906562 36.608906 11.833813 36.753906 11.757812 C 37.810906 11.741813 38.867781 11.764 39.925781 11.75 C 40.194781 11.764 40.096156 11.406094 40.160156 11.246094 C 40.428156 11.418094 40.7595 11.440469 41.0625 11.355469 C 41.5725 11.188469 42.116578 11.280859 42.642578 11.255859 C 42.984578 11.265859 43.364438 11.187641 43.648438 11.431641 C 44.087438 11.355641 44.534469 11.364094 44.980469 11.371094 C 44.986469 11.192094 44.991047 11.014938 44.998047 10.835938 C 44.651047 10.836937 44.305937 10.839656 43.960938 10.847656 C 43.855938 10.805656 43.749531 10.763656 43.644531 10.722656 C 43.587531 10.765656 43.473016 10.848625 43.416016 10.890625 C 42.650016 10.952625 41.875422 10.902156 41.107422 10.910156 C 41.116422 10.670156 41.234391 10.402031 41.025391 10.207031 C 40.980391 10.260031 40.890703 10.366922 40.845703 10.419922 C 40.785703 10.346922 40.665469 10.199 40.605469 10.125 C 40.601469 9.732 40.601609 9.3402656 40.599609 8.9472656 C 40.531609 8.9482656 40.394219 8.9520781 40.324219 8.9550781 C 40.325219 9.4530781 40.323172 9.954125 40.326172 10.453125 C 40.254172 10.453125 40.110062 10.451172 40.039062 10.451172 C 40.045062 10.357172 40.057453 10.170172 40.064453 10.076172 C 37.321453 10.049172 34.579937 10.076547 31.835938 10.060547 C 31.835938 9.9975469 31.834031 9.8735469 31.832031 9.8105469 C 31.665031 9.7705469 31.499938 9.7276406 31.335938 9.6816406 C 31.334937 9.4256406 31.329219 9.1635469 31.199219 8.9355469 C 31.087219 9.2785469 31.0225 9.634375 30.9375 9.984375 C 30.3115 9.941375 29.775578 10.381297 29.142578 10.279297 C 29.110578 9.9152969 29.053687 9.5525469 29.054688 9.1855469 C 29.350687 9.0865469 29.715781 9.0470156 29.925781 8.7910156 C 30.233781 8.0320156 30.030891 7.176125 29.712891 6.453125 C 29.730891 6.411125 29.76325 6.32325 29.78125 6.28125 C 29.74725 6.21825 29.676578 6.0913438 29.642578 6.0273438 C 29.196578 5.8593438 28.798391 5.59975 28.400391 5.34375 C 27.972891 5.133 27.484 4.980625 27.003906 5.0078125 z M 33.646484 12.220703 C 33.737484 12.435703 33.788547 12.663484 33.810547 12.896484 C 33.761547 12.946484 33.662281 13.047656 33.613281 13.097656 C 33.378281 13.606656 33.032656 14.086359 32.597656 14.443359 C 32.455656 14.094359 32.282984 13.759453 32.083984 13.439453 C 32.037984 13.163453 32.436281 13.085219 32.613281 12.949219 C 32.726281 12.888219 32.837219 12.824813 32.949219 12.757812 C 32.720219 12.514812 32.934344 12.362516 33.152344 12.228516 C 33.316344 12.227516 33.482484 12.223703 33.646484 12.220703 z M 5 20 C 3.895 20 3 20.895 3 22 L 3 31 C 3 32.105 3.895 33 5 33 L 13 33 C 14.105 33 15 32.105 15 31 C 15 30.448 14.552 30 14 30 L 6 30 L 6 23 L 14 23 C 14.552 23 15 22.552 15 22 C 15 20.895 14.105 20 13 20 L 5 20 z M 37 20 C 35.895 20 35 20.895 35 22 L 35 26 C 35 27.105 35.895 28 37 28 L 44 28 L 44 30 L 36 30 C 35.448 30 35 30.448 35 31 C 35 32.105 35.895 33 37 33 L 45 33 C 46.105 33 47 32.105 47 31 L 47 26 C 47 25.448 46.552 25 46 25 L 37.769531 25 L 37.769531 23 L 46 23 C 46.552 23 47 22.552 47 22 C 47 20.895 46.105 20 45 20 L 37 20 z"></path>
          </svg>
          <h2 class="fw-normal">Counter-Strike 2</h2>
          <p>
            5v5. Best of 3 Maps.
            <br />
            9 March 2024, 1.00PM
            <br /><br />
            Precision, teamwork, and strategy will be your keys to victory in
            our Counter Strike 2 tournament. Can you lead your team to glory
            in the ultimate showdown?
          </p>
          <p>
            <a class="btn btn-secondary" href="../registration/registration.php">Join event &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <svg id="Bold" height="140" width="140" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <title />
            <path d="M23.92,17.23l-7.07-11A.5.5,0,0,0,16.43,6h0a.5.5,0,0,0-.42.23L10.49,15H5.35l1-2H9.85a.5.5,0,0,0,.41-.21l1.4-2a.5.5,0,0,0-.41-.79H2.65a.5.5,0,0,0-.41.21l-1.4,2a.5.5,0,0,0,.41.79H2.45L.06,17.26A.5.5,0,0,0,.5,18H12.06a.5.5,0,0,0,.42-.23l3.92-6.25L17.2,13h-.54a.5.5,0,0,0-.41.21l-1.4,2a.5.5,0,0,0,.41.79h3.92l1.25,1.79a.5.5,0,0,0,.41.21H23.5a.5.5,0,0,0,.42-.77Z" />
            <path d="M4,9h8.63a.5.5,0,0,0,.41-.21l1.4-2A.5.5,0,0,0,14.07,6H5.45A.5.5,0,0,0,5,6.21l-1.4,2A.5.5,0,0,0,4,9Z" />
          </svg>
          <h2 class="fw-normal">EA Sports FC 24</h2>
          <p>
            1v1. Ultimate Teams (UT).
            <br />
            9 March 2024, 3.00PM
            <br /><br />
            Lace up, compete, and be part of the football gaming history in
            our heart-pounding EAFC 24 tournament. Are you the next virtual
            football legend?
          </p>
          <p>
            <a class="btn btn-secondary" href="../registration/registration.php">Join event &raquo;</a>
          </p>
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">
            Valor Ascends Here.
            <span class="text-body-secondary">Unleash Your Tactical Prowess</span>
          </h2>
          <p class="lead">
            Immerse yourself in the thrilling world of Valorant! Explore the
            strategic depths, showcase your precise aim, and embrace the
            intensity of tactical gameplay. Unleash your potential and let the
            Valorant excitement unfold!
          </p>
        </div>
        <div class="col-md-5">
          <img class="object-fit-cover w-100 h-100" src="../../assets/images/playervalorant.jpg" />
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7 order-md-2">
          <h2 class="featurette-heading fw-normal lh-1">
            Strategy Meets Precision.
            <span class="text-body-secondary">Conquer The Battlefield.</span>
          </h2>
          <p class="lead">
            Get ready for heart-stopping moments and precision gameplay in our
            Counter-Strike tournament. Dive into the world where split-second
            decisions and teamwork make all the difference. Brace yourself for
            an adrenaline-packed journey into esports intensity!
          </p>
        </div>
        <div class="col-md-5 order-md-1">
          <img class="object-fit-cover w-100 h-100" src="../../assets/images/playercounterstrike.jpeg" />
        </div>
      </div>

      <hr class="featurette-divider" />

      <div class="row featurette">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-normal lh-1">
            Game On, Champions.
            <span class="text-body-secondary">Unleash Your Football Mastery.</span>
          </h2>
          <p class="lead">
            Experience the passion, camaraderie, and sheer skill of EA
            Sports FC 24. Beyond the virtual pitch, it's a celebration of
            football fandom and gaming excellence. Join us in this
            championship that transcends boundaries.
          </p>
        </div>
        <div class="col-md-5">
          <img class="object-fit-cover w-100 h-100" src="../../assets/images/playereafc.jpg" />
        </div>
      </div>

      <hr class="featurette-divider" />

      <!-- /END THE FEATURETTES -->
    </div>
    <!-- /.container -->
  </main>
  <!-- 4. main content end -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="../../js/colormodes.js"></script>
  <script src="../../js/navbar.js"></script>
</body>

</html>