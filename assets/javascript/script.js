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