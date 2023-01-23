<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>TodoList</title>
</head>
<body style="font-family: 'Merriweather', serif;">

    <div class="container">
        <div class="row mt-5">
            <div class="col-6 bg-light" >
                 <p class="text-center mt-5"> Bucket Lists </p>
                 <form action="" method="POST" >

                    <div class="form-items mt-4">
                    <label for="name" >About Your List</label>
                    <input type="text" name="inputName" id="name" >
                    </div>
                    

                    <div class="form-items mt-4">
                    <label for="dese">Description</label>
                    <textarea name="description" id="dese" cols="50" rows="2" ></textarea>
                    </div>

                    <button type= "submit" id="btnSubmit" class="btn mt-4" name="btnAdd" style="background-color: #403B4A; color:#fdfdfd; padding: 10px 50px 10px 50px ;">Add</button>
                </form>

                <div class="test">
                    <p class="quote text-muted"> &#9635; Be adventurous enough to go after the life you want. &#9635; </p>
                </div>
                
            </div>

            <!-- read table -->
            <div class="col-6 bg-secondary d-flex justify-content-center align-content-center" id="second">
                <table class="table table-light table-striped" border="2" style="text-align:center; height:50px; margin-top:10px; color:#134E5E;">

                    <thead>
                        <tr>
                            <th>List Name</th>
                            <th>Description</th>
                            <th>Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    
                    <tbody style="font-size: 10px;" id="row">
                        <!-- <tr>
                            <td>Travelling</td>
                            <td>Travelling makes us feel good.</td>
                            <td>1-3-2023</td>
                            <td>
                                <a href="#">
                                    <i class="fa-solid fa-trash" style="color: #403B4A;"></i>
                                </a>
                            </td>
                        </tr> -->
                    </tbody>

                </table>
            </div>

        </div>
    </div>
    
</body>
<!-- Jquery with ajax -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

 $(document).ready(function(){

    $('#btnSubmit').click(function(e){
        e.preventDefault();
 
            let listName = $('#name').val();
            let listDes = $('#dese').val();

            $insertData = {
                'inputName': listName, 
                'description':listDes
            }

            $.ajax({
                type:'post',
                url:"data_insert_server_table.php",
                data: $insertData,
                success:function(response){
                    if(response){
                        window.location.reload();
                    }
                    
                }
            })

    })

    //read data
    $.ajax({
        type:'post',
        url:"data_read_table.php",
        success:function(response){
            if(!response){
                alert('failed!')
            }

            $('#row').html(response);
        }
    })

 })

</script>

</html>