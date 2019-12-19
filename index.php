
<?php
include("assets/php/dbcon.php");
?>
<!doctype html>
<html lang="en">
    <head>
        <script>
mainshow();
            </script>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="img/favicon.png" type="image/png">
        <title>GET PROJECT</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      
    </head>
    <body class="container" style="width:100%;padding:0px;margin:0px;">
    <!--[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[[menu modal ]]]]]]]]]]]]]]]]]]]]]]]]]]]]]]-->





<div class="modal fade" id="request" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Request</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="index.php">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">phone number:</label>
            <input type="number" name="rn" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">request:</label>
            <textarea class="form-control" name="rr" id="message-text"></textarea>
          </div>
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="rb" class="btn btn-primary">Send message</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST["rb"])){
    $phone = clear($_POST["rn"]);
    $request = clear($_POST["rr"]);
    $rsql = "INSERT into request (phone,request) values ('$phone','$request') ";
    $quer = mysqli_query($conn,$rsql);
    echo "<script> alert('request sent ');</script>";
}




?>







<!-- }}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}}} -->

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
      <a class="navbar-brand" href="#"><img src="assets/images/logo2.png" width="120px" height="40px" /></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        <span class="navbar-toggler-icon"></span>
         <span class="navbar-toggler-icon"></span>
         MENU</button>
    
      <div class="collapse navbar-collapse" id="navbarColor01">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Department</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" class="btn btn-primary" data-toggle="modal" data-target="#request" data-whatever="@mdo">Request project</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" class="btn btn-primary" data-toggle="modal" data-target="#contact">Contact us</a>
          </li>
        </ul>
       
      </div>
    </nav>
    <!-- MAIN BODY THAT WILL DISPLAY FIRST  -->
    <div id="mainbody" style="display:none;">
    <div class="row">
        <div class="col-sm-4">
    <main role="main">
<br>
<div class="bd-example">
  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item ">
    <img src="assets/images/me.png" width="auto" height="400px" class="d-block w-100" alt="...">
        <div class="carousel-caption d-block d-md-block">
          <h2 >ABOUT DESIGNER</h2>
          <P style="font-size:20px; text-align:center; color:white;">
        <b>Name: Olusi Wisdom Bamidele
        Category: Full Stack Web Developer
        Contact: 08106231561
        Watsapp: 08085774755
        Facebook: Olusi Wisdom
        Email:olusiwisdombamidele@gmail.com </b>

              </p>
        </div>
      </div>
      <div class="carousel-item active ">
        <img src="assets/images/caro1.jpg" width="auto" height="400px"class="d-block w-100" alt="...">
        <div class="carousel-caption d-block d-md-block">
          <h1 style="color:red;align:center; font-style:sans-seriff;"><b>PROJECTS</b></h1>
          <p style="color:black; align:center; font-size:20px;"><b>get quality/affordable project topics/materials<b></p>
        </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
</div>
<div class="col-sm-4">
<h3 style="text-align:center;">GET AFFORDABLE PROJECT</h3>
    <p  style="text-align:center;" >
    The only website with the cheapest and affordable project topics/material,<br> with guaranteed Destinction
result which not only allow you be the best <br> but also allow you to stand out in your accademic pursuit 
 

    </p>

    </div>
    <div class="col-sm-4">
        <h3 style="text-align:center;">HELP</h3>
        <p style="text-align:center;">step 1: click on menu</p>
        <p style="text-align:center;">step 2: Select Department</p>
        <p style="text-align:center;">step 3: Select Project Topic</p>
        <p style="text-align:center;">step 4: Click on get</p>
        <p style="text-align:center;">step 5: Enter payment code</p>
        <p style="text-align:center;">step 6: Drop a comment</p>
</div>
</div>
</div>
</div>
<!-- END OF MAIN BODY  -->


<!-- }}}}}}}}}}}}}}}}}}}}}}}}}}}}}} fpr contact us}}}}}}}}}}}}}}}}}}}}}}}}}}}} -->


<!-- Modal -->
<div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Contact Information</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <pre>
     facebook: olusi wisdom    
     Watsapp: 08085774755   
     Email: olusiwisdombamidele@gmail.com   
     Phone: 08106231561   
     instagram: olusi wisdom bamidele
</pre>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      
      </div>
    </div>
  </div>
</div>





























<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">SELECT DEPARTMENT</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="index.php">
        <input type="radio" class="select" VALUE = "1" name="course" id="comp" >
<label for="comp"> COMPUTER SCIENCE </label></BR>
<input type="radio" class="select" VALUE = "2" name="course" id="elect" >
<label for="elect"> ELECTRICAL ENGINEERING </label></br>
<input type="radio" name="course" VALUE = "3" id="SLT" >
<label for="SLT"> SCIENCE LABORATORY TECHNOLOGY </label></BR>
<input type="radio" name="course" VALUE = "4" id="mechanical" >
<label for="mechanical"> MECHANICAL ENGINEERING </label>




       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="SUBMIT"  name= "submitc"onclick="matshow()" class="btn btn-primary">DONE</button>
        </form>
      </div>
    </div>
  </div>
</div>
<div id="mat" style="display:none;">
                          <!-- FORM PHP MODELING -->
<?PHP
    IF(isset($_POST["submitc"])){
    $val= $_POST["course"];
    // ----------------------------------for computer science------------------------------------------------------------
        if($val == 1){

$sql = "select * from computer";
$quer = mysqli_query($conn,$sql);
if($quer -> num_rows > 0){
while($row = $quer -> fetch_assoc()){
    ?>
    <div class="list-group" id="myList" role="tablist">
    <a class="list-group-item list-group-item-action " data-toggle="list" href="#home" role="tab" style="font-size:10px;"><?= $row["project"] ?><span style="float:right;"><del>N</del> 3000<span></a>
    
  </div>
<?php
}

}
    }
// ----------------------------------------------------end of computer science-------------------------------
    
    // ----------------------------------for electrical------------------------------------------------------------
    if($val == 2){

        $sql = "select * from elect";
        $quer = mysqli_query($conn,$sql);
        if($quer -> num_rows > 0){
        while($row = $quer -> fetch_assoc()){
            ?>
            <div class="list-group" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action " data-toggle="list" href="#home" role="tab" style="font-size:10px;"><?= $row["project"] ?><span style="float:right;"><del>N</del> 3000<span></a>
            
          </div>
        <?php
        }
        
        }
            }
        // ----------------------------------------------------end of electrical-------------------------------
            

    // ----------------------------------for slt------------------------------------------------------------
    if($val == 3){

        $sql = "select * from slt";
        $quer = mysqli_query($conn,$sql);
        if($quer -> num_rows > 0){
        while($row = $quer -> fetch_assoc()){
            ?>
            <div class="list-group" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action " data-toggle="list" href="#home" role="tab" style="font-size:10px;"><?= $row["project"] ?><span style="float:right;"><del>N</del> 3000<span></a>
            
          </div>
        <?php
        }
        
        }
            }
        // ----------------------------------------------------end of slt-------------------------------
            


    // ----------------------------------for mechanical------------------------------------------------------------
    if($val == 4){

        $sql = "select * from mechanical";
        $quer = mysqli_query($conn,$sql);
        if($quer -> num_rows > 0){
        while($row = $quer -> fetch_assoc()){
            ?>
            <div class="list-group" id="myList" role="tablist">
            <a class="list-group-item list-group-item-action " data-toggle="list" href="#home" role="tab" style="font-size:10px;"><?= $row["project"] ?><span style="float:right;"><del>N</del> 3000<span></a>
            
          </div>
        <?php
        }
        
        }
            }
        // ----------------------------------------------------end of mechanical-------------------------------
            








}

?>

</div>






<script>
  $(function () {
    $('#myList a:last-child').tab('show')
  })
</script>









<footer class="footer_area p_120">
            <div class="container">
              <div class="row footer_inner">
                <div class="col-lg-5 col-sm-6">
                  <aside class="f_widget ab_widget">
                    <div class="f_title">
                      <h2 style="text-align:center;">Our Services</h2>
                    </div>
                    <p style="text-align:center;">we provide you with quality project topics and material including project program easy, readable, responsive, and accessible to all. place an order today and dont regret it.</p>
                    <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved 
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                  </aside>
                </div>
                <div class="col-lg-5 col-sm-6">
                  <aside class="f_widget news_widget">
                    <div class="f_title">
                      <h3 style="text-align:center;">Newsletter</h3>
                    </div>
                    <p>Stay updated with our latest trends</p>
                    <div id="mc_embed_signup">
                                  <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="subscribe_form relative">
                                    <div class="input-group d-flex flex-row">
                                          <input name="EMAIL" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address '" required="" type="email">
                                          <button class="btn sub-btn"><span class="lnr lnr-arrow-right">-></span></button>		
                                      </div>				
                                      <div class="mt-10 info"></div>
                                  </form>
                              </div>
                  </aside>
                </div>
                <div class="col-lg-2">
                  <aside class="f_widget social_widget">
                    <div class="f_title">
                  
                    </div>
                    
                  </aside>
                </div>
              </div>
            </div>
          </footer>

<script src="assets/js/jquery-3.4.1.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    var main = document.getElementById("mainbody");
    var cou = document.getElementById("mat");
function mainshow(){
   
    main.style.display = "block";
    cou.style.display = "none";

}

function matshow(){
    main.style.display = "none";
    cou.style.display = "block";
    
}


    </script>
    <?php
if ($_POST["course"] == null){
echo "<script> mainshow();   </script>";

}else{
    echo "<script> matshow();   </script>";
}
?>
    </body>
</html>