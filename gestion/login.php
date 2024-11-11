<?php 

require_once '../db/db.php';

session_start();

if(isset($_SESSION['admin_name']) ){
	header("Location: ./index.php");
}

//require 'transactions/transactionsDb/db.php';

if(isset($_POST['login_credentials'])){

    if(!empty($_POST['admin_name']) && !empty($_POST['password'])):
	
        $records = $pdo->prepare('SELECT admin_name,admin_pss FROM admins WHERE admin_name = :admin_name');
        $records->bindParam(':admin_name', $_POST['admin_name']);
        $records->execute();
        $results = $records->fetch(PDO::FETCH_ASSOC);
    
        $message = '';
    
        if(count($results) > 0 && password_verify($_POST['password'], $results['admin_pss']) ){
    
            //session_start();
    
            $_SESSION['admin_name'] = $results['admin_name'];
            header("Location: ./index.php");
    
        } else {
            $message = '<div class="notification"><p>Usuario no registrado</p></div>';
        }
    
    endif;
    
}

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="" type="image/x-icon" />
    <title>Log In</title>
    <script src="../assets/js/particles.js"></script>
    <script src="../assets/js/main.js"></script>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.5.3/css/bulma.min.css"
    />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0"
    />
    <link rel="stylesheet" href="../assets/css/main.css" />
  </head>
  <body>
    <div class="columns is-vcentered">
      <div class="login column">
        <section class="section">
          <div class="has-text-centered">
            <img class="login-logo" src="" alt="login_img" />
          </div>

          <form action="" method="post">
            <div class="field">
              <label class="label">Username or email</label>
              <div class="control has-icons-right">
                <input name="admin_name" class="input" type="text" />
                <span class="icon is-small is-right">
                  <i class="fa fa-user"></i>
                </span>
              </div>
            </div>

            <div class="field">
              <label class="label">Password</label>
              <div class="control has-icons-right">
                <input name="password" class="input" type="password" />
                <span class="icon is-small is-right">
                  <i class="fa fa-key"></i>
                </span>
              </div>
            </div>
            <div class="has-text-centered">
              <button name="login_credentials" class="button is-vcentered is-primary is-outlined">Login</button>
            </div>
          </form>

        </section>
      </div>
    </div>
  </body>
</html>
