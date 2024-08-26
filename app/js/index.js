const range = document.getElementById('loanRange');
const currentRange = document.getElementById('loanValue');

currentRange.value = range.valueAsNumber;




range.addEventListener('input', ()=>{

    currentRange.value = range.valueAsNumber;
console.log(range)
console.log(currentRange)
})
