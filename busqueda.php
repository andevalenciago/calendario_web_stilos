<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
    text-align:center;
  font-family: Arial;
}

* {
  box-sizing: border-box;
}

input[type=text] {
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 80%;
  background: #f1f1f1;
  border-radius: 10px;
}

button {
  float: left;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none;
  cursor: pointer;
  border-radius: 10px;
}
 button:hover {
  background: #0b7dda;
}

::after {
  content: "";
  clear: both;
  display: table;
}
</style>
</head>
<body>
<h2>Usuarios registrados</h2>
<form class="example" action="/action_page.php" style="margin:auto;max-width:300px">
  <input type="text" placeholder="Search.." name="buscar">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</body>
</html> 