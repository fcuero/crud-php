<style>
    form{
        background-color:LightGray;
        width:30%;
        height:300px;
        margin-left:10%;
        margin-right:10%;
        border:3px solid green;
    
    }
</style>
<html>  
    <body>  <br>
    <form id="loginForm"><br>
    <label for="username">Nombre de Usuario:</label>
    <input type="text" id="username" name="username"><br><br>
    
    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password" onmouseover="showPasswordAlert()" onmouseout="hidePasswordAlert()" required><br>
    
    
    <button type="button" id="submitButton">Enviar</button>
  </form>
  
  <script>
    document.getElementById("submitButton").addEventListener("click", function() {
      var username = document.getElementById("username").value;
      var password = document.getElementById("password").value;
      
      if (username.trim() === "" || password.trim() === "") {
        alert("Por favor, completa ambos campos.");
      } else {
        
        alert("Iniciando sesión para: " + username);
      }
    });
     
  </script>
</body>
</html> 
