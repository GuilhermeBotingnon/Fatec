let contactForm = document.getElementById("contactForm");

contactForm.addEventListener("submit", (e) => {
  if (
    document.getElementById("periodo1").checked ||
    document.getElementById("periodo2").checked
  ) {
    if (confirm("Enviar?") == true) {
      return true;
    } else {
      e.preventDefault();
    }
  } else {
    alert("Caixa do Período não foi selecionada");
    e.preventDefault();
  }
});

const estados = [
  "Acre",
  "Alagoas",
  "Amapá",
  "Amazonas",
  "Amapá",
  "Bahia",
  "Ceará",
  "Distrito Federal",
  "Espírito Santo",
  "Goiás",
  "Maranhão",
  "Mato Grosso",
  "Mato Grosso do Sul",
  "Minas Gerais",
  "Pará",
  "Paraíba",
  "Paraná",
  "Pernambuco",
  "Piauí",
  "Rio de Janeiro",
  "Rio Grande do Norte",
  "Rondônia",
  "Rio Grande do Sul",
  "Roraima",
  "Santa Catarina",
  "Sergipe",
  "São Paulo",
  "Tocantins",
];

const selectEstado = document.getElementById("estado");

estados.forEach((estado) => {
  const option = document.createElement("option");
  option.value = estado;
  option.text = estado;
  selectEstado.appendChild(option);
});


