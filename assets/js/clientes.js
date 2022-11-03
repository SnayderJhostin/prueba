const tableLista = document.querySelector('#tableListaProductos tbody');
document.addEventListener('DOMContentLoaded', function() {
    getListaProductos()
});

function getListaProductos() {
    const url = base_url + 'principal/listaProductos';
    const http = new XMLHttpRequest();
    http.open('POST', url, true);
    http.send(JSON.stringify(listaCarrito));
    http.onreadystatechange = function() {
        if( this.readyState == 4 && this.status ==200){
            const res = JSON.parse(this.responseText);
            let html = '';
            res.productos.forEach(producto => {
                html += `<tr>
                <td class="text-center">
                <img class="img-thumbnail " src="${producto.imagen}" type="button" width="100" ></img>
                </td>
                <td class="text-center">${producto.nombre}</td>
                <td class="text-center"><span class="badge text-danger fw-bold fs-5">${res.moneda + ' ' + producto.precio}</span></td>
                <td class="text-center"><span class="badge text-danger fw-bold fs-5">${producto.cantidad}</span></td>
                <td class="text-center text-danger text-danger fw-bold fs-5">S/${producto.subTotal}</td>
                <td class="text-center">
                <button class="btn  btnDeletecart" type="button" prod="${producto.id}"><i class="fas fa-trash text-black"></i></button>
                </td>
            </tr>`;
            });
            tableLista.innerHTML = html;
            document.querySelector('#totalProducto'). textContent = 'TOTAL A PAGAR: ' + res.moneda + ' ' + res.total;
            btnEliminarCarrito();
        }
    }
}
function btnEliminarCarrito(){
    let listaEliminar = document.querySelectorAll('.btnDeletecart');
    for (let i = 0; i < listaEliminar.length; i++) {
        listaEliminar[i].addEventListener('click', function(){
            let idProducto =listaEliminar[i].getAttribute('prod');
            eliminarListaCarrito(idProducto)
        })
        
    }
}
function eliminarListaCarrito(idProducto) {
    for (let i = 0; i < listaCarrito.length; i++) {
        if (listaCarrito[i]['idProducto'] == idProducto) {
            listaCarrito.splice(i, 1);
        }
    }
    localStorage.setItem('listaCarrito', JSON.stringify(listaCarrito));
    getListaCarrito();
    cantidadCarrito();
    Swal.fire(
        'Aviso',
        'PRODUCTO ELIMINADO DEL CARRITO',
        'success'
    )
}