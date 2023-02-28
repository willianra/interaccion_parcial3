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
          <h4 class="main-title mb-0">ADICION
            
          </h4>
        </div>

         
      </div>

      <div class="row g-12">
      

        <div class="card card-example">
          <div style="content:dfdsf" class="card-body">
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
                                  <input  name="sigla"class="form-check-input" type="radio"   id="m1">
                                  <label class="form-check-label" for="m1">  </label>
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
                              <td>
                                <div class="progress ht-5 mb-0">
                                  <div class="progress-bar w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                              </td>
                              <td><span class="ff-numerals">Presencial</span></td>
                              
                              <!-- <td><div class="d-flex justify-content-end"><a href="" class="link-more"><i class="ri-more-2-fill"></i></a></div></td> -->
                            </tr>
                            <tr>
                              <td>
                                <div class="form-check">
                                  <input  name="sigla"class="form-check-input" type="radio"   id="m1">
                                  <label class="form-check-label" for="m1">  </label>
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

      </div><!-- container -->

        
      </div><!-- row -->

     <?php include_once "footer.php" ?> 