<?php
defined('BASEPATH') OR exit('Anda tidak boleh mengakses file ini secara langsung'); 
class M_dokumen extends CI_Model{
    var $t_post= 't_post'; 
    var $dt_login= 't_login';
    //tampilkan data di halaman dashboard
    
    function listAll($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
    function listAll_post(){        
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
    function get_kategori_post(){
        $query = $this->db->get('kategori');
        return $query->result();
    }
    function listAll2($id){
        $this->db->where('id',$id);
        $query = $this->db->get($this->t_post);
        return $query;
    }
/*==============================================================================================*/
    function listAll_kuliner(){        
        $this->db->where('kategori',"Culinaries");
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
    function listAll_destination(){        
        $this->db->where('kategori',"Destination");
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
    function listAll_florafauna(){        
        $this->db->where('kategori',"FloraFauna");
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
    function listAll_culture(){        
        $this->db->where('kategori',"Culture");
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
    function listAll_artcraft(){        
        $this->db->where('kategori',"ArtCraft");
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
    function listAll_adventure(){        
        $this->db->where('kategori',"Adventures");
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
    function listAll_news(){        
        $this->db->where('kategori',"News");
        $query = $this->db->get($this->t_post);
        return $query->result();
    }
/*==============================================================================================*/
    function listLimit_destination2() {
        $this->db->from($this->t_post); 
        $this->db->limit(8); 
        return $this->db->get()->result();
    } 
    function listLimit_destination3() {
        $this->db->from($this->t_post); 
        $this->db->limit(8); 
        return $this->db->get()->result();
    } 
    function listLimit_latepost() {
        $this->db->from($this->t_post); 
        $this->db->order_by('created_at','DESC'); 
        $this->db->limit(9); 
        return $this->db->get()->result();
    }
     function listLimit_culture(){        
        $this->db->where('kategori',"Culture");
        $this->db->from($this->t_post);
        $this->db->limit(1);
        return $this->db->get()->result();
    }
    function listLimit_artcraft(){        
        $this->db->where('kategori',"ArtCraft");
         $this->db->from($this->t_post);
        $this->db->limit(1);
        return $this->db->get()->result();
    }
    function listLimit_adventure(){        
        $this->db->where('kategori',"Adventures");
       $this->db->from($this->t_post);
        $this->db->limit(3);
        return $this->db->get()->result();
    }
    function listLimit_news(){        
        $this->db->where('kategori',"News");
         $this->db->from($this->t_post);
        $this->db->limit(1);
        return $this->db->get()->result();
    }
    function listSelected_kuliner($id){
        //$this->db->where('id ='.$id.' and kategori = "Culinaries"');
        $this->db->where('id',$id);
        //$this->db->where('kategori',"Culinaries");
        $query = $this->db->get($this->t_post);
        return $query->result();
    } 
     function author_selected($id){
        $this->db->select('avatar');
        $this->db->from($this->dt_login);
        $this->db->join($this->t_post, 't_login.id = t_post.id_author');
        $this->db->where('t_post.id',$id);
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
    function getpopularpost2() {
        $this->db->select('kategori, COUNT(*) as total_post');
        $this->db->from($this->t_post);  
        $this->db->group_by('kategori');
        $this->db->order_by('total_post','DESC');
        $this->db->limit(7); 
        return $this->db->get()->result();
        //$query = $this->db->query("SELECT * FROM t_login WHERE id='5'");
        //return $query->result();
    }
    function simpanDok($data){
        return $this->db->insert($this->t_post, $data);
    } 
    function delete_post($id){
        $this->db->where('id', $id);
        $this->db->delete($this->t_post);
    }
    function listEdit($id){
        $this->db->where('id',$id);
        $hasil = $this->db->get($this->t_post);
        return $hasil->result();
    }
    function update_post($data,$id){
        $this->db->where('id',$id);
        return $this->db->update($this->t_post,$data);
    }
   /* function getpopularpost() {
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
    }*/
}
?>
