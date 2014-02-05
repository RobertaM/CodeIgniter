<?
02
class books_model extends Model{
03
     
04
  function books_model(){
05
    parent::Model();
06
    $this->load->helper('url');               
07
  }
08
     
09
  function general(){
10
    $this->load->library('MyMenu');
11
    $menu = new MyMenu;
12
    $data['base']       = $this->config->item('base_url');
13
    $data['css']        = $this->config->item('css');     
14
    $data['menu']       = $menu->show_menu();
15
    $data['webtitle']   = 'Book Collection';
16
    $data['websubtitle']= 'We collect all title of 
17
                           books on the world';
18
    $data['webfooter']  = '© copyright by step 
19
                           by step php tutorial';
20
         
21
    return $data;   
22
  }
23
}
24
?>
