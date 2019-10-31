<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">List</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <div class="row">
                            <div class="col-lg-12">
                                <table class="table table-dark">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Surname</th>
                                        <th scope="col">Age</th>
                                        <th scope="col">Salary</th>
                                        <th scope="col">Create</th>
                                        <th scope="col">Edit</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    for ($i = 0; $i < count($data); $i++)
                                    {
                                        $n = $i  + 1;

                                        $name = $data[$i]['name'];
                                        $surname = $data[$i]['surname'];
                                        $age = $data[$i]['age'];
                                        $salary = $data[$i]['salary'];
                                        $date_create = $data[$i]['date_create'];
                                        $id = $data[$i]['id'];

                                        echo "<tr>
                                                      <th scope='row'>$n</th>
                                                      <th>$name</th><th>$surname</th>
                                                      <th>$age</th><th>$salary</th>
                                                      <th>$date_create</th>
                                                      <th> 
                                                            <form action='/' method='get'>
                                                              <input type='hidden' name='func' value='edit_page'>
                                                              <input type='hidden' name='id' value='$id'>
                                                              <input class='btn btn-success' type='submit' value='Edit'>
                                                            </form>
                                                      </th>
                                                      <th>
                                                          <form action='/' method='get'>
                                                              <input type='hidden' name='func' value='delete'>
                                                              <input type='hidden' name='id' value='$id'>
                                                              <input class='btn btn-danger' type='submit' value='Delete'>
                                                          </form>
                                                      </th>
                                                      </tr>";
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input class="form-control mr-sm-2 text-center" id="text" type="search" placeholder="Search" aria-label="Search">
                        <button type="button" onclick="search_info()" class="btn btn-dark">Search</button>
                        <a class="btn btn-dark" href="/" role="button">Menu</a>
                        <a class="btn btn-dark" href="/?func=add_page" role="button">Create</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script>
    $(document).ready(function(){
        $(function() {
            $('#modal').modal('show')});
        $('#modal').on('hidden.bs.modal', function (e) {
            $('#modal').modal('toggle');
        })
    });

    function search_info() {
        var text = $("#text").val();

        window.location.href = "/?func=search&text=" + text;
    }
</script>
</body>
</html>