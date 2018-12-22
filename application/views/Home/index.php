<?php 
session_start();
?>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dist/css/main.css">
      <link href="https://fonts.googleapis.com/css?family=Bangers|Open+Sans" rel="stylesheet">
   </head>

   <body class="pattern">
      <!-- header -->
      <?php $this->load->view('template/header'); ?>
      <!-- /header -->
      
      <div class="content">

      </div>
      
      <!-- footer -->
      <?php $this->load->view('template/footer'); ?>
      <!-- /footer -->
    </body>
</html>