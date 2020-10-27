<!DOCTYPE html>

<html>
    <head>
      <title>Plataforma Administracion</title>
      <link rel="stylesheet" href="{!! asset('css/hmenu.css') !!}">
      <link href="https://fonts.googleapis.com/css2?family=Spartan&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    </head>

    <body>
      <nav>
      <h3>UNID</h3>
        <ul>
            <li><a href="#">Admisiones<i class="icon ion-md-arrow-dropdown"></i></a>
                    <ul>
                        <li><a>Administracion</a>
                            <ul id="submenu">
                                <li><a href="/Admisiones/Administracion/NGrupo.blade.php">Nuevo Grupo</a></li>
                                <li><a href="#">Lista de Grupos</a></li>
                                <li><a href="#">Resetear Reportes</a></li>
                            </ul>
                        
                        </li>
                        <li><a href="#">Repotes</a>
                            <ul id="submenu">
                                <li><a href="#">Reportes Inscritos</a></li>
                                <li><a href="#">Reporte Examen</a></li>
                                <li><a href="#">Reportes Aspirantes Sin Captura Banner</a></li>
                                <li><a href="#">Reportes MTI</a></li>
                                <li><a href="#">Listado de Grupos</a></li>
                                <li><a href="#">Devoluciones / Cambios de periodo</a></li>
                                <li><a href="#">Reporte MADM</a></li>
                                <li><a href="#">Reporte MMKT</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Feacha de Examenes</a></li>
                        <li><a href="#">Captura de Aspirante</a></li>
                        <li><a href="#">Buscar Aspirante</a></li>
                    </ul>
            </li>

            <li><a href="#">Control de Asistencias<i class="icon ion-md-arrow-dropdown"></i></a>
                    <ul >
                        <li><a href="#">Reporte General de Asistencias</a></li>
                        <li><a href="#">Reporte de Faltas</a></li>
                        <li><a href="#">Reportes y Estadisticas</a></li>
                
                    </ul>
            </li>

            <li><a href="#">Capturas<i class="icon ion-md-arrow-dropdown"></i></a>
                        <ul >
                            <li><a href="#">Administracion</a>
                                <ul id="captura">
                                <li><a href="#">Alta Docente</a></li>
                                <li><a href="#">Autorizar Prorroga</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Reporte Alumno</a></li>
                        <li><a href="#">Fecha de Examenes</a>
                            <ul id="captura">
                                <li><a href="#">Buscar por subject</a></li>
                                <li><a href="#">Buscar por carrera</a></li>
                            </ul></li>
                        <li><a href="#">Servicios Escolares</a>
                            <ul id="captura">
                                <li><a href="#">Alta Maestro</a></li>
                                <li><a href="#">Lista de Maestros</a></li>
                            </ul>
                        </li>
                    </ul>
            </li>

            <li><a href="#">Consultas<i class="icon ion-md-arrow-dropdown"></i></a>
                    <ul >
                        <li><a href="#">Seguimientos cartera vencida</a></li>
                        <li><a href="#">reporte deudores por fecha</a>
                                <ul id="subsubmenu">
                                    <li><a href="#">Reporte de prorrogas incumplidas</a></li>
                                    <li><a href="#">Reprobados por perido</a></li>
                                </ul>
                        </li>
                        <li><a href="#">Humanidades</a>
                                <ul id="subsubmenu">
                                    <li><a href="#">Revisar alumnos humadidades</a></li>
                                    <li><a href="#">Revisar asignaturas</a></li>
                                </ul>
                        </li>
                        <li><a href="#">Calendario de Examenes</a>
                                <ul id="subsubmenu">
                                    <li><a href="#">Examenes por dia</a></li>
                                    <li><a href="#">Examenes por fecha</a></li>
                                    <li><a href="#">Examanes por Maestro</a></li>
                                </ul>
                        </li>
                        <li><a href="#">Archivo SIU</a></li>
                        <li><a href="#">Calendario de vacaciones UNID Merida</a></li>
                        <li><a href="#">Estado Alumno</a></li>
                        <li><a href="#">Historial de Reportes Alumno</a></li>
                        <li><a href="#">Consultas Avanzadas</a></li>
                    </ul>
            </li>

            <li><a href="#">Busquedas<i class="icon ion-md-arrow-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Busqueda Alumno</a></li>
                        <li><a href="#">Busqueda CRN</a></li>
                        <li><a href="#">Busqueda Maestro</a></li>
                        <li><a href="#">Busqueda Libros</a></li>
                    </ul>
            </li>

            <li><a>Administracion<i class="icon ion-md-arrow-dropdown"></i></a>
                    <ul>
                        <li><a>Administracion de Usuarios</a>
                                <ul id="Admin">
                                    <li><a href="#">Agregar Usuario</a></li>
                                    <li><a href="#">Lista de Usuarios</a></li>
                                </ul>
                        </li>
                        <li><a>Vacaciones</a>
                                <ul id="Admin">
                                    <li><a href="#">Reportes de vacaciones autorizadas</a></li>
                                    <li><a href="#">Sistema de vacaciones</a></li>
                                </ul>
                        </li>
                        <li><a>Opciones Cobranza</a>
                                <ul id="Admin">
                                    <li><a href="#">Actualizar Prorrogas</a></li>
                                    <li><a href="#">Actualizar cobranza mac</a></li>
                                    <li><a href="#">Actualizar historial de cobranza</a></li>
                                    <li><a href="#">Procesar deudores</a></li>
                                </ul>
                        </li>
                        <li><a>Opciones</a>
                                <ul id="Admin">
                                    <li><a href="#">Opciones del sistema</a></li>
                                    <li><a href="#">Indicadores</a>
                                         <ul id="Marcadores">
                                            <li><a href="#">Agregar Indicador</a></li>
                                            <li><a href="#">Listador de Indicadores</a></li>
                                            <li><a href="#">Modificar informacion de Indicadores</a></li>
                                            <li><a href="#">Modificar aviso</a></li>
                                        </ul>
                                    </li>
                                </ul> 
                        </li>
                
                    </ul>
            </li>  
            <li><a>Alumno<i class="icon ion-md-arrow-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Asistencia</a></li>
                        <li><a href="#">Documentos</a></li>
                        <li><a href="#">Pagos</a></li>
                        <li><a href="#">Cartera</a></li>
                        <li><a href="#">Reportes</a></li> 
                </ul>
            </li> 
        <h3 style="text-align:right"> Salir </h3> 
       </nav>
       
        <h1 style="text-align:center">Bienvenido Usuario al banner Administrativo</h1>
        <div style="text-align:center;">
        <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23F6BF26&amp;ctz=America%2FMexico_City&amp;src=ZjduazgyNDQ2ZWY4aHBrNzM5YzduZ3FxOTRAZ3JvdXAuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;src=ZW4ubWV4aWNhbiNob2xpZGF5QGdyb3VwLnYuY2FsZW5kYXIuZ29vZ2xlLmNvbQ&amp;color=%23B39DDB&amp;color=%230B8043&amp;showNav=1&amp;showTitle=0&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=1&amp;showTz=0&amp;hl=es_419" style="border-width:0" width="600" height="600" frameborder="0" scrolling="no"></iframe>
        </div>
        </body>
</html>
