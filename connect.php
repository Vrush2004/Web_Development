<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "unlock_dreams";
    $port = "3307";
    $conn = new mysqli($servername,$username,$password,$dbname,$port);

    if(!$conn){
        die('Connection Failed:'.mysqli_connect_error());
    }

    if(isset($_POST['submit'])){
        $username = $_POST["username"];
        $email1 = $_POST["email1"];
        $password1 = $_POST["password1"];
        
    
        //prepare and execute the database insertion
        $sql1 = "INSERT INTO sign_up ( username, email1, password1) VALUES ( '$username', '$email1', '$password1')";
    
        if($conn->query($sql1) == TRUE){
?>
           <script>
                swal({
                    title: "Success",
                    text: "Thanks for SignUp",
                    icon: "success",
                });
            </script>
<?php                         
        }
    }
    $conn->close();
?>