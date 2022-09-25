<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="./images/favicon.png" type="image/png" sizes="16x16">
<title>forum</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="main.js"></script>
</head>

<style>
  *{
       padding: 0%;
       margin: 0%;
       font-family: 'comic sans ms', Tahoma, Geneva, Verdana, sans-serif;
}
nav{
       display: flex;
       height: 80px;
       padding-top: 1%;
}
nav h3{
       display: flex;
       position: absolute;
       left: 1%;
       top: 0.2%;
}
nav ul{
       display: flex;
       position: absolute;
       right: 1%;
}
nav ul li{
       display: inline;
       width: 100px;
       height: 30px;
       text-align: center;
}
nav ul li:hover{
       border-bottom: 2px solid #fca311;
       transition: 0.5s;
}
.seek1{
       width: 250px;
       height: 40px;
       border-radius: 62.8px;
}
.sub1{
       width: 70px;
       height: 40px;
       background-color: #fca311;
       border-radius: 62.8px;
       border: none;
}
.chat{
       display: flex;
       position: sticky;
       left: 0px;
       top: 0%;
}
</style>
<script>
$(document).ready(function(){
	$("#forms").hide();
	$("#adds").click(function(){
		$("#forms").show();
	});
});
</script>
<body>

<!-- Modal -->
<div id="ReplyModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Reply Question</h4>
      </div>
      <div class="modal-body">
        <form name="frm1" method="post">
            <input type="hidden" id="commentid" name="Rcommentid">
        	<div class="form-group">
        	  <label for="usr">Write your name:</label>
        	  <input type="text" class="form-control" name="Rname" required>
        	</div>
            <div class="form-group">
              <label for="comment">Write your reply:</label>
              <textarea class="form-control" rows="5" name="Rmsg" required></textarea>
            </div>
        	 <input type="button" id="btnreply" name="btnreply" class="btn btn-primary" value="Reply">
      </form>
      </div>
    </div>

  </div>
</div>

<div class="container">

<nav>
       <h3 style="width: 110px; height: 40px; background-color: #e5e5e5; border-radius: 62.8px; text-align: center; justify-content: center;"><span style="color: #fca311">We</span><span style="color: #fb6f92">r</span>coders</h3>
       <div>
       <ul>
              <li>Home</li>
              <li>forum</li>
              <li>dev-social</li>
              <li>dev-space</li>
              <li>profile</li>
              <form action="#">
                     <input type="search" name="#" placeholder="  Recherche..." id="#" class="seek1">
                     <input type="submit" value="Aller" class="sub1">
              </form>
              <li>Login</li>
              <li>SignUp</li>
       </ul>
</nav>

<div class="panel panel-default" style="margin-top:50px">

  <h4 style="float: right;" id="adds">ADD</h4>
  <div class="panel-body">
    <h3>WeRCoders forum</h3>
    <hr>
    <form name="frm" method="post" id="forms">
        <input type="hidden" id="commentid" name="Pcommentid" value="0">
	<div class="form-group">
	  <label for="usr">Write your name:</label>
	  <input type="text" class="form-control" name="name" required>
	</div>
    <div class="form-group">
      <label for="comment">Write your question:</label>
      <textarea class="form-control" rows="5" name="msg" required></textarea>
    </div>
	 <input type="button" id="butsave" name="save" class="btn btn-primary" value="Send">
  </form>
  </div>
</div>
  

<div class="panel panel-default">
  <div class="panel-body">
    <h4>Recent questions</h4>           
	<table class="table" id="MyTable" style="background-color: #edfafa; border:0px;border-radius:10px">
	  <tbody id="record">
		
	  </tbody>
	</table>
  </div>
</div>

</div>

</body>
</html>