document.addEventListener('DOMContentLoaded', function () {

    fetch('https://jsonplaceholder.typicode.com/posts')
    .then(response => response.json())
    .then( data => {
        
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
                    document.querySelector('.searched').innerHTML = `<h1>${data.title}</h1>
                    <p>${data.body}</p>
                    `
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