<nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
                <g>
                  <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
                  <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
                  <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
                </g>
              </svg>
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('Welcome/page')?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Suivi de Poids</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('PerteController/selectPerte')?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Perte</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('GainController/selectGain')?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Gain</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="widgets.html">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Stat</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('Welcome/CaisseUser')?>/<?=$_SESSION['id_membre']?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Etat de compte</span>
              </a>
            </li>
          </lu>
          <a href="<?=base_url('Welcome/logout')?>"><button type="button" class="btn mb-2 btn-danger">Se Deconnecter</button></a>        
        </nav>