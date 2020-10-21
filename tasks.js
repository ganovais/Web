let tasks = [];

document.addEventListener('DOMContentLoaded', function () {

    if(localStorage.getItem('tasks')) {
        tasks.push(localStorage.getItem('tasks'));
    }
    

    document.querySelector('#submit').disabled = true;

    document.querySelector('#task').onkeyup = () => {
        if(document.querySelector('#task').value.length > 0) {
            document.querySelector('#submit').disabled = false;
        } else {
            document.querySelector('#submit').disabled = true;
        }
    } 
    document.querySelector('form').onsubmit = () => {
        const li = document.createElement('li');
        li.innerHTML = document.querySelector('#task').value;

        let item = `<li>${document.querySelector('#task').value}</li>`;

        tasks.push(item);
        localStorage.setItem('tasks', tasks);

        // console.warn("sas");

        document.querySelector('#tasks').append(li);

        document.querySelector('#task').value = '';

        document.querySelector('#submit').disabled = true;

        return false;
    }
})