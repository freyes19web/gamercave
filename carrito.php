<!-- Carrito flotante -->
<div id="floating-cart" class="position-fixed bottom-0 end-0 p-3">
    <div class="bg-light rounded border shadow-sm p-2">
        <h5 class="mb-0">Carrito de Compras</h5>
        <ul id="cart-items" class="list-unstyled mt-3">
            <!-- Los productos añadidos se mostrarán aquí -->
        </ul>
        <button id="checkout-btn" class="btn btn-primary btn-block mt-3">Pagar</button>
    </div>
</div>

<!-- Modal de éxito -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="successModalLabel">Éxito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p id="success-message">¡Compra realizada con éxito!</p>
            </div>
        </div>
    </div>
</div>
