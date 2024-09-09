<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

<!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<!-- Custom Styles -->
<style>
            body {
                font-family: 'Nunito', sans-serif;
                background: linear-gradient(135deg, #e0eafc, #cfdef3);
                color: #333;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
            }

            h1 {
                margin-bottom: 20px;
                font-weight: 700;
                color: #343a40;
                text-transform: uppercase;
                letter-spacing: 1.5px;
                position: relative;
                display: inline-block;
                padding-bottom: 10px;
            }

            h1::after {
                content: '';
                position: absolute;
                left: 0;
                bottom: 0;
                width: 100%;
                height: 4px;
                background-color: #007bff;
                border-radius: 2px;
            }

            .profile-details {
                font-size: 1.1rem;
                margin-bottom: 15px;
                color: #555;
                display: flex;
                justify-content: space-between;
                padding: 5px 0;
                border-bottom: 1px solid #ddd;
            }

            .profile-label {
                font-weight: 600;
                color: #343a40;
            }

            .profile-value {
                text-align: right;
                color: #007bff;
            }

            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
                width: 200px;
                margin-top: 15px;
                box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
                transition: all 0.3s ease;
            }

            .btn-secondary {
                background-color: #28a745;
                border-color: #28a745;
                width: 200px;
                margin-top: 10px;
                color: #fff;
                box-shadow: 0 4px 15px rgba(40, 167, 69, 0.4);
                transition: all 0.3s ease;
            }

            .btn-primary:hover, .btn-secondary:hover {
                transform: scale(1.05);
            }

            .profile-card {
                background-color: #fff;
                border-radius: 15px;
                padding: 40px;
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
                text-align: center;
                max-width: 500px;
                width: 100%;
                border-top: 4px solid #007bff;
                transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
                position: relative;
                overflow: hidden;
            }

            .profile-card:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
            }

            .profile-icon {
                font-size: 4rem;
                margin-bottom: 20px;
                color: #007bff;
            }

            .profile-card::before {
                content: '';
                position: absolute;
                top: -50px;
                left: -50px;
                width: 150px;
                height: 150px;
                background: rgba(0, 123, 255, 0.1);
                border-radius: 50%;
                animation: float 6s ease-in-out infinite;
            }

            .profile-card::after {
                content: '';
                position: absolute;
                bottom: -50px;
                right: -50px;
                width: 100px;
                height: 100px;
                background: rgba(40, 167, 69, 0.1);
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

            .container {
                max-width: 600px;
                width: 100%;
            }

            p {
                font-size: 1.2rem;
                margin: 10px 0;
            }

        </style>
    </head>
    <body class="antialiased" style="padding-top:100px">
    <div class="container text-center">
        <h1>Profil</h1>
        <p>Nama: Salim Ariantou</p>
        <p>Jurusan: Sistem Informasi</p>
        <p>Fakultas: Fakultas Ilmu Komputer</p>
        <p>Hobi: Bermain Bola Basket</p>
        <a href="Home"><button class="btn btn-primary">Kembali ke Home</button></a>
        <a href="matakuliah"><button class="btn btn-secondary mt-2">Lihat Mata Kuliah</button></a>
    </div>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    </body>
</html>
