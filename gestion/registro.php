<?php 

require_once '../db/db.php';
require_once './session.php';


if(isset($_POST['create_user'])){

    //username
    $admin_name = $_POST['username'];

    //Datos generados. Nombre negocio + string aleatorio de 4 caracteres random
    $length = 4;
    $randomString = substr(str_shuffle('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ'),1,$length);

    $user_code = $username . "_" . $randomString;

    //email
    $admin_email = $_POST['email'];
    //password
    $password = $_POST['pddw'];
    //password confirm
    $password_conf = $_POST['pss_confirm'];

    $table = "admins";


    if (!filter_var($admin_email, FILTER_VALIDATE_EMAIL)) {
        $emailConfirm = "Invalid email format";
    }else{

        if($password == $password_conf){

            //Check if username exists
            $usr_search = $pdo->prepare("SELECT COUNT(*) AS count FROM $table WHERE admin_name=?");
            $usr_search->execute(array($username));

            //Username
            while ($row = $usr_search->fetch(PDO::FETCH_ASSOC)) {
                $nombre_usuario_count = $row["count"];
            }

            //Check if email exists
            $email_search = $pdo->prepare("SELECT COUNT(*) AS count FROM $table WHERE admin_email=?");
            $email_search->execute(array($email));

            //Email
            while ($row = $email_search->fetch(PDO::FETCH_ASSOC)) {
                $email_count = $row["count"];
            }

            if($nombre_usuario_count > 0){
                echo "Username not availiable";
            }else{

                if($email_count > 0){
                    echo "Email already exists";
                }else{
                    $emailConfirm = "User registered";

                    $creatoroData = [
                        'admin_email' => $admin_email,
                        'admin_name' => $admin_name,
                        'admin_pss' => password_hash($password, PASSWORD_BCRYPT)
                    ];


                    //Insert into users table
                    $registro_sql = "INSERT INTO $table (admin_email, admin_name, admin_pss) VALUES( :admin_email, :admin_name, :admin_pss)";
                    $registro_save = $pdo->prepare($registro_sql);
                    $registro_save->execute($creatoroData);
                    
                    
                    header("Location: ./admins.php");
                }
            }

        }else{
            echo "Passwords dont match";
        }

    }

    echo $emailConfirm;

}


?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="" type="image/x-icon" />
    <title>Register</title>
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
            <img class="login-logo" src="" alt="register_img" />
          </div>

          <form method="post" action="">

          <div class="field">
              <label class="label">Email</label>
              <div class="control has-icons-right">
                <input name="email" class="input" type="text" />
                <span class="icon is-small is-right">
                  <i class="fa fa-user"></i>
                </span>
              </div>
            </div>

            <div class="field">
              <label class="label">Username</label>
              <div class="control has-icons-right">
                <input name="username" class="input" type="text" />
                <span class="icon is-small is-right">
                  <i class="fa fa-user"></i>
                </span>
              </div>
            </div>

            <div class="field">
              <label class="label">Password</label>
              <div class="control has-icons-right">
                <input name="pddw"  class="input" type="password" />
                <span class="icon is-small is-right">
                  <i class="fa fa-key"></i>
                </span>
              </div>
            </div>

            <div class="field">
              <label class="label">Password</label>
              <div class="control has-icons-right">
                <input name="pss_confirm" class="input" type="password" />
                <span class="icon is-small is-right">
                  <i class="fa fa-key"></i>
                </span>
              </div>
            </div>

            <div class="has-text-centered">
              <button name="create_user" class="button is-vcentered is-primary is-outlined">Registrar</button>
            </div>

          </form>

        </section>
      </div>
    </div>
  </body>
</html>
