<!DOCTYPE html>
<html>
<head>
    <title>cool garfield</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Global styles */
        body {
            margin: 0;
            font-family: "Comic Sans MS", cursive;
            background: linear-gradient(135deg, #f58025, #ff9933, #ffcc00, #ff9933, #f58025);
            background-size: 600% 600%;
            animation: gradientAnimation 20s ease infinite;
            overflow-x: hidden;
            color: #000;
        }

        /* Header styles */
        header {
            background: transparent;
            text-align: center;
            padding: 80px 0;
            font-size: 48px;
            font-family: "GarfieldFont", cursive;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            animation: gradientAnimation 10s linear infinite;
        }

        /* Keyframes for the gradient animation */
        @keyframes gradientAnimation {
            0% {
                background-position: 0% 50%;
            }
            100% {
                background-position: 100% 50%;
            }
        }

        /* Centered button container with adjusted margin-top */
        .center-button-container {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
            height: 30vh;
            margin-top: -50px;
        }

        /* Button styles */
        .rounded-button {
            display: inline-block;
            padding: 20px 60px;
            border-radius: 40px;
            background: linear-gradient(135deg, #f58025, #ffcc00);
            color: #000;
            text-decoration: none;
            font-weight: bold;
            cursor: pointer;
            font-size: 24px;
            font-family: "GarfieldFont", cursive;
            text-shadow: -2px 0 #333, 0 2px #333, 2px 0 #333, 0 -2px #333;
            margin: 0 20px;
            border: 2px solid #000;
            transition: background 0.3s, transform 0.2s, box-shadow 0.3s;
        }

        /* Button hover styles */
        .rounded-button:hover {
            background: linear-gradient(135deg, #ffcc00, #f58025);
            transform: scale(1.05);
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }
    </style>
</head>
<body>
    <header>
        <h1>cool garfield</h1>
    </header>
    <main>
        <h2>About</h2>
        <p>this bot will soon be able to help your server in many ways!</p>

        <h2>Features</h2>
        <ul>
            <li>garfield bot is still being worked on, but we're trying!</li>

        <h2>Get Started</h2>
        <p>add the bot to your server <a href="https://discord.com/api/oauth2/authorize?client_id=1168283328382767215&permissions=8&scope=bot">here</a>.</p>
    </main>
</body>
</html>
