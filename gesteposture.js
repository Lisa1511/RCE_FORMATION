const list = document.querySelectorAll('.list');
function activeLink(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
    }
list.forEach((item) =>
item.addEventListener('click',activeLink));

    var counter = 1;
    setInterval(function(){
        document.getElementById('clique' + counter).checked = true;
        counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 5000);

    var counter = 1;
        setInterval(function(){
            document.getElementById('bouton' + counter).checked = true;
            counter++;
            if(counter > 4){
                counter = 1;
            }
        }, 5000);