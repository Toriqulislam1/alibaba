 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=, initial-scale=1.0">
     <title>Document</title>
 </head>
 <body>


    


 




    <?php
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname ="alibaba";

    // Create connection
    $conn = new mysqli($hostname, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }
   
        if(isset($_POST['email']) && isset($_POST['password']) ){
            $email= $_POST['email'];
            $password= $_POST['password'];

        }


    

     $sql= "INSERT INTO log_in (email, password)
     value('$email','$password')";

       if(mysqli_query( $conn,$sql)){
           echo "inserted";

       }else{
           echo "not inserted";
       } 






    
        ?>





















        <form action="log.php" method="POST">
            
                <label for="email" >email</label>
                <input type="text" name="email"><br>
                <label for="text">password</label>
                <input type="password" name="password"><br>
                <input type="submit"  value="submit">













        </form>











    </body>
    </html>