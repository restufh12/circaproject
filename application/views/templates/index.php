<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Language" content="en">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?= $PageTitle ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
  <meta name="description" content="This is an example dashboard created using build-in elements and components.">
  <meta name="msapplication-tap-highlight" content="no">
  <?php $this->load->view('templates/link_rel.php') ?>
</head>

<body>
  <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
    <!-- Header -->
    <?php $this->load->view('templates/header.php') ?>

    <!-- Theme Setting -->
    <?php $this->load->view('templates/theme_setting.php') ?>


    <div class="app-main">

      <!-- Sidebar -->
      <?php 
      $dataSidebar['ActiveSidebar'] = $ActiveSidebar;
      ?>
      
      <?php $this->load->view('templates/sidebar_'.$ModuleCode.'.php', $dataSidebar) ?>

      <div class="app-main__outer">

        <!-- Div Content -->
        <?php $this->load->view($PageContents) ?>

        <!-- Div Footer -->
        <?php $this->load->view('templates/footer.php') ?>

      </div>

    </div>
  </div>
  <?php $this->load->view('templates/script_src.php') ?>
</body>

</html>