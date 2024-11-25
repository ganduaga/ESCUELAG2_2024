        <div class="form-floating my-5">
          <input
            type="text"
            id="nombre"
            name="nombre"
            class="form-control"
            @if(isset($carrera))
              value={{$carrera->nombre}}
            @endif
            required
          />
          <label for="name" class="form-label fuente">Nombre de la carrera:</label>
        </div>
        <div class="form-floating my-5">
            <input
              type="date"
              id="vigencia"
              name="vigencia"
              class="form-control"
              @if(isset($carrera))
                value={{$carrera->fcreacion}}
              @endif
            />
            <label for="vigencia" class="form-label fuente">Vigencia de la carrera</label>
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