<!DOCTYPE html>
<html>
<head>
  <title>Form Nộp CV</title>
</head>
<body>

<style>
    form {
        max-width: 500px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }
     
    label {
        display: block;
        font-weight: bold;
        margin-bottom: 10px;
    }
    
    textarea,
    input[type="file"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        font-size: 14px;
    }
    
    button[type="submit"] {
        background-color: #4CAF50;
        color: #fff;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    
    button[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form action="../function/ungtuyen.php" method="post" enctype="multipart/form-data">
<label for="emailsv">Email của bạn:</label>
    <input type="email" name="emailsv" id="emailsv" required><br><br>
    
  
    
    <label for="cv">File CV:</label>
    <input type="file" name="cv" id="cv" required><br><br>
    
    <label for="gioithieu">Giới thiệu bản thân:</label>
    <textarea name="gioithieu" id="gioithieu"></textarea><br><br>
    
   
    <button type="submit" name="submit">Nộp CV</button>
</form>

</body>
</html>

