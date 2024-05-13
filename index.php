<?php 
    require("Libreria/principal.php");
    include('Conexion/Cone.php');
    $u = new Integrante();

    Plantilla::Aplicar();

    if($_POST){

        $u->Id = intval($_POST['id']);
        $u->Name = $_POST['Name'];
        $u->LastName = $_POST['LastName'];
        $u->Email = $_POST['Email'];
        $u->Phone = $_POST['Phone'];
        $u->Skill = $_POST['Skill'];
        $u->Language = $_POST['Language'];

        Base::Agregar($u);
        header('Location: ver.php');
    }else if(isset($_GET['id'])){
        $u = Base::VerPorId($_GET['id']);
    }

?>


<div class="card col-md-6 row" id="card">
    <div class="mt-2 col-md-2">
        <a href="<?php echo "ver.php"; ?>" class="btn btn-primary">Look</a>
    </div>
    <form action="" method="post">
        <div class="p-3 row justify-content-center">
            <h2 class="text-center">Add anyone</h2>
            <div class="input-groud mb-1" hidden>
                <span class="input-groud-text">id</span>
                <input type="number" name="id" required placeholder="id" readonly class="form-control" value="<?php echo  $u->Id;?>">
            </div>
            <div class="input-groud mb-1">
                <span class="input-groud-text">Name</span>
                <input type="text" name="Name" required placeholder="Name" class="form-control" value="<?php echo  $u->Name;?>">
            </div>
            <div class="input-groud mb-1">
                <span class="input-groud-text">Last Name</span>
                <input type="text" name="LastName" required placeholder="Last Name" class="form-control" value="<?php echo $u->LastName;?>">
            </div>
            <div class="input-groud mb-1">
                <span class="input-groud-text">Skill</span>
                <input type="text" name="Skill" required placeholder="Skill" class="form-control" value="<?php echo $u->Skill;?>">
            </div>
            <div class="input-groud mb-1">
                <span class="input-groud-text">Email</span>
                <input type="email" name="Email" required placeholder="Email" class="form-control" value="<?php echo $u->Email;?>">
            </div>
            <div class="input-groud mb-1">
                <span class="input-groud-text">Phone</span>
                <input type="text" name="Phone" required placeholder="Phone" class="form-control" value="<?php echo $u->Phone;?>">
            </div>
            <div class="input-groud mb-2">
                <span class="input-groud-text">Language</span>
                <input type="text" name="Language" required placeholder="Language" class="form-control" value="<?php echo $u->Language;?>">
            </div>
            <div class="text-center">
                <button type="submit" class="col-md-3 btn btn-success" name="Add"> Add </button>
            </div>
        </div>
    </form>
</div>