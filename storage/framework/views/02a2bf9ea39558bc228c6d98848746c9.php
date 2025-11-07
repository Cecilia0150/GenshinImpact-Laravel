<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact - Iniciar Sesión</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            background-image: url('<?php echo e(asset("images/FondoMenu.jpg")); ?>');
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Times New Roman', Times, serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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

        .boton-menu:hover { transform: translateY(-3px); opacity: 0.8; }
        .boton-menu span { font-size: 18px; }

        .region-text {
            width: 50px;
            height: 50px;
            object-fit: contain;
        }

        /* CONTENEDOR FORMULARIO */
        .contenedor-formulario {
            margin-top: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 120px);
            padding: 40px 20px;
        }

        .formulario-card {
            background: rgba(240, 238, 232, 0.95);
            border-radius: 15px;
            padding: 50px 40px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.2);
        }

        .titulo-formulario {
            color: #4a4a4a;
            font-size: 36px;
            font-weight: bold;
            text-align: center;
            margin-bottom: 10px;
        }

        .subtitulo {
            color: #c9a76b;
            font-size: 16px;
            text-align: center;
            margin-bottom: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .subtitulo::before {
            content: "✦";
            font-size: 20px;
        }

        .form-group { margin-bottom: 30px; }

        label {
            color: #4a4a4a;
            font-size: 16px;
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        label::before { content: "* "; color: #d32f2f; }

        select, input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #d0d0d0;
            border-radius: 5px;
            font-size: 16px;
            background: white;
            color: #666;
            font-family: 'Times New Roman', Times, serif;
            transition: all 0.3s ease;
        }

        select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23333' d='M6 9L1 4h10z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            cursor: pointer;
        }

        input:focus, select:focus { outline: none; border-color: #c9a76b; }
        input::placeholder { color: #aaa; }

        .btn-enviar {
            width: 100%;
            padding: 15px;
            background: #3d3d3d;
            color: #c9a76b;
            border: none;
            border-radius: 5px;
            font-size: 20px;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-top: 20px;
            font-family: 'Times New Roman', Times, serif;
        }

        .btn-enviar:hover {
            background: #2d2d2d;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        footer {
            background-color: white;
            padding: 30px 40px;
            border-top: 2px solid #e0e0e0;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: auto;
        }

        footer a {
            background: #6366f1;
            color: white;
            padding: 12px 30px;
            border-radius: 25px;
            text-decoration: none;
            font-weight: bold;
            transition: all 0.3s ease;
            display: inline-block;
        }

        footer a:hover {
            background: #4f46e5;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    
    <header>
        <div class="logo-container">
            <img src="<?php echo e(asset('images/LogoPagina.jpg')); ?>" alt="Logo" class="logo-text">
        </div>
        
        <nav class="texto">
            <a href="<?php echo e(url('/principal')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/Regiones.jpg')); ?>" alt="Regiones" class="region-text">
                <span>Regiones</span>
            </a>
            
            <a href="<?php echo e(url('/personajes')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/Personajes.jpg')); ?>" alt="Personajes" class="region-text">
                <span>Personajes</span>
            </a>
            
            <a href="<?php echo e(url('/inicioSesion')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/Registro.jpg')); ?>" alt="Registro" class="region-text">
                <span>Inicio Sesión</span>
            </a>
        </nav>
    </header>

    <!-- CONTENEDOR FORMULARIO -->
    <div class="contenedor-formulario">
        <div class="formulario-card">
            <h1 class="titulo-formulario">Iniciar Sesión</h1>
            <p class="subtitulo">Inicia sesión para continuar</p>

            <form id="loginForm">
                <div class="form-group">
                    <label for="servidor">Servidor</label>
                    <select id="servidor" name="servidor" required>
                        <option value="">Elige un servidor</option>
                        <option value="america">América</option>
                        <option value="europa">Europa</option>
                        <option value="asia">Asia</option>
                        <option value="sar">SAR</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="apodo">Apodo</label>
                    <input type="text" id="apodo" name="apodo" placeholder="Escribe tu apodo" required>
                </div>

                <div class="form-group">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="Escribe tu contraseña" required>
                </div>

                <button type="submit" class="btn-enviar">Iniciar Sesión</button>
            </form>
        </div>
    </div>

    <footer>
        <a href="<?php echo e(url('/principal')); ?>">← Volver al Inicio</a>
    </footer>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const servidor = document.getElementById('servidor').value;
            const apodo = document.getElementById('apodo').value;
            const contrasena = document.getElementById('contrasena').value;
            if (servidor && apodo && contrasena) {
                alert('¡Inicio de sesión exitoso!\\n\\nServidor: ' + servidor + '\\nApodo: ' + apodo);
            } else {
                alert('Por favor, completa todos los campos');
            }
        });
    </script>

</body>
</html>
<?php /**PATH C:\Users\anano\Herd\genshinimpact\resources\views/InicioSesion.blade.php ENDPATH**/ ?>