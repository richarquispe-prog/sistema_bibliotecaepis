<?php

session_start();

if (!isset($_SESSION['user']) ){
	header("Location: ../");
}
include('../Model/conexion.php'); 
include('includes/menu_estudiante.php');

?>
<div class="container-fluid">
    <div id="main-containe">
        <div class="card shadow mb-4">
            <div class="container">
                <div class="card-body">
                <!-- <div class="col-md-6">
                 <img src="../resources/img/estrella.png" alt="" width="1000" height="50">
                </div> -->
                    <form class="row g-3">
                        <div class="col-md-12">
                            <label for="inputPassword4" class="form-label"><strong>Direccion de correo
                                    electronico</strong>
                            </label>
                            <!-- <input type="email" class="form-control" id="inputMail" required pattern="[a-z]{1,15}" > -->
                            <input type="email" class="form-control" name="correo" required="required" oninvalid="setCustomValidity('Díganos tu email')" oninput="setCustomValidity('')">
                        </div>
                        <div class="col-md-6">
                            <p> <strong>¿Como calificarias tu experencia general a la biblioteca?</strong> </p>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1">
                                    Totalmente satisfactoria
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Insatisfactoria
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Neutra
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault"
                                    id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2">
                                    Satisfactoria
                                </label>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <p> <strong> ¿Cuales son los 2 caracteristicas que te gusto de la biblioteca?</strong>
                            </p>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
                                <label class="form-check-label" for="flexCheckDefault">
                                    Diseño
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Funcionabilidad
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    jncnjcsc
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Otro
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"><strong>Comentario o sugerencia</strong>
                            </label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"required  ></textarea>
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                <label class="form-check-label" for="gridCheck">
                                    Terminos y condiciones
                                </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>