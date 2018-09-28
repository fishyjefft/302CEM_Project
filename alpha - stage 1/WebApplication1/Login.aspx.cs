using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.Security;
using Members = System.Web.Security.Membership;

namespace WebApplication1
{
    public partial class WebForm1 : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {
            if (!this.IsPostBack)
            {
                if (this.Page.User.Identity.IsAuthenticated)
                {
                    Response.Redirect("~/Default.aspx");
                }
            }
        }

        protected void User_Login_Authenticate(object sender, AuthenticateEventArgs e)
        {
            var Logins = sender as System.Web.UI.WebControls.Login;
            MembershipUser User = Members.GetUser(Logins.UserName);

            if (Members.ValidateUser(User_Login.UserName, User_Login.Password) == true)
            {
                String Role = "";

                if (HttpContext.Current.User.IsInRole("Administrator")) Role = "Administrator";
                if (HttpContext.Current.User.IsInRole("Manager")) Role = "Manager";
                if (HttpContext.Current.User.IsInRole("Users")) Role = "Users";

                var ticket = new FormsAuthenticationTicket(1, User_Login.UserName, DateTime.Now, DateTime.Now.AddMinutes(2880), User_Login.RememberMeSet, Role, FormsAuthentication.FormsCookiePath);
                String hash = FormsAuthentication.Encrypt(ticket);
                HttpCookie cookie = new HttpCookie(FormsAuthentication.FormsCookieName, hash);

                if (ticket.IsPersistent)
                    cookie.Expires = ticket.Expiration;

                DateTime Last_Login = User.LastLoginDate;

                Response.Cookies.Add(cookie);
                Session["Status"] = true;
                Session["LastLogin"] = Last_Login;
                Response.Redirect(FormsAuthentication.GetRedirectUrl(User_Login.UserName, User_Login.RememberMeSet));
            }
            else
            {
                ScriptManager.RegisterStartupScript(this, GetType(), "showalert", "alert('Invalid login details.');", true);
            }
        }
    }
}