<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buat akun baru</title>
</head>
<body>
    <h2>Buat Account Baru</h2>
    <h3>Sign up Form</h3>
    <form action="/welcome" method="post">
        @csrf
       <table>first name</table><br>
       <input type="text" name="nama"><br><br>
       <table>last name</table><br>
       <input type="text" name="nama2"><br><br>
       <table>agender</table><br>
       <input type="radio" name="status">laki laki <br>
       <input type="radio" name="status">Perempuan <br><br>
       <table>Nationality</table><br>
       <select name="Nationality">
        <option value="">Indonesia</option>
        <option value="">inggis</option>
        <option value="">jepang</option>
        </select><br><br>

        <table>language spoken</table>
        <input type="checkbox" name="language spoken"> bahasa indonesia <br>
        <input type="checkbox" name="language spoken"> bahasa inggis <br>
        <input type="checkbox" name="language spoken"> bahasa jepang <br>
        <table>BiO</table>
        <textarea name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Sign Up"><br><br>
    </form>

    


       
    
</body>
</html>