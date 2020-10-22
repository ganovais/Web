document.addEventListener("DOMContentLoaded", function() {

    document.querySelectorAll('.add-item-cart').forEach(button => {
        button.onclick = () => {
            document.querySelector('.toaster').classList.remove('d-none');
        }
    })


    document.querySelector('.toaster').addEventListener("animationend", function () {
        setTimeout(() => {
          document.querySelector('.toaster').classList.add('d-none');
        }, 3000);

    })
})