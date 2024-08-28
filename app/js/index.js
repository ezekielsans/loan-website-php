const range = document.getElementById('loanRange');
const currentRange = document.getElementById('loanValue');
const paymentDate = document.getElementById('payment_date');
const interestVal= document.getElementById('interest');
const processingFee= document.getElementById('processing_fee');


const interest_rates = [0.03,0.05,0.06,0.08];
const processing_fee = [150,200,250,300];

currentRange.value = range.valueAsNumber;




range.addEventListener('input', ()=>{
currentRange.value = range.valueAsNumber;
console.log(range)
console.log(currentRange)
console.log(paymentDate.value)
calculate_loan()
})




function calculate_loan(){
if (paymentDate.value === '3 months'){
    console.log(interest_rates[0]);
    interestVal.value = interest_rates[0];
    processingFee.value = processing_fee[0];
}
else if (paymentDate.value === '6 months'){
    console.log(interest_rates[1]);
    interestVal.value = interest_rates[1];
    processingFee.value = processing_fee[1];
}
else if (paymentDate.value === '1 year'){
    console.log(interest_rates[2]);
    interestVal.value = interest_rates[2];
    processingFee.value = processing_fee[2];
}
else if (paymentDate.value === '2 years'){
    console.log(interest_rates[3]);
    interestVal.value = interest_rates[3];
    processingFee.value = processing_fee[3];
} else{
    interestVal.value = 0
}







}