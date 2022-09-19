let agregar = document.getElementById('button_adicionar');
let input_cod_oem = [];
let button_eliminar = [];
let eliminados = [];
let monto1 = 0;
let i =1;


crearEventListeners(i);

//caundo se haga un clink en el boton
agregar.addEventListener('click',e =>{
    //prevenir el evnto que viene por efauld
    e.preventDefault();

    //precio_totalxd();

   //  i = document.getElementsByClassName('trtr').length;
    //console.log('fila: '+ i);

     let tabla = document.getElementById('tabla')


     i++;// console.log('fila desde adiionar: '+ i);

      let tr = document.createElement('tr');
      tr.className="trtr"
      tr.id='tr'+i;


      let td1 = document.createElement('td');
      td1.className="p-2";

      let td2 = document.createElement('td');
      td2.className="p-2";

      let td3 = document.createElement('td');
      td3.className="p-2";

      let td4 = document.createElement('td');
      td4.className="p-2";

      let td5 = document.createElement('td');
      td5.className="p-2";

      let td6 = document.createElement('td');
      td6.className="p-2";

      let td7 = document.createElement('td');
      td6.className="p-2";


      let inp_item = document.createElement('p');
      inp_item.className="text-center font-medium text-black";
      inp_item.id = 'item'+i;
      //let item = document.createTextNode(i); //cambiar
     // inp_item.appendChild(item);

      let inp_cod = document.createElement('input');
      inp_cod.className="text-left font-medium text-green-500";
      inp_cod.placeholder='code';
      inp_cod.id = 'cod_oem'+i;
      inp_cod.name = 'cod_oem[]';
      inp_cod.type = 'text';

      let inp_detalle = document.createElement('input');
      inp_detalle.className="text-left font-medium text-black";
      inp_detalle.placeholder='Detalle';
      inp_detalle.id = 'detalles'+i;
      inp_detalle.name = 'detalles[]';
      inp_detalle.type = 'text';

      let inp_cantidad = document.createElement('input');
      inp_cantidad.className="text-right font-medium text-black";
      inp_cantidad.value= 1;
      inp_cantidad.id = 'cantidad'+i;
      inp_cantidad.name = 'cantidad[]';
      inp_cantidad.min = 0;
      inp_cantidad.max = 9;
      inp_cantidad.type = 'number';

      let inp_precio = document.createElement('input');
      inp_precio.className="text-left font-medium text-black";
      inp_precio.type = 'number';
      //inp_precio.placeholder= 00,00;
      inp_precio.value = 0;
      inp_precio.id = 'precio'+i;
      inp_precio.name = 'precio[]';
     // console.log(inp_precio);

     let inp_subtotal = document.createElement('input');
     inp_subtotal.className="text-left font-medium text-black";
     inp_subtotal.type = 'number';
     //inp_subtotal.placeholder= 00,00;
     inp_subtotal.value = 0;
     inp_subtotal.id = 'subtotal'+i;
     inp_subtotal.name = 'subtotal[]';
     inp_subtotal.readOnly;
    // console.log(inp_subtotal);



      let bt_eliminar = document.createElement('button');
      bt_eliminar.id = "button_eliminar"+i;
      bt_eliminar.name = "button_eliminar"+i;
      bt_eliminar.innerHTML = "Eliminar"
    // let eli = document.createTextNode('Elimnar');
     // bt_eliminar.appendChild(eli);

      //hacer un inetHTML para eliminar


    //   let div_button = document.createElement('div');
    //   div_button.className = "flex justify-center";

    //   let svg_button = document.createElement('svg');
    //   svg_button.className ="w-8 h-8 hover:text-blue-600 rounded-full hover:bg-gray-100 p-1";
    //   svg_button.fill="none";
    //   svg_button.stroke="currentColor";
    //   svg_button.viewBox="0 0 24 24";
    //   svg_button.xmlns="http://www.w3.org/2000/svg";

    //   let path_button = document.createElement('path');
    //   path_button.stroke = "round";
    //   path_button.d = "M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16";
    //   console.log(path_button);

      //falta hacer el precio y eliminar

       tr.appendChild(td1);
       tr.appendChild(td2);
       tr.appendChild(td3);
       tr.appendChild(td4);
       tr.appendChild(td5);
       tr.appendChild(td6);
       tr.appendChild(td7);

       td1.appendChild(inp_item);
       td2.appendChild(inp_cod);
       td3.appendChild(inp_detalle);
       td4.appendChild(inp_cantidad);
       td5.appendChild(inp_precio);
       td6.appendChild(inp_subtotal);
       td7.appendChild(bt_eliminar);

       tabla.appendChild(tr);
       disminuir_item();//para ordenar los items
       crearEventListeners(i);


}); //fin del boton adicoinar





const esta_eliminados =(k) =>{
    for (let x = 0; x < eliminados.length; x++) {
        if(k==eliminados[x]){
            return true;
        }
    }
    return false;
}

//l es la id del tr
const disminuir_item =() =>{
    let xx  = 1; //contador de iteam
    for (let x = 1; x <= i; x++) {
        if(esta_eliminados(x)==false){
    //        console.log('entree con'+x)
          //  let table = document.getElementById('tabla');
            let item = document.getElementById('item'+x);
             item.textContent = xx;
             xx++;
        }else{ console.log('elimadno la fila:' + x)}
    }
}



//metodo para sumar los precios total
//metodo para hacer que se multipliqeu los precios dependindo de la cnatidad

// const precio_cantidad =() =>{

// }

//retorna el precio si es que hubo un movimiento
const precio_totalxd =(k)=>{
    console.warn('LLEGUE A PRECIO');
    console.warn('K = '+k);
    let inp_precio = (document.getElementById('precio'+k));
    //HUBO ALGUN MOVIENOT
    if(esta_eliminados(k)==false){
        //console.log(inp_precio);
        inp_precio.addEventListener('keyup',e =>{

            e.preventDefault();
            console.log('entre');
            console.log(inp_precio);
            return inp_precio.value;
        });
        console.log('no entre');
    }
    console.log('esty devolciendo'+5);
        return  5;
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








