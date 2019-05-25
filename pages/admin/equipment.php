<?php require_once '../../conf/db.php' ?>
<?php include '../../inc/header/equipment.php' ?>

    <?php
        $req = $db->prepare("SELECT * FROM equipment ORDER BY name ASC");
        $req->execute();
        $req2 = $req->fetchAll();
    ?>

        


		<div id="fh5co-main">


			

				<div class="container">

                    <table class="table mt-4">
                        <thead>
                            <tr>
                                <td><i>identifiant</i></td>
                                <td><i>Type</i></td>
                                <td><i>Designation</i></td>
                                <td><i>Model</i></td>
                                
                                <td><i>Utilisateur</i></td>
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
                                <td><?php echo $row["code"]; ?></td>
                                <td><?php echo $row["type"]; ?></td>
                                <td><?php echo $row["name"]; ?></td>
                                <td><?php echo $row["model"]; ?></td>
                                
                                <td><a class="ajax-action-links" href='usersInfo.php?names=<?php echo $row['userName']; ?>'><?php echo $row["userName"]; ?></a></td>
                                <td><a class="ajax-action-links" href='equipmentEdit.php?id=<?php echo $row['id']; ?>'><i class="icon-pencil"></a></td>
                                <td><a class="ajax-action-links" href='equipmentDelete.php?id=<?php echo $row['id']; ?>'><i class="icon-trash"></a></td>
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
