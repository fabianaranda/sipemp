
 
      
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<script>
		function habilitar(value)
		{
			if(value==true)
			{
				// habilitamos
				document.getElementById("segundo").disabled=true;
			}else if(value==false){
				// deshabilitamos
				document.getElementById("segundo").disabled=false;
			}
        }
        
        var link = $("#to-toggle");
$("#toggle").on("change", function() {
    if(this.checked) {
        link.attr("href", link.data("href"));
    } else {
        link.removeAttr("href");
    }
});
	</script>

<a id="to-toggle" data-href="http://google.com/">My Linkffffffffff</a><br />
<input id="toggle" type="checkbox"> 

</head>
 
<body>
<form>
	
	<div>
		<input type="checkbox" id="check" onchange="habilitar(this.checked);" checked> Habilitar/Deshabilitar
	</div>
	<div>
		<select name="segundo" id="segundo">
			<option value='1'>seleccion 1</option>
			<option value='2'>seleccion 2</option>
		</select>

        <a href=""   class="btn btn-sm btn-default" > <i class="fa fa-eye" aria-hidden="true" name="segundo" id="segundo" ></i>
                                                                            Ingresar Informacion Personal
                                                                     </a>
	</div>
</form>
</body>
</html>
 