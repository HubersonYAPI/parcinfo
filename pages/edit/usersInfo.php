<?php require_once '../../conf/db.php' ?>
<?php include '../../inc/header/equipment.php' ?>


    <?php
        $req = $db->prepare("SELECT * FROM users WHERE names=".$_GET["names"]);
        $req->execute();
        $req2 = $req->fetchAll();
    ?>

        


		<div id="fh5co-main">


			

				<div class="container">

                <div class="container mt-4">
                    <div class="row">
                        <div class="col-sm-10"></div>
                        <div class="col-sm-2">
                            <a href="equipment.php"><button type="submit" class="btn btn-primary btn-block">Retour à la liste</button></a>
                        </div>
                    </div>
                </div>

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <td><i>Matricule</i></td>
                                <td><i>Nom & Prénoms</i></td>
                                <td><i>Services</i></td>
                                <td><i>Poste</i></td>
                                <td><i>Telephone</i></td>                              
                            </tr>
                        </thead>

                        <?php
                            if (!empty($req2)) {
                            foreach ($req2 as $row) {
                        ?>

                        <tbody>
                            <tr>
                                <td><?php echo $row["mat"]; ?></td>
                                <td><?php echo $row["names"]; ?></td>
                                <td><?php echo $row["service"]; ?></td>
                                <td><?php echo $row["poste"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                            </tr>
                        </tbody>

                        <?php
                                }
                            }
                        ?>

                    </table>

			
				
			</div>
        </div>
    </div>
        

<?php include '../../inc/footer/index.php' ?>
<?php include '../../inc/footer/footer.php' ?>