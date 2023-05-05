<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <!-- formulario -->
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form onsubmit="event.preventDefault(); addUser()" action="/users" method="POST">

                <div class="form-group">
                        <h1 align="center">Agregar Sucursales </h1>
                    </div>
                    <div class="form-group">
                        <label for="input-name">Nombre</label>
                        <input class="form-control" id="input-name" required>
                    </div>
                    <div class="form-group">
                        <label for="input-adress">Direccion</label>
                        <input class="form-control" id="input-adress" required>
                    </div>
                    <div class="form-group">
                        <label for="input-phone">Telefono</label>
                        <input class="form-control" id="input-phone" required>
                    </div>
                    <select class="custom-select" id="select-status">
                        <option selected>Selecciona el estatus</option>
                        <option value="Activo">Activo</option>
                        <option value="Inactivo">Inactivo</option>
                    </select>
                    <button type="submit" class="btn btn-primary mt-3">Agregar Sucursal</button>
                </form>
            </div>
        </div>

        <!-- Filtros -->
        <div class="mt-5">
            <select onchange="filter()" class="custom-select" id="select-filter">
                <option selected>Filtrar</option>
                <option value="Activo">Activos</option>
                <option value="Inactivo">Inactivos</option>
                <option value="sort">Ordenar por nombre</option>
            </select>
        </div>
        <!-- Tabla de usuarios -->
        <table class="table table-bordered mt-5">
            <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Direccion</th>
                <th>Telefono</th>
                <th>Estatus</th>
                <th>Opciones</th>
              </tr>
            </thead>
            <tbody id="table-body">
              <!-- Users van aquí -->
            </tbody>
        </table>
    </div>
    <script src="script.js" type="module"></script>
    <!-- <script src="funcionesAnonimas.js"></script> -->
    <!-- <script src="methods.js" type="module"></script> -->
</body>
</html>

<script>
const users = [
    {
        id: 1,
        name: 'Sucursal 1',
        adress: 'Av 123 col centro',
        status: 'Activo',
        phone: '9611234567'
    },
    {
        id: 2,
        name: 'Sucursal 2',
        adress: 'Av 321 col satelite',
        status: 'Inactivo',
        phone: '9617654321'
   },
   {
        id: 3,
        name: 'Sucursal 3',
        adress: 'Av Patria Nueva',
        status: 'Activo',
        phone: '9610987653'
    },
    {
        id: 4,
        name: 'Sucursal 4',
        adress: '5 de mayo',
        status: 'Inactivo',
        phone: '9611093847'
   }
   
]

// Genera las filas de la tabla para mostrar los usuarios
function htmlRowsUsers() {
    const html = users.map(function(user) {
        return `<tr>
                    <td>${user.id}</td>
                    <td>${user.name}</td>
                    <td>${user.adress}</td>
                    <td>${user.phone}</td>
                    <td>${user.status == 'Activo' ? 'Activo' : 'Inactivo'}</td>
                    <td>
                        <button class="btn btn-danger" onclick= "borrar()" >Eliminar</button>
                    </td>
                </tr>`
    })
    return html.join("")
}
// devuelve el body 
function getTablebody() {
    return document.getElementById('table-body')
}
// Imprime los usuarios en el documento
function printUsers() {
    const htmlDataUsers = htmlRowsUsers()
    const tableBody = getTablebody()
    tableBody.innerHTML = htmlDataUsers
}
// Obtiene los datos del nuevo usuario
function getNewUser () {
    const inputName = document.getElementById('input-name')
    const inputAdress = document.getElementById('input-adress')
    const inputPhone = document.getElementById('input-phone')
    const inputStatus = document.getElementById('select-status')
    const newUser = {
        name: inputName.value,
        adress: inputAdress.value,
        phone: inputPhone.value,
        status: inputStatus.value
    }
    return newUser
}
// Imprime los datos de un usuario nuevo en el documento
function addUser() {
    const newUser = getNewUser()
    users.unshift(newUser)
    orderIDs()
    printUsers()
    document.getElementsByName('form')
    document.querySelector('form').reset()
    
}

// Asigna el id correcto a cada elemento
function orderIDs() {
    users.forEach(function(user, index) {
        user.id = index + 1
    })
    console.log('ordeno IDs ---');
}


// Llamadas al cargar la página
printUsers()
// Volvemos la función addUser parte del objeto window
window.addUser = addUser
window.filter = filter


// Ejercicios:
// Asingar el id del nuevo usuario
// Agregar el nuevo usuario al inicio
// Hacer que funcione el botón eliminar


function printM(activo) {
    const htmlDataUsers = activo
    const tableBody = getTablebody()
    tableBody.innerHTML = htmlDataUsers
} 
// Funcion para imprimir

function capturaonchange() {
    const changehtml = document.getElementById('select-filter').value // capturar valor del onchange
    console.log(changehtml)
    return changehtml
}

function paso2(){
    const paraFiltrar = capturaonchange()

    if ('Activo' === paraFiltrar) {

        // El método indexOf() retorna el primer índice en el que se puede encontrar un elemento dado en el array, ó retorna -1 si el elemento no esta presente.

        const filtrados = users.filter(e => e.status.indexOf("Activo") != -1) //Linea para filtrar los mails
        console.log('onChange = ' + filtrados)
        return filtrados
    }

    if ('Inactivo' === paraFiltrar) {

// El método indexOf() retorna el primer índice en el que se puede encontrar un elemento dado en el array, ó retorna -1 si el elemento no esta presente.

const filtrados = users.filter(e => e.status.indexOf("Inactivo") != -1) //Linea para filtrar los mails
console.log('onChange = ' + filtrados)
return filtrados
}

    if(paraFiltrar == 'sort'){
        console.log('Entradno a ordenar por nombre')
        const filtrados = users.sort(function (a, b) { //Linea para oredenar por nombre
            if (a.name > b.name) {
                return 1;
              }
              if (a.name < b.name) {
                return -1;
              }
        } ) //Linea para filtrar las mujeres
        console.log('onChange = ' + filtrados)
        return filtrados
    }
    else{
        const htmlDataUsers = htmlRowsUsers()
        const tableBody = getTablebody()
        tableBody.innerHTML = htmlDataUsers
    }

}

function paso3 (a){
    const filtrados = a
    const html = filtrados.map(function(user) {
        return `<tr>
                    <td>${user.id}</td>
                    <td>${user.name}</td>
                    <td>${user.adress}</td>
                    <td>${user.phone}</td>
                    <td>${user.status == 'Activo' ? 'Activo' : 'Inactivo'}</td>
                    <td>
                        <button class="btn btn-danger" onclick="borrar()">Eliminar</button>
                    </td>
                </tr>`
    }) // pongo los datos en html
    // console.log(html.join("")) 
    return html.join("") // Aqui los ordeno

}


function filter() {
    // alert('Agregamos un filtro')

    const lafilaF = paso3(paso2())  
    printM(lafilaF) // pinto en el DOM
}

function userId(e){ //capturar ID
    const btnUser = event.target
    const userId = parseInt(btnUser.parentElement.parentElement.childNodes[1].textContent)

    console.log('priemra etapa capturar el ID');
    console.log(userId);    
    return userId
}
function borrar() { //segunda etapa eliminar

    //let cosa = Array.from(users)
    users.splice(userId() -1,1)
    
    
    console.log('eliminando');
    //cosa.forEach(e => console.log(e))
    const lafilaF = paso3(users)
    users.forEach(e => console.log(e))
    orderIDs()
    const htmlDataUsers = htmlRowsUsers()
    const tableBody = getTablebody()
    tableBody.innerHTML = htmlDataUsers
   
}
window.filter = filter
window.borrar = borrar


// Ejercicio - aplicar filtros
// Hacer que funcione el botón eliminar

</script>