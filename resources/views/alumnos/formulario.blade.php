        <div class="form-floating mb-3">
          <input type="text" id="matricula" name="matricula" class="form-control" placeholder="Matricula del alumno"
            @if(isset($alumno))
              value={{$alumno->matricula}}
            @endif
            required
          />
          <label for="matricula" class="form-label fuente">Matricula del alumno:</label>
          </div>
        <div class="form-floating mb-3">
          <input type="name" id="nombre" name="nombre" class="form-control" placeholder="Nombre del alumno"
            @if(isset($alumno))
              value={{$alumno->nombre}}
            @endif
            required
          />
          <label for="nombre" class="form-label fuente">Nombre del alumno:</label>
        </div>
        <div class="form-floating mb-3">
          <input type="name" id="apellidos" name="apellidos" class="form-control" placeholder="Apellidos del alumno"
            @if(isset($alumno))
              value={{$alumno->apellidos}}
            @endif
            required
          />
          <label for="apellidos" class="form-label fuente">Apellidos del alumno:</label>
        </div>
        <div class="input-group mb-3">
          <div class="input-group-text">
            <input class="form-check-input mt-0" type="radio" value="masculino" aria-label="Masculino" 
            id="sexo" name="sexo"
            @if(isset($alumno))
              @if ($alumno->sexo=="masculino")
                checked 
              @endif
            @endif
            />
          </div>
          <input type="text" class="form-control fuente" aria-label="Masculino" value="Masculino">
          <div class="input-group-text">
            <input class="form-check-input mt-0" type="radio" value="femenino" aria-label="Femenino"
            id="sexo" name="sexo"
            @if(isset($alumno))
              @if ($alumno->sexo=="femenino")
                checked 
              @endif
            @endif
            />
          </div>
          <input type="text" class="form-control fuente" aria-label="Femenino" value="Femenino">
        </div>
          <div class="form-floating mb-3">
            <input type="number" id="edad" name="edad" class="form-control" placeholder="Edad"
              @if(isset($alumno))
                value={{$alumno->edad}}
              @endif
            />
            <label for="edad" class="form-label fuente">Edad</label>
          </div>
        <div class="mb-3">
          <select class="form-select" aria-label="Carreras en la escuela" id="carrera" name="carrera" required>
            <option selected>Selecciona una carrera</option>
            @foreach ($carreras as $carrera)
            <option value="{{$carrera->id}}">{{$carrera->nombre}}</option>  
            @endforeach
          </select>          
        </div>
        <div class="text-center">
            <a class="btn btn-danger" href="{{url('/alumno')}}" role="button">Cancelar</a>
          <button type="submit" class="btn btn-primary">Guardar Alumno</button>
        </div>
      </form>
    </div>
  </div>