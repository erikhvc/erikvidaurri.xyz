<!DOCTYPE html>
<html>
<head>
<title>Erik Vidaurri</title>
<style>
body {
	background-image: url('thumb-1920-689021.jpg');
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: 100% 100%;
}
h1 {
  text-align: center;
  color: white;
  font-size: 50px;
}

h2 {
  text-align: center;
}

h3 {
  left: 10;
  bottom: 0;
  position: absolute;
  color: white;
  font-size: 30px;
}

</style>
</head>
<body>

<h1>Welcome to Erik Vidaurri Site</h1>

<script>
function showPage(str) {
	if (str=="") {
    	return;
  	} else if (str=="1") {
    	location.replace("https://points.erikvidaurri.xyz/")
    } else if (str=="2") {
    	location.replace("https://headers.erikvidaurri.xyz/")
    } else if (str=="3") {
    	location.replace("https://httpbin.erikvidaurri.cf/")
    } else if (str=="4") {
        location.replace("https://erikvidaurri.cf/")
    }
}
</script>

<h2>
<form>
	<select name="users" onchange="showPage(this.value)">
		<option value="">Select an Application:</option>
		<option value="1">Vidaurri's Points</option>
		<option value="2">Headers</option>
		<option value="3">Httpbin</option>
		<option value="4">Headers noncf</option>
	</select>
</form>
</h2>

<h3>ev3</h3>

</body>
</html>