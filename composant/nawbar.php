<nav class="navbar navbar-expand-lg" style="background-color: cyan;" id="nawbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img src="./assets/images/task.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      TO DO LISTS!!!</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

      <ul class="navbar-nav ms-auto gap-2" id="nawbarList">
        <li class="nav-item">
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#signup" data-bs-whatever="@mdo">Signup</button>
          <div class="modal fade" id="signup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="color: black;">
              <div class="modal-content">
                <div class="modal-header" style="background-color: cyan;">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Registration!</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body" id="signupForm">

                  <form id="inscription">

                    <div class="mb-3">
                      <label for="firstname" class="form-label"></label>
                      <input type="text" class="form-control" id="firstname" placeholder="firstname" min="3" max="50" required">
                    </div>

                    <div class="mb-3">
                      <label for="lastname" class="form-label"></label>
                      <input type="text" class="form-control" id="lastname" placeholder="lastname" min="3" max="50" required">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label"></label>
                      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com" min="3" max="80" required>
                    </div>

                    <div class="mb-3">
                      <label for="password" class="col-form-label"></label>
                      <input type="password" class="form-control" id="password" placeholder="Password" min="7" required>
                    </div>

                    <div class="mb-3">
                      <label for="password" class="col-form-label"></label>
                      <input type="password" class="form-control" id="passwordConfirm" placeholder="Confirm Password" min="7" required>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-success" id="signupSubmitButton">Submit!</button>
                      <!--  onclick si addevenlistenr ne fonctione pas -->
                    </div>

                    <p id="erreur"></p>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </li>


        <li class="nav-item">
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#signin" data-bs-whatever="@mdo">Login</button>
          <div class="modal fade" id="signin" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" style="color: black">
              <div class="modal-content" id>
                <div class="modal-header" style="background-color: cyan;">
                  <h1 class="modal-title fs-5" id="exampleModalLabel">Login!</h1>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="signinForm">
                  <form>

                    <div class="mb-3">
                      <label for="exampleFormControlInput2" class="form-label"></label>
                      <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="name@example.com" min="3" max="80" required>
                    </div>

                    <div class="mb-3">
                      <label for="password" class="col-form-label"></label>
                      <input type="password" class="form-control" id="password1" placeholder="Password" min="7" required>
                    </div>

                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-success" id="signinButton">Login</button>
                    </div>

                  </form>
                </div>
              </div>
            </div>
          </div>
        </li>


        <li class="nav-item">
          <button type="button" class="btn btn-warning" id="deconnexion">Logout</button>
        </li>

      </ul>
    </div>
  </div>
</nav>