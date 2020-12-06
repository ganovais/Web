document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('.add-item-cart').forEach(button => {
        button.onclick = () => {
            document.querySelector('.toaster').classList.remove('d-none');

            let src = button.parentElement.parentElement.children[0].children[1].children[0].getAttribute('src');

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

    document.querySelectorAll('.fa-times').forEach(button => {
        button.onclick = () => {
            document.querySelector('.toaster').classList.add('d-none');
            document.querySelector('.toaster-wishlist').classList.add('d-none');
        }
    })
    


    document.querySelectorAll('.remove-product-wishlist').forEach(button => {
        button.onclick = () => {
            let id = button.dataset.id;
            fetch(`unlike/${id}`)
            .then(data => {
                if(data.status == 200) {
                    button.parentElement.parentElement.parentElement.remove();
                    document.querySelector('.toaster-wishlist').classList.remove('d-none');
                }
            })

        }
    })

    document.querySelector('.toaster-wishlist').addEventListener("animationend", function () {
        setTimeout(() => {
          document.querySelector('.toaster-wishlist').classList.add('d-none');
        }, 3000);

    })

    document.querySelectorAll('.product .fa-heart').forEach(button => {
        button.onclick = () => {
            // alert(button.dataset.id);
            let id = button.dataset.id;
            fetch(`liked/${id}`)
            .then(data => {
                console.log(data);
                if(data.status == 200) {
                    toastr.success('Favoritado');
                }
            })
            .catch(error => {
                console.log(error);
            })
            return false
        }
    })



})