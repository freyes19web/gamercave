

<?php include 'headerprivado.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>omputadoras</title>
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
            <div class="col-md-16">
                <div class="filter-buttons">
                    <a href="#" class="btn-filter" data-category="all">Todos</a>
                    <a href="#" class="btn-filter" data-category="laptops">Laptops</a>
                    <a href="#" class="btn-filter" data-category="pcs">PCs</a>
                </div>
            </div>
        </div>
        
        <div class="row">
            <!-- Productos -->
            <div class="col-md-12">
                <div class="container-custom">
                    <div class="product-row" id="product-container">
                        <!-- Producto 3 -->
                        <div class="product-col" data-category="pcs">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/Db8bI0Tq9Ykeloim7qRhm7asCG4qiprPXrwZ9yJk8e4/rs:fit:500:0:0:0/g:ce/aHR0cHM6Ly9hLXN0/YXRpYy5tbGNkbi5j/b20uYnIvODAweDU2/MC9nYWJpbmV0ZS1n/YW1lci1yaXNlLW1v/ZGUtejEtZ2xhc3Mt/cmdiLWxhdGVyYWwt/ZW0tdmlkcm8tZnVt/ZS1wcmV0by1ybS16/MDEtMDEtZmIva2Fi/dW0vMjA0NDk3Lzc5/ZTdhYTcxZDhhYzlm/ZjYyMzA0YTJmYTBi/ZTk1NjNlLmpwZWc" class="product-image" alt="PC Gamer Z1">
                                <div class="product-body">
                                    <h5 class="product-title">PC Gamer Z1</h5>
                                    <p class="product-price">$1,499.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="5">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 4 -->
                        <div class="product-col" data-category="pcs">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/d1O6lTKQg0xt2tovePG0MEO-PuivSvSHBbp89v5NkYk/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/amV0Y29tcHV0ZXIu/bmV0L2Jsb2cvd3At/Y29udGVudC91cGxv/YWRzLzIwMjIvMDkv/d29ya3N0YXRpb24u/cG5n" class="product-image" alt="PC Estación de Trabajo W1">
                                <div class="product-body">
                                    <h5 class="product-title">PC Estación de Trabajo W1</h5>
                                    <p class="product-price">$2,299.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="6">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 5 -->
                        <div class="product-col" data-category="laptops">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/0G_kF9JX399yhuL4VP62LWa0lDbkaYjHhY752VBrfh8/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFJTi1tVUxhZUwu/anBn" class="product-image" alt="Laptop Pro 15">
                                <div class="product-body">
                                    <h5 class="product-title">Laptop Pro 15</h5>
                                    <p class="product-price">$1,399.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="1">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 6 -->
                        <div class="product-col" data-category="laptops">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/jZOoTqBqmAxAUa7Z7fPw4xuwPZBXFo_q700Hd6AnwKs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFyelpURlFxV0wu/anBn" class="product-image" alt="Laptop Ultra 13">
                                <div class="product-body">
                                    <h5 class="product-title">Laptop Ultra 13</h5>
                                    <p class="product-price">$899.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="2">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 7 -->
                        <div class="product-col" data-category="pcs">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/gtqKnSnjaIlZjx_1etve4zMdrRbjgPEQGbK4-l0Sg4g/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9jMS5u/ZXdlZ2dpbWFnZXMu/Y29tL3Byb2R1Y3Rp/bWFnZS9uYjMwMC8x/MS0zNTItMjEyLTIx/LmpwZw" class="product-image" alt="PC Compact C1">
                                <div class="product-body">
                                    <h5 class="product-title">PC Compact C1</h5>
                                    <p class="product-price">$799.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="7">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 8 -->
                        <div class="product-col" data-category="pcs">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/zB8OZUtUmNd8hAZJxHyqtR22JUeUEAZExuku9n8bZ1M/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/MzFWcVU5aS1oaEwu/anBn" class="product-image" alt="PC Tower T2">
                                <div class="product-body">
                                    <h5 class="product-title">PC Tower T2</h5>
                                    <p class="product-price">$1,099.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="8">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 9 -->
                        <div class="product-col" data-category="laptops">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/vzuKkfzEJ8P8vAIt2cSTv5V_97j_6enuhtI0fzSmcIo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFwTlp6RC1xY0wu/anBn" class="product-image" alt="Laptop Zenbook">
                                <div class="product-body">
                                    <h5 class="product-title">Laptop Zenbook</h5>
                                    <p class="product-price">$1,199.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="3">Comprar</button>
                                </div>
                            </div>
                        </div>
                        <!-- Producto 10 -->
                        <div class="product-col" data-category="laptops">
                            <div class="product-card">
                                <img src="https://imgs.search.brave.com/6TaD21wOJyPUe1BonBSbl0XI3iwgltwMfoj7hFeBfG0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/NDFJdmZ6bWplN0wu/anBn" class="product-image" alt="Laptop Inspiron">
                                <div class="product-body">
                                    <h5 class="product-title">Laptop Inspiron</h5>
                                    <p class="product-price">$949.99</p>
                                    <button class="btn-add-to-cart" type="button" data-id="4">Comprar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'modalproductos.php'; ?>

    <!-- Bootstrap JS and dependencies -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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