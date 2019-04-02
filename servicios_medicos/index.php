<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <?php include './dotk/00head/analitycs.html';?>
  <?php include './dotk/00head/cabecera.html';?>
  <?php include './dotk/00head/estilos.html';?>
</head>

<body>

  <a id="arriba"></a>
  <header>
    <!-- Logos e imagen de hidalgo -->
    <?php include '../lib18/seph/hf/header.html';?>

    <nav>
      <!-- Menu principal superior -->
      <?php include '../lib18/coreFRONTx/01header/nav/menu-superior/menu.html';?>
    </nav>

  </header>

<!-- Menu menu-pegajoso DarkDesign -->
  <?php /*include './dotk/01header/02begajoso/menu-pegajoso.html';*/?>

  <main class="main container">
    <!-- Titulo -->
    <div class="alert alert-info text-center mt-2">
      <strong>Servicios Médicos</strong>
    </div>
    <!-- Fin Titulo -->

    <!-- Introduccion -->
    <div class="card text-center mb-2">
        <div class="card-header">
            <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
            <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="fas fa-home"></i> Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="mision-tab" data-toggle="tab" href="#mision" role="tab" aria-controls="mision" aria-selected="false"><i class="fas fa-certificate"></i> Misión</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="vision-tab" data-toggle="tab" href="#vision" role="tab" aria-controls="vision" aria-selected="false"><i class="fas fa-eye"></i> Visión</a>
  </li>
            </ul>
        </div>
        <div class="card-body tab-content" id="myTabContent">
        <div class="tab-pane fade show active text-justify" id="home" role="tabpanel" aria-labelledby="home-tab">El servicio médico universitario es una unidad que forma parte de servicios escolares de la Universidad Politécnica de Pachuca, a la cual se le delegan atribuciones para desarrollar acciones en cuanto a  servicios de salud se refieren, estas van desde la atención  en consulta médica de la cual derivan la administración de medicamentos y expedición de receta médica, además del desarrollo de acciones médico – preventivas. Este  servicio se  presta al alumnado, administrativos, académicos, intendencia y a la población universitaria  en general de  manera  gratuita.<br/><br/>
        <strong>Horario servicio médico: </strong>Lunes a Viernes (Consultorio) 9:00 a 17:00 
        <br/><br/>
        <a href="mailto:serviciomedico@upp.edu.mx">serviciomedico@upp.edu.mx</a></div>
  <div class="tab-pane fade text-justify" id="mision" role="tabpanel" aria-labelledby="mision-tab">Promover, conservar y restaurar la salud de la población universitaria y de sus beneficiarios con oportunidad, eficiencia, eficacia, calidad y por supuesto sin olvidar la importancia de la calidez en la atención, además de incitar a la población al  autocuidado  de la salud dejando ver que esta es un pilar muy importante en la formación  de buenos estudiantes logrando un mayor rendimiento escolar, esto con  el desarrollo de programas y servicios orientados a la identificación  y prevención de factores de riesgo para enfermedades de alta prevalencia, con el objetivo de mejorar la salud, cambiar hábitos higiénico – dietéticos y acciones que no dañen el organismo mejorando así la calidad de vida  con un bienestar físico y mental.</div>
  <div class="tab-pane fade text-justify" id="vision" role="tabpanel" aria-labelledby="vision-tab">Ser una instancia que llegue a ser un modelo de calidad en la atención de la salud universitaria sin  restar  importancia a la medicina preventiva  que asegure una mejora  y bienestar  continuos, con un sistema eficiente, eficaz, interactivo y  dinámico buscando calidad adecuada continuamente  y como meta la excelencia,  siempre  basándonos en el respeto de los derechos del paciente con una atención humanista y ética.</div>
        </div>
    </div>
    <!-- Fin de introduccion -->

    <!-- Servicios -->
    <div class="card border-info mb-3 d-none d-sm-block">
      <div class="card-body">
        <p class="card-text">
        <div class="bd-example bd-example-tabs">
            <div class="row">
              <div class="col-3">
                  <div aria-orientation="vertical" class="nav flex-column nav-pills" id="v-pills-tab" role="tablist">
                      <a aria-controls="v-pills-objetivo" aria-selected="true" class="nav-link active" data-toggle="pill" href="#v-pills-objetivo" id="v-pills-objetivo-tab" role="tab">
                      <i class="fas fa-bookmark"></i>
                        Consulta  externa
                      </a>
                      <a aria-controls="v-pills-ingreso" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-ingreso" id="v-pills-ingreso-tab" role="tab">
                        <i class="fas fa-user"></i>
                        Apertura de expediente  médico
                      </a>
                      <a aria-controls="v-pills-egreso" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-egreso" id="v-pills-egreso-tab" role="tab">
                        <i class="fab fa-leanpub"></i>
                        Certificados Médicos deportivos
                      </a>
                      <a aria-controls="v-pills-estudios" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-estudios" id="v-pills-estudios-tab" role="tab">
                        <i class="fas fa-book"></i>
                        Desarrollo de campañas de salud
                      </a>
                      <a aria-controls="v-pills-academico" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-academico" id="v-pills-academico-tab" role="tab">
                      <i class="fas fa-address-book"></i>
                        Desarrollo de pláticas  informativas
                      </a>
                      <a aria-controls="v-pills-lgac" aria-selected="false" class="nav-link" data-toggle="pill" href="#v-pills-lgac" id="v-pills-lgac-tab" role="tab">
                      <i class="far fa-address-card"></i>
                        Justificantes médicos 
                      </a>
                  </div>
              </div>
              <div class="col-9">
               <div class="tab-content" id="v-pills-tabContent">
                   <div class="tab-pane fade show active text-justify" id="v-pills-objetivo" role="tabpanel" aria-labelledby="v-pills-objetivo-tab">Donde  se  ofrece atención por  el médico general en turno, el cual tiene la facultad de  otorgar  medicamentos sintomáticos, (en base al uso racional de los recursos) y otorgar  receta médica si el padecimiento así lo amerita.</div>


                   <div class="tab-pane fade text-justify" id="v-pills-ingreso" role="tabpanel" aria-labelledby="v-pills-ingreso-tab">Dirigido a estudiantes  los cuales son portadores de alguna enfermedad subyacente la cual amerite vigilancia continua, el objetivo es conocer los antecedentes del padecimiento del cual es portador, medicamentos que se esté administrando, si es portador de alguna alergia o de acciones que el médico tenga que adoptar para la atención de este en un ataque agudo, así mismo obtener información de sus familiares para reportar esta situación en caso de ser necesario.</div>


                   <div class="tab-pane fade text-justify" id="v-pills-egreso" role="tabpanel" aria-labelledby="v-pills-egreso-tab">El servicio médico trabaja conjuntamente  con el departamento de deportes en la realización de los certificados médicos, con el objetivo de verificar el estado de salud de los aspirantes a una actividad deportiva o bien para identificar datos que lleguen a poner en riesgo la  integridad del alumno con el desarrollo dicha actividad.</div>


                   <div class="tab-pane fade text-justify" id="v-pills-estudios" role="tabpanel" aria-labelledby="v-pills-estudios-tab">Estas  campañas  están dirigidas  básicamente  a la preservación de la salud, es decir la   prevención de   factores que pongan en riesgo la integridad y bienestar del organismo.</div>


                   <div class="tab-pane fade text-justify" id="v-pills-academico" role="tabpanel" aria-labelledby="v-pills-academico-tab">La realización  de estas  es  para  mantener  con la suficiente  información a los alumnos sobre  temas  que  les  son de  interés.</div>


                   <div class="tab-pane fade text-justify" id="v-pills-lgac" role="tabpanel" aria-labelledby="v-pills-lgac-tab">El médico tiene la facultad de expedir  un justificante medico a un alumno  cuando  a criterio del médico y según su diagnóstico, basado en el  interrogatorio y exploración física,  así lo amerite para retirarse a su domicilio o bien para justificar sus faltas los días que sean necesarios. En caso de que la incapacidad sea indicada por un médico particular, el médico escolar se reservara la facultad de otorgar  o no  el justificante, así como la facultad de exigir un resumen  clínico o receta para poder otorgar el mismo.</div>
                </div>
              </div>
            </div>
          </div>
        </p>
      </div>
    </div>
    <!-- Fin de servicios -->

    <!-- Servicios version movil -->
    <div id="accordion" class="d-block d-sm-none">
      <div class="card">
        <div class="card-header" id="headingOne">
          <h5 class="mb-0">
            <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-bookmark"></i>
               Consulta  externa
            </button>
          </h5>
        </div>

        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
          <div class="card-body text-justify">
          Donde  se  ofrece atención por  el médico general en turno, el cual tiene la facultad de  otorgar  medicamentos sintomáticos, (en base al uso racional de los recursos) y otorgar  receta médica si el padecimiento así lo amerita.
          </div>
        </div>
      </div>
      <div class="card">
        <div class="card-header" id="headingTwo">
          <h5 class="mb-0">
            <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
            <i class="fas fa-user"></i>
                        Apertura de expediente  médico
            </button>
          </h5>
        </div>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
          <div class="card-body text-justify">
          Dirigido a estudiantes  los cuales son portadores de alguna enfermedad subyacente la cual amerite vigilancia continua, el objetivo es conocer los antecedentes del padecimiento del cual es portador, medicamentos que se esté administrando, si es portador de alguna alergia o de acciones que el médico tenga que adoptar para la atención de este en un ataque agudo, así mismo obtener información de sus familiares para reportar esta situación en caso de ser necesario.
          </div>
        </div>
    </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        <i class="fab fa-leanpub"></i>
                        Certificados Médicos deportivos
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body text-justify">
      El servicio médico trabaja conjuntamente  con el departamento de deportes en la realización de los certificados médicos, con el objetivo de verificar el estado de salud de los aspirantes a una actividad deportiva o bien para identificar datos que lleguen a poner en riesgo la  integridad del alumno con el desarrollo dicha actividad.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        <i class="fas fa-book"></i>
                        Desarrollo de campañas de salud
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body text-justify">
      Estas  campañas  están dirigidas  básicamente  a la preservación de la salud, es decir la   prevención de   factores que pongan en riesgo la integridad y bienestar del organismo.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        <i class="fas fa-address-book"></i>
                        Desarrollo de pláticas  informativas
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body text-justify">
      La realización  de estas  es  para  mantener  con la suficiente  información a los alumnos sobre  temas  que  les  son de  interés.
      </div>
    </div>
  </div>
  <div class="card mb-2">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        <i class="far fa-address-card"></i>
                        Justificantes médicos 
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body text-justify">
      El médico tiene la facultad de expedir  un justificante medico a un alumno  cuando  a criterio del médico y según su diagnóstico, basado en el  interrogatorio y exploración física,  así lo amerite para retirarse a su domicilio o bien para justificar sus faltas los días que sean necesarios. En caso de que la incapacidad sea indicada por un médico particular, el médico escolar se reservara la facultad de otorgar  o no  el justificante, así como la facultad de exigir un resumen  clínico o receta para poder otorgar el mismo.
      </div>
    </div>
  </div>
</div>
    <!-- Fin servicios version movil -->

  </main>

  <footer>
    <!-- footer de gobierno del estado -->
    <?php include '../lib18/seph/hf/footer.html';?>
  </footer>

<!-- Librerias javascript -->
  <?php include '../lib18/coreFRONTx/09js/java.html';?>

  <!-- Script para dar la animacion al boton flotante que lleva arriba -->
  <a href="#" class="back-to-top">Volver arriba</a>
  <script src="../lib18/coreFRONTx/10boton-arriba/script.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="../lib18/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>


  <script>
    $(function () {
        $('[data-toggle="popover"]').popover()
    })
  </script>

</body>
</html>
