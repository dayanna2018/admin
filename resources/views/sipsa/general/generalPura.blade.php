<div class="form_desidades col-12">
        <div class="container">
            <div class="container">
                <div class="container">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5">
                                <h3>Aleacion Pura</h3>
                            </div>
                            <div class="col-md-2">
                            </div>
                            <div class="col-md-5">
                                <h3>Cilindro</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <center class="mt-4">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="m-2 gris p-4 w-100 h-100">
                                    <label>Seleccionar Elemento:</label>
                                    <select class="form-control" id="elementoGral_puro" name="elementoGral_puro">
                                        <option value="0">Seleccionar</option>
                                        <option value="8.96">Cobre</option>
                                        <option value="19.32">Oro</option>
                                        <option value="12.02">Paladio</option>
                                        <option value="10.5">Plata</option>
                                        <option value="21.45">Platino</option>
                                        <option value="7.13">Zinc</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-1">
                            </div>
                            <div class="col-md-4">
                                <div class="m-2 gris p-4 w-100 h-100">
                                    <label>Diametro Interno del Cilindro:</label>
                                    <label>
                                        <input class="form-control" maxlength="6" type="text" id="Graldiametro" name="Graldiametro" placeholder="Cm" class="entrada"
                                        />
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="m-2 gris p-4 w-100 h-100">
                                    <label>Altura del Yeso en el Cilindro:</label>
                                    <label>
                                        <input class="form-control" maxlength="4" type="text" id="Gralaltura" name="Gralaltura" placeholder="Cm" class="entrada"
                                        />
                                    </label>
                                </div>
                            </div>
                        </div>
                    </center>
                </div>
            </div>
            <div class="container">
                <center class="mt-4">
                    <div class="col-lg-4">
                        <h3>Cera</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-4">
                            <div class="m-2 gris p-4 w-100 h-100">
                                <label>Peso de la Cera en Gramos:</label>
                                <label>
                                    <input class="form-control" maxlength="6" type="text" id="Gralcera" name="Gralcera" placeholder="Gramos" class="entrada"
                                    />
                                </label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="m-2 gris p-4 w-100 h-100">
                                <label>Porcentaje de Empuje:</label>
                                <label>
                                    <input class="form-control" maxlength="3" type="text" id="Gralempuje" name="Gralempuje" placeholder="10% a 30%" class="entrada"
                                    />
                                </label>
                            </div>
                        </div>
                        <div class="col-md-2">
                        </div>
                    </div>
                </center>
            </div>
            <center class="mt-4">
                <input class="btn btn-secondary" type="button" onclick="gralPura()" value="Simular" class="btn-calcular" />
            </center>
            <center class="mt-4">
                <h3>RESULTADOS</h3>
            </center>
            <div class="container">
                <center class="mt-4">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="m-2 gris p-4 w-100 h-100">
                                <label>Cantidad de yeso:</label>
                                <label>
                                    <input class="form-control" type="text" id="resultado_Gralyeso" name="resultado_Gralyeso" placeholder="Polvo de Yeso" readonly="true"
                                        class="entrada" />
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="m-2 gris p-4 w-100 h-100">
                                <label>Cantidad de agua:</label>
                                <label>
                                    <input class="form-control" type="text" id="resultado_Gralagua" name="resultado_Gralagua" placeholder="Agua" readonly="true"
                                        class="entrada" />
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="m-2 gris p-4 w-100 h-100">
                                <label>Peso Total: </label>
                                <label>
                                    <input class="form-control" type="text" id="resGralPeso_elemento" name="resGralPeso_elemento" placeholder="Peso en gramos"
                                        class="entrada" readonly="true"/>
                                </label>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="m-2 gris p-4 w-100 h-100">
                                <label>Densidad Total: </label>
                                <label>
                                    <input class="form-control" type="text" id="resGralDensidad_elemento" name="resGralDensidad_elemento" placeholder="Densidad del Elemento"
                                        class="entrada" readonly="true"/>
                                </label>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </div>