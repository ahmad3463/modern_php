<form action="" method="POST">

    <input type="text" name="num1" placeholder="Enter first number"><br><br>
    <input type="text" name="num2" placeholder="Enter second  number"><br><br>
    <select name="select" id="">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select><br><br>
    <button type="submit">submit</button>


</form>


<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $select = $_POST['select'];


    function calculate($num1 , $num2 , $select){
        if(is_numeric($num1) && is_numeric($num2)){
            if( $select == '+'){
                return  $num1 + $num2;
              }elseif($select == '-'){
                  return  $num1 - $num2;
              }elseif($select == '*'){
                  return  $num1 * $num2;
              }elseif($select == '/'){
                  return   $num1 / $num2;
              }else{
                  return 'invalid operators';
              }
        }else{
            return 'please enter a valid number';
        }
       
    }

    echo calculate($num1 , $num2 , $select);
}

?>
