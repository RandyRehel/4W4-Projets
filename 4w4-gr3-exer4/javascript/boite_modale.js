(function(){
    
    let boite__modale = document.querySelector('.boite__modale')
    let boite__modale__fermer = document.querySelector('.boite__modale__fermer')

    let cours__desc__suite = document.querySelectorAll('.cours__desc__suite')
    console.log('cours__desc__suite = ' + cours__desc__suite.length)

    for (const bouton of cours__desc__suite) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
            boite__modale.classList.add('boite__modale__ouvrir')
            //cours__desc__suite(boite__modale.classList)
        })
    }

    boite__modale__fermer.addEventListener('mousedown', function(){
        boite__modale.classList.remove('boite__modale__ouvrir')
    })

})()