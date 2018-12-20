<?php 
session_start();
?>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dist/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dist/css/main.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   </head>

   <!-- header -->
   <?php $this->load->view('template/header'); ?>
   <!-- /header -->

   <body>
      <div id="container">
         KONTOL
      </div>
        
      <!-- footer -->
      <?php $this->load->view('template/footer'); ?>
      <!-- /footer -->
    </body>
</html>