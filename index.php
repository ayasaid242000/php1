    <!--  TASK 1 -->
 <!-- <?php
   phpinfo();
?>  -->

     <!-- TASK 2 -->
     <!-- TWO WAYS OF CONSTRAIN -->
 <?php
define("webname", "<p> CMS web </p>" );
echo webname;
    // <!-- TWO WAYS OF CONSTRAIN -->
const web= 'our website';
echo web.'<br>' ;
?> 
<?php 
        //------ TASK 3-----
// server name
 
//   echo $_SERVER['HTTP_HOST'];

echo  "<b> your server name</b> " .$_SERVER['SERVER_NAME'] ."<br>";
// server address 
print "<b>Your  address is </b> ".$_SERVER['REMOTE_ADDR'] ."<br>";
//  server port
  echo  "<b>Your port is </b> ".$_SERVER['SERVER_PORT']."<br>";
?>

   <!-- TASK 4      rereeeet-->
   <?php
    echo "<b>file name & file path:</b>" .__FILE__."<br/>";

   ?>

       <!-- TASK 5  -->
     <?php
      $age= 10;
      switch($age){
        case $age<5:
            echo "Stay at home";
        break;
         case $age==5:
            echo "Go to kindergarden";
        break;
        case $age >5 && $age<13:
            echo "Go to grade:".$age-6;
        break;
        default:
        echo "you are too old";
        

      }
      




     ?>


