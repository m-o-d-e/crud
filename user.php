<?php
include 'connect.php';
if(isset($_POST['send'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $numero=$_POST['numero'];
    $sql="insert into `crud`(nom,prenom,numero)
    values('$nom','$prenom','$numero')";
    $result=mysqli_query($con,$sql);
    if($result){
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>crud system</title>
</head>

<body>
    <div class="container my-5">
        <form method='post'>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="nom" name="nom" required>

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">prenom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="prenom" name="prenom">

            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">numero</label>
                <input type="text" class="form-control" id="exampleInputEmail1" placeholder="numero" name="numero">

            </div>
            <button type="submit" class="btn btn-primary" name='send'>Submit</button>
        </form>
    </div>


    -->
</body>

</html>