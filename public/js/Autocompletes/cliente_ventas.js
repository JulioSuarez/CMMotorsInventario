//poner en variables los compoentes de html que se usarar
let input_ci = document.getElementById('ci_autocomplete');
let input_nombre = document.getElementById('cliente');
let input_telefono = document.getElementById('telefono');
let input_empresa = document.getElementById('empresa');
let input_nit = document.getElementById('nit');
let input_dir = document.getElementById('dir');
let input_correo = document.getElementById('correo');

input_ci.addEventListener('keyup', (e) => {
    //para saber que se esta enviar
    //console.log(e.target.value);

    //almacenar el valor que se buscara
    let ci = e.target.value;
    if (ci.length > 3) {
        //buscar nombre
        // let cliente = buscar(ci);
        buscar(ci);
    }
});

//funcion para buscar el ci
const buscar = (ci) => {
    fetch("http://localhost:8000/api/ClienteApi/" + ci)
        .then((res) => res.json()) //promesa
        .then((data) => {
            // MostrarNombre(data.map((item) =>{
            //     return item.nombre;
            // }));
          //  document.getElementById('se_pillo').value = 'true';
            //  console.log(data.nombre+' '+data.apellido);
            input_nombre.value = data.nombre;
            input_telefono.value = data.telefono;
            input_empresa.value = data.empresa;
            input_nit.value = data.nit;
            input_dir.value = data.dir;
            // input_correo.value = data.correo;
            //   recorrer, forech
            //  build_list(data.map(item))
            //mostrar solo el nombre
            //  console.log(item);
            return;

        })
        .catch(e => { console.log(e) })
}


//-----------------------------------------------------------------------
arrayMonto = [];
arrayCantidad = [];

//cereaciones de eventos para la acciones que se hagan
const crearEventListeners = (c) => {
    arrayMonto[c - 1] = 0;
    arrayCantidad[c - 1] = 1;
    let input_cod_oem = document.getElementById('cod_oem' + c);
    let input_precio = document.getElementById('precio' + c);
    let button_eliminar = (document.getElementById('button_eliminar' + c));
    let button_sumar = (document.getElementById('button_sumar' + c));
    let button_restar = (document.getElementById('button_restar' + c));

    let input_cantidad = (document.getElementById('cantidad' + c));
    let input_subtotal = (document.getElementById('subtotal' + c));

    //console.log('se creo el evento de cod en la fila: ' + c)
    //console.log('array monot: ' + arrayMonto)
    //console.log('array cantiad: ' + arrayCantidad)

    //crear el evetno para cod_oem
    input_cod_oem.addEventListener('keyup', (e) => {
        //almacenar el valor que se buscara en cod
        let cod = e.target.value;
        if (cod.length > 3 || cod.length == 0) {
            //buscar nombre
            // let cliente = buscar(ci);
            buscarCod(cod, c);
        }
    });//end evento de cod_oem

    //evento cuando haya movientos en la caja de precio
    input_precio.addEventListener('keyup', (e) => {
        //miestras se difereetes de vacio
        let precio = e.target.value;
        if (precio.length != 0) {
            console.warn('ENTRE AL ENVERTO DE PRECIO');
            console.log('Array:' + arrayMonto);
            let cant = document.getElementById('cantidad' + c).value;
            console.log('cantidad:' + cant);
            precio = precio * cant;
            input_subtotal.value = precio;
            // console.log('precio:'+ precio);
            let aux = arrayMonto[c - 1] - parseInt(precio);
            // console.log('axu: '+aux);
            monto1 = monto1 - (aux);
            document.getElementById('monto_total').value = monto1;
            arrayMonto[c - 1] = precio;
            //  console.warn('Array:'+ arrayMonto);
        } else {
            monto1 = monto1 - (arrayMonto[c - 1]);
            document.getElementById('monto_total').value = monto1;
            arrayMonto[c - 1] = 0;
        }

    });//end input precio

    button_eliminar.addEventListener('click', e => {
        //prevenir el evnto que viene por efauld
        e.preventDefault();
        // console.warn('ENTRE EN '+k);
        monto1 = monto1 - arrayMonto[c - 1];
        arrayMonto[c - 1] = 0;
        arrayMonto[c - 1] = 0;
        let trx = document.getElementById('tr' + c);
        //   console.log(trx);
        trx.remove();
        //   console.log('Eliminado Fila:'+k);
        eliminados.push(c);
        disminuir_item();
        document.getElementById('monto_total').value = monto1;
    });


    //cuando haya movimiento en la cantidad
    input_cantidad.addEventListener('keyup', (e) => {
        console.warn('EVENTO CANTIDADA');
        console.log('Array:' + arrayMonto);
        let cant = e.target.value;
        console.log('cantidad:' + cant);
        input_cantidad.value = cant;
        //multiplicar por el precio unitario
        let aux = input_precio.value * cant;
        console.log('aux A=' + aux);
        input_subtotal.value = aux;
        // aux = arrayMonto[c-1] - aux;
        // console.log('axu B: '+aux);
        monto1 = monto1 - (arrayMonto[c - 1] - aux);
        console.log('total: ' + monto1);
        document.getElementById('monto_total').value = monto1;
        arrayMonto[c - 1] = aux;
        console.log('Arrat: ' + arrayMonto)
    });

    button_sumar.addEventListener('click', e => {
        //prevenir el evnto que viene por efauld
        e.preventDefault();
        console.warn('ENTRE EN buton sumar con posicion:'+c);

        let cant =parseInt(input_cantidad.value)+parseInt(1);
        input_cantidad.value = cant;
        //multiplicar por el precio unitario
        let aux = input_precio.value * cant;
        input_subtotal.value = aux;
        monto1 = monto1 - (arrayMonto[c - 1] - aux);
        document.getElementById('monto_total').value = monto1;
        arrayMonto[c - 1] = aux;

    });

    button_restar.addEventListener('click', e => {
        //prevenir el evnto que viene por efauld
        e.preventDefault();
        console.warn('ENTRE EN buton sumar con posicion:'+c);
        console.log('cantidad A:'+input_cantidad.value);
        let cant = parseInt(input_cantidad.value)-parseInt(1)
        if(cant>=0){
               input_cantidad.value = cant;
               console.log('cantidad B:'+cant);
               //multiplicar por el precio unitario
               let aux = input_precio.value * cant;
               input_subtotal.value = aux;
               monto1 = monto1 - (arrayMonto[c - 1] - aux);
               document.getElementById('monto_total').value = monto1;
               arrayMonto[c - 1] = aux;

        }
    });
}



//funcion para buscar el ci
const buscarCod = (cod, i) => {
    fetch("http://localhost:8000/api/ProductoApi/" + cod)
        .then((res) => res.json()) //promesa
        .then((data) => {
            console.warn('entre a buscar en la posicion:' + i);
            document.getElementById('detalles' + i).value = data.nombre;
            //   document.getElementById('detalles'+i).value=data.nombre;
            if (data.precio_venta_con_factura != arrayMonto[i - 1]) {

                document.getElementById('precio' + i).value = data.precio_venta_con_factura;

                let cant = document.getElementById('cantidad' + i).value;
                let precio = data.precio_venta_con_factura * cant;
                //console.log(cant);
                document.getElementById('subtotal' + i).value = precio;
                //monto1 = monto1 + parseInt(data.precio_venta_con_factura);

                //document.getElementById('monto_total').value = monto1;
                // arrayMonto[i-1] = parseInt(data.precio_venta_con_factura);
                // arrayMonto[i - 1] = precio;
                // arrayCantidad[i - 1] = cant;


 //let aux = input_precio.value * cant;
               //input_subtotal.value = aux;
               monto1 = monto1 - (arrayMonto[i - 1] - precio);
               document.getElementById('monto_total').value = monto1;
               arrayMonto[i - 1] = precio;
               arrayCantidad[i - 1] = cant;

            }
            return;

        }) //end de data
        .catch(() => {
            //que hacer cuando hay un error
            console.log('NO SE ENCONTRO PRODUCTO');
            document.getElementById('subtotal' + i).value = 0;
            document.getElementById('precio' + i).value = 0;
            monto1 = monto1 - arrayMonto[i - 1];
            document.getElementById('monto_total').value = monto1;
            arrayMonto[i - 1] = 0;
        });
}
