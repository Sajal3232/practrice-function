<?php
print_r($_POST);


if(isset($_POST["btn"])){
    function findWordAndCharecter(){
        $total_strings= $_POST["given_strings"];
        $data=[];
     
       $data["totalword"]= str_word_count($total_strings);
       $data["totalcharacter"]=strlen($total_strings);
       return $data;
     
     }
     
     $data=findWordAndCharecter();
     
}




// echo rand(10,20);

// echo date("Y-m-d");
//  function myFunction(){
//     $x=10; 
//      $y=20;
//      $z=$y-$x;
//      return $x;
//  }
//    function myExample(){
//        global  $x;
//        $y=20;
//        $z=$y+$x;
//        echo $z;
//    }
//    myExample();
//  echo myFunction();



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
      <td>Enter the string</td>
      <td><input type="text" name="given_strings"></td>
  </tr>

  <tr>
      <td></td>
      <td><input type="submit" name="btn" value="Submit"></td>
  </tr>
  </table>
</form>
<hr/>
<h2>number of charecter:<?php if(isset($data["totalcharacter"])){echo $data["totalcharacter"];}?></h2>
<h2>number of words:<?php if(isset($data["totalword"])){echo $data["totalword"];}?></h2>








<!-- 
<form action="" method="POST">
  <table>
  <tr>
      <td>Enter the string</td>
      <td><input type="text" name="first_name"></td>
  </tr>
  <tr>
      <td>Last Name</td>
      <td><input type="text" name="last_name"></td>
  </tr>
  <tr>
      <td>Full Name</td>
      <td><input type="text" value="<?php //myFunction();?>"></td>
  </tr>
  <tr>
      <td></td>
      <td><input type="submit" name="btn" value="Submit"></td>
  </tr>
  </table>
</form> -->