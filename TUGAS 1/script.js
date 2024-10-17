document.addEventListener('DOMContentLoaded', () => {
    let display = document.querySelector('.display');
    let buttons = document.querySelectorAll('.btn');
    let currentOperation = null;
    let previousValue = null;
    let shouldResetDisplay = false;

    buttons.forEach(button => {
        button.addEventListener('click', () => {
            if (button.classList.contains('number')) {
                handleNumberClick(button.textContent);
            } else if (button.classList.contains('operation')) {
                handleOperationClick(button.textContent);
            } else if (button.classList.contains('equals')) {
                handleEquals();
            } else if (button.classList.contains('ac')) {
                handleClear();
            }
        });
    });

    function handleNumberClick(number) {
        if (display.textContent === '0' || shouldResetDisplay) {
            display.textContent = number;
            shouldResetDisplay = false;
        } else {
            display.textContent += number;
        }
    }

    function handleOperationClick(operation) {
        if (currentOperation !== null) {
            calculateResult();
        }
        previousValue = parseFloat(display.textContent);
        currentOperation = operation;
        shouldResetDisplay = true;
    }

    function calculateResult() {
        if (previousValue === null || currentOperation === null) return;

        const current = parseFloat(display.textContent);
        let result;

        switch (currentOperation) {
            case '+':
                result = previousValue + current;
                break;
            case '-':
                result = previousValue - current;
                break;
            case '*':
                result = previousValue * current;
                break;
            case '/':
                result = previousValue / current;
                break;
            case '^':
                result = Math.pow(previousValue, current);
                break;
            case 'mod':
                result = previousValue % current;
                break;
            default:
                return;
        }

        display.textContent = result.toString();
        currentOperation = null;
        previousValue = null;
    }

    function handleClear() {
        display.textContent = '0';
        currentOperation = null;
        previousValue = null;
        shouldResetDisplay = false;
    }

    function handleEquals() {
        calculateResult();
    }
});