<?php 
include("../../../../RESEAU_SOCIAL_ADMIN/Models/DatabaseConnexion.php");
session_start();
$user_id=$_SESSION["user_id"];
$Get_User_Info=$db->prepare("SELECT * FROM users WHERE user_id=:id");
$Get_User_Info->execute(array(
    'id'=>$user_id
));
$user=$Get_User_Info->fetch();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Usergram Social Network</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="css/main.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/color.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
	<div class="container-fluid pdng0">
		<div class="row merged">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="land-featurearea">
					<div class="land-meta">
						<h1>Usergram</h1>
						<p>
							Usergram is your social network 
						</p>
						<div class="friend-logo">
							<span><img src="images/wink.png" alt=""></span>
						</div>
						<a href="#" title="" class="folow-me">Follow Us on</a>
					</div>	
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="login-reg-bg">
					<div class="log-reg-area sign">
							<div class="submit-btns">
                                <a  href="../../../../RESEAU_SOCIAL_ADMIN/Controllers/Admin/Dashboard.controller.php"class="mtr-btn signin" type="submit"><span>cancel</span></a>
								<button class="mtr-btn signup" type="submit"><span>Update</span></button>
							</div>
						</form>
					</div>
					<div class="log-reg-area reg">
						<h2 class="log-title">Update User</h2>
						
						<form method="post"  action="../../../../RESEAU_SOCIAL_ADMIN/Controllers/Admin/Update_user_setting.controller.php" enctype="multipart/form-data">
							<div class="form-group">	
							  <input type="text" required="required" name="name" value=<?php echo $user["user_name"]?>>
							  <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="text" required="required" name="pseudo"  value=<?php echo $user["user_name"]?>>
							  <label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
							  <input type="password" required="required" name="psw"  value=<?php echo $user["user_Password"]?>>
							  <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
								<input type="number" required="required" name="ag"  value=<?php echo $user["Age"]?>>
								<label class="control-label" for="input">Age</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
								<input type="number" required="required" name="phnb"  value=<?php echo $user["phone_number"]?>>
								<label class="control-label" for="input">Tel</label><i class="mtrl-select"></i>
							</div>
							<div class="form-group">	
								<input type="file"  name="pic"  value=<?php echo $user["user_picture"]?>/>
								<label class="control-label" for="input">Picture</label><i class="mtrl-select"></i>
							</div>
							
							<div class="form-radio">
							  <div class="radio">
								<label>
								  <input type="radio" name="sx" checked="checked"/><i class="check-box"></i>Male
								</label>
							  </div>
							  <div class="radio">
								<label>
								  <input type="radio" name="sx"/><i class="check-box"></i>Female
								</label>
							  </div>
							</div>
							<div class="form-group">	
							  <input type="text" required="required" name="mail"  value=<?php echo $user["email"]?>/>
							  <label class="control-label" for="input"><a href="https://wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6c29010d05002c">[email&#160;protected]</a></label><i class="mtrl-select"></i>
							</div>
							<div class="checkbox">
							  <label>
								<input type="checkbox" checked="checked"/><i class="check-box"></i>Accept Terms & Conditions ?
							  </label>
							</div>
							<a href="Connexion.view.php" title="" class="already-have">Already have an account</a>
							<div class="submit-btns">
								<button class="mtr-btn signin" type="submit" name="subscription"><span>Update</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	
	<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="js/main.min.js"></script>
	<script src="js/script.js"></script>

</body>	

</html>