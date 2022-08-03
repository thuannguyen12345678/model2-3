<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/user" method="post">
        @csrf
        <label for="fname">Số thứ nhất:</label>
        <input type="text" id="fname" name="so_thu_nhat"><br><br>
        <select id="cars" name="phep_tinh">
            <option value="+">cộng</option>
            <option value="-">trừ</option>
            <option value="*">nhân</option>
            <option value="/">chia</option>
          </select><br><br>
        <label for="lname">Số thứ hai:</label>
        <input type="text" id="lname" name="so_thu_hai"><br><br>
        <input type="submit" value="Submit">
      
      </form>
</body>
</html>