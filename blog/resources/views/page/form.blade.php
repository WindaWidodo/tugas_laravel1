<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1>Buat Acount Baru</h1>

   <h3>Sign Up Form</h3>
        @csrf
   <form action="/welcome" method="POST">
        <label>Firs Name</label><br>
        <input type="text" name="fname"><br><br>
        <label>last name</label><br><br>
        <input type="text" name="lname"><br><br>
        <p>
            <label>Gender</label><br>
            <label><input type="radio" name="jenis_kelamin" value="laki-laki" />Male</label><br>
            <label><input type="radio" name="jenis_kelamin" value="Wanita" />women</label><br>
            <label><input type="radio" name="jenis_kelamin" value="other" />other</label><br>
        </p>
    

    <p>
        <label>National</label>
        <select name="National">
            <option value="Indonesia">Indonesia</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapura">Singapura</option>
        </select>
    </p>

    <p>
        <label>Langue Speker</label>
        <p><input type="checkbox" name="bahasa" value="bahasa indonesia">Bahasa Indonesia</p>
        <p><input type="checkbox" name="bahasa" value="bahasa england">english</p>
        <p><input type="checkbox" name="bahasa" value="bahasa arabic"> Arabic</p>
        <p><input type="checkbox" name="bahasa" value="bahasa japane"> japane</p>
    </p>
        <input type="submit" value="kirim">
   </form>
</body>
</html>