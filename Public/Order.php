<?php 
		$conn=mysqli_connect('localhost','root','','foodorder');
		
		
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
				$query="insert into TransactionTable(Quantity) values (".$qun.");";
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
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript">

   function selectedchanged() {
    var selectBox1 = document.getElementById("Food_Cmb1");
    var selectedValue1 = selectBox1.options[selectBox1.selectedIndex].value;
     var selectBox2 = document.getElementById("Food_Cmb2");
    var selectedValue2 = selectBox2.options[selectBox2.selectedIndex].value;
     var selectBox3 = document.getElementById("Food_Cmb3");
    var selectedValue3 = selectBox3.options[selectBox3.selectedIndex].value;
     var selectBox4 = document.getElementById("Food_Cmb4");
    var selectedValue4 = selectBox4.options[selectBox4.selectedIndex].value;
     var selectBox5 = document.getElementById("Food_Cmb5");
    var selectedValue5 = selectBox5.options[selectBox5.selectedIndex].value;
     var selectBox6 = document.getElementById("Food_Cmb6");
    var selectedValue6 = selectBox6.options[selectBox6.selectedIndex].value;
     var selectBox7 = document.getElementById("Food_Cmb7");
    var selectedValue7 = selectBox7.options[selectBox7.selectedIndex].value;
     var selectBox8 = document.getElementById("Food_Cmb8");
    var selectedValue8 = selectBox8.options[selectBox8.selectedIndex].value;
     var selectBox9 = document.getElementById("Food_Cmb9");
    var selectedValue9 = selectBox9.options[selectBox9.selectedIndex].value;
     var selectBox10 = document.getElementById("Food_Cmb10");
    var selectedValue10 = selectBox10.options[selectBox10.selectedIndex].value;

    // SAME FOR Quantity

    
    var quantity1 = $('#quan1').val();
    var quantity2 = $('#quan2').val();
    var quantity3 = $('#quan3').val();
    var quantity4 = $('#quan4').val();
    var quantity5 = $('#quan5').val();
    var quantity6 = $('#quan6').val();
    var quantity7 = $('#quan7').val();
    var quantity8 = $('#quan8').val();
    var quantity9 = $('#quan9').val();
    var quantity10 = $('#quan10').val();
    

    $.post('Order.php',{postselectedValue1:selectedValue1,postselectedValue2:selectedValue2,postselectedValue3:selectedValue3,postselectedValue4:selectedValue4,postselectedValue5:selectedValue5,postselectedValue6:selectedValue6,postselectedValue7:selectedValue7,postselectedValue8:selectedValue8,postselectedValue9:selectedValue9,postselectedValue10:selectedValue10,postquantity1:quantity1,postquantity2:quantity2,postquantity3:quantity3,postquantity4:quantity4,postquantity5:quantity5,postquantity6:quantity6,postquantity7:quantity7,postquantity8:quantity8,postquantity9:quantity9,postquantity10:quantity10},
    	function(data)
    	{
    		 $('#result').html(data);

    	});

  
   }


  </script>
  <?php 
  	$quantityofitem1 = "";
  	$postselectedValue1 = "";
  	
  	// YAHAN PAR && KARKE SB postquantities ka isset bna do aur postselectedValues ka bhi
  	//sub ka alag if statement bni chahye kyn ke hosakta hai kuch boxes selected na hoon
  	// ya phr loop lagado

			if ((isset($_POST['postquantity1'])) && (isset($_POST['postselectedValue1'])))    
			{	     
				$itemname1 = $_POST['postselectedValue1'];
				$quantityofitem1 = $_POST['postquantity1'];
				if($itemname1!="-" && $quantityofitem1!="")
				{
				
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname1."','".$quantityofitem1."')";	
				mysqli_query($conn,$query);
				
				}
			}   
					if ((isset($_POST['postquantity2'])) && (isset($_POST['postselectedValue2'])))    
			{	   
				$itemname2 = $_POST['postselectedValue2'];
				$quantityofitem2 = $_POST['postquantity2'];
				if($itemname2!="-" && $quantityofitem2!="")
				{
					
				
				// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname2."','".$quantityofitem2."')";	
				mysqli_query($conn,$query);
				}
				
				
			}  
							if ((isset($_POST['postquantity3'])) && (isset($_POST['postselectedValue3'])))    
			{	     
				$itemname3 = $_POST['postselectedValue3'];
				$quantityofitem3 = $_POST['postquantity3'];
				if($itemname3!="-" &&$quantityofitem3!="")
				{
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname3."','".$quantityofitem3."')";	
				mysqli_query($conn,$query);
				
				}

			}  
			
								if ((isset($_POST['postquantity4'])) && (isset($_POST['postselectedValue4'])))    
			{	     
				$itemname4 = $_POST['postselectedValue4'];
				$quantityofitem4 = $_POST['postquantity4'];
				if($itemname4!="-" &&$quantityofitem4!="")
				{	
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname4."','".$quantityofitem4."')";	
				mysqli_query($conn,$query);
				
				
			} 
			} 
							if ((isset($_POST['postquantity5'])) && (isset($_POST['postselectedValue5'])))    
			{	     
				$itemname5 = $_POST['postselectedValue5'];
				$quantityofitem5 = $_POST['postquantity5'];
				if($itemname5!="-" &&$quantityofitem5!="")
				{
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname5."','".$quantityofitem5."')";	
				mysqli_query($conn,$query);
				}
		
			}
			
			
			if ((isset($_POST['postquantity10'])) && (isset($_POST['postselectedValue10'])))    
			{	     
				$itemname10 = $_POST['postselectedValue10'];
				$quantityofitem10 = $_POST['postquantity10'];
				if($itemname10!="-" &&$quantityofitem10!="")
				{
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname10."','".$quantityofitem10."')";	
				mysqli_query($conn,$query);
				}
			
			}   
					if ((isset($_POST['postquantity9'])) && (isset($_POST['postselectedValue9'])))    
			{	     
				$itemname9 = $_POST['postselectedValue9'];
				$quantityofitem9 = $_POST['postquantity9'];
				if($itemname9!="-" &&$quantityofitem9!="")
				{
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname9."','".$quantityofitem9."')";	
				mysqli_query($conn,$query);
				}
				
			}  
							if ((isset($_POST['postquantity8'])) && (isset($_POST['postselectedValue8'])))    
			{	     
				$itemname8 = $_POST['postselectedValue8'];
				$quantityofitem8 = $_POST['postquantity8'];
				if($itemname8!="-" &&$quantityofitem8!="")
				{
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname8."','".$quantityofitem8."')";	
				mysqli_query($conn,$query);
				
			
			}  
			}
								if ((isset($_POST['postquantity7'])) && (isset($_POST['postselectedValue7'])))    
			{	     
				$itemname7 = $_POST['postselectedValue7'];
				$quantityofitem7 = $_POST['postquantity7'];
				if($itemname7!="-" &&$quantityofitem7!="")
				{
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname7."','".$quantityofitem7."')";	
				mysqli_query($conn,$query);
				
				
			}  }
			if ((isset($_POST['postquantity6'])) && (isset($_POST['postselectedValue6'])))    
			{	     
				$itemname6 = $_POST['postselectedValue6'];
				$quantityofitem6 = $_POST['postquantity6'];
				if($itemname6!="-" &&$quantityofitem6!="")
				{
  	// YAHAN PR APNE TABLE KE LIHAZ SE SQL QUERY LIKHDO ITEMNAME tabel daal Do 
				$query="INSERT INTO TransactionTable (FoodName,Quantity) VALUES ('".$itemname6."','".$quantityofitem6."')";	
				mysqli_query($conn,$query);
				}
			
			}
			
	
   ?>
</head>

<body onload="SetDate1();SetBill();">
	<div class="Wrapper">
		<header>
			<div> Food Portal </div>
			<br><br><br>
			
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
				
			<!-- SELECT THIS BOX -->

				<span style="margin-left:20px;margin-right:20px;">Sl No 1</span>
				<select id="Food_Cmb1" name="Food_Cmb1">
				<option> - </option>
				<option value="example">example</option>;
					<?php 
							$query="SELECT * FROM food";
							$rs=mysqli_query($conn,$query);
							while($row=mysqli_fetch_assoc($rs))
							{
							   $var= $row['FoodName'];
								echo '<option value="'.$var.'">'.$var.'</option>';

							}
					
					
					?>
	</select>
				<input type="text"  id="quan1" style="margin-left:50px;" />
	
	
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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="quan2" style="margin-left:50px;" />
			
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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="quan3" style="margin-left:50px;" />

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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="quan4" style="margin-left:50px;" />
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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="quan5" style="margin-left:50px;" />
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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="quan6" style="margin-left:50px;" />
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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="quan7" style="margin-left:50px;" />
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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="quan8" style="margin-left:50px;" />
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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="Quantity" value="" id="quan9" style="margin-left:50px;" />
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
								echo "<option>".$var."</option>";
							}
					
					
					?>
				<input type="text" name="q10" value="" id="quan10" style="margin-left:50px;" />
			<br />
			</div>
			</form>
			<div class="Total">
				<input type="submit" name="GoToBill" value="Check out" onclick="selectedchanged();" style="height:25px; 	width:100px; " />

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