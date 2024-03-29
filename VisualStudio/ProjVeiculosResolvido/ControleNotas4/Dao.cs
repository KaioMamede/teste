﻿using MySql.Data.MySqlClient;
using System;
using System.Collections.Generic;
using System.Data;
using System.Linq;
using System.Web;

namespace namespaceVeiculos
{
    public class Dao {
        //Esta classe se ocupa das operações que vamos realizar com o banco de dados
        //1234 é meu host
        private MySqlConnection conexao = new MySqlConnection(
            "server=localhost; port=3306; user id=root; password=1234; database=concessionaria");
        private MySqlCommand command;
        private MySqlDataReader rs;

        public String inserir(Veiculo veic){
            try{
                conexao.Open();
                command = new MySqlCommand("INSERT INTO veiculos (placa, marca, modelo, ano, preco) VALUES (@placa,@marca,@modelo,@ano,@preco)", conexao);
                command.Parameters.AddWithValue("@placa", veic.Placa);
                command.Parameters.AddWithValue("@marca", veic.Marca);
                command.Parameters.AddWithValue("@modelo", veic.Modelo);
                command.Parameters.AddWithValue("@ano", veic.Ano);
                command.Parameters.AddWithValue("@preco", veic.Preco);
                command.Prepare();
                int res = command.ExecuteNonQuery();
                if (res > 0){
                    return "Gravado com sucesso!";
                }
                else{
                    return "Erro na gravação!";
                }
            }
            catch (Exception ex1){
                return "Erro na gravação! " + ex1.Message;
            }
            finally
            {
                if (command != null) command.Dispose();
                if (conexao!=null) conexao.Close();
            }
        }

        public String alterar(Veiculo veic)
        {
            try
            {
                conexao.Open();
                command = new MySqlCommand("UPDATE veiculos SET marca=@marca, modelo=@modelo, ano=@ano, preco=@preco WHERE placa=@placa", conexao);
                command.Parameters.AddWithValue("@placa", veic.Placa);
                command.Parameters.AddWithValue("@marca", veic.Marca);
                command.Parameters.AddWithValue("@modelo", veic.Modelo);
                command.Parameters.AddWithValue("@ano", veic.Ano);
                command.Parameters.AddWithValue("@preco", veic.Preco);
                command.Prepare();
                int res = command.ExecuteNonQuery();
                if (res > 0)
                {
                    return "Alterado com sucesso!";
                }
                else
                {
                    return "Erro na alteração!";
                }
            }
            catch (Exception ex1)
            {
                return "Erro na alteração! " + ex1.Message;
            }
            finally
            {
                if (command != null)
                    command.Dispose();
                if (conexao != null)
                    conexao.Close();
            }
        }

        public String excluir(String strPlaca)
        {
            try
            {
                conexao.Open();
                command = new MySqlCommand("DELETE FROM veiculos WHERE placa=@placa", conexao);
                command.Parameters.AddWithValue("@placa", strPlaca);
                command.Prepare();
                int res = command.ExecuteNonQuery();
                if (res > 0)
                {
                    return "Eliminado com sucesso!";
                }
                else
                {
                    return "Erro na eliminação!";
                }
            }
            catch (Exception ex1)
            {
                return "Erro na eliminação! " + ex1.Message;
            }
            finally
            {
                if (command != null)
                    command.Dispose();
                if (conexao != null)
                    conexao.Close();
            }
    }

    public Veiculo selecionar(string placa){
            try{
                Veiculo veic;
                conexao.Open();
                command = new MySqlCommand("SELECT * FROM veiculos WHERE placa = @placa", conexao);
                command.Parameters.AddWithValue("@placa", placa);
                command.Prepare();
                rs = command.ExecuteReader();
                if (rs.Read()){
                    veic = new Veiculo();
                    veic.Marca = rs.GetString("marca");
                    veic.Modelo = rs.GetString("modelo");
                    veic.Ano = rs.GetInt16("ano");
                    veic.Preco = rs.GetFloat("preco");
                    return veic;
                }
                else{
                    return null;
                }
            }
            catch (Exception ex4){
                return null;
            }
            finally
            {
                if (command != null) command.Dispose();
                if (conexao != null) conexao.Close();
            }
        }

        public DataSet preencherGrid()
        {
            try
            {
                MySqlDataAdapter adapter = new MySqlDataAdapter();
                adapter.SelectCommand = 
                    new MySqlCommand("select * from veiculos ORDER BY placa", conexao);
                DataSet dataset = new DataSet();
                adapter.Fill(dataset);
                return dataset;
            }
            catch(Exception ex1)
            {
                return null;
            }
        }

        public DataSet preencherGridDeUmaMarca(String umaMarca)
        {
            try
            {
                String filtro = "";
                if (umaMarca == null || umaMarca.Equals("") 
                        || umaMarca.Trim().Equals(""))
                {
                    filtro = "";
                }
                else
                {
                    umaMarca = umaMarca.Trim(); //eliminamos brancos antes e depois
                    filtro = " WHERE marca='" + umaMarca + "'";
                }
                MySqlDataAdapter adapter = new MySqlDataAdapter();
                adapter.SelectCommand =
                    new MySqlCommand("select * from veiculos " 
                          + filtro + " ORDER BY placa", conexao);
                DataSet dataset = new DataSet();
                adapter.Fill(dataset);
                return dataset;
            }
            catch (Exception ex1)
            {
                return null;
            }
        }

        public DataSet preencherListBox()
        {
            try
            {
                MySqlDataAdapter adapter = new MySqlDataAdapter();
                adapter.SelectCommand = 
                    new MySqlCommand("select marca from marcas ORDER BY marca", conexao);
                DataSet dataset = new DataSet();
                adapter.Fill(dataset);
                return dataset;
            }
            catch (Exception ex1)
            {
                return null;
            }
        }
    }
}