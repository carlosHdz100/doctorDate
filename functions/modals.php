<div class="modal fade text-left" id="paciente" tabindex="-1" aria-labelledby="myModalLabel33" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel33">Login Form </h4>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                        <line x1="18" y1="6" x2="6" y2="18"></line>
                        <line x1="6" y1="6" x2="18" y2="18"></line>
                    </svg>
                </button>
            </div>
            <form action="#" class="form" data-parsley-validate>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group mandatory">
                                <label for="first-name-column" class="form-label">Nombre</label>
                                <input type="text" id="first-name-column" class="form-control" placeholder="Ingrese su nombre" name="nombre" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="last-name-column" class="form-label">Apellidos</label>
                                <input type="text" id="last-name-column" class="form-control" placeholder="Ingrese sus apellidos" name="apellido" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="city-column" class="form-label">City</label>
                                <input type="text" id="city-column" class="form-control" placeholder="Custom validation. Value has to be Jakarta." name="city-column" data-parsley-restricted-city="Jakarta" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating" class="form-label">Country</label>
                                <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating" class="form-label">Country</label>
                                <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" data-parsley-required="true" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="country-floating" class="form-label">Country</label>
                                <input type="text" id="country-floating" class="form-control" name="country-floating" placeholder="Country" data-parsley-required="true" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                        <i class="bx bx-x d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Cerrar</span>
                    </button>
                    <button type="submit" class="btn btn-primary ml-1">
                        <i class="bx bx-check d-block d-sm-none"></i>
                        <span class="d-none d-sm-block">Guardar cambios</span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>