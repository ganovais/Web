document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('.add-item-cart').forEach(button => {
        button.onclick = () => {
            document.querySelector('.toaster').classList.remove('d-none');

            let src = button.parentElement.parentElement.children[0].children[1].getAttribute('src');

            document.querySelector('#toaster-img').setAttribute('src', src);

            let name = button.parentElement.parentElement.children[1].children[0].innerHTML;

            let price = button.parentElement.parentElement.children[1].children[1].children[0].innerHTML;

            document.querySelector('.toaster-content').innerHTML = `
                <h4>${name}</h4>
                <p><b>${price}</b></p>
            `;
        }
    })


    document.querySelector('.toaster').addEventListener("animationend", function () {
        setTimeout(() => {
          document.querySelector('.toaster').classList.add('d-none');
        }, 3000);

    })

    document.querySelector('.fa-times').onclick = () => {
        document.querySelector('.toaster').classList.add('d-none');
    }
})