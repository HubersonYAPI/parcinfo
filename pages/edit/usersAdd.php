<?php require_once '../../conf/db.php' ?>
<?php include '../../inc/header/users.php' ?>

<?php
if(!empty($_POST["add_record"])){

    $sql = "INSERT INTO `users` (`mat`, `names`, `service`, `poste`, `phone`) VALUES (:mat, :names, :service, :poste, :phone)";
    $req = $db->prepare($sql);
    
    $result = $req->execute(array(
        ':mat' => $_POST['mat'],
        ':names' => $_POST['names'],
        ':service' => $_POST['service'],
        ':poste' => $_POST['poste'],
        ':phone' => $_POST['phone'],
        
    ));
    
    if(!empty($result)){
        header('location: users.php');}
    
    }
   
?>



    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
                <a href="users.php"><button type="submit" class="btn btn-primary btn-block">Retour à la liste</button></a>
            </div>
        </div>
    </div>>

    <div class="edit-form">
        <form name="frmAdd" action="" method="POST" class="edit">
            <h2>Ajouter Un Utilisateur</h2>

            <hr class="w-50 bg-dark">

            <div class="form-group">
                Matricule: <input type="text" class="form-control" name="mat" id="mat">
            </div>
            <div class="form-group">
                Nom & Prénoms: <input type="text" class="form-control" name="names" id="names">
            </div>
            <div class="form-group">
                Services: <select name="service" class="form-control" id="service" >
                        <option value="Administration">Administration</option>
                        <option value="Comptable">Comptable</option>
                        <option value="Informatique">Informatique</option>
                        </select>
            </div>
            <div class="form-group">
                Poste: <input type="text" class="form-control" name="poste" id="poste">
            </div>
            <div class="form-group">
                Telephone: <input type="text" class="form-control" name="phone" id="phone">
            </div>
            

            <div class="form-group">
                <input name="add_record" type="submit" class="btn btn-primary btn-block" value="Ajouter">
            </div>

        </form>
    </div>



<?php include '../../inc/footer/index.php' ?>
<?php include '../../inc/footer/footer.php' ?>