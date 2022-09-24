let agregar = document.getElementById('button_adicionar');
let input_cod_oem = [];
let button_eliminar = [];
let eliminados = [];
let monto1 = 0;
let i = 1;


crearEventListeners(i);

//caundo se haga un clink en el boton
agregar.addEventListener('click', e => {
    //prevenir el evnto que viene por efauld
    e.preventDefault();

    //precio_totalxd();

    //  i = document.getElementsByClassName('trtr').length;
    //console.log('fila: '+ i);

    let tabla = document.getElementById('tabla')


    i++;// console.log('fila desde adiionar: '+ i);

    let tr = document.createElement('tr');
    tr.className = "trtr"
    tr.id = 'tr' + i;


    let td1 = document.createElement('td');
    td1.className = "border border-black  w-16  lg:w-20 ";

    let td2 = document.createElement('td');
    td2.className ="border border-black";

    let td3 = document.createElement('td');
    td3.className = "border border-black";

    let td4 = document.createElement('td');
    td4.className = "border border-black";

    let td5 = document.createElement('td');
    td5.className = "border border-black";

    let td6 = document.createElement('td');
    td6.className = "border border-black";

    let td7 = document.createElement('td');
    td7.className = "border border-black";

    // let td8 = document.createElement('td');
    // td8.className = "p-2";

    // let td9 = document.createElement('td');
    // td9.className = "p-2";


    let inp_item = document.createElement('p');
    inp_item.className = "text-center font-medium text-green-500";
    inp_item.id = 'item' + i;




    let div_cantidad = document.createElement('div');
    div_cantidad.className = "flex  justify-between";

    let inp_cantidad = document.createElement('input');
    inp_cantidad.className = "text-center font-medium text-black w-full h-full p-1";
    inp_cantidad.value = 1;
    inp_cantidad.id = 'cantidad' + i;
    inp_cantidad.name = 'cantidad[]';
    inp_cantidad.type = 'number';

    let div_cantidad_icons = document.createElement('div');
    div_cantidad_icons.className = "flex items-center mr-0.5  justify-between"

    let bt_sumar = document.createElement('button');
    bt_sumar.id = 'button_sumar'+i;

    let svg_sumar = document.createElementNS('http://www.w3.org/2000/svg','svg');
    svg_sumar.setAttribute('class','w-4 h-4 text-green-700 border border-green-700 rounded-3xl font-bold');
    svg_sumar.style.fill="none";
    svg_sumar.style.stroke="currentColor";
    svg_sumar.style.strokeWidth = "1.5";
    svg_sumar.setAttribute('viewBox','0 0 24 24');

    let path_sumar = document.createElementNS('http://www.w3.org/2000/svg','path');
    path_sumar.style.strokeLinecap = "round";
    path_sumar.style.strokeLinejoin = "round";
    path_sumar.setAttribute('d',"M12 4.5v15m7.5-7.5h-15");

    let bt_restar = document.createElement('button');
    bt_restar.id = 'button_restar'+i;

    let svg_restar = document.createElementNS('http://www.w3.org/2000/svg','svg');
    svg_restar.setAttribute('class','w-5 h-5 ml-1  text-red-700 font-bold');
    svg_restar.style.fill="none";
    svg_restar.style.stroke="currentColor";
    svg_restar.style.strokeWidth = "1.5";
    svg_restar.setAttribute('viewBox','0 0 24 24');

    let path_restar = document.createElementNS('http://www.w3.org/2000/svg','path');
    path_restar.style.strokeLinecap = "round";
    path_restar.style.strokeLinejoin = "round";
    path_restar.setAttribute('d',"M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z");

    svg_sumar.appendChild(path_sumar);
    svg_restar.appendChild(path_restar);
    bt_sumar.appendChild(svg_sumar);
    bt_restar.appendChild(svg_restar);
    div_cantidad_icons.appendChild(bt_sumar);
    div_cantidad_icons.appendChild(bt_restar);
    div_cantidad.appendChild(inp_cantidad);
    div_cantidad.appendChild(div_cantidad_icons);



    // let inp_unidad = document.createElement('input');
    // inp_unidad.className = "w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none";
    // inp_unidad.placeholder = 'PZA';
    // inp_unidad.id = 'unidad' + i;
    // inp_unidad.name = 'unidad[]';
    // inp_unidad.type = 'text';

    let inp_cod = document.createElement('input');
    inp_cod.className = "text-center font-medium text-green-500 w-16 lg:w-full h-full py-1";
    inp_cod.placeholder = 'buscar...';
    inp_cod.id = 'cod_oem' + i;
    inp_cod.name = 'cod_oem[]';
    inp_cod.type = 'text';
    //inp_cod.oninput = function(){let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);};

    let inp_detalle = document.createElement('input');
    inp_detalle.className = "text-left font-medium text-black w-full lg:w-96 h-full p-1 text-sm ";
    inp_detalle.placeholder = 'Detalle';
    inp_detalle.id = 'detalles' + i;
    inp_detalle.name = 'detalles[]';
    // inp_detalle.rows = '1';

    let inp_precio = document.createElement('input');
    inp_precio.className = "text-center font-medium text-black w-full h-full p-1";
    inp_precio.type = 'number';
    //inp_precio.placeholder= 00,00;
    inp_precio.value = 0;
    inp_precio.id = 'precio' + i;
    inp_precio.name = 'precio[]';
    // console.log(inp_precio);

    let inp_subtotal = document.createElement('input');
    inp_subtotal.className = "text-center  font-medium text-black w-full h-full p-1";
    inp_subtotal.type = 'number';
    //inp_subtotal.placeholder= 00,00;
    inp_subtotal.value = 0;
    inp_subtotal.id = 'subtotal' + i;
    inp_subtotal.name = 'subtotal[]';
    inp_subtotal.readOnly;
    // console.log(inp_subtotal);

    // let inp_t_entrega = document.createElement('input');
    // inp_t_entrega.className = "w-full mt-2 py-3 px-3 rounded-lg bg-white dark:bg-gray-800 border border-gray-400 dark:border-gray-700 text-gray-800 dark:text-gray-50 font-semibold focus:border-blue-500 focus:outline-none";
    // inp_t_entrega.placeholder = 'Días';
    // inp_t_entrega.id = 't_entrega' + i;
    // inp_t_entrega.name = 't_entrega[]';
    // inp_t_entrega.type = 'text';

    let bt_eliminar = document.createElement('button');
    bt_eliminar.id = "button_eliminar" + i;
    bt_eliminar.name = "button_eliminar" + i;
    //bt_eliminar.innerHTML = "Eli";
    bt_eliminar.className ="font-medium text-black   pl-2";


    let svg_button = document.createElementNS('http://www.w3.org/2000/svg','svg');
    svg_button.setAttribute('class','w-6 h-6 text-black  hover:text-white rounded-full hover:bg-red-500');
    svg_button.style.fill="none";
    svg_button.style.stroke="currentColor";
    svg_button.viewBox="0 0 24 24";

    let path_button = document.createElementNS('http://www.w3.org/2000/svg','path');
    path_button.style.strokeLinecap = "round";
    path_button.style.stroke = "round";
    path_button.style.strokeWidth = "2"
    path_button.setAttribute('d',"M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16");


     svg_button.appendChild(path_button);
     bt_eliminar.appendChild(svg_button);

    tr.appendChild(td1);
    tr.appendChild(td2);
    tr.appendChild(td3);
    tr.appendChild(td4);
    tr.appendChild(td5);
    tr.appendChild(td6);
    tr.appendChild(td7);
    //tr.appendChild(td8);
   // tr.appendChild(td9);

    td1.appendChild(inp_item);
    td2.appendChild(inp_cod);
    td3.appendChild(inp_detalle);
    td4.appendChild(div_cantidad);
  //  td3.appendChild(inp_unidad);
    td5.appendChild(inp_precio);
    td6.appendChild(inp_subtotal);
    //td8.appendChild(inp_t_entrega);
    td7.appendChild(bt_eliminar);

    tabla.appendChild(tr);
    console.log(tabla);
    disminuir_item();//para ordenar los items
    crearEventListeners(i);


}); //fin del boton adicoinar





const esta_eliminados = (k) => {
    for (let x = 0; x < eliminados.length; x++) {
        if (k == eliminados[x]) {
            return true;
        }
    }
    return false;
}

//l es la id del tr
const disminuir_item = () => {
    let xx = 1; //contador de iteam
    for (let x = 1; x <= i; x++) {
        if (esta_eliminados(x) == false) {
            //        console.log('entree con'+x)
            //  let table = document.getElementById('tabla');
            let item = document.getElementById('item' + x);
            item.textContent = xx;
            xx++;
        } else { console.log('elimadno la fila:' + x) }
    }
}



//metodo para sumar los precios total
//metodo para hacer que se multipliqeu los precios dependindo de la cnatidad

// const precio_cantidad =() =>{

// }

//retorna el precio si es que hubo un movimiento
const precio_totalxd = (k) => {
    console.warn('LLEGUE A PRECIO');
    console.warn('K = ' + k);
    let inp_precio = (document.getElementById('precio' + k));
    //HUBO ALGUN MOVIENOT
    if (esta_eliminados(k) == false) {
        //console.log(inp_precio);
        inp_precio.addEventListener('keyup', e => {

            e.preventDefault();
            console.log('entre');
            console.log(inp_precio);
            return inp_precio.value;
        });
        console.log('no entre');
    }
    console.log('esty devolciendo' + 5);
    return 5;
}

//HACE UN EVENTO DE CUANDO SE MUEVA UN SOLO DATO DE

//TIENE QUE SER CUANDO INTRODUSCAN DATOS
// let monto_total = 0;
// const precio_totalxd =()=>{
// let monto_total = 0;
//     console.warn('llegeu a precio');
//     for (let x = 1; x <= i; x++) {
//         if(esta_eliminados(x)==false){
//             //console.log('entre con:'+x);
//             let precio = document.getElementById('precio'+x);
//             monto_total = monto_total+ parseInt(precio.value);
//             console.log('monto:'+monto_total);
//            // console.log('hola munod !!')
//         }
//     }
// }





// eliminar.addEventListener('click',e =>{
//     //prevenir el evnto que viene por efauld
//     e.preventDefault();

//     // let clonado = document.getElementById('table');
//     let tr = document.getElementById('tr'+i);

//     console.log(tr)
//     tr.remove();
//      i--;
//      console.log('contador:'+i)
// });








