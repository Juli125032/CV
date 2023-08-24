<?php

include("connection.php");

if (isset($_GET['id'])) {
    $txtid = (isset($_GET["id"]) ? $_GET["id"] : "");
    $stm = $connection->prepare("SELECT * FROM contacs WHERE id=:txtid");
    $stm->bindParam(":txtid", $txtid);
    $stm->execute();
    $register = $stm->fetch(PDO::FETCH_LAZY);

    $name = $register['name'];
    $lastname = $register['lastname'];
    $phone = $register['phone'];
    $message = $register['message'];
}

if ($_POST) {

    $txtid = (isset($_POST["txtid"]) ? $_POST["txtid"] : "");
    $lastname = (isset($_POST["lastname"]) ? $_POST["lastname"] : "");
    $name = (isset($_POST["name"]) ? $_POST["name"] : "");
    $phone = (isset($_POST["phone"]) ? $_POST["phone"] : "");
    $message = (isset($_POST["message"]) ? $_POST["message"] : "");

    $stm = $connection->prepare("UPDATE contacs SET name=:name,lastname=:lastname,message=:message,phone=:phone WHERE id=:txtid");
    $stm->bindParam(":name", $name);
    $stm->bindParam(":lastname", $lastname);
    $stm->bindParam(":message", $message);
    $stm->bindParam(":phone", $phone);
    $stm->bindParam(":txtid", $txtid);
    $stm->execute();

    header("location:contacts.php");
}
?>

<?php include("header.php"); ?>

<section class="section regular-padding">
    <form class="form-white" action="" method="post">
        <div class="modal-body">
            <div class="row">
                <input type="hidden" name="txtid" value="<?php echo $txtid; ?>">
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Nombre</label>
                        <input type="text" name="name" class="form-input" placeholder="Agregar nombre" value="<?php echo $name; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Apellido</label>
                        <input type="text" name="lastname" class="form-input" placeholder="Agregar Apellido" value="<?php echo $lastname; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Telefono</label>
                        <input type="number" name="phone" class="form-input" placeholder="Agregar Telefono" value="<?php echo $phone; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label class="form-label">Mensaje</label>
                        <input type="text" name="message" class="form-input" placeholder="Agregar Mensaje" value="<?php echo $message; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="button" class="button button-tertiary"><a href="contacts.php">Cerrar</a></button>
                    <button type="submit" class="button button-primary">Guardar</button>
                </div>
            </div>
        </div>
    </form>
</section>

<?php include("footer.php"); ?>