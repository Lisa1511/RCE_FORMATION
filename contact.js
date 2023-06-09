function message(){
    var name = document.getElementById('name');
    var mail = document.getElementById('mail');
    var message = document.getElementById('message');
    const success = document.getElementById('success');
    const danger = document.getElementById('danger');

    if(name.value === '' || mail.value === '' || message.value === ''){
        danger.style.display = 'block';
    }
    else{
        setTimeout(() => {
            name.value = '';
            mail.value = '';
            message.value = '';
        }, 2000);

        success.style.display = 'block';
    }


setTimeout(() => {
    danger.style.display = 'none';
    success.style.display = 'none';
}, 4000);
}