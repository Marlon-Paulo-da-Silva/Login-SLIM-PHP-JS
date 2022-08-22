import axios from 'axios';
const form = document.querySelector("#form-login");

form.addEventListener('submit', async (event) => {
    event.preventDefault();
    
    try {

        const formData = new FormData(form);

        const {data} = await axios.post('/login', formData);
        console.log(data);
    } catch (error) {
        console.log(error);
    }
})

