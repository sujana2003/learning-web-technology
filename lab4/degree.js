function validateDegree() {
    let degrees = document.getElementsByName("degree");
    let error = "";
    let selected = false;
 
    for (let i = 0; i < degrees.length; i++) {
        if (degrees[i].checked) {
            selected = true;
            break;
        }
    }
 
    if (!selected) {
        error = "Please select at least one degree.";
    }
 
    document.getElementById("degreeError").innerText = error;
    return selected;
}