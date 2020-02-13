<?php

// class a userek eléréshez 
class User extends dataBase{
    protected function getAllUsers(){
        $sql = "SELECT * FROM users";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0) {
            while ($row = $result->fetch_assoc())  {
                $userdata[] = $row;
            }
            return $userdata;
        }
    }

} 
// class a user adatok kinyeréséhez (User class függő)
class ViewUser extends User{
    public function showAllUsers(){
       $datas = $this->getAllUsers();
       
       foreach($datas as $userdata) {
          echo '<div class="row pb-2 pt-2">'; 
           echo '<div class="col col-6 shadow-lg p-3 mb-5 bg-white rounded">'. '<p>'.$userdata['name'].'</p>';
           echo '</div></div>';
       }
       
    }

}

//class a hirdetések eléréséhez
class Ads extends dataBase{
    protected function getAllAds(){
        $sql = "SELECT * FROM advertisement";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        if($numRows > 0) {
            while ($row = $result->fetch_assoc())  {
                $data[] = $row;
                
                
            }
            return $data;
        }
    }

}

//class a hirdetések megjelenítéséhez (Ads class függő)
class ViewAds extends Ads{

    public function showAllAds(){
       $datas1 = $this->getAllAds();
       
       foreach($datas1 as $data) {
        echo '<div class="row pb-2 pt-2">';
           echo '<div class="col col-3 shadow-lg p-3 mb-5 bg-white rounded">'. $data['userid'].'</div>';
           echo '<div class="col col-7 shadow-lg p-3 mb-5 bg-white rounded">'.$data['title'];
           echo '</div></div>';
       }
       
    }

}



?>
