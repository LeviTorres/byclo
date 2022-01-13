const btn_menu = document.getElementById('btn_menu')
const menu = document.getElementById('menu')

btn_menu.addEventListener('click', function(){
    console.log('click')
    menu.classList.toggle('mostrar')
})