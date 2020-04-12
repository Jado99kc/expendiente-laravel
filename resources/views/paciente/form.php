<form>
    <button type="submit" id="btnGuardarP" class="btn btn-outline-primary" >Guardar</button>
            <div class="tab-pane" role="tabpanel" id="datosSeguro">
            <div class="defaultMargin">
                <div class="container">
                    <div class="form-row">
                        <div class="col">
                            <label for="seguroMedico">Cuenta con seguro medico</label>
                            <select class="form-control" id="seguroMedico" name="seguroMedico">
                                <option value="">Si</option>
                                <option value="">No</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="seguroMedico">Cuenta con seguro medico</label>
                            <select class="form-control" id="seguroMedico" name="seguroMedico">
                                <option>Si</option>
                                <option>No</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="programaAfiliacion">Programa de afiliacion </label>
                            <select class="form-control" id="programaAfiliacion" name="programaAfiliacion">
                                <option>No seleccionado</option>
                                <option>Privado</option>
                                <option>Publico</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="nombreSeguro">Nombre del seguro </label>
                            <select class="form-control" id="nombreSeguro" name="nombreSeguro">
                                <option>Banorte</option>
                                <option>IMSS</option>
                                <option>ISSTE</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="otroSeguro">Seguro no incluido en la lista</label>
                            <input type="text" name="otroSeguro" id="otroSeguro" class="form-control">
                        </div>


                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="fechaInicio">Fecha de inicio</label>
                            <input type="date" name="fechaInicio" id="fechaInicio" class="form-control">
                        </div>
                        <div class="col">
                            <label for="fechaVigencia">Fecha de vigencia</label>
                            <input type="date" name="fechaVigencia" id="fechaVigencia" class="form-control">
                        </div>
                        <div class="col">
                            <label for="numeroPoliza">Numero de poliza</label>
                            <input type="text" name="numeroPoliza" id="numeroPoliza" class="form-control">
                        </div>
                        <div class="col">
                            <label for="folioAsegurado">Folio de asegurado</label>
                            <input type="text" name="folioAsegurado" id="folioAsegurado" class="form-control">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="numeroTitular">Nombre del Titular</label>
                            <input type="text" name="numeroTitular" id="numeroTitular" class="form-control">
                        </div>
                        <div class="col">
                            <label for="tipoBeneficiario">Tipo de beneficiario</label>
                            <select class="form-control" id="tipoBeneficiario">
                                <option>No seleccionado</option>
                                <option>Trabajador/Asegurado</option>
                                <option>Beneficiario del seguro popular</option>
                                <option>Familiar</option>
                                <option>Pensionado</option>
                                <option>Poblacion Abierta</option>
                            </select>
                        </div>
                        <div class="col">
                            <label for="importeSuma">Importe de la suma asegurada</label>
                            <input type="text" name="importeSuma" id="importeSuma" class="form-control">
                        </div>
                        <div class="col">
                            <label for="notasAdicionales">Notas adicionales</label>
                            <input type="text" name="notasAdicionales" id="notasAdicionales" class="form-control">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="tab-pane" role="tabpanel" id="datosDomicilio">
            <div class="defaultMargin">
                <div class="container">
                    <div class="form-row">
                        <div class="col">
                            <label for="vialidad">Vialidad</label>
                            <input type="text" name="vialidad" id="vialidad" class="form-control">
                        </div>
                        <div class="col form-row">
                            <div class="col-6">
                                <label for="nInterior">No. Interior</label>
                                <input type="text" name="nInterior" id="nInterior" class="form-control">
                            </div>

                            <div class="col-6">
                                <label for="nexterior">No. Exterior</label>
                                <input type="text" name="nexterior" id="nExterior" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <label for="colonia">Colonia</label>
                            <input type="text" name="colonia" id="colonia" class="form-control">
                        </div>
                        <div class="col">
                            <label for="localidad">localidad</label>
                            <input type="text" name="localidad" id="localidad" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="municipio">Municipio</label>
                            <input type="text" name="municipio" id="municipio" class="form-control">
                        </div>
                        <div class="col">
                            <label for="eFederativa">Entidad Federativa</label>
                            <input type="text" name="eFederativa" id="eFederativa" class="form-control">
                        </div>
                        <div class="col">
                            <label for="codigoPostal">Codigo postal</label>
                            <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
                        </div>
                        <div class="col">
                            <label for="pais">Pais</label>
                            <input type="text" name="pais" id="pais" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="tPrincipal">Telefono Principal</label>
                            <input type="text" name="tPrincipal" id="tPrincipal" class="form-control">
                        </div>
                        <div class="col">
                            <label for="tSecundario">Telefono Secundario</label>
                            <input type="text" name="tSecundario" id="tSecundario" class="form-control">
                        </div>
                        <div class="col">
                            <label for="celular">Celular</label>
                            <input type="text" name="celular" id="celular" class="form-control">
                        </div>
                        <div class="col">
                            <label for="correo">Correo electronico</label>
                            <input type="email" name="correo" id="correo" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="datosResponsable">
            <div class="defaultMargin">
                <div class="container">
                    <div class="form-row">
                        <div class="col">
                            <label for="nombres">Nombres</label>
                            <input type="text" name="nombres" id="nombres" class="form-control">
                        </div>
                        <div class="col">
                            <label for="aPaterno">Apellido Paterno</label>
                            <input type="text" name="aPaterno" id="aPaterno" class="form-control">
                        </div>
                        <div class="col">
                            <label for="aMaterno">Apellido Materno</label>
                            <input type="text" name="aMaterno" id="aMaterno" class="form-control">
                        </div>
                        <div class="col">
                            <label for="vinculo">Vinculo con el paciente</label>
                            <select class="form-control" id="vinculo">
                                <option>Padre</option>
                                <option>Madre</option>
                                <option>Tio/a</option>
                                <option>Hijo/a</option>
                                <option>Hermano/a</option>
                                <option>Abuelo/a</option>
                                <option>Nieto/a</option>
                                <option>Esposo/a</option>
                                <option>Vecino</option>
                            </select>
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="vialidad">Vialidad</label>
                            <input type="text" name="vialidad" id="vialidad" class="form-control">
                        </div>
                        <div class="col form-row">
                            <div class="col-6">
                                <label for="nInterior">No. Interior</label>
                                <input type="text" name="nInterior" id="nInterior" class="form-control">
                            </div>

                            <div class="col-6">
                                <label for="nexterior">No. Exterior</label>
                                <input type="text" name="nexterior" id="nExterior" class="form-control">
                            </div>
                        </div>
                        <div class="col">
                            <label for="colonia">Colonia</label>
                            <input type="text" name="colonia" id="colonia" class="form-control">
                        </div>
                        <div class="col">
                            <label for="localidad">localidad</label>
                            <input type="text" name="localidad" id="localidad" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="municipio">Municipio</label>
                            <input type="text" name="municipio" id="municipio" class="form-control">
                        </div>
                        <div class="col">
                            <label for="eFederativa">Entidad Federativa</label>
                            <input type="text" name="eFederativa" id="eFederativa" class="form-control">
                        </div>
                        <div class="col">
                            <label for="codigoPostal">Codigo postal</label>
                            <input type="text" name="codigoPostal" id="codigoPostal" class="form-control">
                        </div>
                        <div class="col">
                            <label for="pais">Pais</label>
                            <input type="text" name="pais" id="pais" class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <label for="tPrincipal">Telefono Principal</label>
                            <input type="text" name="tPrincipal" id="tPrincipal" class="form-control">
                        </div>
                        <div class="col">
                            <label for="tSecundario">Telefono Secundario</label>
                            <input type="text" name="tSecundario" id="tSecundario" class="form-control">
                        </div>
                        <div class="col">
                            <label for="celular">Celular</label>
                            <input type="text" name="celular" id="celular" class="form-control">
                        </div>
                        <div class="col">
                            <label for="correo">Correo electronico</label>
                            <input type="email" name="correo" id="correo" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane" role="tabpanel" id="datosFacturacion">
            <div class="defaultMargin">
                <div class="container">
                    <div class="form-group">
                        <label for="rfc">RFC</label>
                        <input type="text" name="rfc" id="rfc" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="denominacion">Nombre, denominacion o razon social</label>
                        <input type="text" name="denominacion" id="denominacion" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="correoFactura">correo para enviar factura</label>
                        <input type="text" name="correoFactura" id="correoFactura" class="form-control">
                    </div>

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Anotaciones generales</span>
                        </div>
                        <textarea name="anotaciones" id="anotaciones" class="form-control"
                                  aria-label="With textarea"></textarea>
                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
