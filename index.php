<?php require_once 'conf/db.php' ?>
<?php include 'inc/header/header.php' ?>

   <?php
        $erreur = null;
        if(!empty($_POST['email']) && !empty($_POST['pwd'])){

            $req1 = $db->prepare('SELECT id FROM admin WHERE email = ? AND pwd= ? AND role= "admin"');
            $req1->execute([$_POST['email'], $_POST['pwd']]);
            $admin = $req1->fetch();

            $req2 = $db->prepare('SELECT id FROM admin WHERE email = ? AND pwd= ? AND role= "edit"');
            $req2->execute([$_POST['email'], $_POST['pwd']]);
            $edit = $req2->fetch();
            

            if($admin){
                header('location: pages/admin/index.php');
            }

            elseif($edit){
                header('location: pages/edit/index.php');
            }

            else {
            $erreur = "Email ou Mot de passe Incorrecte";
            }
        } 

   ?>

    <div class="login-form">

    <?php if($erreur): ?>

        <div class="alert alert-danger text-center">
            <?= $erreur; ?>
        </div>

    <?php endif ?>
        
        <form action="" method="post">

            <h2 class="text-center">Connexion</h2>

            <div class="form-group">
                <input type="text" name="email" id="email" class="form-control" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="pwd" id="pwd" class="form-control" placeholder="Mot de passe" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Connexion</button>
            </div>

        </form>
    </div>

    <?php include 'inc/footer/index.php' ?>