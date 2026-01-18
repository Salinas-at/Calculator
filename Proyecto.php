<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A new web page">
    <meta name="robots" content="index, follow">
    <link rel="icon" href="favicon.ico">
    <title>Calculadora</title>
    <style>
      body {
  background: #1e1e1e;
  font-family: Arial, sans-serif;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

form {
  background: #2c2c2c;
  padding: 20px;
  border-radius: 12px;
  width: 260px;
  box-shadow: 0 0 15px rgba(0, 0, 0, 0.6);
}

/* Pantalla */
#resultado {
  display: block;
  background: #000;
  color: #0f0;
  font-size: 28px;
  text-align: right;
  padding: 15px;
  border-radius: 8px;
  margin-bottom: 15px;
  min-height: 40px;
}

/* Contenedor de botones */
.contenedor {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 10px;
}

/* Botones */
button {
  font-size: 18px;
  padding: 15px;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  background: #444;
  color: #fff;
  transition: background 0.2s, transform 0.1s;
}

button:hover {
  background: #666;
}

button:active {
  transform: scale(0.95);
}

/* Operadores */
button:nth-child(14),
button:nth-child(15),
button:nth-child(16),
button:nth-child(17),
button:nth-child(18) {
  background: #ff9500;
}

button:nth-child(14):hover,
button:nth-child(15):hover,
button:nth-child(16):hover,
button:nth-child(17):hover,
button:nth-child(18):hover {
  background: #ffa733;
}

/* Botón 0 ocupa dos columnas */
.cero {
  grid-column: span 2;
}
    </style>
</head>
<body>
      <form method="post" action="">
        
        <p> <span id="resultado"></span></p>
      <div class="contenedor">
        
        <!--BOTONES-->
        <button type="button" onclick="mostrar(this)">7</button>
        <button type="button" onclick="mostrar(this)">8</button>
        <button type="button" onclick="mostrar(this)">9</button>
        
        <button type="button" onclick="mostrar(this)">4</button>
        <button type="button" onclick="mostrar(this)">5</button>
        <button type="button" onclick="mostrar(this)">6</button>
        
        <button type="button" onclick="mostrar(this)">1</button>
        <button type="button" onclick="mostrar(this)">2</button>
        <button type="button" onclick="mostrar(this)">3</button>
        
        <button class="cero" type="button" onclick="mostrar(this)">0</button>
        
        <!--OPERADORES-->
        <button type="button" onclick="mostrar(this)">+</button>
        <button type="button" onclick="mostrar(this)">-</button>
        <button type="button" onclick="mostrar(this)">×</button>
        <button type="button" onclick="mostrar(this)">÷</button>
        <button type="button" onclick="calcular()">=</button>
      </div>
        
      </form>
      
      <script>
        function mostrar(boton) {
          document.getElementById("resultado").innerHTML += boton.innerHTML;
        }
        
        function calcular() {
          let expresion = document.getElementById("resultado").innerHTML;
          
          expresion = expresion.replace(/×/g, "*");
    expresion = expresion.replace(/÷/g, "/");
          
          try {
            document.getElementById("resultado").innerHTML = eval(expresion);
          } catch {
            document.getElementById("resultado").innerHTML = "Error";
          }
        }
      </script>
</body>
</html>