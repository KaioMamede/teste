using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

namespace namespaceVeiculos
{
    public partial class frmVeiculos : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!IsPostBack)   
            {
                //preencher o ListBox com as marcas da tabela 'marcas' do BD:
                popularListBoxMarcas();
                //preencher a grade com os dados da tabela 'veiculos' do BD:
                popularGrid();
            }
        }


        protected void btnGravar_Click(object sender, EventArgs e)
        {
            try
            {
                txtMsg.Text = "";
                Veiculo veic = new Veiculo();
                Dao banco = new Dao();
                veic.Placa = txtPlaca.Text;
                veic.Marca = lstMarcas.SelectedValue.ToString();
                veic.Modelo = txtModelo.Text;
                veic.Ano = Convert.ToInt16(txtAno.Text);
                veic.Preco = Convert.ToSingle(txtPreco.Text);
                if (veic.Marca == null || veic.Marca.Equals(""))
                {
                    throw new Exception();
                }
                String retorno = banco.inserir(veic);
                txtMsg.Text = retorno;
                popularGrid(); //atualizamos os dados na grade GridView
            }
            catch(Exception ex1)
            {
                txtMsg.Text = "Erro tentando inserir um novo veículo.";
            }
        }
        protected void btnConsultar_Click(object sender, EventArgs e)
        {
            try {
                String placa = txtPlaca.Text;
                txtMsg.Text = "";
                Dao banco = new Dao();
                Veiculo retorno = banco.selecionar(placa);            
                if (retorno != null)
                {
                    lstMarcas.SelectedValue = retorno.Marca; //para selecionar no ListBox
                    txtModelo.Text = retorno.Modelo;
                    txtAno.Text = "" + retorno.Ano;
                    txtPreco.Text = "" + retorno.Preco;
                 }
                else
                {
                    txtPlaca.Text = placa + " - não encontrada";
                    txtMsg.Text = "Veículo não encontrado.";
                    lstMarcas.SelectedIndex = -1;
                    txtModelo.Text = "";
                    txtAno.Text = "";
                    txtPreco.Text = "";
                }
            }
            catch (Exception ex1)
            {
            }
        }

        private void popularGrid()
        {
            try
            {
                Dao banco = new Dao();
                grdVeiculos.DataSource = banco.preencherGrid();
                grdVeiculos.DataBind(); //atualizar os dados da grade
            }
            catch (Exception ex1)
            {
            }
        }

        private void popularGridDeUmaMarca(String umaMarca)
        {
            try
            {
                Dao banco = new Dao();
                grdVeiculos.DataSource = banco.preencherGridDeUmaMarca(umaMarca);
                grdVeiculos.DataBind(); //atualizar os dados da grade
            }
            catch (Exception ex1)
            {
            }
        }
        private void popularListBoxMarcas()
        {
            try
            {
                Dao banco = new Dao();
                lstMarcas.DataValueField = "marca";
                lstMarcas.DataSource = banco.preencherListBox();
                lstMarcas.DataBind();
            }
            catch (Exception ex1)
            {
            }
        }

        protected void btnAlterar_Click(object sender, EventArgs e)
        {
                try
                {
                    txtMsg.Text = "";
                    Veiculo veic = new Veiculo();
                    Dao banco = new Dao();
                    veic.Placa = txtPlaca.Text;
                    veic.Marca = lstMarcas.SelectedValue.ToString();
                    veic.Modelo = txtModelo.Text;
                    veic.Ano = Convert.ToInt16(txtAno.Text);
                    veic.Preco = Convert.ToSingle(txtPreco.Text);
                    if (veic.Marca == null || veic.Marca.Equals(""))
                    {
                        throw new Exception();
                    }
                    String retorno = banco.alterar(veic);
                    txtMsg.Text = retorno;
                    popularGrid(); //atualizamos os dados na grade GridView
                }
                catch (Exception ex1)
                {
                    txtMsg.Text = "Erro tentando alterar um veículo.";
                }
            }

        protected void btnExcluir_Click(object sender, EventArgs e)
        {
            try
            {
                txtMsg.Text = "";
                Dao banco = new Dao();
                String umaPlaca = txtPlaca.Text;
                String retorno = banco.excluir(umaPlaca);
                txtMsg.Text = retorno;
                popularGrid(); //atualizamos os dados na grade GridView
            }
            catch (Exception ex1)


            {
                txtMsg.Text = "Erro tentando eliminar um veículo.";
            }
        }

        protected void btnConsultarMarca_Click(object sender, EventArgs e)
        {
            try
            {
                String marca = txtMarca.Text;
                txtMsg.Text = "";
                popularGridDeUmaMarca(marca);
            }
            catch (Exception ex1)
            {
            }
        }
    }
    
}