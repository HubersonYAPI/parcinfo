<?php require_once '../../conf/db.php' ?>
<?php include '../../inc/header/admin.php' ?>

<?php
if(!empty($_POST["add_record"])){

    $sql = "INSERT INTO `admin` (`mat`, `name`, `firstName`, `email`, `pwd`, `phone`, `role`) VALUES (:mat, :name, :firstName, :email, :pwd, :phone, :role)";
    $req = $db->prepare($sql);
    
    $result = $req->execute(array(
        ':mat' => $_POST['mat'],
        ':name' => $_POST['name'],
        ':firstName' => $_POST['firstName'],
        ':email' => $_POST['email'],
        ':pwd' => $_POST['pwd'],
        ':phone' => $_POST['phone'],
        ':role' => $_POST['role'],
        
    ));
    
    if(!empty($result)){
        header('location: admin.php');}
    
    }
?>



    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
                <a href="admin.php"><button type="submit" class="btn btn-primary btn-block">Retour à la liste</button></a>
            </div>
        </div>
    </div>>

    <div class="edit-form">
        <form name="frmAdd" action="" method="POST" class="edit">
            <h2>Ajouter Un Admin</h2>

            <hr class="w-50 bg-dark">

            <div class="form-group">
                Matricule: <input type="text" class="form-control" name="mat" id="mat">
            </div>
            <div class="form-group">
                Nom: <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="form-group">
                Prénoms: <input type="text"class="form-control"  name="firstName" id="firstName">
            </div>
            <div class="form-group">
                Email: <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
                Mot de Passe: <input type="password" class="form-control" name="pwd" id="pwd">
            </div>
            <div class="form-group">
                Telephone: <input type="text" class="form-control" name="phone" id="phone">
            </div>
            <div class="form-group">
                Rôle:   <select name="role" class="form-control" id="role" >
                            <option value="admin">Admin</option>
                            <option value="edit">Editeur</option>
                        </select>
            </div>

            <div class="form-group">
                <input name="add_record" type="submit" class="btn btn-primary btn-block" value="Ajouter">
            </div>

        </form>
    </div>



<?php include '../../inc/footer/index.php' ?>
<?php include '../../inc/footer/footer.php' ?>