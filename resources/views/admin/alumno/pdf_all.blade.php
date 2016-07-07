<h3 align="center">
UNIVERSIDAD ADVENTISTA DE BOLIVIA
<BR>ESTUDIANTES
<BR>PRACTICA PRE-PROFESIONAL
</h3>

<table border="1" width="100%">
  <tr>
    <td><B>Nombre y Apellidos</B></td>
    <td><B>Carrera</td>
    <td><B>Semestre</td>
    <td><B>Empresa</td>
    <td><B>Area Asignada</B></td>
  </tr>
@foreach($data as $alu)
<tr>
  <td>{{$alu->practicante}}</td>
  <td>{{$alu->carrera}}</td>
  <td>{{$alu->semestre}}</td>
  <td>{{$alu->empresa}}</td>
  <td>{{$alu->area_asignada}}</td>
</tr>
@endforeach
</table>