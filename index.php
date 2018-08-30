<?php
include('functions.php');
getting();

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style >
.form-control-borderless {
  border: none;
}

.form-control-borderless:hover, .form-control-borderless:active, .form-control-borderless:focus {
  border: none;
  outline: none;
  box-shadow: none;
}

</style>

<script>

    function copyt() {
        
    var copyText = document.getElementById("copy");
    var textArea = document.createElement("textarea");
    textArea.value = copyText.textContent;
    document.body.appendChild(textArea);
    textArea.select();
    document.execCommand("Copy");
    textArea.remove();
    alert("Link Copied");
}
    
    
</script>
  </head>
  <body>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

<div class="container">
  <div class="row  justify-content-center align-items-center d-flex text-center h-100">
          <div class="col-12 col-md-8  h-50 ">
              <h1 class="display-2  text-success mb-2 mt-5"><strong>Url Shortner</strong> </h1>
            </div>
          </div>
    <br/>
	<div class="row justify-content-center">
                        <div class="col-12 col-md-10 col-lg-8">
                            <form class="card card-sm" method = "post">
                                <div class="card-body row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <i class="fas fa-link h4 text-body"></i>
                                    </div>
                                    <!--end of col-->
                                    <div class="col">
                                        <input class="form-control form-control-lg form-control-borderless" type="search" placeholder="Enter url here!" name = "url">
                                    </div>
                                    <!--end of col-->
                                    <div class="col-auto">
                                        <button  name = "submit" class="btn btn-lg btn-success" type="submit">Shorten Url</button>
                                    </div>
                                    <!--end of col-->
                                </div>
                            </form>
                        </div>
                        <!--end of col-->
                    </div>
                    <br>
                    <br>
                    <?php
                  inserting();

                     ?>


</div>
  </body>
</html>
