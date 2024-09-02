//mask input tel
document.getElementById('wpp-principal').addEventListener('keyup', (e)=>{
    let input = e.target
    input.value = phoneMask(input.value)
})


const phoneMask = (value) => {
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
}



// mask cep
document.getElementById('cep').addEventListener('keyup', (e) => {
    let input = e.target;
    input.value = cepMask(input.value);
  });
  
  const cepMask = (value) => {
    if (!value) return "";
    value = value.replace(/\D/g, '');
    value = value.replace(/(\d{5})(\d)/, "$1-$2");
    return value;
  };