<?php

require_once('database_connection.php');

//get data 
$sql = "SELECT * FROM bucketlist" ;
$query = mysqli_query($conn,$sql);

//for each row
while( $data = mysqli_fetch_assoc($query)){

    $dateTime = date('d-M Y',strtotime($data['created_at']));

            echo   "<tr>
                        <td>{$data['name']}</td>
                        <td>{$data['description']}</td>
                        <td>$dateTime</td>
                        <td>
                            <a href='data_delete_table.php?id={$data['id']}'>
                                <i class='fa-solid fa-trash' style='color: #403B4A;'></i>
                            </a>
                        </td>
                    </tr>" ;


}

?>