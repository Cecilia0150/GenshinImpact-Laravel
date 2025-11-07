<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Genshin Impact - Personajes</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: #D0DFF7;
            background-size: cover;
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

        .titulo-personajes {
            color: white;
            font-size: 48px;
            margin-bottom: 40px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            font-weight: bold;
        }

        .letra-divisor {
            color: white;
            font-size: 32px;
            margin-top: 40px;
            margin-bottom: 20px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
            font-weight: bold;
            border-bottom: 2px solid rgba(255, 255, 255, 0.3);
            padding-bottom: 10px;
        }

        .personajes-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
            gap: 25px;
            max-width: 1400px;
            margin: 0 auto 30px;
        }

        .boton-personaje {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            text-decoration: none;
            color: #333;
            font-weight: bold;
            transition: all 0.3s ease;
            cursor: pointer;
            background: rgba(255, 255, 255, 0.9);
            padding: 15px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }

        .boton-personaje:hover {
            transform: translateY(-8px);
            color: #6366f1;
            box-shadow: 0 8px 25px rgba(99, 102, 241, 0.3);
            background: white;
        }

        .boton-personaje img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .boton-personaje:hover img {
            transform: scale(1.1);
        }

        .boton-personaje span {
            font-size: 16px;
            text-align: center;
        }

        footer {
            background-color: white;
            padding: 30px 40px;
            border-top: 2px solid #e0e0e0;
            box-shadow: 0 -2px 10px rgba(0,0,0,0.1);
            text-align: center;
            margin-top: 40px;
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
            <a href="<?php echo e(url('principal')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/Regiones.jpg')); ?>" alt="Regiones" class="region-text">
                <span>Regiones</span>
            </a>
            
            <a href="<?php echo e(url('personajes')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/Personajes.jpg')); ?>" alt="Personajes" class="region-text">
                <span>Personajes</span>
            </a>
            
            <a href="<?php echo e(url('inicio-sesion')); ?>" class="boton-menu">
                <img src="<?php echo e(asset('images/Registro.jpg')); ?>" alt="Registro" class="region-text">
                <span>Inicio Sesion</span>
            </a>
        </nav>
    </header>

    <div class="contenedor-principal">
        <h1 class="titulo-personajes">Personajes</h1>

        <?php $__currentLoopData = [
            'A' => ['albedo', 'amber', 'aino', 'arlecchino', 'alhacen', 'arataki'],
            'B' => ['barbara', 'bennett', 'beidou', 'baizhu'],
            'C' => ['candace', 'collei', 'citlali', 'chasca', 'clorinde', 'chiori', 'chevreuse', 'charlotte', 'cyno'],
            'D' => ['diluc', 'diona', 'dehya', 'dahlia', 'dori'],
            'E' => ['eula', 'escoffier', 'emilie'],
            'F' => ['fishl', 'faruzan', 'flins', 'furina', 'freminet'],
            'G' => ['ganyu', 'gorou', 'gaming'],
            'H' => ['hutao'],
            'I' => ['ifa', 'ineffa', 'iansan'],
            'J' => ['jean'],
            'K' => ['kachina', 'ayaka', 'ayato', 'kaveh', 'kazuha', 'keching', 'kinich', 'kirara', 'kuki', 'kujou', 'klee'],
            'L' => ['laila', 'lan', 'lauma', 'lisa', 'lynette', 'lyney'],
            'M' => ['mavuika', 'mika', 'mona', 'mualani'],
            'N' => ['nahida', 'navia', 'neuvillette', 'ningguang', 'nilou'],
            'O' => ['ororon'],
            'Q' => ['qiqi'],
            'R' => ['razor', 'rosaria'],
            'S' => ['sacarosa', 'kokomi', 'sayu', 'shenhe', 'shogun', 'skirk', 'sigewine', 'sethos'],
            'T' => ['tartaglia', 'thoma', 'trotamundos', 'tignari'],
            'V' => ['venti', 'varesa'],
            'W' => ['wriothesley'],
            'X' => ['xingqiu', 'xiao', 'xiangling', 'xilonen', 'xianyun', 'xinyan'],
            'Y' => ['yae', 'yelan', 'yoimiya', 'yun'],
            'Z' => ['zhongli']
        ]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $letra => $personajes): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <h2 class="letra-divisor"><?php echo e($letra); ?></h2>
            <div class="personajes-grid">
                <?php $__currentLoopData = $personajes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $nombre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(url('Proximamente')); ?>" class="boton-personaje">
                        <img src="<?php echo e(asset('images/' . $nombre . '.jpg')); ?>" alt="<?php echo e(ucfirst($nombre)); ?>">
                        <span><?php echo e(ucfirst($nombre)); ?></span>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

    <footer>
        <a href="<?php echo e(url('principal')); ?>">← Volver al Inicio</a>
    </footer>

</body>
</html>

<?php /**PATH C:\Users\anano\Herd\genshinimpact\resources\views/Personajes.blade.php ENDPATH**/ ?>