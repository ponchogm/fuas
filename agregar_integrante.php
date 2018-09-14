<?php
//include ('seguridad.php');
$id_alum=$_GET['id'];
$rut=$_GET['rut'];
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<title>Pagina ingresos</title>
<body>
<form name="ingresos" method="post" action="insertar_integrante.php?rut=<?php echo $rut; ?>&id=<?php echo $id_alum; ?>">
<div class="controls controls-row">
                  <br>
                  <input type="text" id="nombre_grupo" name="nombre_grupo" class="span2" placeholder="Nombres">
                  <input type="text" id="ap_pat_grupo" name="ap_pat_grupo" class="span2" placeholder="Apellido Paterno">
                  <input type="text" id="ap_mat_grupo" name="ap_mat_grupo" class="span2" placeholder="Apellido Materno">
                  <input type="text" id="rut_grupo" name="rut_grupo" class="span2" placeholder="Rut" onblur="validaRut(this.value)">
                  <input type="text" id="edad_grupo" name="edad_grupo" class="span1" placeholder="Edad">
                    <select id="ecivil_grupo" name="ecivil_grupo" class="span2">
                        <option value="0">Estado Civil</option>
                        <option value="1">Soltero/a</option>
                        <option value="2">Casado/a</option>
                        <option value="3">Separado/a legalmente</option>
                        <option value="4">Separado/a de hecho</option>
                        <option value="5">Divorciado/a</option>
                        <option value="6">Viudo/a</option>
                        <option value="7">Conviviente</option>
                    </select>
                </div>
                <div class="controls controls-row">
                      <select id="parent_grupo" name="parent_grupo" class="span2">
                        <option value="0">Parentesco</option>
                        <option value="1">Padre</option>
                        <option value="2">Padrastro</option>
                        <option value="3">Madre</option>
                        <option value="4">Madrastra</option>
                        <option value="5">Hermano(a) o Hermanastro(a)</option>
                        <option value="6">Hijo(a)</option>
                        <option value="7">Cónyuge</option>
                        <option value="8">Abuelo(a)</option>
                        <option value="9">Tío(a)</option>
                        <option value="10">Primo(a)</option>
                        <option value="11">Sobrino(a)</option>
                        <option value="12">Suegro(a)</option>
                        <option value="13">Cuñado(a)</option>
                        <option value="14">Otro</option>
                        <option value="15">Pareja</option>
                        <option value="16">Yo</option>
                      </select>
                      <select id="prev_soc_grupo" name="prev_soc_grupo" class="span3">
                        <option value="0">Prev. Social</option>
                        <option value="1">AFP</option>
                        <option value="2">INP (Caja E.E. Part., Públicos, Municipios, etc.)</option>
                        <option value="3">CAPREDENA</option>
                        <option value="4">DIPRECA</option>
                        <option value="5">Otra previsión</option>
                        <option value="6">Sin previsión</option>
                      </select>
                      <select id="prev_sal_grupo" name="prev_sal_grupo" class="span3">
                        <option value="0">Prev. Salud</option>
                        <option value="1">FONASA</option>
                        <option value="2">ISAPRE</option>
                        <option value="3">Institucional (F.F.A.A., Carabineros, etc)</option>
                        <option value="4">tros seguros de salud</option>
                        <option value="5">Sin previsión</option>
                      </select>
                      <select id="niv_est_grupo" name="niv_est_grupo" class="span3">
                        <option value="0">Nivel de estudios</option>
                        <option value="1">Sin estudios</option>
                        <option value="2">Enseñanza Básica Incompleta</option>
                        <option value="3">Enseñanza Básica Completa</option>
                        <option value="4">Enseñanza Media o Técnico Profesional de nivel medio Incompleta</option>
                        <option value="5">Enseñanza Media o Técnico Profesional de nivel medio Completa</option>
                        <option value="6">Enseñanza Técnica Nivel Superior Incompleta</option>
                        <option value="7">Enseñanza Técnica Nivel Superior Completa o Profesional Incompleta</option>
                        <option value="8">Enseñanza Profesional Completa</option>
                      </select>
                    </div>
                    <div class="controls controls-row">
                        <select id="act_grupo" name="act_grupo" class="span10">
                          <option value="0">Actividad</option>
                          <option value="1">Trabajador Dependiente o Pensionado con Renta Fija y/o Variable</option>
                          <option value="2">Trabajador y/o Profesional Independiente</option>
                          <option value="3">Comerciante o socio de Empresa Comercial Industrial o Constructora</option>
                          <option value="4">Sostenedor de Establecimiento Educacional</option>
                          <option value="5">Transportista de carga y pasajeros</option>
                          <option value="6">Empresario Agrícola</option>
                          <option value="7">Rentista de bienes raíces no agrícolas o de capitales mobiliarios</option>
                          <option value="8">Persona dedicada a dos o más actividades de las indicadas en los lugares 01 a 07</option>
                          <option value="9">Persona mayor de 18 y menor de 65 años, sin ocupación ni ingresos y que NO esté imposibilitada de trabajar</option>
                          <option value="10">Cesante. Persona desvinculada de un trabajo remunerado por contrato u honorarios</option>
                          <option value="11">Mayor de 65 años, sin pensión ni otros ingresos</option>
                          <option value="12">Inválido, menor de 65 años, sin pensión ni otros ingresos</option>
                          <option value="13">Dueña de casa, sin actividad remunerada</option>
                          <option value="14">Estudiante de Enseñanza Básica o Media, o menores en edad preescolar</option>
                          <option value="15">Estudiantes de Educación Superior, de Escuelas Matrices de las Fuerzas Armadas y de Orden o de Preuniversitarios.</option>
                          <option value="16">Recién nacido</option>
                          <option value="17">Estudiante y Trabajador</option>
                        </select>
                    </div>
                    <div class="controls controls-row">
                      <input type="text" id="sueldos_grupo" name="sueldos_grupo" class="span2" placeholder="Sueldos y Pensiones">
                      <input type="text" id="hono_grupo" name="hono_grupo" class="span2" placeholder="Honorarios">
                      <input type="text" id="retiro_grupo" name="retiro_grupo" class="span2" placeholder="Retiro">
                      <input type="text" id="pen_grupo" name="pen_grupo" class="span2" placeholder="P. de alimentos y/o Aporte de parientes">
                      <input type="text" id="act_in_grupo" name="act_in_grupo" class="span2" placeholder="Actividades Indep.">
                      </div>
                    <div class="controls controls-row">
                      <input type="text" id="otros_grupo" name="otros_grupo" class="span3" placeholder="Otros (Dividendos, ganacias de capital)">
                    </div>
                    <button class="btn btn-primary" type="Submit">Insertar valores</button>
                    <button class="btn btn-warning" type="Reset">Limpiar valores</button>
                    </form>
    </html>