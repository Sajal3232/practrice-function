<?php
print_r($_POST);



 function myFunction(){
    $x=10; 
     $y=20;
     $z=$y-$x;
     return $x;
 }
   function myExample(){
       global  $x;
       $y=20;
       $z=$y+$x;
       echo $z;
   }
   myExample();
 echo myFunction();



// function myFunction(){
//     $firstname=$_POST["first_name"];
//     $lastname=$_POST["last_name"];
//     $fullname=$firstname." ".$lastname;
//     echo $fullname;

// }

?>

<form action="" method="POST">
  <table>
  <tr>
      <td>First Name</td>
      <td><input type="text" name="first_name"></td>
  </tr>
  <tr>
      <td>Last Name</td>
      <td><input type="text" name="last_name"></td>
  </tr>
  <tr>
      <td>Full Name</td>
      <td><input type="text" value="<?php myFunction();?>"></td>
  </tr>
  <tr>
      <td></td>
      <td><input type="submit" name="btn" value="Submit"></td>
  </tr>
  </table>
</form>