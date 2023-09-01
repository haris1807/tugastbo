<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    Nama lengkap<br>
    <input type="text" name="nama" placeholder="Masukkan nama lengkap kamu" class= "form-control"><br>
    E-mail<br>
    <input type="email" name="email" placeholder="Masukkan E-mail kamu" class= "form-control"><br>
    Tanggal lahir<br>
    <input type="date" name="date" class= "form-control"><br>
    Nomor telepon<br>
    <input type="number" name="telepon" placeholder="Masukkan no telepon kamu" class= "form-control"><br>
    Jenis Kelamin <br>
    <input type="radio" name="JenisKelamin" value = "Pria">Pria
    <input type="radio" name="JenisKelamin" value = "Wanita">Wanita<br>
    <select name="bidang">
            Bidang yang diminati
            <option value = "Full-stack Web Developer">Full-stack Web Developer</option>
            <option value = "Human Resouces">Human Resouces</option>
            <option value = "Big 4 Auditor & Financial Analyst">Big 4 Auditor & Financial Analyst</option>
            <option value = "UI/UX Reseach & Design">UI/UX Reseach & Design</option>
            <option value = "Digital Marketer">Digital Marketer</option>
            </select>
    <br>
    Password <br>
    <input type="password" name="password" placeholder="Masukkan Password Kamu" class= "form-control"><br>
    Konfirmasi Password <br>
    <input type="password" name="password2" placeholder="Masukkan Ulang Password Kamu" class= "form-control"><br>
    </form>
</body>
</html>