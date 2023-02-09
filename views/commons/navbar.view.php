


<nav class="navbar navbar-expand-lg navbar-light" id="navbar">
        <div class="container-fluid">
         
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mt-4">
                <a class="nav-link" aria-current="page" href="<?= URL ?>"><?php echo $lang['home'] ?></a>
              </li>
              <li class="nav-item mt-4">
                <a class="nav-link" href="<?= URL ?>#presentation"><?php echo $lang['presentation'] ?></a>
              </li>
              <li>
                 <a class="navbar-brand" href="<?= URL ?>"><img class="mx-2" src="assets/images/logo.png" alt="logo"></a>
              </li>
              <li class="nav-item mt-4">
                <a class="nav-link" href="<?= URL ?>#rooms"><?php echo $lang['house'] ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-4" href="<?= URL ?>#reservation"><?php echo $lang['reservations'] ?></a>
              </li>
              <div class="d-flex justify-content-center">
                  <li class="nav-item">
                <a class="nav-link mt-4" href="<?= URL ?>?lang=fr"><img class="language" src="assets/images/fr.png" alt="french"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link mt-4" href="<?= URL ?>?lang=en"><img class="language" src="assets/images/en.png" alt="english"></a>
              </li>
              </div>
            
           
            </ul>
          </div>
        </div>
      </nav>