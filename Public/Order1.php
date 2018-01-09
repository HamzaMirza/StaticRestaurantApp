<?php 
		if($conn=mysqli_connect('localhost','root','','foodorder'))
			echo "<script> alert(\"Successful\")</script>";
		
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
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Order Page</title>
	<link rel="stylesheet" href="css/Order.css" />
	<link rel="stylesheet" href="css/header.css">
</head>

<body onload="SetDate1();">
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
				<label for="BillNo">Bill No </label>
				<input type="text" name="BillNo" onLoad="" id="BillNo" readonly/>
				
				<label for="Date">Date </label>
				<input type="text" name="Date"  id="DateField" readonly/>
			</div>
			<div class="slotHeadings">
				<span style="margin-left:150px;margin-right:20px;">Food Item</span>
				<span style="margin-left:150px;margin-right:20px;">QTY</span>
				<span style="margin-left:130px;margin-right:20px;">Category</span>
				<span style="margin-left:80px;">MRP</span>
				<span style="margin-left:50px;">Amount(Retail)</span>
			</div>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="mainForm">
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
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;" id="Category_Cmb1" onchange="changeTest()">
		<option> - </option>
					<?php 
							$query="SELECT * FROM categories";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['CategoryName'];
								echo "<option>$var</option>";
							}
					
					
					?>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 2</span>
				<select>
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;">
		<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" /><input type="button" name="Remove" value="Remove"
					style="height:25px; 	width:100px;" />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 3</span>
				<select>
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;">
	<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 4</span>
				<select>
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;">
		<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 5</span>
				<select>
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;">
		<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />

				<br />
				<span style="margin-left:20px;margin-right:20px;">Sl No 6</span>
				<select>
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;">
		<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 7</span>
				<select>
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;">
		<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 8</span>
				<select>
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;">
		<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />
				<br/>
				<span style="margin-left:20px;margin-right:20px;">Sl No 9</span>
				<select>
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
				<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
				<select style="margin-left:50px; width:200px;">
	<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />
				<br/>
		<span style="margin-left:20px;margin-right:12px;">Sl No 10</span>
		<select id="Cmb10_food">
		<option> 1</option>
		<option> 2</option>
		<option> 3</option>
	</select>
		<input type="text" name="Quantity" value="" id="Quan" style="margin-left:50px;" />
	<select style="margin-left:50px; width:200px;" id="Cmb10" onchange="changeTest()">
		<option>Starters</option>
		<option> Burgers</option>
		<option> Italian</option>
		<option value="">BarbeQue</option>
		<option > Deserts</option>
		<option value="">Sea Food</option>
	</select>
				<input type="text" name="Rate" value="" id="Quan" style="margin-right:20px;margin-left:20px;" />
				<input type="text" name="Amount" value="" id="Quan" style="width:100px;" />
				<input type="button" name="Remove" value="Remove" style="height:25px; 	width:100px;" />
			</div>
			</form>
			<div class="Total">
				<input type="button" name="GoToBill" value="Go To Billing" style="height:25px; 	width:100px; " />
				<input type="button" name="Total" value="Calculate Total" style="height:25px; 	width:100px; margin-left:175px;" />
				<input type="text" name="TotalAmount" value="" style="width:100px;" readonly/>
			</div>
		</div>
	</div>

	
	<?php 
										$f1=$_POST['Food_Cmb1'];
										$query="SELECT * FROM food where FoodName=".$f1;
										echo '<script type="text/javascript">alert("'.$query.'");</script>';
										
							
							//$conn=mysqli_connect('localhost','root','','foodorder');
						//$query="SELECT * FROM food where FoodName=";
						//$query= $query+""+food[0].options[food[0].selectedIndex].text;
						//echo $query;
							//
							//echo ("$query");
							
					?>
	
	<script  type="text/javascript">
		
	function changeTest() 
		{
			var cat = new Array(10);
			var food = new Array(10);
			cat[0]= document.getElementById("Category_Cmb1");
			food[0]=document.getElementById("Food_Cmb1");
			//alert(cat[0].options[cat[0].selectedIndex].text);
			//alert(food[0].options[food[0].selectedIndex].text);
			
			
				var S="	<?php 
								if(isset($_POST['Food_Cmb1']))
								{
									
											$f1=$_POST['Food_Cmb1'];
										     $query="SELECT * FROM food where FoodName= test_input($f1)";
										     echo '<script type="text/javascript">alert("'."$query".'");</script>';
									
								}
							//$conn=mysqli_connect('localhost','root','','foodorder');
						//$query="SELECT * FROM food where FoodName=";
						//$query= $query+""+food[0].options[food[0].selectedIndex].text;
						//echo $query;
							//
							//echo ("$query");
								function test_input($data) 
								{	
									$data = trim($data);
									$data = stripslashes($data);
									//$data = htmlspecialchars($data);
									return $data;
								}
					
					?> "; 
					
		} 
		function SetDate1()
		{
			var d=new Date();
			document.getElementById("DateField").value=""+d.getDate()+"/"+(1+d.getMonth())+"/"+d.getFullYear();
		}
	</script>
			
</body>

</html>