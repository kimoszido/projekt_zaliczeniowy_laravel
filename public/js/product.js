let minus = document.querySelector('.form__button_minus');
let plus = document.querySelector('.form__button_plus');
let input = document.querySelector('.form__input');


function add(){
    input.value = parseInt(input.value) + 1;
}
function subtract(){
    if (parseInt(input.value) > 0){
        input.value = parseInt(input.value) - 1;
    }
}



minus.addEventListener("click", subtract);

plus.addEventListener("click", add);
