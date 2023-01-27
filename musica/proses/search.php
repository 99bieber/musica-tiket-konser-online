<?php
include 'koneksi.php';
 if(isset($_POST["query"]))  
 {  
      $output = '';  
      $query = "SELECT * FROM artis WHERE nama_artis LIKE '%".$_POST["query"]."%'";  
      $result = mysqli_query($koneksi, $query);  
      $output = '<ul class="list-unstyled" style="background-color: #5722a9;">';  
      if(mysqli_num_rows($result) > 0)  
      {  
           while($row = mysqli_fetch_array($result))  
           {  
                $output .= '<li style="color:white; padding: 10px; cursor: pointer;text-align: left;">'.'<img src="proses/images/profile/'.$row['foto_artis'].'" style="width: 50px; height: auto; margin-right: 10px;"><b>'.$row["nama_artis"].'</b> </li>';  
           }  
      }  
      else  
      {  
           $output .= '<li style="color:white; margin: 10px; padding: 15px; cursor: pointer; align-content: right;">Tidak ada nama artis</li>';  
      }  
      $output .= '</ul>';  
      echo $output;  
 }  
?>
<style type="text/css">
  .i{
    align-content: right;
    width: 100px; height: auto;
    margin-right: 200px;
  }
</style>