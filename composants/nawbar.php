<?php
?>
<nav class="navbar navbar-expand-lg" style="background-color: cyan;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="./images/task.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      LISTES DE TACHES!!!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto gap-2">
        <li class="nav-item">
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#signup" data-bs-whatever="@mdo">Sign up!</button>
          <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Sign up</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="mb-3">
                      <label for="validationServer02" class="form-label"></label>
                      <input type="text" class="form-control" id="validationServer02" placeholder="firstname" min="3" max="50"  required">
                    </div>
                    <div class="mb-3">
                      <label for="validationServer01" class="form-label"></label>
                      <input type="text" class="form-control" id="validationServer01" placeholder="lastname" min="3" max="50" required">
                    </div>
                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"></label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" min="3" max="80" required>
                    </div>
                    <div class="mb-3">
                      <label for="password" class="col-form-label"></label>
                      <input type="password" class="form-control" id="password" placeholder="Password" min="7" required>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Submit!</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </li>


        <li class="nav-item">
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#connexion" data-bs-whatever="@mdo">Connexion!</button>
          <div class="modal fade" id="connexion" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Connexion</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-floating mb-3">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                      <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                      <label for="floatingPassword">Password</label>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Connexion</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </li>


        <li class="nav-item">
          <button type="button" class="btn btn-warning">Deconnexion</button>
        </li>
      </ul>
    </div>
  </div>
</nav>