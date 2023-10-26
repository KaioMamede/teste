<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="frmVeiculos.aspx.cs" Inherits="namespaceVeiculos.frmVeiculos" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="icon" type="image/png" sizes="32x32" href="favicon.png"/>
    <title>Loja de veículos</title>
    <style type="text/css">
        body {
            font-family: Calibri;
        }
    </style>
</head>
<body>
    <h3>
        <asp:Image runat="server" ImageUrl="~/carro.jpg"></asp:Image> <br />
        Veículos da loja&nbsp; (ListBox para marcas - prepared statements - MySQL - DAO)</h3>
    <form id="form1" runat="server">
         
        <div>
            <div>
                <asp:Label ID="Label1" runat="server" BorderStyle="None" Text="Placa:" Width="96px"></asp:Label>
                <asp:TextBox ID="txtPlaca" runat="server" Width="262px"></asp:TextBox>
                &nbsp;
                <asp:Label ID="txtMsg" runat="server" BorderStyle="None" Height="32px" Width="729px" Font-Bold="True"></asp:Label>
                <br />               
                <table>
                    <tr><td><asp:Label ID="Label2" runat="server" BorderStyle="None" Text="Marca:" Width="92px" Height="32px"></asp:Label></td>
                       <td><asp:ListBox ID="lstMarcas" runat="server" Height="108px" Width="227px"></asp:ListBox></td>
                    </tr>
                </table>
                <asp:Label ID="Label3" runat="server" BorderStyle="None" Text="Modelo:" Width="96px"></asp:Label>
                <asp:TextBox ID="txtModelo" runat="server"></asp:TextBox>
                <br />
                <asp:Label ID="Label4" runat="server" BorderStyle="None" Text="Ano:" Width="96px"></asp:Label>
                <asp:TextBox ID="txtAno" runat="server"></asp:TextBox>
                <br />
                <asp:Label ID="Label5" runat="server" BorderStyle="None" Text="Preço:" Width="96px"></asp:Label>
                <asp:TextBox ID="txtPreco" runat="server"></asp:TextBox>
                <br />
                <br />
                <br />
                <asp:Button ID="btnGravar" runat="server" Text="Cadastrar" OnClick="btnGravar_Click" />&nbsp;
                <asp:Button ID="btnAlterar" runat="server" Text="Alterar " OnClick="btnAlterar_Click" />&nbsp;
                <asp:Button ID="btnExcluir" runat="server" Text="Excluir " OnClick="btnExcluir_Click" />&nbsp;
                <asp:Button ID="btnConsultar" runat="server" Text="Consultar " OnClick="btnConsultar_Click" />&nbsp;

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Marca (ou vazia): 
                <asp:TextBox ID="txtMarca" runat="server"></asp:TextBox>
                <asp:Button ID="btnConsultarMarca" runat="server" Text="Consultar marca" OnClick="btnConsultarMarca_Click" />&nbsp;
                <br />
                <br />
            </div>
        </div>

        <div>
            <asp:GridView ID="grdVeiculos" runat="server" CellPadding="4" ForeColor="#333333" GridLines="None">
                <AlternatingRowStyle BackColor="White" />
                <EditRowStyle BackColor="#2461BF" />
                <FooterStyle BackColor="#507CD1" Font-Bold="True" ForeColor="White" />
                <HeaderStyle BackColor="#507CD1" Font-Bold="True" ForeColor="White" />
                <PagerStyle BackColor="#2461BF" ForeColor="White" HorizontalAlign="Center" />
                <RowStyle BackColor="#EFF3FB" />
                <SelectedRowStyle BackColor="#D1DDF1" Font-Bold="True" ForeColor="#333333" />
                <SortedAscendingCellStyle BackColor="#F5F7FB" />
                <SortedAscendingHeaderStyle BackColor="#6D95E1" />
                <SortedDescendingCellStyle BackColor="#E9EBEF" />
                <SortedDescendingHeaderStyle BackColor="#4870BE" />
            </asp:GridView>
        </div>
    </form>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
    <p>
        &nbsp;</p>
</body>
</html>
