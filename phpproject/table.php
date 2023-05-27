<?php 
 require_once('db_conn.php');
 $query = "select * from users";
 $result = mysqli_query($conn ,$query);
 
// require_once 'db_conn.php';
// require_once 'function.php';

// $result = display_data ();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    
</head>
<body>
<div class="containar">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h2>FEATCH DATA FROM DATA BASE IN PHP</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-dark">
                            <tr class = "bg-dark text-white">
                                <td>USER ID</td>
                                <td>USER NAME</td>
                                <td>EMAIL</td>
                                <td>PASSWORD</td>
                                <td>ROLE</td>
                                <td>CREATED_AT</td>
                                <td>EDIT</td>
                                <td>DELET</td>
                            </tr>
                            <tr>
                            <?php 
                            while ($row = mysqli_fetch_assoc( $result)){
                                ?>
                                <td>
                                    <?php
                                    echo $row['id'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $row['user_name'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $row['email'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $row['password'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $row['role'];
                                    ?>
                                </td>
                                <td>
                                    <?php
                                    echo $row['created_at'];
                                    ?>
                                </td>
                                <td> <button type="button" class="btn btn-outline-primary">EDIT</button>
                               </td>
                               <td> <button type="button" class="btn btn-outline-danger">DELET</button>
                               </td>
                                </tr>
                                <?php
                            }
                            ?>  
                            
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
      </div> 

      

      <button type="button" onclick="window.location.href='logout.php'" class="btn btn-warning" >LOG OUT</button>
</body>
</html>