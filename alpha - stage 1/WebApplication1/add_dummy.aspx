<%@ Page Language="C#" AutoEventWireup="true" CodeBehind="add_dummy.aspx.cs" Inherits="WebApplication1.add_dummy" %>

<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head runat="server">
    <title></title>
</head>
<body>
    <form id="form1" runat="server">
        <div>
            <asp:TextBox ID="user_id" runat="server" placeholder="ID" />
            <asp:TextBox ID="password" runat="server" placeholder="pass"  />
            <asp:TextBox ID="email" runat="server" placeholder="email" TextMode="Email" />
            <asp:TextBox ID="roles" runat="server" placeholder="roles" />
            <asp:Button ID="sub" runat="server" Text="Submit" OnClick="sub_Click" />
        </div>
    </form>
</body>
</html>
