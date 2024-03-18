document.addEventListener('DOMContentLoaded', function() {

    const signupForm = document.getElementById('signupForm');


    if (signupForm) {
     
        signupForm.addEventListener('submit', function(event) {

            event.preventDefault();

            const firstname = document.getElementById('validationServer02').value;
            const lastname = document.getElementById('validationServer01').value;
            const email = document.getElementById('exampleFormControlInput1').value;
            const password = document.getElementById('password').value;
            const passwordConfirm = document.getElementById('passwordConfirm').value

            // Affichez les valeurs dans la console à titre d'exemple
            console.log("Firstname:", firstname);
            console.log("Lastname:", lastname);
            console.log("Email:", email);
            console.log("Password:", password);
            console.log("PasswordConfirm:", passwordConfirm);

            fetch("./treitement.php", {
                method: 'POST',
                body: JSON.stringify({
                    firstname: firstname,
                    lastname: lastname,
                    email: email,
                    password: password,
                    passwordConfirm: passwordConfirm
                }),
                headers: {
                    'Content-Type': 'application/json'
                }
            }).then(response => {
                console.info("Votre inscription est validée!");
            }).catch(error => {
                console.error('Erreur lors de la soumission du formulaire:', error);
            });
        });
    }
});