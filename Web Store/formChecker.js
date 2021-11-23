function checker()
{
	if(parseInt(document.getElementById("chedQ").value) < 0)
	{
		alert("The Quantities Cannot Go Below Zero");
		return false;
	}
	if(parseInt(document.getElementById("wchedQ").value) < 0)
	{
		alert("The Quantities Cannot Go Below Zero");
		return false;
	}
	if(parseInt(document.getElementById("harvQ").value) < 0)
	{
		alert("The Quantities Cannot Go Below Zero");
		return false;
	}

	if(document.getElementById("password").value == "")
	{
		alert("Please insert a password");
		return false;
	}

	if(!(document.getElementById("free").checked) && !(document.getElementById("overnight").checked) && !(document.getElementById("3day").checked))
	{
		alert("Please select a shipping option");
		return false;
	}
		
}
