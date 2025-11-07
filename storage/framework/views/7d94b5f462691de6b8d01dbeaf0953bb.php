<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact - Inazuma</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background: linear-gradient(135deg, #8B5FBF 0%, #6A4C93 100%);
            background-attachment: fixed;
            font-family: 'Times New Roman', Times, serif;
        }

        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background-color: white;
            border-bottom: 1px solid #e0e0e0;
            padding: 15px 40px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 1000;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo-text {
            width: 150px;
            height: 80px;
        }

        .texto {
            font-size: 24px;
            display: flex;
            gap: 30px;
            align-items: center;
        }

        .boton-menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #6366f1;
            font-weight: bold;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .boton-menu:hover {
            transform: translateY(-3px);
            opacity: 0.8;
        }

        .boton-menu span {
            font-size: 18px;
        }

        .region-text {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        .contenedor-principal {
            margin-top: 120px;
            padding: 40px 20px;
            min-height: calc(100vh - 120px);
        }

        .titulo-galeria {
            color: white;
            font-size: 56px;
            text-align: center;
            margin-bottom: 20px;
            text-shadow: 3px 3px 6px rgba(0,0,0,0.5);
            font-weight: bold;
        }

        .descripcion-region {
            color: white;
            font-size: 20px;
            text-align: center;
            margin-bottom: 50px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .galeria {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            grid-auto-rows: 250px;
            gap: 25px;
            max-width: 1400px;
            margin: 0 auto;
            padding: 20px;
        }

        .galeria-item {
            position: relative;
            overflow: hidden;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.3);
            transition: all 0.4s ease;
            cursor: pointer;
        }

        .galeria-item:nth-child(1) {
            grid-column: span 2;
            grid-row: span 2;
        }

        .galeria-item:nth-child(4) {
            grid-column: span 2;
        }

        .galeria-item:nth-child(5) {
            grid-row: span 2;
        }

        .galeria-item:nth-child(7) {
            grid-column: span 2;
            grid-row: span 2;
        }

        .galeria-item:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 15px 35px rgba(139, 95, 191, 0.5);
        }

        .galeria-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.4s ease;
        }

        .galeria-item:hover img {
            transform: scale(1.1);
        }

        .galeria-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(to top, rgba(0,0,0,0.8) 0%, transparent 100%);
            padding: 20px;
            transform: translateY(100%);
            transition: all 0.4s ease;
        }

        .galeria-item:hover .galeria-overlay {
            transform: translateY(0);
        }

        .galeria-titulo {
            color: #C4A7E7;
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .galeria-descripcion {
            color: #ddd;
            font-size: 14px;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 2000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.9);
            justify-content: center;
            align-items: center;
        }

        .modal.activo {
            display: flex;
        }

        .modal-contenido {
            max-width: 90%;
            max-height: 90%;
            position: relative;
        }

        .modal-contenido img {
            width: 100%;
            height: auto;
            border-radius: 10px;
        }

        .cerrar-modal {
            position: absolute;
            top: -40px;
            right: 0;
            color: white;
            font-size: 40px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .cerrar-modal:hover {
            color: #C4A7E7;
            transform: scale(1.2);
        }

        footer {
            background-color: white;
            padding: 30px 40px;
            border-top: 2px solid #e0e0e0;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: 60px;
        }

        footer a {
            background: #8B5FBF;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        footer a:hover {
            background: #6A4C93;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    
    <header>
        <div class="logo-container">
            <img src="<?php echo e(asset('images/inazuma/LogoPagina.jpg')); ?>" alt="Logo" class="logo-text">
        </div>
        
        <nav class="texto">
            <a href="<?php echo e(url('principal')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/inazuma/Regiones.jpg')); ?>" alt="Regiones" class="region-text">
                <span>Regiones</span>
            </a>
            
            <a href="<?php echo e(url('personajes')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/inazuma/Personajes.jpg')); ?>" alt="Personajes" class="region-text">
                <span>Personajes</span>
            </a>
            
            <a href="<?php echo e(url('inicio-sesion')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/inazuma/Registro.jpg')); ?>" alt="Registro" class="region-text">
                <span>Inicio Sesion</span>
            </a>
        </nav>
    </header>

    <div class="contenedor-principal">
        <h1 class="titulo-galeria">⚡ Inazuma ⚡</h1>
        <p class="descripcion-region">
            La Nación de la Eternidad, reino de la Arconte Electro. 
            Explora las islas místicas y la cultura tradicional de esta región cerrada (Inspirado en Japón).
        </p>

        <div class="galeria">
            <?php for($i = 1; $i <= 8; $i++): ?>
                <div class="galeria-item" onclick="abrirModal('<?php echo e(asset('images/inazuma/i' . $i . '.jpg')); ?>')">
                    <img src="<?php echo e(asset('images/inazuma/i' . $i . '.jpg')); ?>" alt="Inazuma <?php echo e($i); ?>">
                    <div class="galeria-overlay"></div>
                </div>
            <?php endfor; ?>
        </div>
    </div>

    <div id="modal" class="modal" onclick="cerrarModal()">
        <div class="modal-contenido">
            <span class="cerrar-modal">&times;</span>
            <img id="imagen-modal" src="" alt="Imagen ampliada">
        </div>
    </div>

    <footer>
        <a href="<?php echo e(url('principal')); ?>">← Volver al Inicio</a>
    </footer>

    <script>
        function abrirModal(imagenSrc) {
            const modal = document.getElementById('modal');
            const imagenModal = document.getElementById('imagen-modal');
            imagenModal.src = imagenSrc;
            modal.classList.add('activo');
        }

        function cerrarModal() {
            document.getElementById('modal').classList.remove('activo');
        }

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') cerrarModal();
        });
    </script>

</body>
</html>
<?php /**PATH C:\Users\anano\Herd\genshinimpact\resources\views/inazuma.blade.php ENDPATH**/ ?>