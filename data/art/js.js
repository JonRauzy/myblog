let oui = document.querySelector('#btn-oui')
let non = document.querySelector('#btn-non')
let titre = document.querySelector('.titre');
let bgFantome = document.querySelector('.bg-fantome');
let text = document.querySelector('.text');
let nav = document.querySelector('.nav');


oui.addEventListener('click', e =>{
        e.preventDefault()
        text.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
})

non.addEventListener('click', e =>{
        e.preventDefault()
        nav.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
})
