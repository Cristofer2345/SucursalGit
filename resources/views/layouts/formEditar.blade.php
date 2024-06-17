
<div class="modal fade" id="modalEditar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
          <h1 class="modal-title fs-5" id="editarModalLabel">Modificar</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
          <div class="container mt-5">
            <h1>Editar sucursal</h1>
            <form>
            <div class="mb-3">
              <label for="nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre">
            </div>
            <div class="mb-3">
              <label for="lugar" class="form-label">Lugar</label>
              <input type="text" class="form-control" id="lugar" placeholder="Ingrese el lugar" value="{{$item->lugar }}">
            </div>
            <div class="mb-3">
              <label for="direccion" class="form-label">Dirección</label>
              <input type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección" value="{{$item->direccion }}">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" placeholder="Ingrese el email" value="{{$item->email }}">
            </div>
            <div class="mb-3">
              <label for="encargado" class="form-label">Encargado</label>
              <input type="text" class="form-control" id="encargado" placeholder="Ingrese el encargado" value="{{$item->encargado }}">
            </div>
            <div class="mb-3">
              <label for="telefono" class="form-label">Teléfono</label>
              <input type="tel" class="form-control" id="telefono" placeholder="Ingrese el teléfono" value="{{$item->telefono }}">
            </div>
            <div class="mb-3">
              <label for="hora_apertura" class="form-label">Hora de Apertura</label>
              <input type="time" class="form-control" id="hora_apertura" value="{{$item->hora_apertura }}">
            </div>
            <div class="mb-3">
              <label for="hora_cierre" class="form-label" >Hora de Cierre</label>
              <input type="time" class="form-control" id="hora_cierre" value="{{$item->hora_cierre}}">
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
            </form>
          </div>
          </div>
        </div>
        </div>
      </div>