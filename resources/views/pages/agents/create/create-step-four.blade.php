            {{-- {{dd(\Session::all())}} --}}
            @extends('pages.agents.create.layout')
            @section('tab')
                                    <!-- form start -->
                <form id="regForm" role="form" action="{{route('agent.postStepFour')}}" method="post">
                @csrf
                  <!-- /.box-header -->
                  <div class="box-body">
                    <div class="box-group" id="accordion">
                      <!-- One "tab" for each step in the form: -->

                      </div>
                      <div class="tab">
                        <div class="box-header with-border">
                          <h4 class="box-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
                              Emploi et qualification  #4
                            </a>
                          </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse">
                          <div class="box-body">
                            <div class="col-md-6">
                              <div class="form-group @error('typecontrat')  has-error @enderror">
                                <label>Type de Contrat</label>
                                <select class="form-control" name="typecontrat">
                                  <option value="">Choisir le contrat</option>
                                  <option value="cdi" {{old('typecontrat')=='cdi' ? 'selected' : null}}>CDI</option>
                                  <option value="cdd" {{old('typecontrat')=='cdd' ? 'selected' : null}}>CDD</option>
                                  <option value="interim" {{old('typecontrat')=='interim' ? 'selected' : null}}>Intérim</option>
                                  <option value="essai" {{old('typecontrat')=='essai' ? 'selected' : null}}>Essai</option>
                                </select>
                                @error('typecontrat')
                                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{$message}}</label>
                                @enderror
                              </div>
                              <!-- checkbox -->
                              <div class="form-group">
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="ads" checked>
                                    ADS
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="maitrechien" checked="">
                                    Maitre chien
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="ssiap1">
                                    SSIAP1
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="ssiap2">
                                    SSIAP2
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="chefequipe">
                                    Chef d'équipe
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="superviseur">
                                    Supperviseur
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="commercial">
                                    Commercial
                                  </label>
                                </div>
                                <div class="checkbox">
                                  <label>
                                    <input type="checkbox" name="agentcontrole">
                                    Agent de contôle
                                  </label>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group @error('dureeducontrat')  has-error @enderror" id="div_dureeducontrat" style="display: none;">
                                <label>Durée du Contrat</label>
                                <select class="form-control" name="dureeducontrat">
                                  <option value="">Choisir la durée</option>
                                  <option value="3mois" {{old('dureeducontrat')=='3mois' ? 'selected' : null}}>3 Mois</option>
                                  <option value="6mois" {{old('dureeducontrat')=='6mois' ? 'selected' : null}}>6 Mois</option>
                                  <option value="1ans" {{old('dureeducontrat')=='1ans' ? 'selected' : null}}>1 ans</option>
                                  <option value="2ans" {{old('dureeducontrat')=='2ans' ? 'selected' : null}}>2 ans</option>
                                </select>
                                @error('dureeducontrat')
                                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{$message}}</label>
                                @enderror
                              </div>
                              <div class="form-group @error('numeroads')  has-error @enderror" id="div_numeroads">
                                <label>Numéro ADS</label>
                                <input name="numeroads" type="text" class="form-control"  placeholder="Entrer le numéro ADS" value="{{old('numeroads') ?: ''}}">
                                @error('numeroads')
                                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{$message}}</label>
                                @enderror
                              </div>
                              <div class="form-group @error('nomchien')  has-error @enderror" id="div_nomchien">
                                <label>Nom du chien</label>
                                <input name="nomchien" type="text" class="form-control"  placeholder="Entrer le nom du chien" value="{{old('nomchien') ?: ''}}">
                                @error('nomchien')
                                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{$message}}</label>
                                @enderror
                              </div>
                              <div class="form-group @error('datevaliditevaccin')  has-error @enderror" id="div_datevaliditevaccin">
                                <label>Date de validité du vaccin</label>
                                <div class="input-group date">
                                  <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                  </div>
                                  <input type="date" name="datevaliditevaccin" class="form-control pull-right" id="datepicker" value="{{old('datevaliditevaccin') ?: ''}}">
                                </div>
                                <!-- /.input group -->
                                @error('datevaliditevaccin')
                                    <label class="control-label" for="inputError"><i class="fa fa-times-circle-o"></i> {{$message}}</label>
                                @enderror
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>




                      <div style="overflow:auto;margin-right: 26px">
                        <div style="float:right;">
                          <a href="{{route('agent.createStepThree')}}"  class="btn btn-flat btn-primary" id="prevBtn"{{--  onclick="nextPrev(-1)" --}}>Précédent</a>
                          <button type="submit"  class="btn btn-flat btn-primary" id="nextBtn"{{--  onclick="nextPrev(1)" --}}>Submit</button>
                        </div>
                      </div>

                      <div style="text-align:center;margin-top:40px;">
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                        <span class="step"></span>
                      </div>
                    <!-- /.box-body -->
                    </div>
                  </div>
                  <!-- /.box-body -->
                </form>
              @endsection