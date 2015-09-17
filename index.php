<head>
<meta charset="utf-8">
<html>
<title>A simple math calculator</title>
<!--load the jquery librray from google, keep it on top to load it first as its need to load other things-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

<!--load our script for the form we made-->
<script type="text/javascript" src="js/processCalculation.js"></script>
</head>

<body>

<form id="calc" method="post"> 
Firstnumber: <input name="num1" type="text" /><br>
Mathematicl Action: 
<br><input type="radio" name="operation" value="Add" checked>Add
  <br>
  <input type="radio" name="operation" value="Subtract">Subtract
   <br>
  <input type="radio" name="operation" value="Multiply">Multiply
   <br>
  <input type="radio" name="operation" value="Divide">Divide
  <br>
Secondnumber: <input name="num2" type="text" /> 
<input type="submit" />
</form>
<p id="result"></p>


</body>
</html>