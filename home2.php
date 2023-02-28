<?php 
if(!isset($_COOKIE["usuario"])){
	header("Location: ./login2.php");
	///echo $_COOKIE["usuario"]; 
}else{
	
	include_once "verificar.php"; 
} 
 
if($tipo=='cajero'){
// include_once "header.php";
include_once "header2.php";
}
 
// cardona 77629403

?>
    <div class="main main-app p-3 p-lg-4">
      <div class="d-flex align-items-center justify-content-between mb-4">
        <div>
          <ol class="breadcrumb fs-sm mb-1">
            <li class="breadcrumb-item"><a href="#">HOME</a></li>
            <li class="breadcrumb-item active" aria-current="page"> OPCIONES</li>
          </ol>
          <h4 class="main-title mb-0">INSCRIPCIONES</h4>
        </div>

         
      </div>
  <div class="row">
      <div class="col-6">
      

        <div class="card card-example">
          <div   class="card-body">
            <div  class="accordion accordion"   id="accordionExampleE">
              <div  class="accordion-item">
                <h2   class="accordion-header" id="headingOneE">
                <h2   class="accordion-header" id="headingOneE">
                  <button style="background-color:#F9BE00 ;color:white;border:2px black"  class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOneE" aria-expanded="true" aria-controls="collapseOneE">
                 Taller de Grado 1
                  </button>
                </h2>
               
                <div id="collapseOneE" class="accordion-collapse collapse show" aria-labelledby="headingOneE" data-bs-parent="#accordionExampleE">
                  <div class="accordion-body">
               
                  <div class="col-12">
                  <div class="card card-one">
                    
                    <div class="card-body">
                      <div class="table-responsive">
                        <table class="table table-agent mb-0">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check">
                                  <label class="form-check-label" for="ck0"></label>
                                </div>
                              </th>
                              <th>SIGLA GRUPO</th>
                              <th>Docente</th>
                              <th> </th>
                              <th>CUPOS</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                <form name="FinalAccept" method="post" action="registrar_horario.php"><br>
                                  <input   type="radio" name="m1"   onclick="this.form.submit();">
                                   <label class="form-check-label" for="m1">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals"> INF 511 SA
                                <input   type="hidden" value="INF 511 SA" name="grupo" id="">
                              </span></td>
                               <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <div>
                                    <h6 class="mb-0">
                                       <input    type="hidden" name="horario"  value ="Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |"
                                      id="">
                                    </h6>
                                  </div>
                                </div>
                              </td>
                               <td><span class="ff-numerals">9</span></td>
                              <td>
                                <div class="progress ht-5 mb-0">
                                  <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                               </form>
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                <form name="FinalAccept" method="post" action="registrar_horario.php"><br>
                                  <input   type="radio" name="m1"   onclick="this.form.submit();">
                                   <label class="form-check-label" for="m1">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals"> INF 511 SB
                                <input   type="hidden" value="INF 511 SB" name="grupo" id="">
                              </span></td>
                               <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <div>
                                    <h6 class="mb-0">
                                       <input    type="hidden" name="horario"  value ="Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |"
                                      id="">
                                    </h6>
                                  </div>
                                </div>
                              </td>
                               <td><span class="ff-numerals">9</span></td>
                              <td>
                                <div class="progress ht-5 mb-0">
                                  <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                               </form>
                            </tr>
                          </tbody>
                        </table>
                      </div><!-- table-responsive -->
                    </div><!-- card-body -->
                  </div><!-- card -->
        </div><!-- col -->


                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoE">
                  <button style="background-color:#F9BE00 ;color:white"  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoE" aria-expanded="false" aria-controls="collapseTwoE">
                   Tecnologia web
                  </button>
                </h2>
                <div id="collapseTwoE" class="accordion-collapse collapse" aria-labelledby="headingTwoE" data-bs-parent="#accordionExampleE">
                  <div class="accordion-body">
                  <div class="table-responsive">
                        <table class="table table-agent mb-0">
                          <thead>
                          
                            <tr>
                              <th>
                                <div class="form-check">
                                  <label class="form-check-label" for="ck0"></label>
                                </div>
                              </th>
                              <th>SIGLA GRUPO</th>
                              <!-- <th>GRUPO</th> -->
                              <th>Docente</th>
                              <th>HORARIO</th>
                              <th>CREDITOS</th>
                              <th>SEMESTRE</th>
                              <th>CUPOS</th>
                              <!-- <th>REPROBDOS</th> -->
                              <th>&nbsp;MODALIDAD</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                
                                 <label class="form-check-label" for="headingTwoE">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals">INF 511 SA</span></td>
                              <!-- <td><span class="ff-numerals">SA</span></td> -->
                              <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div> -->
                                  <div>
                                    <h6 class="mb-0">Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |	</h6>
                                    <!-- <span class="fs-xs text-secondary">allan@themepixels.me</span> -->
                                  </div>
                                </div>
                              </td>
                               <td><span class="ff-numerals">5</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">PRESENCIAL</span></td>
                              
                             </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input  name="sigla"class="form-check-input" type="radio"   id="headingTwoE">
                                  <label class="form-check-label" for="headingTwoE">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals">INF 511 SA</span></td>
                              <!-- <td><span class="ff-numerals">SA</span></td> -->
                              <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                   <div>
                                    <h6 class="mb-0">Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |	</h6>
                                   </div>
                                </div>
                              </td>
                               <td><span class="ff-numerals">5</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">40</span></td>
                              <td><span class="ff-numerals">Presencial</span></td>
                              
                             </tr>
                            
                          </tbody>
                        </table>
                      </div><!-- table-responsive -->
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoE">
                  <button style="background-color:#F9BE00 ;color:white"  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoE" aria-expanded="false" aria-controls="collapseTwoE">
                   SOFTWARE II
                  </button>
                </h2>
                <div id="collapseTwoE" class="accordion-collapse collapse" aria-labelledby="headingTwoE" data-bs-parent="#accordionExampleE">
                  <div class="accordion-body">
                  <div class="table-responsive">
                        <table class="table table-agent mb-0">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check">
                                  <label class="form-check-label" for="ck0"></label>
                                </div>
                              </th>
                              <th>SIGLA GRUPO</th>
                              <!-- <th>GRUPO</th> -->
                              <th>Docente</th>
                              <th>HORARIO</th>
                              <th>CREDITOS</th>
                              <th>SEMESTRE</th>
                              <th>CUPOS</th>
                              <!-- <th>REPROBDOS</th> -->
                              <th>&nbsp;MODALIDAD</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input  name="checked"class="form-check-input" type="radio"   id="checked">
                                  <label class="form-check-label" for="ck1">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals">INF 511 SA</span></td>
                              <!-- <td><span class="ff-numerals">SA</span></td> -->
                              <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div> -->
                                  <div>
                                    <h6 class="mb-0">Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |	</h6>
                                    <!-- <span class="fs-xs text-secondary">allan@themepixels.me</span> -->
                                  </div>
                                </div>
                              </td>
                              <!-- <td><span class="badge bg-success">Active</span></td> -->
                              <td><span class="ff-numerals">5</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">PRESENCIAL</span></td>
                              
                              <!-- <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td> -->
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input  name="sigla"class="form-check-input" type="radio"   id="ck1">
                                  <label class="form-check-label" for="ck1">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals">INF 511 SA</span></td>
                              <!-- <td><span class="ff-numerals">SA</span></td> -->
                              <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div> -->
                                  <div>
                                    <h6 class="mb-0">Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |	</h6>
                                    <!-- <span class="fs-xs text-secondary">allan@themepixels.me</span> -->
                                  </div>
                                </div>
                              </td>
                              <!-- <td><span class="badge bg-success">Active</span></td> -->
                              <td><span class="ff-numerals">5</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">40</span></td>
                              <td><span class="ff-numerals">Presencial</span></td>
                              
                              <!-- <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td> -->
                            </tr>
                            
                          </tbody>
                        </table>
                      </div><!-- table-responsive -->
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoE">
                  <button style="background-color:#F9BE00 ;color:white"  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoE" aria-expanded="false" aria-controls="collapseTwoE">
                      ARQUITECTURA DE SOFTWARE
                  </button>
                </h2>
                <div id="collapseTwoE" class="accordion-collapse collapse" aria-labelledby="headingTwoE" data-bs-parent="#accordionExampleE">
                  <div class="accordion-body">
                  <div class="table-responsive">
                        <table class="table table-agent mb-0">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check">
                                  <label class="form-check-label" for="ck0"></label>
                                </div>
                              </th>
                              <th>SIGLA GRUPO</th>
                              <!-- <th>GRUPO</th> -->
                              <th>Docente</th>
                              <th>HORARIO</th>
                              <th>CREDITOS</th>
                              <th>SEMESTRE</th>
                              <th>CUPOS</th>
                              <!-- <th>REPROBDOS</th> -->
                              <th>&nbsp;MODALIDAD</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input  name="sigla"class="form-check-input" type="radio"   id="ck1">
                                  <label class="form-check-label" for="ck1">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals">INF 511 SA</span></td>
                              <!-- <td><span class="ff-numerals">SA</span></td> -->
                              <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div> -->
                                  <div>
                                    <h6 class="mb-0">Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |	</h6>
                                    <!-- <span class="fs-xs text-secondary">allan@themepixels.me</span> -->
                                  </div>
                                </div>
                              </td>
                              <!-- <td><span class="badge bg-success">Active</span></td> -->
                              <td><span class="ff-numerals">5</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">PRESENCIAL</span></td>
                              
                              <!-- <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td> -->
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input  name="sigla"class="form-check-input" type="radio"   id="ck1">
                                  <label class="form-check-label" for="ck1">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals">INF 511 SA</span></td>
                              <!-- <td><span class="ff-numerals">SA</span></td> -->
                              <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div> -->
                                  <div>
                                    <h6 class="mb-0">Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |	</h6>
                                    <!-- <span class="fs-xs text-secondary">allan@themepixels.me</span> -->
                                  </div>
                                </div>
                              </td>
                              <!-- <td><span class="badge bg-success">Active</span></td> -->
                              <td><span class="ff-numerals">5</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">40</span></td>
                              <td><span class="ff-numerals">Presencial</span></td>
                              
                              <!-- <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td> -->
                            </tr>
                            
                          </tbody>
                        </table>
                      </div><!-- table-responsive -->
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwoE">
                  <button style="background-color:#F9BE00 ;color:white"  class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwoE" aria-expanded="false" aria-controls="collapseTwoE">
                COMPILADORES
                  </button>
                </h2>
                <div id="collapseTwoE" class="accordion-collapse collapse" aria-labelledby="headingTwoE" data-bs-parent="#accordionExampleE">
                  <div class="accordion-body">
                  <div class="table-responsive">
                        <table class="table table-agent mb-0">
                          <thead>
                            <tr>
                              <th>
                                <div class="form-check">
                                  <label class="form-check-label" for="ck0"></label>
                                </div>
                              </th>
                              <th>SIGLA GRUPO</th>
                              <!-- <th>GRUPO</th> -->
                              <th>Docente</th>
                              <th>HORARIO</th>
                              <th>CREDITOS</th>
                              <th>SEMESTRE</th>
                              <th>CUPOS</th>
                              <!-- <th>REPROBDOS</th> -->
                              <th>&nbsp;MODALIDAD</th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input  name="sigla"class="form-check-input" type="radio"   id="ck1">
                                  <label class="form-check-label" for="ck1">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals">INF 511 SA</span></td>
                              <!-- <td><span class="ff-numerals">SA</span></td> -->
                              <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div> -->
                                  <div>
                                    <h6 class="mb-0">Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |	</h6>
                                    <!-- <span class="fs-xs text-secondary">allan@themepixels.me</span> -->
                                  </div>
                                </div>
                              </td>
                              <!-- <td><span class="badge bg-success">Active</span></td> -->
                              <td><span class="ff-numerals">5</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">PRESENCIAL</span></td>
                              
                              <!-- <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td> -->
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input  name="sigla"class="form-check-input" type="radio"   id="ck1">
                                  <label class="form-check-label" for="ck1">  </label>
                                </div>
                              </td>
                              <td><span class="ff-numerals">INF 511 SA</span></td>
                              <!-- <td><span class="ff-numerals">SA</span></td> -->
                              <td>
                                <div class="d-flex align-items gap-1">
                                  <div class="avatar"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/82/Escudo_FICCT.png/640px-Escudo_FICCT.png" alt=""></div>
                                  <div>
                                    <h6 class="card-label mb-0">Martinez Canedo</h6>
                                    <span class="fs-xs text-secondary">martines@gmail.com</span>
                                  </div>
                                </div>
                              </td>
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <!-- <div class="avatar"><img src="https://via.placeholder.com/300/4c5366/fff" alt=""></div> -->
                                  <div>
                                    <h6 class="mb-0">Lu 07:00-10:00 236-11 |Ma 07:00-10:00 236-11 |Mi 07:00-10:00 236-11 |Ju 07:00-10:00 236-11 |Vi 07:00-10:00 236-11 |Sa 07:00-10:00 236-11 |	</h6>
                                    <!-- <span class="fs-xs text-secondary">allan@themepixels.me</span> -->
                                  </div>
                                </div>
                              </td>
                              <!-- <td><span class="badge bg-success">Active</span></td> -->
                              <td><span class="ff-numerals">5</span></td>
                              <td><span class="ff-numerals">9</span></td>
                              <td><span class="ff-numerals">40</span></td>
                              <td><span class="ff-numerals">Presencial</span></td>
                              
                              <!-- <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td> -->
                            </tr>
                            
                          </tbody>
                        </table>
                      </div><!-- table-responsive -->
                  </div>
                </div>
              </div>
            </div>
          </div><!-- card-body -->
          <div class="card-footer">
           </div><!-- card-footer -->
        </div><!-- card -->

        <br><br><br>
<!-- 		foreach($productos as $producto){ -->
      </div><!-- container -->
    <div class="col-6">
          <div class="row">
          <div class="table-responsive">
                        <table class="table table-agent mb-0">
                          <thead>

                          <?php
                              $sentencia = $base_de_datos->query("SELECT * FROM horarios   ;");
                              $horarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
                              ?>
                            <tr>
                              <th>
                                <div class="form-check">
                                  <label class="form-check-label" for="ck0"></label>
                                </div>
                              </th>
                              <th>SIGLA GRUPO</th>
                              <!-- <th>GRUPO</th> --> 
                               <th>HORARIO</th>
                               
                              </tr>
                            </thead>
                            <tbody>
                            <?php    foreach($horarios as $grupo){ ?>
                          
                            <tr>
                              <td>
                                <div class="form-check"> 


                                <form action="eliminar_horario.php" method="post"> 
                                  <input type="hidden" name="id" value=" <?php echo $grupo->id ?>">
                                 <button type="submit">  <i  class="ri-delete-bin-line" data-bs-toggle="tooltip" title="" data-bs-original-title="eliminar" aria-label="ri-delete-bin-line"></i>
                                 </button>
                                </form>
                                </div>
                              </td>
                              <td><span class="ff-numerals">   <?php echo $grupo->grupo ?></span></td>
                              
                              <td>
                                <div class="d-flex align-items-center gap-2">
                                  <div>
                                     <center>
                                    <h6 class="mb-0">
                                   
                                             Lu 07:00-10:00 236-11 | Ma 07:00-10:00 236-11
                                       <br> Mi 07:00-10:00 236-11 | Ju 07:00-10:00 236-11
                                       <br> Vi 07:00-10:00 236-11 | Sa 07:00-10:00 236-11 	</h6>
                                       </center>
                                  </div>
                                </div>
                                
                              </td>
                              
                            </tr>
                            <?php } ?>
                            
                          </tbody>
                        </table>
                      </div><!-- table-responsive -->
                  </div>
          </div>
    </div>
      </div> 
      </div><!-- row -->
      <input type="submit"> REGISTRAR</>
      <script type="text/javascript">
         // alert("adfa");

      $('#checked').on('click',function(){
                      if(this.checked){
                        alert("hola mundo");
                          $('#checked').hide();
                      }else{
                          $('#checked').show();
                      }
                      alert("hola mundo");
                  });
</script>
      
     <?php include_once "footer.php" ?> 
     