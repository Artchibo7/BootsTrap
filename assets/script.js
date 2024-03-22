// document.getElementById("passwordConfirm").addEventListener("input", function(){
//   let parErreur = document.getElementById("erreur");
//   if(this.value !== document.getElementById("password").value){
//       parErreur.innerHTML = "Les mots de passe ne correspondent pas !!!";
//   } else {
//      parErreur.innerHTML = ""; 
//   }
// });

// document.forms["inscription"].addEventListener("submit", function(e){
//   let erreur;

//   let inputs = this.getElementsByTagName("input");
//   for (let i=0; i<inputs.length; i++){
//       console.log(inputs[i]);
//       if(!inputs[i].value){
//           erreur = "Veuillez remplir tous les champs !!!";
//           break;
//       }
//   }
//   if(erreur){
//       e.preventDefault();
//       document.getElementById("erreur").innerHTML = erreur;
//       return false;
//   } else {
//       alert("Merci pour votre inscription");
//   }
// });

// let firstname = document.getElementById('firstname').value;
// let lastname = document.getElementById('lastname').value;
// let response = document.getElementById('response'); 

// function appelAjax() {
// fetch(' http://localhost:3000 ', {
//   method: "POST",
//   headers: {
//     'Content-Type': 'application/json',
//   },
//   body: JSON.stringify({
//     'prenom': firstname,
//     'nom': lastname
//   })

// }).then(retour => {
//   if (!retour.ok) {
//     throw new Error('La connexion au serveur est cassée');
//   }
//   return retour.json();
// }).then(data => {
//   response.innerHTML += data + "<br>";
// }).catch(error => {
//   console.error('Erreur lors de la requête fetch:', error);
// });
// }





document.getElementById("deleteAccount").addEventListener("click", function() {
  if (confirm("Are you sure you want to delete your account?")) {
      // Get the user ID from the hidden input field
      var userID = document.getElementById("userIDInput").value;

      // Send AJAX request with user ID
      var xhr = new XMLHttpRequest();
      xhr.open("POST", "deleteUser.php", true);
      xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
      xhr.onreadystatechange = function() {
          if (xhr.readyState === XMLHttpRequest.DONE) {
              if (xhr.status === 200) {
                  // Success: do something if needed
                  // Redirect user or do any other action
                  window.location.replace("index.php");
              } else {
                  // Error handling
                  alert('Error occurred: ' + xhr.status);
              }
          }
      };
      // Send the user ID in the request body
      xhr.send("userID=" + encodeURIComponent(userID));
  }
});
