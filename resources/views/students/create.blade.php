<!DOCTYPE html>
<html>
<head>
	<title></title>
	
	<link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
	<form>
	<label for="name">Name:</label>	
	<input type="text" id= name required>

	 <br><br>

	<label for="email">Roll:</label>
	<input type="text" id="Roll" required>
	    
	 <br><br>

	 <label for="email">Faculty:</label>
	<input type="text" name="Faculty" required>
	    
	<br><br>

	<input type="submit" value="Save" >
	<input type="reset" value="Cancel">

	</form>
	<script type="text/javascript" src="{{asset('js/script.js')}}"></script>

</body>

</html>