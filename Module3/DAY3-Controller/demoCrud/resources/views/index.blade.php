<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <table class="table table-success table-striped " style="width:1000px">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">TÊN</th>
                    <th scope="col">SĐT</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">HOẠT ĐỘNG</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                        <a href="" class="btn btn-primary">Sửa</a> | 
                        
                       <form action="" method="post">
                        @csrf
                        @method('DELETE')
                        <input type=submit value="xóa" class="btn btn-danger">
                       </form>
                        
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</body>

</html>
