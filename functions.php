<?php

function getting(){

  if(isset($_GET['id'])){
    $id = $_GET['id'];
  $link = mysqli_connect("localhost","id6945815_root","sarthak01","id6945815_urlshortner");
  $query = "SELECT url from `urls` WHERE id = '$id'";
  $result = mysqli_query($link,$query);
  if($result){

    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        //echo $row['url'];
        $x = $row['url'];
        header('Location:'.$x);

    }

  }


  }

}

function inserting(){

  $link = mysqli_connect("localhost","id6945815_root","sarthak01","id6945815_urlshortner");


    if(isset($_POST['submit'])){
      $url = $_POST['url'];
      if(filter_var($url, FILTER_VALIDATE_URL)){
        $query = "SELECT id from `urls` WHERE url = '$url'";
        $result = mysqli_query($link,$query);
          if($result){
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);

                echo '<div class="alert alert-success">
<strong>Url: </strong>sadh.cf?id='.$row["id"].'
</div>';

            }
            else{

              $query2 = "INSERT into `urls` (url) VALUES('$url')";
              $result2 = mysqli_query($link,$query2);
              if($result2){

                $last_id = mysqli_insert_id($link);

                echo '<div class="alert alert-success">
<strong>Url: </strong>sadh.cf?id='.$last_id.'
</div>';



              }




            }

          }


      }

      else{

        echo '<div class="alert alert-danger">
<strong>Invalid Url: </strong>Please enter a valid url
</div>';

      }
    }










}

?>
