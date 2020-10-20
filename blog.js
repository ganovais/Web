const fechar = () => {
    document.querySelectorAll('.searched')[0].classList.remove('show');
    // document.getElementsByClassName('searched')[x]
    // document.querySelector('.blogs').remove()
}
// function fechar() {
// }

document.addEventListener('DOMContentLoaded', function () {

    // document.querySelectorAll('#fechar')
    // document.querySelectorAll('.fechar')
    // document.getElementsByTagName('button')
    document.getElementById('fechar').onclick = fechar;
    // document.getElementById('fechar').addEventListener('click', function () {})

    fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then( data => {
        // console.log('data', data);
        data = data.slice(0, 10);
        
        // [1, 2, 3, 4, 5, 6, 7, 8]
        let content = '';

        data.forEach(blog => {
            // blog.title
            blog.author = "Gabriel";
            
            return content += create_blog(blog);
        });

        document.querySelector('.blogs').innerHTML = content;
    })

    setTimeout(() => {
        document.querySelectorAll('.search').forEach( button => {
            button.onclick = function () {
                fetch(`https://jsonplaceholder.typicode.com/posts/${button.dataset.id}`)
                .then(response => response.json())
                .then(data => {
                    document.querySelector('.searched').classList.add('show');

                    let content = `<h1>${data.title}</h1>
                    <p>${data.body}</p>
                    `;
                    // document.querySelector('.searched').insertAdjacentHTML('beforeend', content);

                    document.getElementsByClassName('content')[0].innerHTML = content;
                });
            } 
        })
    }, 400);
})

function create_blog(blog) {
    const content = `
        <div class="blog">
            <button class="search" data-id="${blog.id}">Buscar</button>
            <h4>${blog.title}</h4>
            <p>${blog.body}</p>
        </div>
    `;

    return content;
}