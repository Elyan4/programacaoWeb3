<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="../css/styleLogin.css" />
    <script src="js/ie-emulation-modes-warning.js"></script>

    <title>Login</title>
  </head>
  <body>
    <div>
      <h1 id="Titulo">Login</h1>
    </div>
    <div>
      <form>
        <fieldset class="grupo">
          <div class="campo">
            <label>Insira seu email</label>
            <input type="email" name="email" id="email" placeholder="email" />
          </div>

          <div class="campo">
            <label>Insira seu senha</label>
            <input
              type="text"
              name="senha"
              id="senha"
              placeholder="Insira sua senha"
            />
          </div>
        </fieldset>
        <button class="confirmar" type="submit" onsubmit="">confirmar</button>
      </form>
      <p class="text-center text-danger">
			<?php if(isset($_SESSION['loginErro'])){
				echo $_SESSION['loginErro'];
				unset($_SESSION['loginErro']);
			}?>
		</p>
		<p class="text-center text-success">
			<?php 
			if(isset($_SESSION['logindeslogado'])){
				echo $_SESSION['logindeslogado'];
				unset($_SESSION['logindeslogado']);
			}
			?>
		</p>
    </div>
  </body>
</html>
