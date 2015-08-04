<?php
  
  if(isset($_GET['nav'])){
    $link= $_GET['nav'];
  }else{
    $link="modal";
  }


?>



<html>
    <head>
        <title>Ehsan Rafeeque | Portfolio </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <!--<title>Foundation | Welcome</title>-->
        <!--<link href='http://fonts.googleapis.com/css?family=Lobster|Raleway|Titillium+Web|Playball' rel='stylesheet' type='text/css'>-->
        <link rel="stylesheet" href="css/foundation.css" />
        <link rel="stylesheet" href="css/style.css" />
        
        <!--<script type="text/javascript" src="js/script.js"></script>-->
    </head>
    <body class="container">
     
    <?php include "template/nav.php" ?>
    <?php
      if($link=="elect"){
        echo "Electronics Engineer";
      }else if($link=="prog"){
        // echo "Programming Foundation";
        include "template/programming.php";
      }else if($link=="prj"){
        echo "Project has been selected";
      }else if($link=="exp"){
        echo "<strong>Experience is need</strong><em>Experience Indeed</em>";
      }else{
        include "template/main.php";
      }
    ?>
    
    
    <?php include "template/footer.php" ?>
    
    
    
      
     
              <div> 
                <!--<a href="#" data-reveal-id="myModal">Click Me For A Modal</a>-->
                
                <div id="myModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
                  <h2 id="modalTitle">Portfolio is in progress...</h2>
                  <p class="lead">Sorry for Inconvience</p>
                  <p>You can surf the portfolio, Share your remarks and suggestion with <a href="mailto:ehsan5505@gmail.com">Ehsan</a></p>
                  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
                </div>
              </div>
        
        <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.4.js"></script>-->
        <script src="js/vendor/jquery.js" type="text/javascript" ></script>
        <script src="js/foundation/foundation.js" type="text/javascript"></script>
        <script src="js/foundation/foundation.reveal.js" type="text/javascript" ></script>
        <script src="js/vendor/modernizr.js" type="text/javascript"></script>
        
          <script type="text/javascript"> 
            $(document).foundation();
          </script>
        <?php    
          if($link=="modal"){ ?>
            <script>
              $(document).ready(function (e) {     
                $('#myModal').foundation('reveal', 'open'); });
            </script>
      <?php  } ?>
      
    </body>

</html>