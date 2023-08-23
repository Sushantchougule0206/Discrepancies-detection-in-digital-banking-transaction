
        
		<div class="row">
		    <div class="col-md-12">
			    <div class="breadcrumbs">
				    <ul class="breadcrumb">
                        <li><a href="index.php">Home</a> <span class="divider"></span></li>
                        <li class="active">My Account</li>
                    </ul>
				</div>
			</div>
			
		</div>
		
		<div class="row">
		    <div class="col-md-12">
				<h2>My Account</h2>
			</div>
		</div>
		
		<div class="row">
		    <div class="col-md-6">
			        
					<form class="loginbox form-horizontal" id="logform">
						<p>Login</p>
						<div id="logresult"></div>
						<div class="form-group">
							<label class="control-label col-md-4" for="inputEmail">Email<span class="required">*</span></label>
							<div class="col-md-8">
								<input class="form-control" type="text" name="UserEmail">
							</div>
						</div>
						<div class="form-group">
							<label class="control-label col-md-4" for="inputPassword">Password<span class="required">*</span></label>
							<div class="col-md-8">
								<input class="form-control" type="password" name="UserPass">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-12">
								<button class="btn btn-primary" type="button" id="Logbutton" style="color:#fff;background-color: #000;">Login</button>
							</div>
						</div>
			        </form>

			</div>
			
			<div class="col-md-6">
				 <script type="text/javascript" src="data/jquery.min.js"></script>
<script type="text/javascript">
$(function() {

$("#regbutton").click(function() {
var info=$('#regformsubmit').serialize();
$.ajax({
type: "POST",
url: "Regpage.php",
data: info,
cache: true,
success: function(html){
$("#regresult").html(html);
}  
});
});

$("#Logbutton").click(function() {
var info=$('#logform').serialize();
$.ajax({
type: "POST",
url: "Logpage.php",
data: info,
cache: true,
success: function(html){
$("#logresult").html(html);
}  
});
});




});
</script>



						 <form class="loginbox form-horizontal" id="regformsubmit">
							<p>Register</p>
							<div id="regresult"></div>
				            <div class="form-group">
					            <label class="control-label col-md-4" for="inputEmail">Name<span class="required">*</span></label>
					            <div class="col-md-8">
					                <input class="form-control" type="text" name="FullNam">
					            </div>
				            </div>
                      
					  				            <div class="form-group">
					            <label class="control-label col-md-4" for="inputEmail" >Bank Account<span class="required">*</span></label>
					            <div class="col-md-8">
					                <input id="inputEmail" class="form-control" type="text" name="Accid">
					            </div>
				            </div>

				            <div class="form-group">
					            <label class="control-label col-md-4" for="inputEmail" >Email<span class="required">*</span></label>
					            <div class="col-md-8">
					                <input id="inputEmail" class="form-control" type="text" name="Emailid">
					            </div>
				            </div>

				            <div class="form-group">
					            <label class="control-label col-md-4" for="inputEmail" >Mobile No</label>
					            <div class="col-md-8">
					                <input id="inputEmail" class="form-control" type="text" name="MobNo">
					            </div>
				            </div>

						
				            

							<div class="form-group">
					            <label class="control-label col-md-4" for="inputPassword">Password<span class="required">*</span></label>
					            <div class="col-md-8">
					                <input class="form-control" type="password" name="Pass">
					            </div>
				            </div>
							<div class="form-group">
								<label class="control-label col-md-4" for="inputPassword">Re-enter password<span class="required">*</span></label>
								<div class="col-md-8">
									<input id="inputPassword" class="form-control" type="password" name="Cpass">
								</div>
							</div>

							<div class="form-group" id="Addressvaladd">
									<label class="control-label col-md-4" for="inputPassword">Address<span class="required">*</span></label>
								<div class="col-md-8">
									<textarea class="form-control" name="Address"></textarea>
								</div>
								
							</div>

				            <div class="form-group">
					            <div class="col-md-12">
					                <button class="btn btn-primary" type="button" id="regbutton" style="color:#fff;background-color: #000;">Register</button>
					            </div>
				            </div>
						</form>					
			           
			</div>
		</div>
		
	