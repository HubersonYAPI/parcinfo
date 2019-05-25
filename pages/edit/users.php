<?php require_once '../../conf/db.php' ?>
<?php include '../../inc/header/users.php' ?>


<?php
        $req = $db->prepare("SELECT * FROM users ORDER BY names ASC");
        $req->execute();
        $req2 = $req->fetchAll();
    ?>

        


		<div id="fh5co-main">


			

				<div class="container">

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <td><i>Matricule</i></td>
                                <td><i>Nom & Prénoms</i></td>
                                <td><i>Services</i></td>
                                <td><i>Poste</i></td>
                                <td><i>Telephone</i></td>
                                <td><i>Modifier</i></td>
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
                                <td><a class="ajax-action-links" href='usersEdit.php?id=<?php echo $row['id']; ?>'><i class="icon-pencil"></a></td>
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