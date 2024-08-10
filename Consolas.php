<?php include 'headerprivado.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consolas</title>
    <!-- CSS de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Estilos personalizados -->
    <style>
       body {
    background-color: #f8f9fa;
    margin: 0;
    padding: 0;
}

.container-custom {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.filter-buttons {
    text-align: center;
    margin-top: 50px; /* Añadir margen en la parte superior */
}

.btn-filter {
    margin: 0 15px;
    font-size: 1rem;
    font-weight: bold;
    color: #32e81d; /* Color del texto */
    text-decoration: none;
    cursor: pointer;
    transition: color 0.3s;
}

.btn-filter:hover {
    color: #2ad516; /* Color al pasar el ratón */
}

.product-row {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.product-col {
    flex: 1 1 calc(25% - 20px); /* 4 columnas en cada fila */
    box-sizing: border-box;
    padding: 10px;
    min-width: 250px; /* Asegura que los productos mantengan su tamaño mínimo */
}

.product-card {
    border: none;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    background: #ffffff;
    text-align: center;
    transition: box-shadow 0.3s;
}

.product-card:hover {
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
}

.product-image {
    border-top-left-radius: 12px;
    border-top-right-radius: 12px;
    width: 100%;
    height: auto;
}

.product-body {
    padding: 15px;
}

.product-title {
    font-size: 1.1rem;
    font-weight: 600;
    color: #333;
}

.product-price {
    font-size: 1rem;
    color: #28a745; /* Color verde para el precio */
    margin: 10px 0;
}

.btn-add-to-cart {
    background-color: #28a745; /* Botón verde */
    color: white;
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-add-to-cart:hover {
    background-color: #218838; /* Verde más oscuro al pasar el ratón */
}




    </style>
</head>
<!DOCTYPE html>
<html lang="es">
<body>
<div class="container-fluid">
        <div class="row">
            <!-- Filtros -->
            <div class="col-md-12">
                <div class="filter-buttons">
                    <a href="#" class="btn-filter" data-category="all">Todos</a>
                    <a href="#" class="btn-filter" data-category="Xbox">Xbox</a>
                    <a href="#" class="btn-filter" data-category="PlayStation">PlayStation</a>
                    <a href="#" class="btn-filter" data-category="Nintendo">Nintendo</a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Productos -->
            <div class="col-md-12">
                <div class="container-custom">
                    <div class="product-row" id="product-container">
                        <!-- Xbox Producto 1 -->
                        <div class="product-col" data-category="Xbox">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/PBQFrrm-Ik23hxXa0adp2FcEnWhVZlMuHYmJzZUCTiE/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/MjFzZHlxVXhrS0wu/anBn" class="product-image" alt="Xbox Series X">
                                <div class="product-body">
                                    <h5 class="product-title">Xbox Series X</h5>
                                    <p class="product-price">$499.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="25">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Xbox Producto 2 -->
                        <div class="product-col" data-category="Xbox">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/a4EaWUolwTW5iNu0C4jqP49wYCka7sMzfDud_6gTa0M/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvNDcy/MDQ0NzE5L3Bob3Rv/L3hib3gtb25lLmpw/Zz9zPTYxMng2MTIm/dz0wJms9MjAmYz13/aVBrX3dFZFVuczVV/c05jcjQ2eFJOSnl2/NmM2bGNtYWtaQ1ox/cVl4ZzVrPQ" class="product-image" alt="Xbox Series S">
                                <div class="product-body">
                                    <h5 class="product-title">Xbox Series S</h5>
                                    <p class="product-price">$299.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="26">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Xbox Producto 3 -->
                        <div class="product-col" data-category="Xbox">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/YuzxNyLtaeWaSZHqY9v4lCZUtGwUqYZMU5K-R_7SCGM/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nYW1lc3RvcC5j/b20vaS9nYW1lc3Rv/cC8xMDE3NDY1OT8k/cGRwJA" class="product-image" alt="Xbox One X">
                                <div class="product-body">
                                    <h5 class="product-title">Xbox One X</h5>
                                    <p class="product-price">$399.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="27">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Xbox Producto 4 -->
                        <div class="product-col" data-category="Xbox">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/tdPvswGmF0jlV2Pd9RO6YwHCodSKPB6w4_qNqhzrJbQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTEy/NTY3MTkwMC9waG90/by9hLW1pY3Jvc29m/dC14Ym94LW9uZS1o/b21lLXZpZGVvLWdh/bWVzLWNvbnNvbGUt/YW5kLXhib3gtb25l/LXdpcmVsZXNzLWNv/bnRyb2xsZXItdGFr/ZW4tb24uanBnP3M9/NjEyeDYxMiZ3PTAm/az0yMCZjPTVtYXVP/UndwNzVTTDhIM2c4/T3BNdkFCZ3JlWjlt/RnVRX0dhb3BwMmhX/b0E9" class="product-image" alt="Xbox One S">
                                <div class="product-body">
                                    <h5 class="product-title">Xbox One S</h5>
                                    <p class="product-price">$249.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="28">Comprar</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- PlayStation Producto 1 -->
                        <div class="product-col" data-category="PlayStation">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/m-kJbT7Pcf9lnZKrcCNbOWvBICnTPFTmeq8BdJt6Va0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9wczVw/bGF5c3RhdGlvbjUu/Y29tL2ltYWdlcy9w/czUtY29uc29sZS1h/bmQtY29udHJvbGxl/ci5qcGc" class="product-image" alt="PlayStation 5">
                                <div class="product-body">
                                    <h5 class="product-title">PlayStation 5</h5>
                                    <p class="product-price">$499.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="29">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- PlayStation Producto 2 -->
                        <div class="product-col" data-category="PlayStation">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/jH6eBN7TzYCEGfSSnxNXFhG9Id4rHLSkMGpnXaSdf_c/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/aG9iYnljb25zb2xh/cy5jb20vc2l0ZXMv/bmF2aS5heGVsc3By/aW5nZXIuZXMvcHVi/bGljL21lZGlhL2lt/YWdlLzIwMjQvMDMv/cHM1LXByby0zMjkw/NDEyLmpwZz90Zj0z/ODQweA" class="product-image" alt="PlayStation 4 Pro">
                                <div class="product-body">
                                    <h5 class="product-title">PlayStation 4 Pro</h5>
                                    <p class="product-price">$399.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="30">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- PlayStation Producto 3 -->
                        <div class="product-col" data-category="PlayStation">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/RTR1-nUxzXlkXRn6aTeYEiejCE5zvj5WrEsAJ43-Z70/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMtbmEuc3NsLWlt/YWdlcy1hbWF6b24u/Y29tL2ltYWdlcy9J/LzcxcEZuSEJydmdM/LmpwZw" class="product-image" alt="PlayStation 4">
                                <div class="product-body">
                                    <h5 class="product-title">PlayStation 4</h5>
                                    <p class="product-price">$299.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="31">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- PlayStation Producto 4 -->
                        <div class="product-col" data-category="PlayStation">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/UV2uTv2KS9eWfuxiIFlWqTpdyDvpNEBAwpWdchohCjw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NjFMZk1ldDdzNEwu/anBn" class="product-image" alt="PlayStation VR">
                                <div class="product-body">
                                    <h5 class="product-title">PlayStation VR</h5>
                                    <p class="product-price">$299.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="32">Comprar</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Nintendo Producto 1 -->
                        <div class="product-col" data-category="Nintendo">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/LYY6qqzB9XUd8jvEDwaUrHIUBVkJU5uIBle8eWCOCYw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMubmludGVuZG8u/Y29tL2ltYWdlL3Vw/bG9hZC9mX2F1dG8v/cV9hdXRvL2NfZmls/bCx3XzMwMC9uY29t/L2VuX1VTL3N3aXRj/aC9zaXRlLWRlc2ln/bi11cGRhdGUvaGFy/ZHdhcmUtaGVyby1j/b21ibw" class="product-image" alt="Nintendo Switch OLED">
                                <div class="product-body">
                                    <h5 class="product-title">Nintendo Switch OLED</h5>
                                    <p class="product-price">$349.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="33">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Nintendo Producto 2 -->
                        <div class="product-col" data-category="Nintendo">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/x3fcUkMtj7kEAwWDjfg-sOCTogs1kF7nAcBYiURRLXQ/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/MzFvZHk3YWttZEwu/anBn" class="product-image" alt="Nintendo Switch Lite">
                                <div class="product-body">
                                    <h5 class="product-title">Nintendo Switch Lite</h5>
                                    <p class="product-price">$199.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="34">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Nintendo Producto 3 -->
                        <div class="product-col" data-category="Nintendo">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/Py9QN5PaZZANdgOdlxtjRNAirN7S6S-2drlLokc-d1k/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/dGhld2lyZWN1dHRl/ci5jb20vd3AtY29u/dGVudC9tZWRpYS8y/MDIxLzExL25pbnRl/bmRvLXN3aXRjaC0y/MDQ4cHgtMTAxMTQz/Ny0zeDItMS5qcGc_/YXV0bz13ZWJwJnF1/YWxpdHk9NzUmd2lk/dGg9MTAyNA" class="product-image" alt="Nintendo Switch 2021">
                                <div class="product-body">
                                    <h5 class="product-title">Nintendo Switch 2021</h5>
                                    <p class="product-price">$299.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="35">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Nintendo Producto 4 -->
                        <div class="product-col" data-category="Nintendo">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/pnsSFmfPh_xClNevE6S1T555nKr_G97NCpUQpYZKubc/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jZG4u/bW9zLmNtcy5mdXR1/cmVjZG4ubmV0LzZX/WFFxa2V3NXdpTUd6/THR5UW9uZW0tMzIw/LTgwLmpwZw" class="product-image" alt="Nintendo Switch Pro">
                                <div class="product-body">
                                    <h5 class="product-title">Nintendo Switch Pro</h5>
                                    <p class="product-price">$399.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="36">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'modalproductos.php'; ?>
</body>
</html>


      <script>
            document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('.btn-filter');
            const productCols = document.querySelectorAll('.product-col');

            filterButtons.forEach(button => {
                button.addEventListener('click', (e) => {
                    e.preventDefault();
                    const category = button.getAttribute('data-category');

                    productCols.forEach(col => {
                        if (category === 'all' || col.getAttribute('data-category') === category) {
                            col.style.display = 'block';
                        } else {
                            col.style.display = 'none';
                        }
                    });
                });
            });
        });

      </script>
    

</body>
</html>



<?php include 'footerprivado.php'; ?>