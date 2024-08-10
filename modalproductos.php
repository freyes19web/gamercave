<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modal</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       /* Estilo general del modal */
/* Estilo general del modal */
.modal-content {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    max-width: 500px;
    margin: auto;
    border: none;
}

/* Estilo para el encabezado del modal */
.modal-header {
    border-bottom: none;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding-bottom: 10px;
}

.modal-header .close {
    font-size: 1.5rem;
    color: #aaa;
    background: none;
    border: none;
    cursor: pointer;
    padding: 5px 10px;
}

.modal-header .close:hover {
    color: #333;
}

.modal-title {
    font-size: 1.25rem;
    color: #333;
}

/* Estilo para el cuerpo del modal */
.modal-body {
    padding-top: 10px;
    color: #555;
}

#modalProductName {
    font-size: 1.1rem;
    font-weight: bold;
    margin-bottom: 10px;
    color: #000;
}

#modalProductDescription {
    font-size: 0.95rem;
    margin-bottom: 15px;
}

/* Contenedor de la cantidad y el precio */
.quantity-price-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    margin-bottom: 15px;
}

/* Contenedor de los controles de cantidad */
.quantity-control {
    display: flex;
    align-items: center;
    border: 1px solid #ddd;
    border-radius: 25px; /* Bordes redondeados */
    overflow: hidden; /* Para asegurar que los bordes redondeados se mantengan */
}

.quantity-control button {
    background-color: #f5f5f5;
    border: none;
    padding: 8px 12px;
    cursor: pointer;
    font-size: 1rem;
    color: #333;
    border-radius: 25px; /* Bordes redondeados */
}

.quantity-control button:hover {
    background-color: #ddd;
}

.quantity-control input {
    border: none;
    width: 50px;
    text-align: center;
    font-size: 1rem;
    padding: 8px 0;
    border-radius: 25px; /* Bordes redondeados */
    background-color: #f5f5f5;
}

/* Estilo para el precio del producto */
#modalProductPrice {
    font-size: 1.1rem;
    font-weight: bold;
    color: #28a745;
}

/* Estilo para el precio total */
#modalTotalPrice {
    font-size: 1.25rem;
    font-weight: bold;
    text-align: right;
    margin-top: 20px;
    color: #28a745;
}

/* Botón para añadir al carrito */
#addToCartBtn {
    width: 100%;
    background-color: #28a745;
    color: #fff;
    border: none;
    padding: 10px;
    font-size: 1rem;
    font-weight: bold;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s;
}

#addToCartBtn:hover {
    background-color: #218838;
}


    </style>
</head>
<body>
<!-- Modal de Añadir al Carrito -->
<div class="modal fade" id="addToCartModal" tabindex="-1" aria-labelledby="addToCartModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addToCartModalLabel">Añadir al carrito</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="modalProductName"></div>
                <div id="modalProductDescription"></div>
                <div class="quantity-price-container">
                    <div class="quantity-control">
                        <button id="decreaseQuantity">-</button>
                        <input id="quantityInput" type="text" value="1" readonly>
                        <button id="increaseQuantity">+</button>
                    </div>
                    <div id="modalProductPrice"></div>
                </div>
                <div id="modalTotalPrice">Total: $0.00</div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="addToCartBtn">Añadir al carrito</button>
            </div>
        </div>
    </div>
</div>
</body>
</html>
