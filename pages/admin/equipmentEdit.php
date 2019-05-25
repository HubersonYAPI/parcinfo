<?php require_once '../../conf/db.php' ?>
<?php include '../../inc/header/equipment.php' ?>


<?php

if(!empty($_POST["save_record"])){
    $req = $db->prepare("UPDATE equipment SET code='".$_POST['code']."', type='".$_POST['type']."', name='".$_POST['name']."', model='".$_POST['model']."',   userName='".$_POST['userName']."'  WHERE id=" .$_GET["id"]);
    $result = $req->execute();
    if($result){
        header('location: equipment.php');
    }
    }
    
    $req = $db->prepare("SELECT * FROM equipment WHERE id=".$_GET["id"]);
    $req->execute();
    $result = $req->fetchAll();
?>




    <div class="container mt-4">
        <div class="row">
            <div class="col-sm-10"></div>
            <div class="col-sm-2">
                <a href="equipment.php"><button type="submit" class="btn btn-primary btn-block">Retour à la liste</button></a>
            </div>
        </div>
    </div>


    <div class="edit-form">
        <form name="frmAdd" action="" method="POST" class="edit">
            <h2>Modifier des Informations</h2>

            <hr class="w-50 bg-dark">

            <div class="form-group">
                Identifiant: <input type="text" class="form-control" name="code" id="code" value="<?= $result[0]['code'];?>" >
            </div>
            <div class="form-group">
                Type: <input type="text" class="form-control" name="type" id="type" value="<?= $result[0]['type'];?>" >
            </div>
            <div class="form-group">
                Designation: <input type="text" class="form-control" name="name" id="name" value="<?= $result[0]['name'];?>" >
            </div>
            <div class="form-group">
                Model: <input type="text" class="form-control" name="model" id="model" value="<?= $result[0]['model'];?>" >
            </div>           
            <div class="form-group">          
                Utilisateur:   
                <select name="userName" class="form-control" id="userName" >
                    <?php 
                            
                        $connect = mysqli_connect ("localhost", "root", "","parcinfo");
                        $query = "SELECT * FROM users";
                                        
                        $result = mysqli_query($connect, $query);?>

                        <?php while($row = mysqli_fetch_array($result)):; 
                    ?>

                    <option>
                        <?php echo $row[2]; ?>
                    </option>

                        <?php endwhile; ?>

                </select>

            </div>
            

            <div class="form-group">
                <input name="save_record" type="submit" class="btn btn-primary btn-block" value="Modifier">
            </div>

        </form>
    </div>

<?php include '../../inc/footer/index.php' ?>
<?php include '../../inc/footer/footer.php' ?>
