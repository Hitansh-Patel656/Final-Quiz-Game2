<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Quiz Results!</title>
    <style>
        body {
            font-family: sans-serif;
            background-image:url('https://static.vecteezy.com/system/resources/thumbnails/006/861/161/small/light-blue-background-gradient-wall-design-vector.jpg ');
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .results-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
            width:480px;
            height:250px;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .score {
            font-size: 2em;
            color: #007bff;
            margin-bottom: 15px;
            font-weight: bold;
        }

        .message {
            font-size: 1.2em;
            color: #555;
            margin-bottom: 25px;
        }

        .actions button {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1em;
            margin: 5px;
        }

        .actions button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="results-container">
        <h1>Your Quiz Results!</h1>
    
        <div class="message">You really tried your best!</div>
        <div class="score">Your Score: 5/10</div>
        <div class="actions">
            <button>Try Again?</button>
            <button>Review Questions</button>
        </div>
    </div>
</body>
</html>