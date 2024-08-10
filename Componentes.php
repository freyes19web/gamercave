<?php include 'headerprivado.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Componentes</title>
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
                    <a href="#" class="btn-filter" data-category="Mouse">Mouse</a>
                    <a href="#" class="btn-filter" data-category="MousePad">MousePad</a>
                    <a href="#" class="btn-filter" data-category="Teclados">Teclados</a>
                    <a href="#" class="btn-filter" data-category="VR">VR</a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Productos -->
            <div class="col-md-12">
                <div class="container-custom">
                    <div class="product-row" id="product-container">
                        <!-- Mouse Producto 1 -->
                        <div class="product-col" data-category="Mouse">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/C4sQWAVaYRDoXMpwpTZNxs-aTPDOodM5EkaImxg06Xg/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFLY0NwR2t0MVMu/anBn" class="product-image" alt="Logitech MX Master 3">
                                <div class="product-body">
                                    <h5 class="product-title">Logitech MX Master 3</h5>
                                    <p class="product-price">$99.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="9">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Mouse Producto 2 -->
                        <div class="product-col" data-category="Mouse">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/HDKLT-cZJ7OafyzR_f2xGu6xr46-kodh_PYGpNSYJ84/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NzErV05rUkRvckwu/anBn" class="product-image" alt="Razer DeathAdder V2">
                                <div class="product-body">
                                    <h5 class="product-title">Razer DeathAdder V2</h5>
                                    <p class="product-price">$79.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="10">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Mouse Producto 3 -->
                        <div class="product-col" data-category="Mouse">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/neFyMWHB8HOd-_SHApouTMpNXVPNg-cM-8sGsvK88u0/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly93d3cu/cGNnYW1lc24uY29t/L3dwLWNvbnRlbnQv/dXBsb2Fkcy9sZWdh/Y3kvU3RlZWxTZXJp/ZXNfUml2YWxfNjAw/X3dlaWdodHNfMC5q/cGc" class="product-image" alt="SteelSeries Rival 600">
                                <div class="product-body">
                                    <h5 class="product-title">SteelSeries Rival 600</h5>
                                    <p class="product-price">$89.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="11">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Mouse Producto 4 -->
                        <div class="product-col" data-category="Mouse">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/UCcjWc4CHWaVR2hpEGBaRsnnr2JGdCW5tLT4vNdm2ZU/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMtbmEuc3NsLWlt/YWdlcy1hbWF6b24u/Y29tL2ltYWdlcy9J/LzUxU3gwTmFGN3lM/LmpwZw" class="product-image" alt="Corsair M65 RGB">
                                <div class="product-body">
                                    <h5 class="product-title">Corsair M65 RGB</h5>
                                    <p class="product-price">$74.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="12">Comprar</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- MousePad Producto 1 -->
                        <div class="product-col" data-category="MousePad">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/tpJE46eOJgxKM6otFFFQAVLm1OUub9wks6cg3DaZ_QE/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5vZmZpY2VkZXBv/dC5jb20vaW1hZ2Vz/L2ZfYXV0byxxX2F1/dG8sZV9zaGFycGVu/LGhfNDUwL3Byb2R1/Y3RzLzkwMjgzNjIv/OTAyODM2Ml9vNTFf/Y25fOTc4Nzk0My85/MDI4MzYy.jpeg" class="product-image" alt="SteelSeries QcK">
                                <div class="product-body">
                                    <h5 class="product-title">SteelSeries QcK</h5>
                                    <p class="product-price">$19.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="13">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- MousePad Producto 2 -->
                        <div class="product-col" data-category="MousePad">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/ZbETFjI7iDDA2EN-fRz2qmVh2KwHLI-bXhyMi21b98E/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5vZmZpY2VkZXBv/dC5jb20vaW1hZ2Vz/L2ZfYXV0byxxX2F1/dG8sZV9zaGFycGVu/LGhfNDUwL3Byb2R1/Y3RzLzgxMzM4NzAv/ODEzMzg3MF9vNTFf/Y25fOTcyNTU3My84/MTMzODcw.jpeg" class="product-image" alt="Razer Goliathus">
                                <div class="product-body">
                                    <h5 class="product-title">Razer Goliathus</h5>
                                    <p class="product-price">$29.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="14">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- MousePad Producto 3 -->
                        <div class="product-col" data-category="MousePad">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/f002aI9c02QwRRYwDOPjkfIiaYOwWaZFAh4IExc_yts/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/OTFua0t3eG50eEwu/anBn" class="product-image" alt="Corsair MM300">
                                <div class="product-body">
                                    <h5 class="product-title">Corsair MM300</h5>
                                    <p class="product-price">$24.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="15">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- MousePad Producto 4 -->
                        <div class="product-col" data-category="MousePad">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/x-qbEp_3ybXZ3oZrG7QQvuq6RjCCZQtBQMcUTH_aMIY/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/ODF3SGJXbFU0c0wu/anBn" class="product-image" alt="HyperX Fury">
                                <div class="product-body">
                                    <h5 class="product-title">HyperX Fury</h5>
                                    <p class="product-price">$21.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="16">Comprar</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Teclado Producto 1 -->
                        <div class="product-col" data-category="Teclados">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/a-JqQ8m-YCAR3uo0Y4AD2G87BwD7jxJLQHPZU0oK5Eg/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9jMS5u/ZXdlZ2dpbWFnZXMu/Y29tL1Byb2R1Y3RJ/bWFnZS8yMy04MTYt/MDg2LVY0MC5qcGc" class="product-image" alt="Corsair K95">
                                <div class="product-body">
                                    <h5 class="product-title">Corsair K95</h5>
                                    <p class="product-price">$199.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="17">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Teclado Producto 2 -->
                        <div class="product-col" data-category="Teclados">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/STzrSJAmr2uHKfB-lVKCfVdVUxcVDOinSRUnx3BAIbw/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDEwMityTytTOUwu/anBn" class="product-image" alt="Razer BlackWidow">
                                <div class="product-body">
                                    <h5 class="product-title">Razer BlackWidow</h5>
                                    <p class="product-price">$139.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="18">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Teclado Producto 3 -->
                        <div class="product-col" data-category="Teclados">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/lAX73qaSMqdyrzVmpxbQ08R6B3w3uX7KrSt6r1TVLuI/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9jMS5u/ZXdlZ2dpbWFnZXMu/Y29tL1Byb2R1Y3RJ/bWFnZS9BTTdVUzIw/MTIwN0JrN1hFLmpw/Zw" class="product-image" alt="Logitech G910">
                                <div class="product-body">
                                    <h5 class="product-title">Logitech G910</h5>
                                    <p class="product-price">$179.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="19">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Teclado Producto 4 -->
                        <div class="product-col" data-category="Teclados">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/BpIKSEKoVZ6jLwK-4fXg84o40TRCayCZUmANjKR5pbc/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9jMS5u/ZXdlZ2dpbWFnZXMu/Y29tL3Byb2R1Y3Rp/bWFnZS9uYjMwMC9B/NFJFUzIxMDYzMG82/Y0NQLmpwZw" class="product-image" alt="Ducky One 2">
                                <div class="product-body">
                                    <h5 class="product-title">Ducky One 2</h5>
                                    <p class="product-price">$159.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="20">Comprar</button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- VR Producto 1 -->
                        <div class="product-col" data-category="VR">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/JZAzLyFLUFl3A5KnM9DQ6xWWaksDqs2HuEMxIQaX8gs/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAzLzkzLzY4Lzcy/LzM2MF9GXzM5MzY4/NzIyNV94a3hRSjc4/ZXdVRDlRVW5oeEZX/UVRXbU81ZkVoNTdK/cy5qcGc" class="product-image" alt="Oculus Quest 2">
                                <div class="product-body">
                                    <h5 class="product-title">Oculus Quest 2</h5>
                                    <p class="product-price">$399.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="21">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- VR Producto 2 -->
                        <div class="product-col" data-category="VR">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/w9paZRD5ScJDnW68TVIes5Is7iH94vHDXUZF0x-Zg6c/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5jbm4uY29tL2Fw/aS92MS9pbWFnZXMv/c3RlbGxhci9wcm9k/LzIyMDUyMDE2NTAw/Ni11bmRlcnNjb3Jl/ZC1odGMtdml2ZS1w/cm8tMi5qcGc_Yz0x/Nng5JnE9aF83MjAs/d18xMjgwLGNfZmls/bA" class="product-image" alt="HTC Vive Pro 2">
                                <div class="product-body">
                                    <h5 class="product-title">HTC Vive Pro 2</h5>
                                    <p class="product-price">$799.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="22">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- VR Producto 3 -->
                        <div class="product-col" data-category="VR">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/1Qtjxm37jc6cQpw5y-3F80NKzTzvOm_OrKLlYZvwXnA/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NjFRaVdQZ1JTMFMu/anBn" class="product-image" alt="Valve Index">
                                <div class="product-body">
                                    <h5 class="product-title">Valve Index</h5>
                                    <p class="product-price">$999.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="23">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- VR Producto 4 -->
                        <div class="product-col" data-category="VR">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/pzOZeO4u5DGDzQFMswMO8_79XV-eZAYpm5wochjlhOk/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMtbmEuc3NsLWlt/YWdlcy1hbWF6b24u/Y29tL2ltYWdlcy9J/LzYxdE9LSUFUMjNM/LmpwZw" class="product-image" alt="PlayStation VR">
                                <div class="product-body">
                                    <h5 class="product-title">PlayStation VR</h5>
                                    <p class="product-price">$299.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="24">Comprar</button>
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