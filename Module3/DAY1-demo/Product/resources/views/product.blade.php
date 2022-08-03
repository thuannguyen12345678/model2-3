<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
<h1>Đăng nhập</h1>
<form action="/product" method="POST">
    @csrf
    Mô tả sản phẩm: 
    <p>
        <input type="text" name="mota" placeholder="Product Description">
    </p>
    giá niêm yết:
    <p>
        <input type="text" name="gia" placeholder="List Price">
    </p>
    tỉ lệ chiết khấu:
    <p>
        <input type="text" name="chietkhau" placeholder="Discount Percent">
    </p>
    <p>
        <button type="submit">Calculate Discount</button>
    </p>
</form>
</body>
</html>