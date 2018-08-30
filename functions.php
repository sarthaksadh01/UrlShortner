<?php

function getting(){

  if(isset($_GET['url'])){
    $url = $_GET['url'];
  $link = mysqli_connect("localhost","id6945815_root","sarthak01","id6945815_urlshortner");
  $query = "SELECT url from `urls` WHERE string = '$url'";
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

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function inserting(){

  $link = mysqli_connect("localhost","id6945815_root","sarthak01","id6945815_urlshortner");


    if(isset($_POST['submit'])){
      $url = $_POST['url'];
      if(filter_var($url, FILTER_VALIDATE_URL)){
        $query = "SELECT string from `urls` WHERE url = '$url'";
        $result = mysqli_query($link,$query);
          if($result){
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);

                echo '<div class="alert alert-success">
<strong>Url: </strong><span id = "copy" >sadh.cf/?url='.$row["string"].'</span>&nbsp;<button onclick = "copyt()" class = "btn btn-success">Copy Link</button>
</div>';

            }
            else{
              
              $strng = generateRandomString(4);

              $query2 = "INSERT into `urls` (url,string) VALUES('$url','$strng')";
              $result2 = mysqli_query($link,$query2);
              if($result2){

                

                echo '<div class="alert alert-success">
                      <strong>Url: </strong><span id = "copy" >sadh.cf/?url='.$strng.'</span>&nbsp;
                       <button onclick = "copyt()" class="btn btn-success">Copy Link</button></div>';



              }
              else{
                   echo '<div class="alert alert-danger">
                      <strong>Fail: </strong>Please try again!</div>';
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
