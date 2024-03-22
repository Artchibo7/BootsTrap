<?php
?>

<div class="modal-body">

    <form id="myAccount" method="POST">

        <div class="mb-3">
            <label for="firstname" class="form-label"></label>
            <input type="text" class="form-control" disabled name="firstname" id="firstname" placeholder="<?php
            $loggedInUserID = $_SESSION['user'];
            $users = $userRepository->getAll();
            foreach ($users as $user) {
                if ($user->getUserID() == $loggedInUserID) {
                    echo   $user->getFirstname();
                }
            }
            ?>" min="3" max="50" required">
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label"></label>
            <input type="text" class="form-control" disabled name="lastname" id="lastname" placeholder="<?php
            $loggedInUserID = $_SESSION['user'];
            $users = $userRepository->getAll();
            foreach ($users as $user) {
                if ($user->getUserID() == $loggedInUserID) {
                    echo   $user->getLastname();
                }
            }
            ?>" min="3" max="50" required">
        </div>

        <div class="mb-3">
            <label for="email" class="form-label"></label>
            <input type="email" class="form-control" name="email" id="email" placeholder="<?php
            $loggedInUserID = $_SESSION['user'];
            $users = $userRepository->getAll();
            foreach ($users as $user) {
                if ($user->getUserID() == $loggedInUserID) {
                    echo   $user->getEmail();
                }
            }
            ?>" min="3" max="80" required disabled>
        </div>

        <div class="mb-3">
            <label for="password" class="col-form-label"></label>
            <input type="password" disabled name="password" class="form-control" id="password" placeholder="**********" min="7" required>
        </div>
<form  method="POST">
    <div class="modal-footer">
        <input type="" name="userID" id="userIDInput" value="<?php echo $_SESSION['user']; ?>">
        <button type="submit" class="btn btn-danger" id="deleteAccount">Delete my account!</button>
    </div>
</form>