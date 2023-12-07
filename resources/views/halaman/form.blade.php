<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>halaman form</title>
</head>

<body>
    <h1>Halaman Form</h1>
    <form action="/welcome" method="post">
        @csrf
        <label>Nama Lengkap</label>
        <input type="text" name="nama">
        <label>tempat tanggal lahir</label>
        <input type="text" name="tempat_tanggal_lahir">
        <label>Alamat</label><br /><br />
        <textarea name="address" cols="30" rows="10"></textarea>
        <input type="submit" value="kirim">
    </form>
</body>

</html>
