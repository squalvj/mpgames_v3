<?php 
session_start();
?>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/dist/css/main.css">
   </head>

   <body class="pattern">
      <!-- header -->
      <?php $this->load->view('template/header'); ?>
      <!-- /header -->
      
      <div class="content">
         <div class="container">
            <div class="wrapper-content-home _flex">
               <div class="col-2">
               
               </div>
               <div class="col-8">
                  <div class="wrapper-collection collection-home">
                     <div class="wrapper-collection-item">
                        <div class="wrapper-collection-item-image">
                           <img src="<?= base_url() ?>assets/img/game/rdr.jpg">
                        </div>
                        <div class="wrapper-collection-item-desc">
                           <a href="#" class="item-title">Red Dead Redemption Buruan</a>
                           <a href="#" class="item-location">Jakarta</a>
                           <span class="item-trader">squalvj</span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
      <!-- footer -->
      <?php $this->load->view('template/footer'); ?>
      <!-- /footer -->
    </body>
</html>