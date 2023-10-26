using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;

namespace namespaceVeiculos
{
    public class Veiculo
    {
        private string placa;
        private string marca;
        private string modelo;
        private int ano;
        private float preco;

        public string Marca { get => marca; set => marca = value; }
        public string Placa { get => placa; set => placa = value; }
        public string Modelo { get => modelo; set => modelo = value; }
        public int Ano { get => ano; set => ano = value; }
        public float Preco { get => preco; set => preco = value; }
    }

}