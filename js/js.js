document.addEventListener('DOMContentLoaded', function() {
    let tipoPedido = document.getElementById('t_pedido');
    let distrito = document.getElementById('distrito');
    let direccion = document.getElementById('direccion');

    tipoPedido.addEventListener('change', function() {
        if(tipoPedido.value === 'Recoger') {
            distrito.disabled = true;
            direccion.disabled = true;
        } else {
            distrito.disabled = false;
            direccion.disabled = false;
        }
    });

    tipoPedido.dispatchEvent(new Event('change'));
});
