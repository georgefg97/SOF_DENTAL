<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica Dental Muelitas</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f8f8f8;
        }

        header {
            background-color: #00b0f0;
            color: white;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            max-width: 150px;
        }

        nav {
            display: flex;
            margin-top: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
            margin: 0 5px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: rgba(255, 255, 255, 0.2);
        }

        section {
            padding: 40px;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
        }

        footer {
            background-color: #00b0f0;
            color: white;
            padding: 20px;
            text-align: center;
            box-shadow: 0 -2px 4px rgba(0, 0, 0, 0.1);
        }

        #map {
            height: 400px;
            width: 100%;
            margin-bottom: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .social-icons {
            margin-top: 20px;
        }

        .social-icons a {
            color: white;
            font-size: 24px;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .social-icons a:hover {
            color: #e6e6e6;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <img src="imagenes/muelitas.jpg" alt="Logo de la Clínica Dental" class="logo">
        </div>
        <div>
            <h1>Clínica Dental Muelitas</h1>
            <nav>
                <a href="#">Lista de Citas</a>
                <a href="#">Calendario</a>
                <a href="#">Contactos</a>
            </nav>
        </div>
    </header>

    <section>
        <h2>Bienvenidos a Clínica Dental Muelitas</h2>
        <p>Somos un equipo de profesionales altamente capacitados y comprometidos con brindar servicios dentales de calidad. Nuestra misión es ayudar a nuestros pacientes a mantener una sonrisa saludable y radiante a través de tratamientos personalizados y un enfoque centrado en el cuidado.</p>
    </section>

    <footer>
        <h3>Encuéntranos</h3>
        <div id="map"></div>
        <p>Dirección: Av. Hernando Siles, La Paz, Bolivia</p>
        <div class="social-icons">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
        </div>
    </footer>

    <script>
        var map = L.map('map').setView([-16.5012, -68.0651], 15); // Coordenadas y nivel de zoom

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([-16.5012, -68.0651]).addTo(map) // Marcador en las coordenadas
            .bindPopup('Clínica Dental Muelitas')
            .openPopup();
    </script>
</body>
</html>
