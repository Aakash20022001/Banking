<?php
session_start();
include('connection.php');
if(isset($_POST['submit']))
{
$sname=$_POST['sendername'];
$rname=$_POST['receivername'];
$sacc=$_POST['senderacc'];
$racc=$_POST['receiveracc'];
$amt=$_POST['amounttransfer'];
$msg=$_POST['msg'];
$sql= 'select * from customer where Account_Number ="'.$sacc.'"';
echo $con->error;
$query= mysqli_query($con,$sql);
$sql1=mysqli_fetch_array($query);
echo $con->error;
$sql= 'select * from customer where Account_Number="'.$racc.'"';
$query= mysqli_query($con,$sql);
$sql2=mysqli_fetch_array($query);
if(($amt) < 0)
{
        $_SESSION['errorMessage']="WARNING: Negative value cannot be entered";
        header('location:transfer.php');
}
else if(($amt) > $sql1['Amount'])
{
        $_SESSION['errorMessage']="WARNING: Insufficient Balance in your account";
        header('location:transfer.php');
}
else{   $new= $sql1['Amount'] - $amt;
        $sql3 = $con->query("UPDATE customer set Amount=$new, status1='debited' WHERE Account_Number='$sacc' ");
        echo $sql3;
        $new= $sql2['Amount'] + $amt;
        $sql4 = $con->query("UPDATE customer set Amount=$new, status1='credited' WHERE Account_Number='$racc' ");
        echo $sql4;
        $sql=mysqli_query($con,"insert into `transactions`(`tid`,`sender`,`sender_acc`,`receiver`,`receiver_acc`,`amount`,`msg`)values('','".$sname."','".$sacc."','".$rname."','".$racc."','".$amt."','".$msg."') ")or die (mysqli_error($con));
        if($sql)
        {            
                header('location:success.php');
        }
       $new=0;
        $amt=0;
}
}
?>