<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Profile</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    
    <!-- Encabezado -->
    <div class="header">
        <div class="logo">
            <img src="img/CEBOLLIN-1.png" alt="Logo de la Web">
            <h1>Electiva Profesional 1</h1>
        </div>
        <div class="navigation">
            <a href="#acercade">Acerca de</a>
            <a href="#equipo">Equipo</a>
            <a href="#curso">Curso</a>
        </div>
    </div>

    <div class="titulo">
        <img src="img/logologuero.jpg" alt="UDI wey">
    </div>

    <!-- Perfil principal -->
    <section class="acerca">

        <div class="acerca-de">
            <h2>Citas Medicas Web</h2>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eveniet molestias sint nihil, repudiandae minus aspernatur voluptates ipsa accusantium voluptas maiores cum dolore nam ab temporibus molestiae illum odio inventore! Numquam.
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci repudiandae nulla incidunt, dolores commodi laudantium labore nam dicta autem facilis tempora expedita sed numquam quo omnis cupiditate modi similique harum!
            </p>
            <p>
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsa fugit itaque, nam inventore, illum asperiores veritatis, doloribus repudiandae odit ipsum harum dolor? Unde eaque aliquam nostrum suscipit sint, sapiente quam!
            </p>
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus nisi tenetur, obcaecati, esse eum reprehenderit veritatis eos officia vitae nobis autem! Reiciendis fuga minima perferendis sed voluptas ex magnam nesciunt!
            </p>
        </div>

        <!-- Galería de imágenes -->
        <div class="gallery">
            <div class="images">
                <img src="img/miku.png" alt="Imagen 1" id="img1" >
                <img src="img/neru.png" alt="Imagen 2" id="img2">
                <img src="img/teto.png" alt="Imagen 3" id="img3">
            </div>
        </div>

        <div class="div-botones">
            <button id="tomate">Tomate</button>
            <button id="carrusel">Gira gira</button>
        </div>

    </section>

    <!-- Pie de página -->
    <footer>
        <p>UDI - 2025 - 1</p>
    </footer>

    <script>

        // Seleccionar las imágenes y los botones
        let img1 = document.getElementById("img1");
        let img2 = document.getElementById("img2");
        let img3 = document.getElementById("img3");
        let btnTomate = document.getElementById("tomate");
        let btnCarrusel = document.getElementById("carrusel");

        let intervalo; // Variable para almacenar el intervalo
        let corriendo = false; // Estado del carrusel

        // Función para rotar las imágenes una sola vez
        btnTomate.addEventListener("click", function() {
            let tempSrc1 = img1.src;
            let tempSrc2 = img2.src;
            let tempSrc3 = img3.src;

            img1.src = tempSrc3;
            img2.src = tempSrc1;
            img3.src = tempSrc2;
        });

        // Función para iniciar/detener el carrusel automático
        btnCarrusel.addEventListener("click", function() {
            if (!corriendo) {
                // Iniciar el carrusel
                intervalo = setInterval(() => {
                    let tempSrc1 = img1.src;
                    let tempSrc2 = img2.src;
                    let tempSrc3 = img3.src;

                    img1.src = tempSrc3;
                    img2.src = tempSrc1;
                    img3.src = tempSrc2;
                }, 200); // Cambia cada 2 segundos

                corriendo = true;
                btnCarrusel.textContent = "Detener";
            } else {
                // Detener el carrusel
                clearInterval(intervalo);
                corriendo = false;
                btnCarrusel.textContent = "Gira gira";
            }
        });


    </script>

</body>
</html>
