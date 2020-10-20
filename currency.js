document.addEventListener('DOMContentLoaded', function () {

    document.querySelector('form').onsubmit = function () {
        fetch("https://api.exchangeratesapi.io/latest?base=USD")
        .then(response => response.json())
        .then(data => {
            const currency = document.querySelector('#currency').value.toLowerCase();

            const rate = data.rates[currency];
            if(rate !== undefined) {
                const result = `1 USD é igual a ${rate.toFixed(2)} ${currency}`;

                document.querySelector('#result').innerHTML = result;
            } else {
                document.querySelector('#result').innerHTML = 'Moeda inválida';
            }
        })
        .catch(error => {
            console.log('error', error);
        })

        return false;
    }
});
