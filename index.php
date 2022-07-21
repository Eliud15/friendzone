<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Friend zone</title>
</head>


<body>
    <header>
         
            <h1 class="lenguaje">
                Friends Zone
               
            </h1> 
    </header>
   <main>
     <?php
     $conectar=mysqli_connect("localhost","id19246385_mensajesusuario","qO8SV6u<z)DdH=D9","id19246385_mensaje");
        $res=mysqli_query($conectar,'SELECT mensaje FROM mensajes2');
        while ($mensajes=mysqli_fetch_object($res)) {
        ?> 
       
            <h4>
                <?php echo($mensajes->mensaje); ?> 
            </h4>
          <br>
          <br>
    <?php
        }
    ?> 
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    
   </main>
   <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <footer>
        <form action="enviarmensaje.php" method="post">
             <input type="text" id="mensaje" name="mensaje" placeholder="Escribe aqui tu mensaje" autocomplete="off"> 
             <input type="submit" name="enviar" id="enviar" value="Enviar">
        </form>
       
    </footer>

    <script>

var enviar=document.querySelector("#enviar");
enviar.addEventListener("click",(e)=>{
    var mensaje=document.querySelector("#mensaje");
    if (mensaje.value.length<=0) {
        e.preventDefault();
        alert("No puedes dejar el mensaje en blanco")
    }
    else if(mensaje.value.length>=9000){
        e.preventDefault();
        alert("No puedes Escribir mas de 9.000 caracteres en el mensaje")
    }
    else{
        location.reload("http://localhost/friendszone/index.php")
    }
});
        setTimeout(function(){
           
            location.reload("http://127.0.0.1:50013/index.html")
        },1000 * 10)
</script>
</body>
</html>