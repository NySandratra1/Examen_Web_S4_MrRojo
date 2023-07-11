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
              <a class="nav-link" href="<?=base_url('ControllerAdminValidation/index')?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Validation Code</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('CodeController/insertion')?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Insertion Code</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('AssociationController/show')?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Insertion Association</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('RegimeController/load')?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Insertion Regime</span>
              </a>
            </li>
            <li class="nav-item w-100">
              <a class="nav-link" href="<?=base_url('SportController/load')?>">
                <i class="fe fe-layers fe-16"></i>
                <span class="ml-3 item-text">Insertion Sport</span>
              </a>
            </li>
          <a href="<?=base_url('Welcome/logout')?>"><button type="button" class="btn mb-2 btn-danger">Se Deconnecter</button></a>        
        </nav>