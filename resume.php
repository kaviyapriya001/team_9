<html>
<head>
<style>
body {
  background-color: #ccffff;
}
</style>
</head>
<body>
<h2 style="font-family:courier;">Here is what we get from you:</h2>
<ul>
<li>I am <?php echo $_GET["name"]; ?>.<br><br></li>
 <li>I am from <?php echo $_GET["place"]; ?><br><br></li>
<li> Hospital that I need to consult is <?php echo $_GET["hospital"]; ?>.<br><br></li>
 <li>Under the department <?php echo $_GET["dept"]; ?>,<?php echo $_GET["time"]; ?> is the suitable time.<br><br></li>
<li>I am visiting <?php echo $_GET["count"]; ?> time.<br><br></li><li>The Specialist name is <?php echo $_GET["specialist"]; ?>.<br><br></li>

</body>
</html>