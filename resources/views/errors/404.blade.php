<!DOCTYPE html>
<html lang="sk" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite(['resources/css/app.css'])
</head>
<body>
<div class="error-card">
    <div class="error-container">
        <div class="error-content">
            <h1 class="error-code">404</h1>
            <p class="error-message">Something's missing.</p>
            <p class="error-description">Sorry, we can't find that page. You'll find lots to explore on the home page.</p>
            <a href="/" class="back-button">Back to Home</a>
        </div>
    </div>
</div>
</body>
</html>
