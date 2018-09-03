<div class="form_desidades col-12">
        <div class="col-12">
            <div class="container">
                <h3>Aleacion Binaria</h3>
            </div>
        </div>
        <div class="container">
            <div class="container">
                <center>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="gris m-4 p-3">
                                <label>Seleccionar Elemento Uno:</label>
                                <select class="form-control" id="Gralprimer_elemento" name="Gralsegundo_elemento">
                                    <option value="0">Seleccionar</option>
                                    <option value="8.96">Cobre</option>
                                    <option value="19.32">Oro</option>
                                    <option value="12.02">Paladio</option>
                                    <option value="10.5">Plata</option>
                                    <option value="21.45">Platino</option>
                                    <option value="7.13">Zinc</option>
                                </select>
                                <label>Ingresar Milesimas:</label>
                                <input class="form-control" maxlength="3" type="text" id="GralmmElemento1" name="Gralsegundo_elemento" placeholder="Ingresar Milesimas"
                                    class="entrada" />
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="gris m-4 p-3">
                                <label>Seleccionar Elemento Dos:</label>
                                <select class="form-control" id="Gralsegundo_elemento" name="Gralsegundo_elemento">
                                    <option value="0">Seleccionar</option>
                                    <option value="8.96">Cobre</option>
                                    <option value="19.32">Oro</option>
                                    <option value="12.02">Paladio</option>
                                    <option value="10.5">Plata</option>
                                    <option value="21.45">Platino</option>
                                    <option value="7.13">Zinc</option>
                                </select>
                                <label>Milesimas del segundo elemento:</label>
                                    <input class="form-control" type="text" id="GralmmElemento2" name="GralmmElemento2" placeholder="Ingresar Milesimas" class="entrada"
                                        readonly="readonly" />
                            </div>
                        </div>
                </center>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6">
                    <div class="col-12">
                        <center>
                            <h3>Cilindro</h3>
                        </center>
                    </div>
                    <div class="col-md-12">
                        <div class="gris m-4 p-3 p-4">
                            <label>Diametro Interno del Cilindro:</label>
                            <input class="form-control" maxlength="6" type="text" id="Graldiametro2" name="Graldiametro2" placeholder="Cm" class="entrada"
                            />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="gris m-4 p-3 p-4">
                            <label>Peso Total de la Cera en Gramos:</label>
                            <input class="form-control" maxlength="6" type="text" id="Gralcera2" name="Gralcera2" placeholder="Gramos" class="entrada"
                            />
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="col-12">
                        <center>
                            <h3>Cera</h3>
                        </center>
                    </div>
                    <div class="col-md-12">
                        <div class="gris m-4 p-3 p-4">
                            <label>Altura del Yeso en el Cindro:</label>
                            <input class="form-control" maxlength="4" type="text" id="Gralaltura2" name="Gralaltura2" placeholder="Cm" class="entrada"
                            />
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="gris m-4 p-3 p-4">
                            <label>Porcentaje de Empuje:</label>
                            <input class="form-control" maxlength="3" type="text" id="Gralempuje2" name="Gralempuje2" placeholder="10% a 30%" class="entrada"
                            />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <center class="mt-4">
            <input class="btn btn-secondary" type="button" onclick="gralBinaria()" value="Simular" class="btn-calcular" />
        </center>
    
        <center class="mt-4">
            <h3>RESULTADOS</h3>
        </center>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="p-4 gris m-4 p-3">
                        <label>Peso Primer Elemento: </label>
                        <input class="form-control" type="text" id="resPrimer_Gralelemento" name="resPrimer_Gralelemento" placeholder="Primer Elemento"
                            class="entrada" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="p-4 gris m-4 p-3">
                        <label>Peso Segundo Elemento: </label>
                        <input class="form-control" type="text" id="resSegundo_Gralelemento" name="resSegundo_Gralelemento" placeholder="Segundo Elemento"
                            class="entrada" />
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class=" gris m-4 p-3 p-4">
                        <label>Cantidad de yeso:</label>
                        <input class="form-control" type="text" id="resultado_Gralyeso2" name="resultado_Gralyeso2" placeholder="Polvo de Yeso" readonly="true"
                            class="entrada" />
                    </div>
                </div>
                <div class="container m-4 p-3">
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="gris p-4 ">
                                    <label>Cantidad de agua:</label>
                                    <input class="form-control" type="text" id="resultado_Gralagua2" name="resultado_Gralagua2" placeholder="Agua" readonly="true"
                                        class="entrada" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gris p-4">
                                    <label>Peso Total: </label>
                                    <input class="form-control" type="text" id="resGralPeso_elemento2" name="resGralPeso_elemento2" placeholder="Peso en gramos"
                                        class="entrada" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gris p-4">
                                    <label>Densidad Total: </label>
                                    <input class="form-control" type="text" id="resGralDensidad_elemento2" name="resGralDensidad_elemento2" placeholder="Densidad del Elemento"
                                        class="entrada" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="{{ asset('js/autoCompletInputs.js') }}" type="text/javascript"></script>
    