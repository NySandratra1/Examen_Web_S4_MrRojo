
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
    <style>
        body
            {
                background-image: url('<?= base_url("assets/images/sakafo.jpg")?>');
                background-size: cover;
                background-repeat: no-repeat;
            }
    </style>
  </head>
  <body class="vertical  light  ">
    <div class="wrapper">
      
      <aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <?php $this->load->view('sidebar')?>       
      </aside>
      <main role="main" class="main-content">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="row">
                <div class="col-md-6">
                  <div class="card shadow mb-4">
                    <div class="card-body">
                        <form action = "<?=base_url('SuiviController/insertSuivi')?>/<?=$_SESSION['id_membre']?>" method="Post">
                      <p class="h3 mb-3"><strong>Suivi de poids </strong></p>
                      <div class="form-group mb-3">
                        <label for="simpleinput">Poids</label>
                        <input type="number" id="simpleinput" class="form-control" name="poids">
                      </div>
                      <div class="form-group mb-3">
                        <label for="simpleinput">Date</label>
                        <input type="date" id="simpleinput" class="form-control" name="date_pesee">
                      </div>
                      <button type="submit" class="btn mb-2 btn-primary">Valider</button>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
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