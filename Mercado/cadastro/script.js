const modal = document.querySelector('.modal-container');
const tbody = document.querySelector('tbody');
const sNome = document.querySelector('#m-nome');
const sIdp = document.querySelector('#m-idp');
const sPreco = document.querySelector('#m-preco');
const btnSalvar = document.querySelector('#btnSalvar');

let itens;
let id;

function openModal(edit = false, index = 0) {
  modal.classList.add('active');

  modal.onclick = e => {
    if (e.target.className.indexOf('modal-container') !== -1) {
      modal.classList.remove('active');
    }
  }

  if (edit) {
    sNome.value = itens[index].nome;
    sIdp.value = itens[index].idp;
    sPreco.value = itens[index].preco;
    id = index;
  } else {
    sNome.value = '';
    sIdp.value = '';
    sPreco.value = '';
    id = undefined;
  }
}

sPreco.addEventListener('input', function() {
  calcularDescontoEAtualizar();
});

btnSalvar.onclick = e => {
  if (sNome.value === '' || sIdp.value === '' || sPreco.value === '') {
    return;
  }

  e.preventDefault();

  if (id !== undefined) {
    itens[id].nome = sNome.value;
    itens[id].idp = sIdp.value;
    itens[id].preco = sPreco.value;
    itens[id].desconto = calcularDesconto(sPreco.value);
  } else {
    const item = {
      'nome': sNome.value,
      'idp': sIdp.value,
      'preco': sPreco.value,
      'desconto': calcularDesconto(sPreco.value),
    };
    itens.push(item);
  }

  setItensBD();

  modal.classList.remove('active');
  loadItens();
  id = undefined;
}

function calcularDesconto(preco) {
  const valorPreco = parseFloat(preco);
  let desconto = 0;

  if (valorPreco >= 40) {
    desconto = 20;
  } else if (valorPreco >= 30) {
    desconto = 15;
  } else if (valorPreco >= 20) {
    desconto = 10;
  } else if (valorPreco >= 10) {
    desconto = 5;
  }

  return desconto;
}

function insertItem(item, index) {
  let tr = document.createElement('tr');

  tr.innerHTML = `
    <td>${item.nome}</td>
    <td>${item.idp}</td>
    <td>R$ ${item.preco}</td>
    <td>${item.desconto} %</td>
    <td>R$ ${calcularPrecoComDesconto(item.preco, item.desconto)}</td>
    <td class="acao">
      <button onclick="editItem(${index})"><i class='bx bx-edit' ></i></button>
    </td>
    <td class="acao">
      <button onclick="deleteItem(${index})"><i class='bx bx-trash'></i></button>
    </td>
  `;

  tbody.appendChild(tr);
}

function calcularPrecoComDesconto(preco, desconto) {
  const precoNumerico = parseFloat(preco.replace('R$ ', ''));
  const descontoNumerico = parseFloat(desconto);
  const precoComDesconto = precoNumerico * (1 - descontoNumerico / 100);
  return precoComDesconto.toFixed(2);
}

function loadItens() {
  itens = getItensBD();
  tbody.innerHTML = '';
  itens.forEach((item, index) => {
    insertItem(item, index);
  });
}

function editItem(index) {
  openModal(true, index);
}

function deleteItem(index) {
  itens.splice(index, 1);
  setItensBD();
  loadItens();
}

const getItensBD = () => JSON.parse(localStorage.getItem('dbfunc')) || [];
const setItensBD = () => localStorage.setItem('dbfunc', JSON.stringify(itens));

loadItens();
