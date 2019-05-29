<html>
<head>
    <script>
        function enviar() {
            var xmlhttp = new XMLHttpRequest();
            var dados = document.getElementById('texto');

            xmlhttp.onreadystatechange = retorno;

            xmlhttp.open("GET", "dados.php?dados=" + dados.value, true);
            xmlhttp.send();

            dados.value = '';
            return false;
        }

        function retorno() {
            if (this.readyState == 4 && this.status == 200) {
                     document.getElementById("retorno").innerText = this.responseText;
                }
        }

        function lerSempre(){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = retorno;
            xmlhttp.open("GET", "dados.php", true);
            xmlhttp.send();
            return false;
        }

        window.setInterval(lerSempre, 2);
    </script>
</head>
<body>
<form id="formularioTodo" onsubmit="return false;">
Entre com um texto:
    <input type="text" name="texto" id="texto"><br>
    <input type="button" onclick="enviar();" value="Enviar">
</form>
<br>
<div id="retorno"></div>
</body>
</html>