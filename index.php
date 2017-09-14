<!DOCTYPE HTML>

<html lang="en">

<head>
       
        <?php include "head.php"; ?>
 
</head>

<body> 
   
    <div id="main"> 

        
        <div id="header">
           
        <?php include "header.php"; ?>

        </div>


        <div id="sidebar">

        <?php include "menu.php"; ?>
        
        </div>


        <div id="content">
            
        <?php include (	isset( $_GET['site'] )? $_GET['site'] :"home" ) . ".php"; ?>

        </div>


        <div id="footer">
           
        <?php include "footer.php"; ?>
        
        </div>
        

        <div class="fixed">
                
        <?php include "cookies.php"; ?>
        </div>

</body>


</html>

