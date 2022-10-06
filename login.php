<div class="container" style="text-align: center; margin-bottom: 45px;">
    <img src="img/brands/logo.png" alt="" style="width: 30%; margin:0 auto; " />
</div>

<div class="container-sm">
    <!-- Pills navs -->
    <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab" aria-controls="pills-login" aria-selected="true">Login</a>
        </li>
        <li class="nav-item" role="presentation">
            <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab" aria-controls="pills-register" aria-selected="false">Inscreva-se</a>
        </li>
    </ul>
    <!-- Pills navs -->

    <!-- Pills content -->
    <div class="tab-content">
        <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
            <form>
                <div class="text-center mb-3">
                    <p>Entrar Com:</p>
                    <button type="button" class="btn btn-primary-login btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-primary-login btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-primary-login btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-primary-login btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>

                <p class="text-center">ou:</p>

                <!-- Email input -->
                <p>E-mail ou usuário:</p>
                <div class="form-outline mb-4">
                    <input type="email" id="loginName" class="form-control" />
                </div>
                <p>Senha:</p>
                <!-- Password input -->
                <div class="form-outline mb-4">
                    <input type="password" id="loginPassword" class="form-control" />

                </div>

                <!-- 2 column grid layout -->
                <div class="row mb-4">
                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                            <label class="form-check-label" for="loginCheck">Mantenha-me Conectado</label>
                        </div>
                    </div>

                    <div class="col-md-6 d-flex justify-content-center">
                        <!-- Simple link -->
                        <a class="a" href="#!">Esqueceu a senha?</a>
                    </div>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary-login btn-block mb-4">Entrar</button>

                <!-- Register buttons -->
                <div class="text-center">
                    <p>Não é membro? <a class="a" href="#!">Registrar-se</a></p>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
            <form>
                <div class="text-center mb-3">
                    <p>Inscreva-se com:</p>
                    <button type="button" class="btn btn-primary-login btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                    </button>

                    <button type="button" class="btn btn-primary-login btn-floating mx-1">
                        <i class="fab fa-google"></i>
                    </button>

                    <button type="button" class="btn btn-primary-login btn-floating mx-1">
                        <i class="fab fa-twitter"></i>
                    </button>

                    <button type="button" class="btn btn-primary-login btn-floating mx-1">
                        <i class="fab fa-github"></i>
                    </button>
                </div>

                <p class="text-center">ou:</p>

                <!-- Name input -->
                <p>Nome:</p>
                <div class="form-outline mb-4">
                    <input type="text" id="registerName" class="form-control" />
                    <!-- <label class="form-label" for="registerName">Name</label>-->
                </div>

                <!-- Username input -->
                <p>Username:</p>
                <div class="form-outline mb-4">
                    <input type="text" id="registerUsername" class="form-control" />
                </div>

                <!-- Email input -->
                <p>E-mail:</p>
                <div class="form-outline mb-4">
                    <input type="email" id="registerEmail" class="form-control" />
                </div>

                <!-- Password input -->
                <p>Senha:</p>
                <div class="form-outline mb-4">
                    <input type="password" id="registerPassword" class="form-control" />
                </div>

                <!-- Repeat Password input -->
                <p>Repetir senha:</p>
                <div class="form-outline mb-4">
                    <input type="password" id="registerRepeatPassword" class="form-control" />
                </div>

                <!-- Checkbox -->
                <div class="form-check d-flex justify-content-center mb-4">
                    <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                    <label class="form-check-label" for="registerCheck">
                        Eu li e concordo com os termos
                    </label>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary-login btn-block mb-3">Registrar</button>
            </form>
        </div>
    </div>
    <!-- Pills content -->
</div>