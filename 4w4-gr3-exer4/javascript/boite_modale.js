(function(){
    

    let cours__desc__suite = document.querySelectorAll('.cours__desc__suite')
    console.log('cours__desc__suite = ' + cours__desc__suite.length)

    for (const bouton of cours__desc__suite) {
        bouton.addEventListener('mousedown', function(){
            console.log(this.tagName)
        })
    }


})()