 function signup(){

     
        signup.addEventListener('submit', function(event) {

            event.preventDefault();

            const firstname = document.getElementById('validationServer02').value;
            const lastname = document.getElementById('validationServer01').value;
            const email = document.getElementById('exampleFormControlInput1').value;
            const password = document.getElementById('password').value;
            const passwordConfirm = document.getElementById('passwordConfirm').value

            fetch("config.php", {
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
    };