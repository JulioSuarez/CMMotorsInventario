console.log('Hola mundo!!!!')
//poner en variables los compoentes de html que se usarar
let input_ci = document.getElementById('ci_autocomplete');
let input_nombre = document.getElementById('cliente');
let input_telefono = document.getElementById('telefono');
let input_empresa = document.getElementById('empresa');
let input_nit = document.getElementById('nit');

//pruebas Dom
// console.log(xdxd)
// const h3 = document.createElement('h3');
// const texto = document.createTextNode('que odna puto!!!!');
// xdxd.appendChild(h3);
// h3.appendChild(texto);
//'keyup' = evento de cuando levante la tecla


input_ci.addEventListener('keyup', (e)=>{
    //para saber que se esta enviar
    //console.log(e.target.value);

    //almacenar el valor que se buscara
    let ci = e.target.value;
    if(ci.length > 3){
        //buscar nombre
        // let cliente = buscar(ci);
       buscar(ci);
    }
});

//funcion para buscar el ci
const buscar =(ci) =>{
    fetch("http://localhost:8000/api/ClienteApi/"+ci)
        .then((res)=> res.json()) //promesa
        .then((data) => {
            // MostrarNombre(data.map((item) =>{
            //     return item.nombre;
            // }));

        //  console.log(data.nombre+' '+data.apellido);
          input_nombre.value =data.nombre+' '+data.apellido ;
          input_telefono.value =data.telefono ;
        //   input_empresa.value ='falta crear atributo emrpesa' ;
          input_nit.value =data.nit ;
         //   recorrer, forech
          //  build_list(data.map(item))
           //mostrar solo el nombre
         //  console.log(item);
              return ;

        })
        .catch(e => {console.log(e)})
}






// let input_cod_oem = [];

// let table = document.getElementsByClassName('trtr');
// console.log(table.length);
// //console.log(document.getElementById('cod_oem'+2));

// for (let i = 1; i <= table.length; i++) {
//     input_cod_oem[i] = (document.getElementById('cod_oem'+i));
//    // console.log(document.getElementById('cod_oem'+i));

//     //funoces
//     input_cod_oem[i].addEventListener('keyup', (e)=>{
//             //para saber que se esta enviar

//             //almacenar el valor que se buscara
//             let cod = e.target.value;
//             if(cod.length > 0){
//                 //buscar nombre
//                 // let cliente = buscar(ci);
//                buscarCod(cod,i);
//             }
//         });

// }

//console.log(input_cod_oem);




//funcion para buscar el ci
const buscarCod =(cod,i) =>{
    fetch("http://localhost:8000/api/ProductoApi/"+cod)
        .then((res)=> res.json()) //promesa
        .then((data) => {
          //  console.log(i);
     // input_nombre.value =data.nombre+' '+data.apellido ;
      document.getElementById('detalles'+i).value=data.nombre;
   // console.log(document.getElementById('detalles'+i));
         document.getElementById('precio'+i).value=data.precio1;

              return ;

        })
        .catch(e => {console.log(e)})
}
