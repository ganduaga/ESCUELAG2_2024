        <div class="form-floating my-5">
          <input
            type="text"
            id="nombre"
            name="nombre"
            class="form-control"
            @if(isset($materia))
              value={{$materia->nombre}}
            @endif
            required
          />
          <label for="name" class="form-label fuente">Nombre de la materia:</label>
        </div>
          <div class="form-floating my-5">
            <input
              type="number"
              id="creditos"
              name="creditos"
              class="form-control"
              @if(isset($materia))
                value={{$materia->creditos}}
              @endif
              required
            />
            <label for="creditos" class="form-label fuente">Total de creditos</label>
          </div>
          <div class="form-floating my-5">
            <select class="form-select" aria-label="Seleccion carrera" id="carrera_id" name="carrera_id" required>
              <option selected>Selecciona una</option>
              @foreach ($carreras as $carrera)
              <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>                
              @endforeach
            </select>
          </div>
        <div class="text-center">
            <a class="btn btn-danger" href="{{url('/materia')}}" role="button">Cancelar</a>
          <button type="submit" class="btn btn-primary">Guardar materia</button>
        </div>
      </form>
    </div>
  </div>
</div>