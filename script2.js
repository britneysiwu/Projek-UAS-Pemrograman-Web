const term = document.querySelector('.term');
const definition = document.querySelector('.definition')
const checkButton = document.querySelector('.check');
const hideButton = document.querySelector('.hide');

checkButton.addEventListener('click', function() {
    definition.style.display = 'block'; 
});

hideButton.addEventListener('click', function() {
    definition.style.display = 'none';
});