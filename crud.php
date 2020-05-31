<?php

	session_start();
	if (isset($_SESSION['name'])) {
  
  }
  else{
header("location: login.php");
    
  }

	if(isset($_COOKIE['uname']))
	{

	}
	else
	{		
		header("location: login.php");
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Add , Edit , Remove HTML Table Row</title>
	<meta charset="windows-1252">
	<meta name="viewport" content="width=device-width ,initial-scale=1.0">

	<style> 
		.container{ overflow: hidden }
		.tab{float: left;} 
		.tab-2{margin-left: 50px}
		.tab-2 input{display: block;margin-bottom: 10px}
		tr{transition: all.25s ease-in-out}
		tr:hover{background-color: #EEE}
	</style>
</head>
<body>
	<div class="container">
		<div class="tab tab-1">
			<table id="table" border="1">
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Age</th>
				</tr>
				
			</table>
		</div>
	
		<div class="tab tab-2">
			First Name: <input type="text" name="fname" id="fname"> 
			Last Name: <input type="text" name="lname" id="lname">
			Age: <input type="text" name="age" id="age">

				<button onclick="addHtmlTableRow()">Add</button>
				<button onclick="editHtmlTableSelectedRow()">Update</button>
			
				<button onclick="removeSelectedRow()">Remove</button>
		</div>
	</div>	
		<script> 
			var rIndex , 
				table=document.getElementById("table");
			function addHtmlTableRow()
			{
				//get the table by id
				//create a new row and cells
				//get value from input text
				//set the value into row cell's
				var newRow = table.insertRow(table.length),
					cell1 = newRow.insertCell(0),
					cell2 = newRow.insertCell(1),
					cell3 = newRow.insertCell(2),
					fname= document.getElementById("fname").value;
					lname= document.getElementById("lname").value;
					age= document.getElementById("age").value;

				cell1.innerHTML = fname;
				cell2.innerHTML = lname;
				cell3.innerHTML = age;
				selectedRowToInput();

			}

			
			function selectedRowToInput()
			{
				
				for (var i = 1; i < table.rows.length; i++)
				 {
				
				
					table.rows[i].onclick=function()
					{
						rIndex=this.rowIndex;
						
						document.getElementById("fname").value=this.cells[0].innerHTML;
						document.getElementById("lname").value=this.cells[1].innerHTML;
						document.getElementById("age").value=this.cells[2].innerHTML;
					};
				}
			}
			selectedRowToInput();

			function editHtmlTableSelectedRow()
			{
				var fname = document.getElementById("fname").value;
				var lname = document.getElementById("lname").value;
				var age = document.getElementById("age").value;

				table.rows[rIndex].cells[0].innerHTML=fname;
				table.rows[rIndex].cells[1].innerHTML=lname;
				table.rows[rIndex].cells[2].innerHTML=age;

			}



			function removeSelectedRow()
			{
				table.deleteRow(rIndex);
			}

		</script>
<a href="admin.php">Back</a><br>
<a href="admin.php">Home</a>
</body>
</html>