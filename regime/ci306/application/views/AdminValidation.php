<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">
    <title>Tiny Dashboard - A Bootstrap Dashboard Template</title>
    <!-- Simple bar CSS -->
    <link rel="stylesheet" href="<?= base_url("css/simplebar.css")?>">
    <!-- Fonts CSS -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Overpass:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> -->
    <!-- Icons CSS -->
    <link rel="stylesheet" href="<?= base_url("css/feather.css")?>">
    <!-- Date Range Picker CSS -->
    <link rel="stylesheet" href="<?= base_url("css/daterangepicker.css")?>">
    <!-- App CSS -->
    <link rel="stylesheet" href="<?= base_url("css/app-light.css")?>" id="lightTheme">
    <link rel="stylesheet" href="<?= base_url("css/app-dark.css")?>" id="darkTheme" disabled>
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <?php $this->load->view('sidebaradmin')?>       
      </aside>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
            <div class="card shadow">
                <div class="card-body">
                  <table class="table table-borderless table-hover">
                    <thead>
                      <tr>
                        <th></th>
                        <th>
                          <div class="custom-control custom-checkbox">
                          </div>
                          
                        </th>
                        <th></th>
                        <th>ID</th>
                        <th>User</th>
                        <th>Code</th>
                        <th></th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php for($i=0;$i<count($liste); $i++ ){?>
                            <tr>
                            <td></td>
                            <td></td>
                            <td>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="2474">
                                <label class="custom-control-label" for="2474"></label>
                            </div>
                            </td>
                            <td>
                            <p class="mb-0 text-muted"><strong><?php echo $liste[$i]->id_membre ; ?></strong></p>
                            <small class="mb-0 text-muted">       </small>
                            </td>
                            <td>
                            <p class="mb-0 text-muted"><strong><?php echo $nom[$i]['nom']; ?></strong></p>
                            </td>
                            <td>  
                            <p class="mb-0 text-muted"><strong><?php echo $liste[$i]->num_code ; ?></strong></p>
                            </td>
                            <td>
                            </td>
                            <td>
                            <form action="<?=base_url('ControllerAdminValidation/Verification')?>" method="Post">
                            <input type="hidden" name="idmembre" value=<?php echo $liste[$i]->id_membre ; ?> >
                            <input type="hidden" name="numcode" value=<?php echo $liste[$i]->num_code ; ?> >
                            <button type="submit" class="btn btn-lg btn-primary"><span class="fe fe-plus fe-16 mr-3">Valider</span>
                            </form>
                            </td>
                      </tr>
                    <?php } ?>
                    </tbody>
                  </table>
                </div>
              </div>
              <nav aria-label="Table Paging" class="my-3">
                <ul class="pagination justify-content-end mb-0">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
              </nav>
            </div>
            </div>
          </div> <!-- .row -->
        </div> <!-- .container-fluid -->
        
      </main> <!-- main -->
    </div> <!-- .wrapper -->
    <script src="<?=base_url()?>js/jquery.min.js"></script>
    <script src="<?=base_url()?>js/popper.min.js"></script>
    <script src="<?=base_url()?>js/moment.min.js"></script>
    <script src="<?=base_url()?>js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>js/simplebar.min.js"></script>
    <script src='<?=base_url()?>js/daterangepicker.js'></script>
    <script src='<?=base_url()?>js/jquery.stickOnScroll.js'></script>
    <script src="<?=base_url()?>js/tinycolor-min.js"></script>
    <script src="<?=base_url()?>js/config.js"></script>
    <script src="<?=base_url()?>js/apps.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];

      function gtag()
      {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'UA-56159088-1');
    </script>
  </body>
</html>