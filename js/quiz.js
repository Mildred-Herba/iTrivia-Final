const btnStoring = document.getElementById('btnStoring');
const myForm = document.getElementById('myForm');
const nextFormForm = document.getElementById('nextForm');

btnStoring.addEventListener('click', () => {
    const selectedAnswer = document.querySelector('input[name="answer"]:checked');
    if (!selectedAnswer || selectedAnswer.value !== 'storing data') {
        btnStoring.classList.add('wrong');
    }
    myForm.style.display = 'none';
    nextForm.style.display = 'block';
});