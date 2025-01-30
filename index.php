<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Website</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background: #333;
            color: white;
            padding: 15px;
        }
        main {
            padding: 20px;
        }
        button {
            padding: 10px 20px;
            background: #008cba;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background: #005f73;
        }
    </style>
</head>
<body>
    <header>
        <h1>Welcome to My Simple Website</h1>
    </header>
    <main>
        <p>This is a basic website with a button.</p>
        <button onclick="alert('Hello, World!')">Click Me</button>
    </main>
</body>
</html>
