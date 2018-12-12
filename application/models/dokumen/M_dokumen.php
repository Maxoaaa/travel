<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
 	var $publikasi_jurnal = 't_publikasi_jurnal';
    var $buku_ajar = 't_buku_ajar';
    var $dana_non_upj= 't_dana_non_upj'; 
    var $dana_non2_upj= 't_dana_non2_upj'; 
    var $dana_upj= 't_dana_upj'; 
    var $dana2_upj= 't_dana2_upj'; 
    var $forum_ilmiah= 't_forum_ilmiah'; 
    var $hki= 't_hki'; 
    var $t_kuliner= 't_kuliner'; 
    var $dt_login= 't_login';
    //tampilkan data di halaman dashboard
    
    function listAll_kuliner(){
        $query = $this->db->get($this->t_kuliner);
        return $query->result();
    }
    function listSelected_kuliner($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->t_kuliner);
        return $query->result();
    } 
     function author_selected($id){
        $this->db->select('avatar');
        $this->db->from($this->dt_login);
        $this->db->join($this->t_kuliner, 't_login.id = t_kuliner.id_author');
        $this->db->where('t_kuliner.id',$id);
        return $this->db->get()->result();
    }
    function getsocmedia() {
        $query = $this->db->query('SELECT kode_html FROM socmed'); 
        return $query->result();
    }
    function getprofile() {
        $query = $this->db->query("SELECT * FROM t_login WHERE id='5'");
        return $query->result();
    }

    function getpopularpost() {
        $tabel_adventure = $this->db->query("SELECT `kategori`.`nama_kategori`,`t_adventure`.`kategori`,COUNT(`t_adventure`.`kategori`) AS total FROM `t_adventure` RIGHT JOIN `kategori` ON `t_adventure`.`kategori` = `kategori`.`nama_kategori` GROUP BY `kategori`.`nama_kategori` ORDER BY `kategori`.`id_kategori` ASC")->result();
         $tabel_artcraft = $this->db->query("SELECT `kategori`.`nama_kategori`,`t_artcraft`.`kategori`,COUNT(`t_artcraft`.`kategori`) AS total FROM `t_artcraft` RIGHT JOIN `kategori` ON `t_artcraft`.`kategori` = `kategori`.`nama_kategori` GROUP BY `kategori`.`nama_kategori` ORDER BY `kategori`.`id_kategori` ASC")->result();
         $tabel_artcraft2 = $this->db->query("SELECT `kategori`.`nama_kategori`,`t_artcraft`.`kategori`,COUNT(`t_artcraft`.`kategori`) AS total FROM `t_artcraft` RIGHT JOIN `kategori` ON `t_artcraft`.`kategori` = `kategori`.`nama_kategori` GROUP BY `kategori`.`nama_kategori` ORDER BY `kategori`.`id_kategori` ASC")->result();
         $tabel_artcraft3 = $this->db->query("SELECT `kategori`.`nama_kategori`,`t_artcraft`.`kategori`,COUNT(`t_artcraft`.`kategori`) AS total FROM `t_artcraft` RIGHT JOIN `kategori` ON `t_artcraft`.`kategori` = `kategori`.`nama_kategori` GROUP BY `kategori`.`nama_kategori` ORDER BY `kategori`.`id_kategori` ASC")->result();
         $tabel_artcraft4 = $this->db->query("SELECT `kategori`.`nama_kategori`,`t_artcraft`.`kategori`,COUNT(`t_artcraft`.`kategori`) AS total FROM `t_artcraft` RIGHT JOIN `kategori` ON `t_artcraft`.`kategori` = `kategori`.`nama_kategori` GROUP BY `kategori`.`nama_kategori` ORDER BY `kategori`.`id_kategori` ASC")->result();
         $tabel_artcraft5 = $this->db->query("SELECT `kategori`.`nama_kategori`,`t_artcraft`.`kategori`,COUNT(`t_artcraft`.`kategori`) AS total FROM `t_artcraft` RIGHT JOIN `kategori` ON `t_artcraft`.`kategori` = `kategori`.`nama_kategori` GROUP BY `kategori`.`nama_kategori` ORDER BY `kategori`.`id_kategori` ASC")->result();
         $tabel_artcraft6 = $this->db->query("SELECT `kategori`.`nama_kategori`,`t_artcraft`.`kategori`,COUNT(`t_artcraft`.`kategori`) AS total FROM `t_artcraft` RIGHT JOIN `kategori` ON `t_artcraft`.`kategori` = `kategori`.`nama_kategori` GROUP BY `kategori`.`nama_kategori` ORDER BY `kategori`.`id_kategori` ASC")->result();
         
         foreach ($tabel_adventure as $key ) {
             $tta[]= $key->total;
         }        
         foreach ($tabel_artcraft as $key ) {
             $ttb[]= $key->total;
         }
         foreach ($tabel_artcraft2 as $key ) {
             $ttc[]= $key->total;
         }
         foreach ($tabel_artcraft3 as $key ) {
             $ttd[]= $key->total;
         }
         foreach ($tabel_artcraft4 as $key ) {
             $tte[]= $key->total;
         }
         foreach ($tabel_artcraft5 as $key ) {
             $ttf[]= $key->total;
         }
         foreach ($tabel_artcraft6 as $key ) {
             $ttg[]= $key->total;
         }
         for ($i=0; $i <14 ; $i++) { 
             $total[$i] = $tta[$i] +$ttb[$i]+$ttc[$i]+$ttd[$i]+$tte[$i]+$ttf[$i]+$ttg[$i];
             //$total[$i] = $tta[$i] ;
         }
           // untuk update data di tabel kategori
           for ($i=1; $i <15 ; $i++) {       
              $data = array(
                'total_post' =>  $total[$i-1]          
              );    
             $this->db->update('kategori', $data, "id_kategori =".$i);
            }    
         
     //return $total;  
     $this->db->from('kategori');
     $this->db->order_by('total_post', 'DESC');
     $this->db->limit(7); 
     return $this->db->get()->result();     
    }
}
?>
