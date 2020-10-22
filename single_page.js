const page1 = {
    'h1': 'Página 1',
    'body': 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur est dolor voluptas nam exercitationem officia at necessitatibus aperiam sapiente, ea, fugit quia, aliquam mollitia quasi cumque laborum iusto cum.'
}

const page2 = {
    'h1': 'Página 2',
    'body': 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis pariatur est dolor voluptas nam exercitationem officia at necessitatibus aperiam sapiente, ea, fugit quia, aliquam mollitia quasi cumque laborum iusto cum.'
}

document.addEventListener('DOMContentLoaded', function() {

    document.querySelectorAll('.switch').forEach((button) => {
        button.onclick = () => {
            let content = '';
            if(button.dataset.page == 1) {
                content = `
                    <h1>${page1.h1}</h1>
                    <p>${page1.body}</p>
                `;
            } else {
                content = `
                    <h1>${page2.h1}</h1>
                    <p>${page2.body}</p>
                `;
            }
            document.querySelector('#content').innerHTML = content;
        }
    });
})