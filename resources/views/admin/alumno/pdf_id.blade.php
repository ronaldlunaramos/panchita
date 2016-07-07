<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Datos Alumno</title>
  </head>
  <body>
    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h3 class="letra">Nombre:    {{ $data->name }}</h3>
          <h3 class="letra">Carrera:   {{ $data->carrera }}</h3>


          <div class="date">Fecha de impresión {{ $date }}</div>
        </div>
      </div>

  </body>
</html>