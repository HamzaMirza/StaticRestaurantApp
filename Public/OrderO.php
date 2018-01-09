<?php 
		$conn=mysqli_connect('localhost','root','','foodorder')
		
		
		/*	function done()
			{
				$query="SELECT * FROM `listing` WHERE id=2";
				$rs=mysqli_query($conn,$query);
				while($row=mysqli_fetch_assoc($rs))
				{
					$var= $row['date'];
					echo "$var";
				}
			}
		
	*/

?>
<?php 
		
			if(isset($_POST['GoToBill']))
			{
				echo "ggg";
				$qun=$_POST['Quantity1'];
				$query="insert into TransactionTable(Quantity) values ($qun);";
							if(mysqli_query($conn,$query))
								echo "<h1>Successfull</h1>";
							
				
			}
		
		function test_input($data) 
		{	
			$data = trim($data);
			$data = stripslashes($data);
			$data = htmlspecialchars($data);
			return $data;
		}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order Page</title>
	<link rel="stylesheet" href="css/Order.css" />
	<link rel="stylesheet" href="css/header.css">
</head>

<body onload="SetDate1();SetBill();">
	<div class="Wrapper">
		<header>
			<div> Food Portal </div>
			<p class="header">
				<a href="index.html"> Home</a>
				<a href="index.html#About"> About</a>
				<a href="index.html#Services"> Services</a>
			</p>

		</header>
		<div id="Body">

			<h1><span style="position:absolute; top:70px; left:480px; font-size:50px;"> Ordering Palace </span>
			</h1>
			<div class="bill">
				
				<label for="Date">Date </label>
				<input type="text" name="Date"  id="DateField" readonly/>
			</div>
			<div class="slotHeadings">
				<span style="margin-left:150px;margin-right:20px;">Food Item</span>
				<span style="margin-left:150px;margin-right:20px;">QTY</span>
			
			</div>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
			<div class="Slots">
				<span style="margin-left:20px;margin-right:20px;">Sl No 1</span>
				<select id="Food_Cmb1" name="Food_Cmb1">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
	</select>
				<input type="text" name="Quantity1" value="" id="Quan" style="margin-left:50px;" />
	
	
				<br/>
				<br />
				<span style="margin-left:20px;margin-right:20px; ">Sl No 2</span>
		<select id="Food_Cmb2" name="Food_Cmb2">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
			
				<br/>		<br />
				<span style="margin-left:20px;margin-right:20px;">Sl No 3</span>
			<select id="Food_Cmb3" name="Food_Cmb3">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />

						<br />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 4</span>
			<select id="Food_Cmb4" name="Food_Cmb4">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
						<br />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 5</span>
			<select id="Food_Cmb5" name="Food_Cmb5">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
					<br />

				<br />
				<span style="margin-left:20px;margin-right:20px;">Sl No 6</span>
			<select id="Food_Cmb6" name="Food_Cmb6">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
		<br />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 7</span>
			<select id="Food_Cmb7" name="Food_Cmb7">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
					<br />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 8</span>
			<select id="Food_Cmb8" name="Food_Cmb8">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
						<br />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 9</span>
			<select id="Food_Cmb9" name="Food_Cmb9">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
						<br />
				<br/>
		<span style="margin-left:20px;margin-right:12px;">Sl No 10</span>
		<select id="Food_Cmb10" name="Food_Cmb10">
				<option> - </option>
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo "<option>$var</option>";
							}
					
					
					?>
				<input type="text" name="q10" value="" id="Quan" style="margin-left:50px;" />
			<br />
			</div>
			</form>
			<div class="Total">
				<input type="submit" name="GoToBill" value="Check out" style="height:25px; 	width:100px; " />

			</div>
		</div>
	</div>

	
	
	<script  type="text/javascript">
	
		
		function SetDate1()
		{
			var d=new Date();
			document.getElementById("DateField").value=""+d.getDate()+"/"+(1+d.getMonth())+"/"+d.getFullYear();
		}
	</script>
			
</body>

</html>