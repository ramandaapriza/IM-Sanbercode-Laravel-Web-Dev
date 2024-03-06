<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form method="post" action="/welcome">
        @csrf
        <label>First name:</label><br>
        <input type="text" name="namaDepan"><br><br>
        <label>Last name:</label><br>
        <input type="text" name="namaBelakang"><br><br>
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="1">Male<br>
        <input type="radio" name="gender" value="2">Female<br>
        <input type="radio" name="gender" value="3">Other<br><br>
        <label>Nasionality</label><br>
        <select name="nasionality">
            <option value="1">Indonesian</option>
            <option value="2">Singaporean</option>
            <option value="3">Malaysian</option>
            <option value="4">Australian</option>
        </select><br><br>
        <label>Language Spoken:</label><br>
        <input type="checkbox" name="bahasa" value="1">Bahasa Indonesia<br>
        <input type="checkbox" name="bahasa" value="2">English<br>
        <input type="checkbox" name="bahasa" value="3">Other<br><br>
        <label>Bio:</label><br>
        <textarea name="message" id="" cols="30" rows="10"></textarea><br><br>
        <input type="submit" value="Sign Up">
    </form>
</body>
</html>