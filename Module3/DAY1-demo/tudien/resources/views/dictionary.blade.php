<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Anh - Việt</title>

</head>

<body>
    <h1>Anh - Việt</h1>
    <form action="dictionary" method="POST">
        @csrf
        <div class="row mb-4">
            <div class="col">
                <div class="form-outline">
                    <input type="text" name= "vn" id="form6Example1" class="form-control" />
                    <label class="form-label" for="form6Example1">nhập từ cần dịch</label>
                </div>
            </div>
        </div>
        <div>
            <button type="submit" class="site-btn">Dịch</button>
        </div>
    </form>

</body>

</html>