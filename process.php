<!DOCTYPE html>
<html>
<head>
    <title>Word Display Result</title>
    <link rel="stylesheet" type="text/css" href="css/styles1.css">
    <script>
        var word = "";
        var count = 0;
        var currentCount = 0;
        var currentCharIndex = 0;

        function startDisplay() {
            word = "<?php echo $_POST["word"]; ?>";
            count = <?php echo intval($_POST["count"]); ?>;
            currentCount = 0;
            currentCharIndex = 0;
            displayCharacter();
        }

        function displayCharacter() {
            if (currentCount < count) {
                if (currentCharIndex === 0) {
                    var displayContainer = document.getElementById("displayContainer");
                    displayContainer.innerHTML += (currentCount + 1) + ". "; // เพิ่มเลขลำดับ
                }

                if (currentCharIndex < word.length) {
                    var displayContainer = document.getElementById("displayContainer");
                    displayContainer.innerHTML += word[currentCharIndex];
                    currentCharIndex++;
                    setTimeout(displayCharacter, 50); // แสดงตัวอักษรทีละตัวทุก 0.1 วินาที (100 milliseconds)
                } else {
                    currentCount++;
                    currentCharIndex = 0;
                    var displayContainer = document.getElementById("displayContainer");
                    displayContainer.innerHTML += "<br>"; // แสดงบันทัดใหม่หลังจากแสดงคำเสร็จ
                    setTimeout(displayCharacter, 50); // รอ วินาทีหลังจากแสดงคำเสร็จ
                }
            }
        }
    </script>
</head>
<body onload="startDisplay()">
    <div class="container">
        <h1>แสดงผล</h1>
        <div id="displayContainer"></div>
        <a href="index.php">กลับสู่หน้าแรก</a>
    </div>
</body>
</html>
