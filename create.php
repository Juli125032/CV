<?php

if ($_POST) {

    $lastname = (isset($_POST["lastname"]) ? $_POST["lastname"] : "");
    $name = (isset($_POST["name"]) ? $_POST["name"] : "");
    $phone = (isset($_POST["phone"]) ? $_POST["phone"] : "");
    $message = (isset($_POST["message"]) ? $_POST["message"] : "");

    $stm = $connection->prepare("INSERT INTO contacs(id, name, lastname, message, phone)
    VALUES(null,:name,:lastname,:message,:phone)");
    $stm->bindParam(":name", $name);
    $stm->bindParam(":lastname", $lastname);
    $stm->bindParam(":message", $message);
    $stm->bindParam(":phone", $phone);
    $stm->execute();

    header("location:contacts.php");
}

?>

<div class="modal fade" id="create"  role="dialog" aria-labelledby="createLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="title" id="createLabel">CREAR CONTACTO</h5>
                <button type="button" class="button button-primary" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="form-white" action="" method="post">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Nombre</label>
                                <input type="text" name="name" class="form-input" placeholder="Agregar nombre" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Apellido</label>
                                <input type="text" name="lastname" class="form-input" placeholder="Agregar Apellido" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Telefono</label>
                                <input type="number" name="phone" class="form-input" placeholder="Agregar Telefono" value="">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label class="form-label">Mensaje</label>
                                <input type="text" name="message" class="form-input" placeholder="Agregar Mensaje" value="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button button-tertiary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="button button-primary">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>