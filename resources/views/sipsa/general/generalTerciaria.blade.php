<div class="form_desidades col-12">
        <div class="col-12">
            <div class="container">
                <center class="mt-3">
                    <h3>Aleacion Terciaria</h3>
                </center>
                <!--        <button onclick="principalDensidad()" class="cerrar">Cerrar</button>-->
            </div>
        </div>
        <div class="container">
            <center class="mt-3">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="gris p-4 h-100">
                            <label>Seleccionar Elemento Uno:</label>
                            <select class="form-control" id="Gralelemento1" name="Gralelemento1">
                                <option value="0">Seleccionar</option>
                                <option value="8.96">Cobre</option>
                                <option value="19.32">Oro</option>
                                <option value="12.02">Paladio</option>
                                <option value="10.5">Plata</option>
                                <option value="21.45">Platino</option>
                                <option value="7.13">Zinc</option>
                            </select>
                            <label>Ingresar Milesimas:</label>
                            <input class="form-control" maxlength="3" type="text" id="Gralmm3Elemento1" name="Gralmm3Elemento1" placeholder="Ingresar Milesimas"
                                class="entrada" />
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gris p-4 h-100">
                            <label>Seleccionar Elemento Dos:</label>
                            <select class="form-control" id="Gralelemento2" name="Gralelemento2">
                                <option value="0">Seleccionar</option>
                                <option value="8.96">Cobre</option>
                                <option value="19.32">Oro</option>
                                <option value="12.02">Paladio</option>
                                <option value="10.5">Plata</option>
                                <option value="21.45">Platino</option>
                                <option value="7.13">Zinc</option>
                            </select>
                            <label>Ingresar Milesimas:</label>
                            <input class="form-control" maxlength="3" type="text" id="Gralmm3Elemento2" name="Gralmm3Elemento2" placeholder="Ingresar Milesimas"
                                class="entrada" readonly/>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="gris p-4 h-100">
                            <label>Seleccionar Elemento Tre:</label>
                            <select class="form-control" id="Gralelemento3" name="Gralelemento3">
                                <option value="0">Seleccionar</option>
                                <option value="8.96">Cobre</option>
                                <option value="19.32">Oro</option>
                                <option value="12.02">Paladio</option>
                                <option value="10.5">Plata</option>
                                <option value="21.45">Platino</option>
                                <option value="7.13">Zinc</option>
                            </select>
                            <label>Ingresar Milesimas:</label>
                            <input class="form-control" type="text" id="Gralmm3Elemento3" name="Gralmm3Elemento3" placeholder="Ingresar Milesimas" class="entrada"
                                readonly="readonly" />
                        </div>
                    </div>
                </div>
            </center>
        </div>
        <script src="{{ asset('js/autoCompletInputs.js') }}" type="text/javascript"></script>
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="row">
                    </div>
                </div>
            </div>
            <div class="container">
                <center class="mt-3">
                    <div class="row">
                        <div class="col-md-12 col-lg-6 row">
                            <div class="col-md-6">
                                <center class="mt-3">
                                    <h3>Cilindro</h3>
                                </center>
                            </div>
                            <div class="col-lg-12">
                                <div class="gris p-4 h-100">
                                    <label>Diametro Interno del Cilindro:</label>
                                    <input class="form-control" maxlength="6" type="text" id="Graldiametro3" name="Graldiametro3" placeholder="Cm" class="entrada"
                                    />
                                    </br>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="gris p-4 h-100">
                                    <label>Altura del Yeso en el Cilindro:</label>
                                    <input class="form-control" maxlength="4" type="text" id="Gralaltura3" name="Gralaltura3" placeholder="Cm" class="entrada"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-6 row">
                            <div class="col-md-6">
                                <center class="mt-3">
                                    <h3>Cera</h3>
                                </center>
                            </div>
                            <div class="col-lg-12">
                                <div class="gris p-4 h-100">
                                    <label>Peso de la Cera en Gramos:</label>
                                    <input class="form-control" maxlength="6" type="text" id="Gralcera3" name="Gralcera3" placeholder="Gramos" class="entrada"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-12 mt-3">
                                <div class="gris p-4 h-100">
                                    <label>Porcentaje de Empuje:</label>
                                    <input class="form-control" maxlength="3" type="text" id="Gralempuje3" name="Gralempuje3" placeholder="10% a 30%" class="entrada"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
        <center class="mt-3">
            <span id="erroResultado" class="error"></span>
        </center>
        <center class="mt-3">
            <input class="btn btn-secondary" type="button" onclick="gralTerciaria()" value="Simular" class="btn-calcular" />
        </center>
        <div class="col-lg-12">
            <center class="mt-3">
                <h3>RESULTADOS</h3>
            </center>
        </div>
        <div class="container">
            <center class="mt-3">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="gris p-4 h-100">
                            <label>Peso Primer Elemento: </label>
                            <input class="form-control" type="text" id="resPrimer_Gralelemento3" name="resPrimer_Gralelemento3" placeholder="Primer Elemento"
                                class="entrada" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="gris p-4 h-100">
                            <label>Peso Segundo Elemento: </label>
                            <input class="form-control" type="text" id="resSegundo_Gralelemento3" name="resSegundo_Gralelemento3" placeholder="Segundo Elemento"
                                class="entrada" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="gris p-4 h-100">
                            <label>Peso Tercer Elemento: </label>
                            <input class="form-control" type="text" id="resTercer_Gralelemento3" name="resTercer_Gralelemento3" placeholder="Tercer Elemento"
                                class="entrada" />
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="gris p-4 h-100">
                            <label>Cantidad de yeso:</label>
                            <input class="form-control" type="text" id="resultado_Gralyeso3" name="resultado_Gralyeso3" placeholder="Polvo de Yeso" readonly="true"
                                class="entrada" />
                        </div>
                    </div>
                    <div class="container mt-3">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="gris p-4 h-100">
                                    <label>Cantidad de agua:</label>
                                    <input class="form-control" type="text" id="resultado_Gralagua3" name="resultado_Gralagua3" placeholder="Agua" readonly="true"
                                        class="entrada" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gris p-4 h-100">
                                    <label>Peso Total: </label>
                                    <input class="form-control" type="text" id="resGralPeso_aleacion3" name="resGralPeso_aleacion2" placeholder="Peso en gramos"
                                        class="entrada" />
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="gris p-4 h-100">
                                    <label>Densidad Total: </label>
                                    <input class="form-control" type="text" id="resGralDensidad_aleacion3" name="resGralDensidad_aleacion3" placeholder="Densidad de la Aleacion"
                                        class="entrada" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </center>
        </div>
    </div>