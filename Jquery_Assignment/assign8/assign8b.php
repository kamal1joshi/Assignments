<?php

    $servername = "localhost";
    $username = "root";
    $password = "java@123";
    $dbname = "Kamal";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 

    $sql = "select * from jsonassign8 LIMIT 0 , 5";
    $result = $conn->query($sql);
    $data=mysqli_fetch_all($result,MYSQLI_ASSOC);

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Details</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body>

        <div class="container">
            <h3>All Details</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th> Id</th>
                        <th> Name</th>
                        <th> Email</th>
                        <th> Date</th>
                        <th> Message</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if ($result->num_rows > 0) {
                        foreach ($data as  $value) {
    	            ?>
                        <tr>
                            <td>
                                <?php echo $value['Id'] ?>
                            </td>
                            <td>
                                <?=  $value['Name'] ?>
                            </td>
                            <td>
                                <?=  $value['Email'] ?>
                            </td>
                            <td>
                                <?=  $value['Date'] ?>
                            </td>
                            <td>
                                <?=  $value['Message'] ?>
                            </td>
                        </tr>
                    <?php
                    }
                    } ?>
                </tbody>
            </table>
        </div>
        <?php
        $conn->close();
        ?>

        <script>
            $(document).ready(function() {

                var table = $(".container");

                // refresh every second
                var refresher = setInterval(function() {
                table.load("assign8b.php");
                }, 1000);
            });
        </script>
        
    </body>
    </html>