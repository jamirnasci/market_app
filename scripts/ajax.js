function sendData(){
    let nome = document.getElementById("nome")
    let marca = document.getElementById("marca")
    let preco = document.getElementById("preco")
    let preco_atc = document.getElementById("preco_atc")
    let validade = document.getElementById("validade")
    let fabricacao = document.getElementById("fabricacao")
    let setor = document.getElementById("setor")

    $.ajax({
        url:"http://localhost/sistema-php/novoprod.php",
        type:"post",
        data:{
            nome:nome.value,
            marca:marca.value,
            preco:preco.value,
            preco_atc:preco_atc.value,
            validade:validade.value,
            fabricacao:fabricacao.value,
            setor:setor.value
        }
    })
} 