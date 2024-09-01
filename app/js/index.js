// JavaScript
const range = document.getElementById('loanRange');
const currentRange = document.getElementById('loanValue');
const paymentDate = document.getElementById('payment_date');
const interestVal = document.getElementById('interest');
const processingFee = document.getElementById('processing_fee');
const totalRepaymentFee = document.getElementById('total_repayment');

const interest_rates = [0.03, 0.05, 0.06, 0.08];
const processing_fee = [150, 200, 250, 300, 500];

// Initial setup
currentRange.value = range.valueAsNumber;
calculate_loan();
calculate_processing_fee();
total_repayment();

// Event listener for range slider input
range.addEventListener('input', () => {
    validateAndSyncRange();
    updateCalculations();
});

// Event listener for typing in the input field
currentRange.addEventListener('input', () => {
    validateAndSyncInput();
    updateCalculations();
});



// Validate and synchronize the input field value with the range slider
function validateAndSyncInput() {
    let value = parseFloat(currentRange.value);
    currentRange.value = value;  // Adjust if out of bounds
    range.value = value;         // Sync slider with the input
}


// Validate and synchronize the range slider value with the input field
function validateAndSyncRange() {
    let value = range.valueAsNumber;

 // Ensure the slider respects the boundaries
//     if (value < 3000) value = 3000;
//     if (value > 20000) value = 20000;

    range.value = value;         // Ensure slider remains within limits
    currentRange.value = value;  // Sync input with slider
}

// Calculate loan based on payment duration
function calculate_loan() {
    switch (paymentDate.value) {
        case '3 months':
            interestVal.value = interest_rates[0];
            break;
        case '6 months':
            interestVal.value = interest_rates[1];
            processingFee.value = processing_fee[1];
            break;
        case '1 year':
            interestVal.value = interest_rates[2];
            break;
        case '2 years':
            interestVal.value = interest_rates[3];
            break;
        default:
            interestVal.value = 0;
            break;
    }
}

// Calculate processing fee based on current loan amount
function calculate_processing_fee() {
    const loanAmount = parseFloat(currentRange.value) || 0;

    if (loanAmount <= 5000) {
        processingFee.value = processing_fee[0];
    } else if (loanAmount <= 8000) {
        processingFee.value = processing_fee[1];
    } else if (loanAmount <= 12000) {
        processingFee.value = processing_fee[2];
    } else if (loanAmount <= 18000) {
        processingFee.value = processing_fee[3];
    } else if (loanAmount <= 20000) {
        processingFee.value = processing_fee[4];
    }
}

// Calculate the total repayment amount
function total_repayment() {
    const loanAmount = parseFloat(currentRange.value) || 0;
    const interestRate = parseFloat(interestVal.value) || 0;
    const processFee = parseFloat(processingFee.value) || 0;

    const totalInterest = loanAmount * interestRate;
    const totalRepayment = loanAmount + totalInterest + processFee;

    totalRepaymentFee.value = totalRepayment.toFixed(2);
}

// Helper function to update all calculations
function updateCalculations() {
    calculate_loan();
    calculate_processing_fee();
    total_repayment();
}
