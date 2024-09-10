<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script.js"></script>
    <title>Job 1</title>
</head>
<body>
    <main>
        <article id="citation">
            <p>La vie a beaucoup plus d'imagination que nous.</p>
        </article>
        <button id="button" name="button">Cliquez-moi !</button>
    </main>
    <script>
        window.onload = () => document.getElementById("button").onclick = citation;
    </script>
    
</body>
</html>