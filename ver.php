<?php
    require_once 'Libreria/principal.php';
    require_once 'Conexion/Cone.php';
    Plantilla::Aplicar();

    $info = Base::Ver();
?>

<div class="card col-md-6 p-3">
    <table class="table table-bordered text-center">
        <thead>
            <tr>
                <!--<th>ID</th>-->
                <th>Name</th>
                <th>Phone</th>
                <!--<th>Email</th>-->
                <th>Skill</th>
                <th>Language</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php 
                foreach ($info as $key => $value) {
                    echo "<tr>
                        <!--<td>{$value->Id}</td>-->
                        <td>{$value->Name} {$value->LastName}</td>
                        <td>{$value->Phone}</td>
                        <!--<td>{$value->Email}</td>-->
                        <td>{$value->Skill}</td>
                        <td>{$value->Language}</td>
                        <td><a title='Eliminar' class='btn btn-danger p-1' href='Eliminar.php?id=$value->Id'><i class='fa-solid fa-trash-can'></i></a> &nbsp; <a href='index.php?id=$value->Id' class='p-1 btn btn-warning' title='Editar'> <i style='color:white;' class='fa-solid fa-file-pen'></i></a></td>
                    </tr>";
                }
            ?>
        </tbody>
    </table>
    <div class="text-center">
        <a href="index.php" class="btn btn-primary"><i class="fa-solid fa-user-plus"></i></a>
    </div>
</div>


