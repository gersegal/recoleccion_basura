<div class="section is-medium">
        <div class="container">
            <!--Title-->
            <div class="section-title has-text-centered">
                <h2 class="title is-spaced">¿Que quieres reciclar hoy?</h2>
                <h3 class="subtitle">
                    Recuerda que unicamente recogemos un kilo por material sin mezclar. 
                </h3>
            </div>

            <!--Form subsection-->
            <div class="content-wrapper has-margin-bottom">
                <div class="columns is-vcentered form-wrapper">
                    <div class="column is-8 is-offset-2">
                        <!--Form-->
                        <div class="contact-form-2">
                            <form method="post" action="">
                            <div class="control-material is-primary">
                                    <input name="email" class="material-input" type="text" required />
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Email</label>
                                </div>
                                <div class="control-material is-primary">
                                    <input name="no_depto" class="material-input" type="text" required />
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>No. Depto</label>
                                </div>
                                <div class="control-material is-primary select">
                                    <select name="basura_reciclar" id="">
                                        <option value="0">Basura a reciclar</option>
                                        <option value="Aluminio">Aluminio</option>
                                        <option value="PET">PET</option>
                                        <option value="Carton">Cartón</option>
                                    </select>
                                </div>
                                <div class="control-material is-primary">
                                    <input name="kilos" class="material-input" type="number" required />
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Kilos</label>
                                </div>
                                <div class="control-material is-primary">
                                    <input name="fecha_recoleccion" class="material-input" type="text" required />
                                    <span class="material-highlight"></span>
                                    <span class="bar"></span>
                                    <label>Fecha de recoleccion</label>
                                </div>
                                <div class="button-wrap">
                                    <button name="agregar_record" type="submit" class="button cta-button primary-btn is-fullwidth is-rounded">
                                        Reciclar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>