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
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  
}

#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}

#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}

#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}

#myTable tr {
  border-bottom: 1px solid #ddd;
}

#myTable tr.header, #myTable tr:hover {
  background-color: #f1f1f1;
}
</style>
</head>
<body>

<h2>Friend List</h2>

<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:60%;">Name</th>
    <th style="width:40%;">Message</th>
  </tr>
  <tr>
    <td>Antoine Griezmann</td>
    <td>
        <a href="frndreply.php">
      <input type="submit" value="Message">
        </a>
    </td>
  </tr>
  <tr>
    <td>Paul Pogba</td>
    <td><a href="frndreply.php">
      <input type="submit" value="Message">
        </a></td>
  </tr>
  <tr>
    <td>Blaise Matuidi</td>
      <td><a href="frndreply.php">
      <input type="submit" value="Message">
        </a></td>
  </tr>
  <tr>
    <td>Lucas Hernandez</td>
      <td><a href="frndreply.php">
      <input type="submit" value="Message">
        </a></td>
  </tr>
  <tr>
    <td>Corentin Tolisso</td>
     <td><a href="frndreply.php">
      <input type="submit" value="Message">
        </a></td>
  </tr>
  <tr>
    <td>Steven Nzonzi</td>
      <td><a href="frndreply.php">
      <input type="submit" value="Message">
        </a></td>
  </tr>
  <tr>
    <td>Florian Thauvin</td>
      <td><a href="frndreply.php">
      <input type="submit" value="Message">
        </a></td>
  </tr>
  <tr>
    <td>Ousmane Dembele</td>
     <td><a href="frndreply.php">
      <input type="submit" value="Message">
        </a></td>
  </tr>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>

<a href="profile.php">
  <input type="submit" value="Back">
</a>
<a href="home.php">
  <input type="submit" value="Home">
</a>
<a href="login.php">
  <input type="submit" value="Logout">
</a>


</body>
</html>
