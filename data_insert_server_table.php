 <?php

        // conncected with database
        require_once('database_connection.php');

        //add lists 
        // $name = $_POST['inputName'];
        // $name = $_POST['description'];
        
        // validation
            $errorName = $errorDes = "";

            $name = $des ="";
            
            //name
            if($_POST['inputName'] == null || $_POST['inputName'] == '' || empty($_POST['inputName'])){
                $errorName .= "<small>Please fill your list name!</small>";
            }else{
                $name = $_POST['inputName'];
            }

            if($_POST['description'] == null || $_POST['description'] == '' || empty($_POST['description'])){
                $errorDes .= "<small>Please fill your description!</small>";
            }else{
                $des = $_POST['description'];
            }

            if($name != "" && $des != ""){
                    
                // insert data
                $sql = " INSERT INTO bucketlist(name, description) VALUES ('$name','$des')";
                mysqli_query($conn,$sql);
            }
    ?>
