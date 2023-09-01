<!DOCTYPE html>
<html>
<head>
    <title>Word Display</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Word Display</h1>
        <form action="process.php" method="post">
            <label for="word">คำที่ต้องการแสดง:</label>
            <input type="text" id="word" name="word" required><br>
            <label for="count">จำนวนครั้งที่แสดง:</label>
            <input type="number" id="count" name="count" min="1" required><br>
            <button type="submit">SUBMIT</button>
        </form>
    </div>
</body>
</html>
