<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact - Menú</title>

    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-image: url('<?php echo e(asset('images/FondoMenu.jpg')); ?>');
            background-size: cover;
            font-family: 'Times New Roman', Times, serif;
        }

        header {
            position: fixed;
            top: 0; left: 0; right: 0;
            background-color: white;
            border-bottom: 1px solid #e0e0e0;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .logo-container { display: flex; align-items: center; gap: 12px; }
        .logo-text { width: 150px; height: 80px; }

        .texto { font-size: 24px; display: flex; gap: 30px; align-items: center; }

        .boton-menu {
            display: flex; flex-direction: column; align-items: center;
            gap: 8px; text-decoration: none; color: #6366f1; font-weight: bold;
            transition: all 0.3s ease; cursor: pointer;
        }

        .boton-menu:hover { transform: translateY(-3px); opacity: 0.8; }
        .boton-menu span { font-size: 18px; }

        .region-text { width: 50px; height: 50px; object-fit: contain; }

        .contenedor-principal {
            margin-top: 120px;
            display: flex; flex-direction: column;
            justify-content: center; align-items: center;
            min-height: calc(100vh - 120px);
            padding: 20px;
        }

        .titulo-carrusel {
            color: white; font-size: 48px; margin-bottom: 40px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5); font-weight: bold;
        }

        .carrusel-wrapper {
            max-width: 800px; width: 100%;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 15px; overflow: hidden;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .carrusel { position: relative; width: 100%; height: 500px; overflow: hidden; }
        .carrusel-item {
            position: absolute; width: 100%; height: 100%;
            opacity: 0; transition: opacity 0.8s ease-in-out;
        }
        .carrusel-item.activo { opacity: 1; }

        .carrusel-item img { width: 100%; height: 100%; object-fit: cover; }

        .controles {
            display: flex; justify-content: space-between;
            align-items: center; padding: 20px 30px; background: white;
        }

        .boton-carrusel {
            background: #6366f1; color: white; border: none;
            width: 45px; height: 45px; border-radius: 50%;
            font-size: 20px; cursor: pointer; transition: all 0.3s ease;
            display: flex; align-items: center; justify-content: center;
        }

        .boton-carrusel:hover { background: #4f46e5; transform: scale(1.1); }

        .indicadores { display: flex; gap: 10px; }
        .indicador {
            width: 12px; height: 12px; border-radius: 50%;
            background: #ddd; cursor: pointer; transition: all 0.3s ease;
        }
        .indicador.activo { background: #6366f1; width: 30px; border-radius: 6px; }

        footer {
            background-color: white;
            padding: 30px 40px;
            border-top: 2px solid #e0e0e0;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
        }

        .regiones-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .boton-region {
            display: flex; flex-direction: column; align-items: center;
            gap: 10px; text-decoration: none; color: #333; font-weight: bold;
            transition: all 0.3s ease; cursor: pointer;
        }

        .boton-region:hover { transform: translateY(-5px); color: #6366f1; }

        .boton-region img {
            width: 80px; height: 80px; object-fit: contain;
            border-radius: 10px; transition: all 0.3s ease;
        }

        .boton-region:hover img {
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }

        .boton-region span { font-size: 14px; text-align: center; }
    </style>
</head>
<body>
    
    <header>
        <div class="logo-container">
            <img src="<?php echo e(asset('images/LogoPagina.jpg')); ?>" alt="Logo" class="logo-text">
        </div>
        
        <nav class="texto">
            <a href="#" class="boton-menu">
                <img src="<?php echo e(asset('images/Regiones.jpg')); ?>" alt="Regiones" class="region-text">
                <span>Regiones</span>
            </a>
            
            <a href="<?php echo e(route('personajes')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/Personajes.jpg')); ?>" alt="Personajes" class="region-text">
                <span>Personajes</span>
            </a>
            
            <a href="<?php echo e(route('inicioSesion')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/Registro.jpg')); ?>" alt="Registro" class="region-text">
                <span>Inicio Sesión</span>
            </a>
        </nav>
    </header>

    <div class="contenedor-principal">
        <h1 class="titulo-carrusel">Personajes Destacados</h1>

        <div class="carrusel-wrapper">
            <div class="carrusel" id="carrusel">
                <div class="carrusel-item activo"><img src="<?php echo e(asset('images/ifa.jpg')); ?>" alt="Imagen 1"></div>
                <div class="carrusel-item"><img src="<?php echo e(asset('images/neuvillette.jpg')); ?>" alt="Imagen 2"></div>
                <div class="carrusel-item"><img src="<?php echo e(asset('images/bennett.jpg')); ?>" alt="Imagen 3"></div>
                <div class="carrusel-item"><img src="<?php echo e(asset('images/lisa.jpg')); ?>" alt="Imagen 4"></div>
            </div>

            <div class="controles">
                <button class="boton-carrusel" onclick="anteriorCarrusel()">❮</button>
                <div class="indicadores" id="indicadores"></div>
                <button class="boton-carrusel" onclick="siguienteCarrusel()">❯</button>
            </div>
        </div>
    </div>

    <footer>
        <h2 style="text-align:center; color:#333; margin-bottom:30px; font-size:36px;">Regiones</h2>
        <div class="regiones-grid">
            <a href="<?php echo e(route('mondstadt')); ?>" class="boton-region"><img src="<?php echo e(asset('images/mondstadt.jpg')); ?>" alt="Mondstadt"><span>Mondstadt</span></a>
            <a href="<?php echo e(route('liyue')); ?>" class="boton-region"><img src="<?php echo e(asset('images/liyue.jpg')); ?>" alt="Liyue"><span>Liyue</span></a>
            <a href="<?php echo e(route('inazuma')); ?>" class="boton-region"><img src="<?php echo e(asset('images/inazuma.jpg')); ?>" alt="Inazuma"><span>Inazuma</span></a>
            <a href="<?php echo e(route('sumeru')); ?>" class="boton-region"><img src="<?php echo e(asset('images/sumeru.jpg')); ?>" alt="Sumeru"><span>Sumeru</span></a>
            <a href="<?php echo e(route('fontaine')); ?>" class="boton-region"><img src="<?php echo e(asset('images/fontaine.jpg')); ?>" alt="Fontaine"><span>Fontaine</span></a>
            <a href="<?php echo e(route('natlan')); ?>" class="boton-region"><img src="<?php echo e(asset('images/natlan.jpg')); ?>" alt="Natlan"><span>Natlan</span></a>
            <a href="<?php echo e(route('proximamente')); ?>" class="boton-region"><img src="<?php echo e(asset('images/proximamente.jpg')); ?>" alt="Proximamente"><span>Próximamente</span></a>
        </div>
    </footer>

    <script>
        let indiceActual = 0;
        const items = document.querySelectorAll('.carrusel-item');
        const totalItems = items.length;
        const contenedorIndicadores = document.getElementById('indicadores');

        for (let i = 0; i < totalItems; i++) {
            const indicador = document.createElement('div');
            indicador.className = 'indicador' + (i === 0 ? ' activo' : '');
            indicador.onclick = () => irAlCarrusel(i);
            contenedorIndicadores.appendChild(indicador);
        }

        const indicadores = document.querySelectorAll('.indicador');

        function mostrarCarrusel(indice) {
            items.forEach(item => item.classList.remove('activo'));
            indicadores.forEach(ind => ind.classList.remove('activo'));
            items[indice].classList.add('activo');
            indicadores[indice].classList.add('activo');
        }

        function siguienteCarrusel() {
            indiceActual = (indiceActual + 1) % totalItems;
            mostrarCarrusel(indiceActual);
        }

        function anteriorCarrusel() {
            indiceActual = (indiceActual - 1 + totalItems) % totalItems;
            mostrarCarrusel(indiceActual);
        }

        function irAlCarrusel(indice) {
            indiceActual = indice;
            mostrarCarrusel(indiceActual);
        }

        setInterval(siguienteCarrusel, 5000);
    </script>
</body>
</html>
<?php /**PATH C:\Users\anano\Herd\genshinimpact\resources\views/Principal.blade.php ENDPATH**/ ?>