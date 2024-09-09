<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
    @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap');

    body {
        font-family: 'Nunito', sans-serif;
        background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
        padding-top: 100px;
        color: #343a40;
        overflow-x: hidden;
    }

    .content-wrapper {
        background: linear-gradient(135deg, #ffffff, #f7f7f7);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.15);
        max-width: 600px;
        margin: 0 auto;
        text-align: center;
        position: relative;
        overflow: hidden;
    }

    .content-wrapper::before {
        content: '';
        position: absolute;
        top: -50px;
        left: -50px;
        width: 200px;
        height: 200px;
        background: rgba(0, 123, 255, 0.15);
        border-radius: 50%;
        animation: float 6s ease-in-out infinite;
    }

    .content-wrapper::after {
        content: '';
        position: absolute;
        bottom: -50px;
        right: -50px;
        width: 150px;
        height: 150px;
        background: rgba(40, 167, 69, 0.15);
        border-radius: 50%;
        animation: float 8s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    h1 {
        font-weight: 700;
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: #007bff;
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
    }

    h3 {
        font-weight: 600;
        font-size: 1.5rem;
        margin-bottom: 60px;
        color: #6c757d;
    }

    a button {
        background: linear-gradient(135deg, #007bff, #0056b3);
        border: none;
        color: #ffffff;
        padding: 14px 28px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 30px;
        transition: all 0.3s ease;
        box-shadow: 0 8px 16px rgba(0, 123, 255, 0.3);
        cursor: pointer;
        position: relative;
        overflow: hidden;
    }

    a button:hover {
        background: linear-gradient(135deg, #0056b3, #003d7a);
        box-shadow: 0 10px 20px rgba(0, 123, 255, 0.4);
        transform: translateY(-2px);
    }

    a button::before {
        content: '';
        position: absolute;
        top: -10px;
        left: -10px;
        width: 100%;
        height: 100%;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        transform: scale(0);
        transition: all 0.3s ease;
    }

    a button:hover::before {
        transform: scale(2);
        opacity: 0;
    }
</style>
    </head>
    <body class="antialiased" style="padding-top:100px">
        <center>
            <h1>Selamat Datang di Website</h1>
            <h3> Kapal Laut</h3>
            <a href="profilnama"><button>Go to Profile</button></a>
        </center>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
