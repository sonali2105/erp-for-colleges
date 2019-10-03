

<!DOCTYPE hmtl>
<html>
<head><title> GMS | GALGOTIAS MANGEMENT SYSTEM</title></head>
 <style>
body{
margin: 0;padding: 0;
background: url(img/ums_bg.jpg) center center fixed no-repeat;
-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	background-color: #000;
	overflow: auto;
	filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src='img/ums_bg.jpg', sizingMethod='scale');
	-ms-filter: "progid:DXImageTransform.Microsoft.AlphaImageLoader(src='img/ums_bg.jpg', sizingMethod='scale')";
}
@font-face
{
	font-family: 'segoe_uilight';
	src: url('ufonts.com_segoe_ui_light-webfont.eot');
	src: url('ufonts.com_segoe_ui_light-webfont.eot') format('embedded-opentype'), url('ufonts.com_segoe_ui_light-webfont.woff') format('woff'), url('ufonts.com_segoe_ui_light-webfont.ttf') format('truetype'), url('ufonts.com_segoe_ui_light-webfont.svg#segoe_uilight') format('svg');
	font-weight: normal;
	font-style: normal;
}
.main_div_mid{
	width: 610px;
	margin: 0 auto;
}
.main_div_left
{
	width: 610px;
	float: left;
}

.gu_logo{
	width: 140px;
	margin: 0 auto;
	margin-top: 10px;
	text-align: center;
}
.ums_logo
{
	width: 383px;
	margin: 0 auto;
	margin-top: 18px;
	text-align: center;
}
.login_box
{
	width: 610px;
	margin-top: 30px;
	background: url(img/login_bx_bg.png);
	float: left;
	position: relative;
	-webkit-box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, 0.3);
	-moz-box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, 0.3);
	box-shadow: 0px 0px 10px 0px rgba(50, 50, 50, 0.3);
}
.red_box
{
	background: #e04a31;
	margin-top: 10px;
	height: 52px;
	width: 17px;
	float: left;
}
.sign_in
{
	color: rgb(224, 74, 49);
	float: left;
	font-family: 'segoe_uilight';
	font-size: 35px;
	margin-top: 13px;
	padding-left: 15px;
}

.download{
	margin-top: 50px;
	color: #FFF;
	font-size: 20px;
	float: left;
	text-align: center;
	width: 100%;
	font-family: 'segoe_uilight';
}
.download_icon
{
	float: left;
	margin-top: 10px;
	text-align: center;
	width: 100%;
}
.input_type
{
	width: 75%;
	padding-right: 30px;
	background: #f8f8f8;
	padding-left: 5px;
	height: 36px;
	font-size: 20px;
	color: #919191;
	border: none;
	font-family: 'segoe_uilight';
	-webkit-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	-moz-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	background: url(img/user_icon.png) right no-repeat #f8f8f8;
}
.input_type:focus
{
	-webkit-box-shadow: 1px 1px 1px 0px rgba(224, 74, 49, 0.75);
	-moz-box-shadow: 1px 1px 1px 0px rgba(224, 74, 49, 0.75);
	box-shadow: 1px 1px 1px 0px rgba(224, 74, 49, 0.75);
}
.input_type_pass
{
	width: 75%;
	background: #f8f8f8;
	padding-right: 30px;
	padding-left: 5px;
	height: 36px;
	font-size: 20px;
	color: #919191;
	border: none;
	font-family: 'segoe_uilight';
	-webkit-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	-moz-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	background: url(img/password_icon.png) right no-repeat #f8f8f8;
}
.input_type_pass:focus
{
	-webkit-box-shadow: 1px 1px 1px 0px rgba(224, 74, 49, 0.75);
	-moz-box-shadow: 1px 1px 1px 0px rgba(224, 74, 49, 0.75);
	box-shadow: 1px 1px 1px 0px rgba(224, 74, 49, 0.75);
}
.select_ums
{
	width: 89%;
	padding-left: 5px;
	background: #f8f8f8;
	height: 36px;
	font-size: 20px;
	font-family: 'segoe_uilight';
	color: #919191;
	border: none;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	-moz-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
}
.select_ums:focus
{
	-webkit-box-shadow: 2px 2px 1px 0px rgba(224, 74, 49, 0.75);
	-moz-box-shadow: 2px 2px 1px 0px rgba(224, 74, 49, 0.75);
	box-shadow: 2px 2px 1px 0px rgba(224, 74, 49, 0.75);
}
.select_ums_store
{
	width: 97%;
	padding-left: 5px;
	background: #f8f8f8;
	height: 36px;
	font-size: 20px;
	font-family: 'segoe_uilight';
	color: #919191;
	border: none;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	-moz-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
}
.select_ums_store:focus
{
	-webkit-box-shadow: 2px 2px 1px 0px rgba(224, 74, 49, 0.75);
	-moz-box-shadow: 2px 2px 1px 0px rgba(224, 74, 49, 0.75);
	box-shadow: 2px 2px 1px 0px rgba(224, 74, 49, 0.75);
}
.table
{
	width: 610px;
	float: left;
}
.login_button
{
	position: absolute;
	bottom: -40px;
	left: 267px;
}
 .forget_password
{
	position: absolute;
	bottom: -55px;
	left: 0px;
} 

.staff_mail
{
	position: absolute;
	bottom: -55px;
	right: 70px;
}
.student_mail
{
	position: absolute;
	bottom: -60px;
	right: -6px;
}
.login_tbl td
{
	vertical-align: top;
	width: 50%;
}

.login_tbl td input, .login_tbl td select
{
	float: left;
}

.login_tbl td span
{
	float: left;
}
.password_change
{
	font-family: 'segoe_uilight';
	padding: 3px;
	margin-bottom: 15px;
	text-align: center;
	background: #B368D9;
	-webkit-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	-moz-box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	box-shadow: 1px 1px 1px 0px rgba(50, 50, 50, 0.75);
	color: #fff;
	width: 100%;
}
.login_tbl span {
    background-color: #7CAF00;
    float: right;
    margin-top: 0;
    border-bottom:2px solid #000;
}
.shift{
margin-top:1%;
}</style>
 <body>
<div class="main_div_mid">
        <div class="main_div_left">
            <div class="gu_logo">
                <img src="img/logo.png" width="140" alt="GU" height="140" /></div>
             <div style="margin-top:10%">
			<div class="ums_logo" style="margin-top:7%;padding-right:20%">
                <img src="img/ums_logo.png" width="500" height="80" alt="ums" /></div>
        </div></div>
        <div class="login_box" style="margin-top:10%">
		
            <div class="red_box">
            </div>
            <div class="sign_in">
                Sign In</div>
				<form method="post" action="/pro/dashboard/validation.php">
            <div class="table">
                <div id="UpdatePanel1">
                        <table align="center" width="100%" border="0" cellspacing="30" cellpadding="0" class="login_tbl">
                           <div class="shift"> <tr>
                                <td class="auto-style1">
                                 <div style="margin-top:3%">   <input name="username" type="text" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;txtU\&#39;,\&#39;\&#39;)&#39;, 0)" onkeypress="if (WebForm_TextBoxKeyHandler(event) == false) return false;" id="txtU" class="input_type" placeholder="User ID" required />
                                </td></div>
                                <td class="auto-style1">
                                    <div style="margin-top:3%"><input name="password" type="password" id="Txtpw" class="input_type_pass" placeholder="Password" required />
									
									
                                    <span id="RequiredFieldValidator2" style="visibility:hidden;"><img src="img/star.png" /></span>
                                </td>
								
                            </tr>

                            <tr>
                                <td colspan="2">
                                    </tr>
                        </table>
</div>
            </div><div style="margin-top:7%"></div>
            <div class="login_button">
                <input type="image" name="iBtnLogins" id="iBtnLogins" src="img/login_icon.png" alt="login" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;iBtnLogins&quot;, &quot;&quot;, true, &quot;1&quot;, &quot;&quot;, false, false))" style="height:73px;width:73px;" />
            </form></div>
            <div class="forget_password">
                <a href="gms/forgetpassword.html">
                    <img src="img/f_p.png" width="101" height="48" alt="staff" /></a></div>
          <!--  <div class="staff_mail">
                <a href="#"
                    target="_blank">
                    <img src="img/staff_mail.png" width="98" height="50" alt="staff" /></a></div>
            <div class="student_mail">
                <a href="#" target="_blank">
                    <img src="img/student_mail_icon.png" width="106" height="55" alt="student" /></a></div>-->
        </div>
        <div class="download" style="margin-top:15%">
            Download Our Official App</div>
        <div class="download_icon">
            <a href="#" target="_blank">
                <img src="img/apple_icon.png" width="49" height="50" alt="apple" /></a>
            <a href="#" target="_blank">
                <img src="img/android_icon.png" width="49" height="50" alt="android" /></a>
    </div>
    <div style="position: absolute; bottom: 0; right: 10px;">
    <style type="text/css">
    .padding
    {
    	padding-top:5px;
    	padding-bottom:5px;
    }
    </style>
 </body>
 </html>
 
