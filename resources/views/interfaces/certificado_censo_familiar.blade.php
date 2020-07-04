<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <script>
    function habilitar(value) {
        if (value == true) {
            // habilitamos
            document.getElementById("segundo").disabled = true;
        } else if (value == false) {
            // deshabilitamos
            document.getElementById("segundo").disabled = false;
        }
    }

    var link = $("#to-toggle");
    $("#toggle").on("change", function() {
        if (this.checked) {
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

            <a href="" class="btn btn-sm btn-default"> <i class="fa fa-eye" aria-hidden="true" name="segundo"
                    id="segundo"></i>
                Ingresar Informacion Personal
            </a>
        </div>
    </form>
</body>

</html>


<html>

<head>
    <style>
    @page {
        margin: 0cm 0cm;
        font-family: Arial;
    }

    body {
        margin: 3cm 2cm 2cm;
    }

    header {
        position: fixed;
        top: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        background-color: #2a0927;
        color: white;
        text-align: center;
        line-height: 30px;
    }

    footer {
        position: fixed;
        bottom: 0cm;
        left: 0cm;
        right: 0cm;
        height: 2cm;
        background-color: #2a0927;
        color: white;
        text-align: center;
        line-height: 35px;
    }
    </style>
</head>

<body>
    <header>
        <h1>Styde.net</h1>
    </header>

    <main>
        <h1>Contenido</h1>
    </main>

    <footer>
        <h1>www.styde.net</h1>
    </footer>
</body>

</html>