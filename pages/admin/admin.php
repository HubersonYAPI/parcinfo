<?php require_once '../../conf/db.php' ?>
<?php include '../../inc/header/admin.php' ?>

    <?php
        $req = $db->prepare("SELECT * FROM admin ORDER BY name ASC");
        $req->execute();
        $req2 = $req->fetchAll();
    ?>

        


		<div id="fh5co-main">


			

				<div class="container">

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <td><i>Matricule</i></td>
                                <td><i>Nom</i></td>
                                <td><i>Prenoms</i></td>
                                <td><i>Eamail</i></td>
                                <td><i>Mot de Passe</i></td>
                                <td><i>Telephone</i></td>
                                <td><i>Rôle</i></td>
                                <td><i>Modifier</i></td>
                                <td><i>Supprimer</i></td>                               
                            </tr>
                        </thead>

                        <?php
                            if (!empty($req2)) {
                            foreach ($req2 as $row) {
                        ?>
                        <tbody>
                            <tr>
                                <td><?php echo $row["mat"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["firstName"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["pwd"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["role"]; ?></td>
                                <td><a class="ajax-action-links" href='edit.php?id=<?php echo $row['id']; ?>'><i class="icon-pencil"></a></td>
                                <td><a class="ajax-action-links" href='delete.php?id=<?php echo $row['id']; ?>'><i class="icon-trash"></a></td>
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
