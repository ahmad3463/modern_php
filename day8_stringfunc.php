<form action="" method="post">

<input type="text" name="usertext" placeholder="enter any Text">
<button type="submit"> submit</button>

</form>

<?php 

if(isset($_POST)){
    $name =  $_POST['usertext'];

   echo strlen($name);
   echo '<br>';
   echo '<br>';
   echo strtoupper($name);
}
echo '<br>';
echo '<br>';

    $name = 'furit';
    $item = 'banna';
    $replace = 'apple';

$output = str_replace($name , $item, $replace  );
    echo $output;

    echo '<br>';
    echo '<br>';

    echo time();

    echo '<br>';
    echo '<br>';

    echo date('d,m,y');

    echo '<br>';
    echo '<br>';
    echo    strtotime("1 january 1970");


    
    echo '<br>';
    echo '<br>';

    echo date('d,m,y');

        
    echo '<br>';
    echo '<br>';

      echo   date('D,M,Y' ,strtotime("+7days") );
    



?>