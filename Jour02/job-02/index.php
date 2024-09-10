<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Job 2</title>
</head>
<body>
    <main>
        <button id="button" name="button">Cliquez-moi !</button>
    </main>
    <script>
        window.onload = () => {
            document.getElementById("button").onclick = showhide;
        };
    </script>
</body>
</html>