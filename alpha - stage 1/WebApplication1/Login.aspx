<%@ Page Title="" Language="C#" MasterPageFile="~/Site1.Master" AutoEventWireup="true" CodeBehind="Login.aspx.cs" Inherits="WebApplication1.WebForm1" %>
<asp:Content ID="Content1" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
        

</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder2" runat="server">
    <form id="login_form" runat="server">
    <div class="container" style="margin-top:70px;">
            <div class="row">
                
                <div class="col-lg-5 col-md-6 col-sm-8 col-xs-12 " style="margin:auto; float:initial; padding-top: 5%">
                    <div class="row info">
                        <asp:Login ID="User_Login" runat="server" EnableViewState="false" RenderOuterTable="false" OnAuthenticate="User_Login_Authenticate">
                            <LayoutTemplate>
                                <div class="card-header" style="margin-bottom:90px; margin-left:100px">
                                    <h3 class="panel-title" style="text-align: center; font-weight: bold">  
                                        <a class="collapseWill">Login to System</a>  
                                    </h3>  
                                    <div class="card-body">  
                                        <p class="failureNotification text-center text-danger">
                                            <asp:Literal ID="FailureText" runat="server"></asp:Literal>
                                            <asp:ValidationSummary ID="LoginUserValidationSummary" runat="server" CssClass="failureNotification" 
                                                ValidationGroup="LoginUserValidationGroup"/>
                                        </p>
                                            
                                        <fieldset>  
                                            <div class="form-group">  
                                                <div class="col-md-"></div>  
                                                <label class="col-md-12 control-label" for="prependedcheckbox">  
                                                    User ID  
                                                </label>  
                                                <div class="col-md-12">  
                                                    <div class="input-group">  
                                                        <span class="input-group-addon">  
                                                            <i class="glyphicon glyphicon-user"></i>  
                                                        </span>  
                                                        <asp:TextBox ID="UserName" CssClass="form-control" placeholder="Enter User ID" runat="server"></asp:TextBox>  
                                                    </div>  
                                                    <asp:Label ID="lblErrUserName" CssClass="help-block" runat="server" Text="" ForeColor="White"></asp:Label>
                                                    <asp:RequiredFieldValidator ID="UserNameRequired" runat="server" ControlToValidate="UserName"
                                                        ErrorMessage="User Name is Required!" ToolTip="User Name is Required." ValidationGroup="LoginUserValidationGroup">*</asp:RequiredFieldValidator>
                                                </div>  
  
                                                <label class="col-md-12 control-label" for="prependedcheckbox">  
                                                    Password  
                                                </label>  
                                                <div class="col-md-12">  
                                                    <div class="input-group">  
                                                        <span class="input-group-addon">  
                                                            <i class="glyphicon glyphicon-lock"></i>  
                                                        </span>  
                                                        <asp:TextBox ID="Password" CssClass="form-control" placeholder="Enter Your Password" runat="server" TextMode="Password"></asp:TextBox>  
                                                    </div>  
                                                    <asp:Label ID="lblErrPassword" CssClass="help-block" runat="server" Text="" ForeColor="White"></asp:Label>  
                                                    <asp:RequiredFieldValidator ID="PasswordRequired" runat="server" ControlToValidate="Password"
                                                        ErrorMessage="Password is Required!" ToolTip="Password is Required." ValidationGroup="LoginUserValidationGroup">*</asp:RequiredFieldValidator>
                                                </div>  
  
                                                <div class="col-md-12">  
                                                    <div class="col-lg-6">  
                                                        <asp:CheckBox ID="chbRemember" Visible="false" runat="server" Text="Remember Me" />  
                                                    </div>  
                                                    <div class="col-lg-12">  
                                                        <div class="input-group" style="width: 100%">  
                                                            <asp:Button ID="Register" CssClass="btn btn-success" CommandName="Register" ValidationGroup="LoginUserValidationGroup" Text="Register" runat="server" Style="width: 100%" />  
                                                        </div>  
                                                    </div>  
                                                    <div class="col-lg-12">  
                                                        <div class="input-group" style="width: 100%; margin-top:20px">  
                                                            <asp:Button ID="btnLogin" CssClass="btn btn-success" CommandName="Login" ValidationGroup="LoginUserValidationGroup" Text="Login" runat="server" Style="width: 100%" />  
                                                        </div>  
                                                    </div>
                                                </div>  
                                            </div>  
                                        </fieldset>  
  
                                    </div>  
                                </div>
                            </LayoutTemplate>
                        </asp:Login>
                    </div>
                </div>                
                

            </div>
        </div>
        </form>
</asp:Content>
