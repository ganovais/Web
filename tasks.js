let tasks = [];

document.addEventListener('DOMContentLoaded', function () {

    if(localStorage.getItem('tasks')) {
        tasks.push(localStorage.getItem('tasks'));
        tasks = tasks[0].split(',');

        // "1, 2, 3, 4".split(',')
        // [1, 2, 3 ,4]
        
        tasks.map(item => {
            item = item.split('<li>')
            item = item[1].split('</li>')
            
            const li = document.createElement('li');
            li.innerHTML = item[0];

            document.querySelector('#tasks').append(li)
        })

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