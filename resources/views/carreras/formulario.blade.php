        <div class="form-floating my-5">
          <input
            type="name"
            id="nombre"
            name="nombre"
            class="form-control"
            @if(isset($carrera))
              value={{$carrera->nombre}}
            @endif
          />
          <label for="name" class="form-label fuente">Nombre de la carrera:</label>
        </div>
        <div class="form-floating my-5">
            <input
              type="date"
              id="fcreacion"
              name="fcreacion"
              class="form-control"
              @if(isset($carrera))
                value={{$carrera->fcreacion}}
              @endif
            />
            <label for="fcreacion" class="form-label fuente">Fecha de creación</label>
          </div>
          <div class="form-floating my-5">
            <input
              type="number"
              id="creditos"
              name="creditos"
              class="form-control"
              @if(isset($carrera))
                value={{$carrera->creditos}}
              @endif
            />
            <label for="creditos" class="form-label fuente">Total de creditos</label>
          </div>
        <div class="text-center">
            <a class="btn btn-danger" href="{{url('/carrera')}}" role="button">Cancelar</a>
          <button type="submit" class="btn btn-primary">Registrar Carrera</button>
        </div>
      </form>
    </div>
  </div>
</div>