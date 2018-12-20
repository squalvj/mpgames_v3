<?php
   class Game extends CI_Model {

      public function __construct(){

         parent::__construct();
         $this->load->database();
   
      }

      public function getGame($limit)
      {
            $query = $this->db->get('game', $limit);
            return $query->result();
      }

      public function getLatestGame() {
         $data = $this->db->select('transaksi_jual.id_jual, game.img, user.nama, game.judul, harga, lokasi')
            ->from('transaksi_jual')
            ->join('user', 'transaksi_jual.id_user = user.id_user', 'LEFT')
            ->join('game', 'transaksi_jual.id_game = game.id_game', 'LEFT')
            ->get();
         return $data->result_array();
      }

   }
?>