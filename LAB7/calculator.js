let result = document.getElementById('result');

function appendNumber(number) {
    result.value += number;
}

function appendOperator(operator) {
    result.value += operator;
}

function clearScreen() {
    result.value = '';
}

function backspace() {
    result.value = result.value.slice(0, -1);
}

function calculate() {
    try {
        result.value = eval(result.value.replace(/×/g, '*').replace(/÷/g, '/'));
    } catch {
        result.value = 'Error';
    }
}
