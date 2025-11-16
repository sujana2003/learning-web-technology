function validateBloodGroup() {
 let bg = document.getElementById('bloodgroup').value;
 let error = "";
 if (bg === "") {
   error = "Blood group must be selected.";
 }
 document.getElementById('bloodErr').innerText = error;
 return error === "";
}