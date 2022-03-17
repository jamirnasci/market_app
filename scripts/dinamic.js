function showside(){
    let tag = document.getElementById('sidemenu')
    let stat = tag.style.display
    if(stat == "block"){
        tag.style.display = "none"
    }
    else{
        tag.style.display = "block"
    }
}
function openForm(){
let tag = document.getElementById('cad_prod')
let titleBtn = document.getElementById('opt_title')
let stat = tag.style.display
if(stat == "block"){
    tag.style.display = "none"
    titleBtn.innerHTML = "Cadastrar Produto"
}
else{
    tag.style.display = "block"
    titleBtn.innerHTML = "Fechar"
}
}