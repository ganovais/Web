document.addEventListener('DOMContentLoaded', function() {
    let i = 0;
    let intervalo = setInterval(() => {
        // console.log(1);
        // let content = `
        //     <div class="progresso" style="width: ${i}%">
        //     </div>
        // `;
        // document.querySelector('.barra').innerHTML = content;

        // `${i}%`
        document.querySelector('.progresso').style.width = i + '%';
        // document.querySelector('.progresso').style.height = i + '%';
        // document.querySelector('.progresso').style.backgroundColor = 'blue';
        i++;
        if(i >= 101) {
            clearInterval(intervalo);
            // alert("Fim do processo")
        }

    }, 10);
})

// Declaração normal
// function fechar() {

// }

//Arrow Function
// const fechar = () => {

// }


