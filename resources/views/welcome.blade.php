@include('layouts.header')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/edbd600715.js" crossorigin="anonymous"></script>
  <link href="css/app.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="antialiased">
  <div class="DivSucursales">
  <h1 >Sucursales</h1>
  </div>
  <br>
<!-- Modal -->
<div class="modal fade"  id="modalRegistrar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog custom-width" role="document">
        <div class="modal-content  custom-border">
     
    
          <div class="arriba"><img src="img/logoDialog.png" alt="Imagen de cabecera"> 
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>  </div>
   

          <div class="modal-body">
      
      <h1 class="h">Añadir sucursal</h1>
      <form action="{{route('crud.create')}}" method="post">
        @csrf
      
      <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control"   id="Nombre" placeholder="Ingrese el nombre" name="txtNombre" >
      </div>
      <div class="mb-3">
        <label for="lugar" class="form-label">Lugar</label>
        <input type="text" class="form-control"  name="txtLugar"  id="Lugar" placeholder="Ingrese el lugar">
      </div>
    

      <div class="mb-3">
        <label for="direccion" class="form-label">Dirección</label>
        <input type="text" class="form-control" name="txtDireccion" id="Direccion" placeholder="Ingrese la dirección">
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control" name="txtEmail" id="Email" placeholder="Ingrese el email">
      </div>
      <div class="mb-3">
        <label for="encargado" class="form-label">Encargado</label>
        <input type="text" class="form-control" name="txtEncargado" id="Encargado" placeholder="Ingrese el encargado">
      </div>
      <div class="mb-3">
        <label for="telefono" class="form-label">Teléfono</label>
        <input type="tel" class="form-control" name="txtTelefono" id="Telefono" placeholder="Ingrese el teléfono">
      </div>
      <div class="mb-3">
        <label for="hora_apertura" class="form-label">Hora de Apertura</label>
        <input type="time" class="form-control" name="txtHora_apertura" id="hora_apertura">
      </div>
      <div class="mb-3">
        <label for="hora_cierre" class="form-label">Hora de Cierre</label>
        <input type="time" class="form-control" name="txtHora_cierre" id="hora_cierre">
      </div>
      <button type="submit" class="btn btn-primary">Guardar</button>
      
      </form>
     
    </div>
  </div>
</div>
        </div>
 </div>
 <div class="buttonCrud" style="margin-bottom: 30px;">

<button href="" data-bs-toggle="modal" data-bs-target="#modalRegistrar" class="btn btn-success">Añadir</button>
<button href="" data-bs-toggle="modal" data-bs-target="#modalEditar" class="btn btn-success " >Editar</button>
<button href="" data-bs-toggle="modal" data-bs-target="#modalEditar" class="btn btn-success " >Eliminar</button>
</div>
<form class="row g-3" action="{{ route('buscar.crud')}}" >
  <div class="col-auto">
  <label for="buscar" class="col-form-label">Nombre</label>
  </div>
  <div class="col-auto">
    <input type="text" class="form-control" name="buscar">
  </div>
  <div class="col-auto">
    <button type="submit" class="btn btn-primary mb-3">buscar</button>
  </div>
</form>
      <div class="p-5 table-responsive">
  <table class="table ">
    <thead class="table-dark">
      <tr>
        <th scope="col">Id</th>
        <th scope="col">nombre</th>
        <th scope="col">lugar</th>
        <th scope="col">direccion</th>
        <th scope="col">email</th>
        <th scope="col">encargado</th>
        <th scope="col">telefono</th>
        <th scope="col">Hora de apertura</th>
        <th scope="col">Hora de cierre</th>
        <th></th>


      </tr>
      </thead> 
      @foreach ($datos as $item)
      <tr>
      <td>{{ $item->id_sucursal }}</td>
      <td>{{ $item->nombre }}</td>
      <td>{{ $item->lugar }}</td>
      <td>{{ $item->direccion }}</td>
      <td>{{ $item->email }}</td>
      <td>{{ $item->encargado }}</td>
      <td>{{ $item->telefono }}</td>
      <td>{{ $item->hora_apertura }}</td>
      <td>{{ $item->hora_cierre }}</td>
      <td> <input type="checkBox" class="" id="{{ $item->id_sucursal }}"></td>

      


      <!-- Modal -->
      @include('layouts.formEditar')
      </tr>
    @endforeach
      </tbody>

  </table>
  <form action="{{ route('sucursales.show') }}" method="get">
  <button  class="btn btn-success" >Vista Cliente</button> 
  </form>
  </div>
</body>
<script src="/public/javas.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</html>