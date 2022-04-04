const message = getElementById("message").value;

// clearScreen => Clear all the values
function clearScreen() {
    document.getElementById("result") . value = "";
}

// display => Display number
function display(value) {
    document.getElementById("result") . value += value;
}

// calculate => Calculate the number and return result
function calculate() {
    const p = document.getElementById("result") . value;
    const q = eval(p);

    document.getElementById("result") . value = q;
}

function calcBmi() {
    const weight = document.getElementById("weight").value;
    const height = document.getElementById("height").value / 100;
    const message = document.getElementById("message").innerHTML;

    const result = document.getElementById("result").value = weight / (height * height);
    
    if (result > 25.1) {
        document.getElementById("message").innerHTML = "Gemuk";
    } else if (result < 25.1 && result > 18.4) {
        document.getElementById("message").innerHTML = "Normal";
    } else if (result <= 18.4) {
        document.getElementById("message").innerHTML = "Kurus";
    } else {
        message = "Silahkan masukkan data dengan benar!";
    }
    
}