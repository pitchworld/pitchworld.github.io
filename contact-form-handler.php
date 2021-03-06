<?php

$name =$_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];  

if(empty($email) )
{
    echo "<script type ='text/javascript'>
    alert('plea fill');
    window.history.go(-1);
    </script>";
}
else

{
    mail("bmathan777@gmail.com" , " job alert" , $message , "from : $name<$email>");
echo "<script type ='text/javascript'>
alert('Thank you');
window.history.go(-1);
</script>";
}
