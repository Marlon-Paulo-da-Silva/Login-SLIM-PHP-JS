import axios from 'axios';
const form = document.querySelector("#form-login");
const message = document.querySelector("#message");

function setMessage(messageText){

    message.classList.add('text-error');
    message.textContent = messageText;
    
    setTimeout(()=>{
        message.textContent = '';
    }, 3000);
}

form.addEventListener('submit', async (event) => {
    event.preventDefault();
    
    try {
        const formData = new FormData(form);

        const {data} = await axios.post('/login', formData);
        console.log(data);

        (data == 'loggedIn') ?
            window.location.href = '/admin' :
            setMessage('Erro ao fazer o login');
        

    } catch (error) {
        setMessage('Erro ao fazer o login');
       
    }
})

