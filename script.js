'use strict'

document.getElementById('btnEnviar').addEventListener('click', () => {

    const message = document.getElementById('txtMensagem').value;

    const endpoint = 'http://127.0.0.1/bot/api.php?m=' + message;

    if(message.trim().lenght <=0){
        alert('Informe uma mensagem');
        return;
    }

    fetch(endpoint, ).then(response => {
        response.json().then(data => {
            console.log(data);
        });

    }).catch(error => {
        console.log(error);
    })

    console.log(endpoint);

});