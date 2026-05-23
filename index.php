<?php
header("Content-Type: text/html; charset=UTF-8");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CV - Alex Sarsam</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 40px auto; padding: 20px; background: #f5f5f5; }
        .card { background: white; padding: 30px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); }
        h1 { color: #2c3e50; }
        h2 { color: #3498db; border-bottom: 2px solid #3498db; padding-bottom: 5px; }
        .tag { background: #3498db; color: white; padding: 4px 10px; border-radius: 4px; margin: 3px; display: inline-block; }
    </style>
</head>
<body>
    <div class="card">
        <h1>Alex Sarsam</h1>
        <p>Desarrollador Web | DWES 2026</p>
        <h2>Sobre mi</h2>
        <p>Estudiante de Desarrollo Web en Entorno Servidor.</p>
        <h2>Habilidades</h2>
        <span class="tag">PHP</span>
        <span class="tag">React</span>
        <span class="tag">Jenkins</span>
        <span class="tag">Docker</span>
        <span class="tag">MySQL</span>
        <span class="tag">Git</span>
        <h2>Proyectos</h2>
        <ul>
            <li><strong>CV Online con CI/CD</strong> - Pipeline Jenkins + Cloudflare</li>
        </ul>
        <h2>Contacto</h2>
        <p>GitHub: github.com/AlexSarsam</p>
    </div>
</body>
</html>
