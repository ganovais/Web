document.addEventListener('DOMContentLoaded', function () {
    document.querySelector('#input').addEventListener('input', event => {
        let texto = event.target.value;
        document.getElementsByTagName('p')[0].innerHTML = texto;

        // texto = texto.toLowerCase();
        texto = texto.toUpperCase();
        if(texto == 'NARUTO') {
            document.getElementsByTagName('h3')[0].classList.add('show');

            
            // "afterbegin" - After(depois) the beginning of the element (as the first child)
            // "afterend" - After(depois) the element
            // "beforebegin" - Before(antes) the element
            // "beforeend" - Before(antes) the end of the element (as the last child)

            let content = '<p>É</p>';
            document.getElementsByTagName('h3')[0].insertAdjacentHTML('afterbegin', content)
        } else {
            document.getElementsByTagName('h3')[0].classList.remove('show');

            if(document.getElementsByTagName('h3')[0].firstChild.tagName == 'P') {
                document.getElementsByTagName('h3')[0].firstChild.remove();
            }
        }
    })
})