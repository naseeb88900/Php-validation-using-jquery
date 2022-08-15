<?php
session_start();

if(isset($_SESSION["user_id"]) && isset($_SESSION["user_email"]))
{
?>

<!DOCTYPE html>
<html>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css" />
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="../css/home.css" />
    <!------ Include the above in your HEAD tag ---------->
</head>
<body>
    <header>
        
        <div class="container bg-info p-5 te">
            <nav class="navbar navbar-expand-lg navbar-light bg-light ">
                <a class="navbar-brand" href="index.php">Welcome Admin</a>     
            </nav>
        </div>
    </header>
    <!---->
    <main>
        <div class="container my-5">
            <div class="card-body text-center">
                <h4 class="card-title">Dashboard</h4>
              
            </div>
            <div class="card">
              
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">User Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
                            <th scope="col">Action</th>
                            <th scope="col">Logout</th>
							
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row"><?php echo $_SESSION["user_id"]?></th>
                            <td><?php echo $_SESSION["user_name"]?></td>
                            <td>
                                <?php echo $_SESSION["user_phone"]?>
                            </td>
                            <td><?php echo $_SESSION["user_email"]?></td>
                            <td><?php echo $_SESSION["user_age"]?></td>
							
                            <td>
                                <a class="btn btn-sm btn-primary" href="update.php">
                                    <i class="far fa-edit"></i> Update
                                </a>
                                <a class="btn btn-sm btn-danger" href="delete.php">
                                    <i class="fas fa-trash-alt"></i> Delete
                                </a>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="logout.php">
                                    <i class="fas fa-info-circle"></i> Logout
                                </a>
                            </td>
                        </tr>                     
                    </tbody>
                </table>         
            </div>
           
    </main>
    <!---->

    <!---->
    <footer>
        <div class="container bg-info p-5"></div>
    </footer>
</body>
</html>

<?php } ?>