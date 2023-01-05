<!DOCTYPE html>
<html>
<head>
	<title>calculator</title>
</head>
<body>
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <h1>Calculations Using php</h1>

		First Number:<input name="n1" value=""><br>
		<br>
		Second Number:<input name="n2" value=""><br> 
		<br>

        <input type="submit" name="sub" value="add">
        <input type="submit" name="sub" value="subtract">
        <input type="submit" name="sub" value="multiply">
        <input type="submit" name="sub" value="divide"><br>
    </form>

</body>
</html>
<?php
    
    include("dbcon.php");
    if(isset($_POST["sub"]))
    {
        $a=$_POST['n1'];
    	$b=$_POST['n2'];
    	$op=$_POST['sub'];
    	if($op=="add")
    		$ans=$a+$b;
    	else if($op=="subtract")
    		$ans=$a-$b;
        
        else if($op=="multiply")
    		$ans=$a*$b;
    	else if($op=="divide")
    	
    	$ans=$a/$b;
    
        echo $ans; 
    ?>
    

<?php
            
            
            $sql="INSERT INTO first(first_num,second_num,res)VALUES('$a','$b','$ans')";

            
            if(mysqli_query($con,$sql))
            {
            echo'Record created Successfully';
            }
else
{
          echo "error".$sql."<br>".mysqli_error($con);
}
mysqli_close($con);

    
    


}
    
     
    ?>


   
    
