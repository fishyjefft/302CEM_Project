using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Web.Security;

namespace WebApplication1
{
    public partial class add_dummy : System.Web.UI.Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void sub_Click(object sender, EventArgs e)
        {
            Membership.CreateUser(user_id.Text, password.Text, email.Text);

            Roles.AddUserToRole(user_id.Text,roles.Text);
        }
    }
}