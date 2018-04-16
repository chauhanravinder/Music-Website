 
 <script type="text/javascript">
function xyz()
{


     if(document.form1.name.value.length<1 || document.form1.name.value=="Name")
	{
		alert("please fill your name");
		return false;
	}
	 if(document.form1.mobile.value.length<5 || document.form1.mobile.value=="Mobile number")
	{
		alert("please fill your Mobile number");
		return false;
	}
	
	
	if(document.form1.email.value.length<1||document.form1.email.value.indexOf("@")<3||document.form1.email.value.indexOf(".")<4)
	{
		alert("please fill proper email id");
		return false;
	}
	
     if(document.form1.pass.value.length<1 || document.form1.pass.value=="Password")
	{
		alert("please fill your password");
		return false;
	}
	
}
function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
	

</script>