<?php 

    include("connection.php");
    $stm=$connection->prepare("SELECT * FROM contacs");
    $stm->execute();
    $contacts = $stm->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_GET['id'])){
        $txtid=(isset($_GET["id"])?$_GET["id"]:"");
        $stm=$connection->prepare("DELETE FROM contacs WHERE id=:txtid");
        $stm->bindParam(":txtid", $txtid);
        $stm->execute();
    
        header("location:contacts.php");

    }
?>

<?php include("header.php"); ?>

<section class="section regular-padding">
    <div class="row">
        <div class="col-md-12 text-end">
            <button type="button" class="button button-primary"  data-bs-toggle="modal" data-bs-target="#create">
                <i class="bi bi-plus-circle"></i>
                Agregar Contacto
            </button>
        </div>
        <div class="col-md-12">
            <div class="table-responsive pt-5">
                <table class="table table-primary">
                    <thead class="table table-dark">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Teléfono</th>
                            <th scope="col">Mensaje</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach($contacts as $contact) { ?>
                        <tr class="">
                            <td scope="row"><?php echo $contact['id']; ?></td>
                            <td><?php echo $contact['name']; ?></td>
                            <td><?php echo $contact['lastname']; ?></td>
                            <td><?php echo $contact['phone']; ?></td>
                            <td><?php echo $contact['message']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $contact['id'];?>" class="button button-primary" style="margin-right: .5ren;">
                                    <i class="bi bi-pen"></i>
                                </a>
                                <a href="index.php?id=<?php echo $contact['id'];?>" class="button button-primary">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<?php include("create.php"); ?>


<?php include("footer.php"); ?>

