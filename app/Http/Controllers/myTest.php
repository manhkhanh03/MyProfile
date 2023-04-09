<?php
    namespace App\Http\Controllers;

    use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
    use Illuminate\Foundation\Validation\ValidatesRequests;
    use Illuminate\Routing\Controller as BaseController;

    class myTest {
        public function getdata() {
            // try {
            //     $db = new PDO("mysql:host=LAPTOP-VL2DNGOC.localdomain;dbname=myTest", 'manhkhanh', 'Manhkhanh0@');
            //     echo "<h2>TODO</h2><ol>"; 
            //     foreach($db->query("SELECT content FROM $table") as $row) {
            //         echo "<li>" . $row['content'] . "</li>";
            //     }
            // echo "</ol>";
            // } catch (PDOException $e) {
            //     print "Error!: " . $e->getMessage() . "<br/>";
            //     die();
            // }

            $servername = "127.0.0.1:8000";
            $database = "myTest";
            $username = "root";
            $password = "Manhkhanh0@";
            // Create connection
            $conn = mysqli_connect($servername, $username, $password, $database);
            // Check connection
            // if (!$conn) {
            //     die("Connection failed: " . mysqli_connect_error());
            // }
            // echo "Connected successfully";
            mysqli_close($conn);
            return view('add');
        }
    }
?>