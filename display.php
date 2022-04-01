<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Crud operation</title>
</head>

<body>
    <div class="container"></div>
    <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">nom</th>
                <th scope="col">prenom</th>
                <th scope="col">numero</th>
                <th scope="col">operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connect.php';
            $sql="Select * from `crud`";
            $result=mysqli_query($con,$sql);
            if($result){
                while($row=mysqli_fetch_assoc($result)){
                    $id=$row['id'];
                    $nom=$row['nom'];
                    $prenom=$row['prenom'];
                    $numero=$row['numero'];
                    echo '<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$nom.'</td>
                    <td>'.$prenom.'</td>
                    <td>'.$numero.'</td>
                    <td>
                    <button class="btn btn-primary">
                    <a class="text-light" href="update.php?updateid='.$id.'">update</a>
                </button>
            <button class="btn btn-danger">
                <a class="text-light" href="delete.php?deleteid='.$id.'">delete</a>
            </button>
           
            
                    </td>
                </tr>';
                }
            }
            ?>


        </tbody>
    </table>
</body>

</html>