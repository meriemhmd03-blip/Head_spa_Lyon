<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>En maintenance - Formation</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container {
            background: white;
            padding: 60px 40px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 500px;
            animation: slideIn 0.5s ease-out;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .icon {
            font-size: 80px;
            margin-bottom: 20px;
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-10px);
            }
        }

        h1 {
            color: #333;
            font-size: 28px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        p {
            color: #666;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
        }

        .progress-bar {
            width: 100%;
            height: 8px;
            background: #e0e0e0;
            border-radius: 4px;
            overflow: hidden;
            margin-bottom: 30px;
        }

        .progress-fill {
            height: 100%;
            width: 70%;
            background: linear-gradient(90deg, #667eea, #764ba2);
            border-radius: 4px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }

        .btn {
            display: inline-block;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 15px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: transform 0.3s, box-shadow 0.3s;
            box-shadow: 0 5px 15px rgba(102, 126, 234, 0.4);
        }

        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(102, 126, 234, 0.6);
        }

        .footer {
            margin-top: 30px;
            font-size: 14px;
            color: #999;
        }

        /* Mobile responsive */
        @media (max-width: 480px) {
            .container {
                padding: 40px 25px;
            }

            h1 {
                font-size: 22px;
            }

            .icon {
                font-size: 60px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="icon">🚧</div>
        <h1>Page en maintenance</h1>
        <p>Nous améliorons actuellement la rubrique <strong>Formation</strong> pour vous offrir une meilleure expérience.</p>

        <div class="progress-bar">
            <div class="progress-fill"></div>
        </div>

        <a href="index.php" class="btn">← Retour à l'accueil</a>

        <div class="footer">
            <p>Merci de votre patience ! ⏳</p>
        </div>
    </div>
</body>

</html>