<!DOCTYPE html>
<html lang="pt-BR">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Área Restrita</title>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <link rel="stylesheet" href="app/assets/css/style.css">

</head>
<body>
   <div class="wrapper fadeInDown">
      <div id="formContent">
         <div class="fadeIn first">
            <img src="app/assets/img/inventory.jpg" id="icon" alt="User Icon">
         </div>
         <form action="app/login.php" method="POST">
            
            <input type="text" id="email" name="email" placeholder="E-mail">

            <input type="password" id="senha" name="senha" placeholder="Senha">

            <input type="submit" class="fadeIn fourth" value="Log In">
         </form>
      </div>
   </div>
</body>
</html>