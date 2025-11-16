function validateName() {
 let name = document.getElementById('name').value.trim();
 let error = "";
 // Check if empty
 if (name.length === 0) {
   error = "Name cannot be empty.";
 } else {
   // At least two words
   let words = name.length;
   if (words < 2) {
     error = "Name must have at least two words.";
   } else {
     // Must start with letter
     let first = name.charAt(0).toLowerCase();
     if (first < "a" || first > "z") {
       error = "Name must start with a letter.";
     } else {
       // Only allowed chars
       for (let i = 0; i < name.length; i++) {
         let c = name.charAt(i).toLowerCase();
         if (!((c >= "a" && c <= "z") || c === "." || c === "-" || c === " ")) {
           error = "Only a-z,A-Z, ., -, spaces allowed.";
           break;
         }
       }
     }
   }
 }
 document.getElementById('nameError').innerText = error;
 return error === "";
}