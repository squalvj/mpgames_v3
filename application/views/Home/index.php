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

   <body>
      <!-- header -->
      <?php $this->load->view('template/header'); ?>
      <!-- /header -->
      <div id="container">
         <div class="list_transaksi">
            <h4>Want To Sell ( WTS )</h4>
            <div class="garis-judul"></div>
            <h4 style="float: none; text-align: right; top: 0">Postingan Terbaru</h4>
            <div class="wts">

               <!-- variable $listGame di pass dari Home controller -->
               <!-- di application/controller/Home -> method index() -->
               <!-- diambil dari $data['listGame'] -->
               <?php foreach($listGame as $row): ?>
                  <div class="game-wts">
                     <h4 hidden />
                     <?php echo $row['id_jual']; ?>
                     </h4>
                     <a href="product.php?id_jual=<?php echo $row['id_jual']; ?>">
                        <img src="<?= base_url() ?>assets/<?php echo $row['img']; ?>">
                     </a>
                     <div class="judul-game">
                        <?php echo $row['judul']; ?>
                        <p>RP
                           <?php echo $row['harga']; ?>
                           <?php echo $row['lokasi']; ?>
                     </div>
                  </div>
               <?php endforeach; ?>

            </div>
            <div class="pagination">
               <a href="#">&laquo;</a>
               <a href="#" class="active">1</a>
               <a href="#">2</a>
               <a href="#">3</a>
               <a href="#">4</a>
               <a href="#">5</a>
               <a href="#">&raquo;</a>
            </div>
         </div>
      </div>
        
      <!-- footer -->
      <?php $this->load->view('template/footer'); ?>
      <!-- /footer -->
    </body>
</html>