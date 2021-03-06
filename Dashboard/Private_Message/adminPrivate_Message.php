

<html xmlns="http://www.w3.org/1999/xhtml">
<head>

    
    <meta charset="UTF-8" />

    <link href="../css/bootstrap.min.css" rel="stylesheet" />
    <link href="../css/bootstrap-theme.min.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="css/Private_Chat_Style.css" rel="stylesheet"/>
    <link href="../css/jquery.yacal.css" rel="stylesheet"/>

    <title>Private Message</title>


  <style type="text/css">

  .user_picture{
    border-radius: 10px;
    margin-top: 20px;
    height: 120px;
    width: 120px;
    box-shadow: 3px 3px 3px;
  }

  #my_profile_holder{
    float:left;
  }

  #details_holder{
    float: right;
    text-align: left;
    margin-top: 25px;
    margin-right: 40px;
  }

  .word-styling{
    font-size: .8em;
  }

  .heading-style{
    color:rgba(69, 162, 255, 0.93);
    font-size: .8em;
  }

  </style>



</head>
<body>
	
<div class="nav main-header" id="top-navigation">
<div id="top-navigation-logo">


<span>
<!-- <img id="img-logo" src="../img/logo.png" alt="Logo"/> -->
<a href="#" class="header_text"><p id="header-text" class="text-muted">send<span style="color:blue">CHat</span></p></a>
</span>
</div>


<div id="top-navigation-username">

 <span id="my_profile_picture"></span>

  
<div id="dp_form_holder">
<form method="post" action="" enctype="multipart/form-data">
  <input type="file" name="file" id="file"/>
  <input type="submit" name="submit_file" id="submit_file"/>
</form>
</div>

<span style="color:white; margin-top:3px"><em>Welcome,&nbsp;</em></span>
<span style="margin-top:3px"><strong><?php echo ($_COOKIE["user_first_name"]); ?></strong></span>
</div>
</div>



<div class="mycontainer">

	

    <div class="navigations">
        <ul class="lists">
            
            <!-- <li><a href="../General_Message/adminGeneral_Message.php"><img src="../img/chat-1.png" class="navimg img-responsive" /><span class="nav-writting">Public Chat</span></a></li> -->
            <li><a style="border-left:4px solid rgba(69, 162, 255, 0.93); border-radius:10px" href="adminPrivate_Message.php"><img src="../img/send-file.png" class="navimg img-responsive" /><span class="nav-writting">Private Chat</span></a></li>
            <!-- <li><a href="../General_Share/adminGeneral_Share.php"><img src="../img/businessman.png" class="navimg img-responsive" /><span class="nav-writting">Public Share</span></a></li>
            <li><a href="../Private_Share/adminPrivate_Share.php"><img src="../img/remove-user.png" class="navimg img-responsive" /><span class="nav-writting">Private Share</span></a></li> -->
            <li><a href="../General_announcement/admingeneral_announcement.php"><img src="../img/log-file-format-1.png" class="navimg img-responsive" /><span class="nav-writting">General Announcements</span></a></li>
            <li onclick="Logout()"><a href="../../adminchatindex.php"><img src="../img/logout.png" class="navimg img-responsive" /><span class="nav-writting">Logout</span></a></li>
        </ul>
    </div>

    

    <div class="container-fluid" id="main_content">

            <div style="display:none">
            <form method="post" action="" enctype="multipart/form-data">
              <input type="file" name="file" id="my_upload_file"/>
              <input type="submit" name="upload_file" id="upload_file"/>
            </form>
            </div>

      <div class="row">

      <div id="Get_Online_Users" class="col-md-2">

      </div>

      <div id="Main_Chat_Box" class="col-md-7">
        <br>
        <div id="get_chatting_user_name">
        <div id="get_name" style="font-weight:bold;font-size:1.5em;float:left;color:rgba(69, 162, 255, 0.93)"></div>
        <div style="float:right"><img src="../img/upload.png" id="btn_upload" style="cursor:hand;margin-right:15px; margin-top:-8px" height=35px width=35px title="Click here to upload file"/></div>
        <br>
        </div>
        <hr>
      <div id="get_chat_logs">

      </div>

      </div>

      <div id="Right_side_bar" class="col-md-3">
      </br>
        <div><span class="right_side_logo"> Today <hr></span>
          <div class="calendar"></div>
          </div>
        <div><span class="right_side_logo"> Profile </span> <hr></div>
        <div id="get_users_profile">

        </div>
      </div>
    </div>
    </div>
    <div>

    <form method="post" action="Private_Message.php" id="form_send_message">
    <textarea id="text_area" placeholder="Type Something Here" name="txtmessage"></textarea><img src="../img/send.png" alt="Send Image" id="send_button"/>
    <input type="submit" name="send_message" value="" id="btn_Send"/>
  </form>
  </div>
  </div>

  <?php

        $host = "localhost";
        $user = "root";
        $pass = "";
        $database = "solid";

        $connection_String = mysqli_connect($host,$user,$pass,$database);

        if(isset($_POST["send_message"])){
          if(!empty($_POST["txtmessage"])){
            $messageSender = $_COOKIE["user_first_name"];
            $newmessage = mysqli_real_escape_string($connection_String, $_POST["txtmessage"]);
            $perfect_table = $_COOKIE["correctTable"];
            $query = "INSERT INTO $perfect_table ( Usernames, Messages ) VALUES ('$messageSender','$newmessage')";
            if($run = mysqli_query($connection_String,$query)){
              echo "<embed loop='false' src='Notification.wav' autoplay='true' hidden='true'/>";
            };
          };
        };


        if(isset($_POST["submit_file"])){
        $selected_username = $_COOKIE["user_first_name"];
        $users_last_name = $_COOKIE["users_last_name"];
        move_uploaded_file($_FILES["file"]["tmp_name"],"../Profile_Pictures/".$_FILES["file"]["name"]);
        $connection_String = mysqli_connect($host,$user,$pass,$database);
        $myfiles = $_FILES["file"]["name"];
        $update_profile_query = "UPDATE users_table SET Profile_Picture = '$myfiles' WHERE user_fname ='$selected_username' AND user_lname ='$users_last_name'";
        $execute_update_profile_query = mysqli_query($connection_String,$update_profile_query);
      };


  ?>


<script src="../js/jquery-3.1.1.min.js"></script>
 <script src="../js/bootstrap.min.js"></script>
 <script src="../js/jquery.yacal.min.js"></script>



  <script type="text/javascript">
  $(document).ready(function(){

    $.ajax({
      cache:true,
      success:function(status){
  setInterval(function(){
      $("#Get_Online_Users").load("Online_Users.php"); 
    },1000);
  }
  });

    setInterval(function(){
      $("#get_chat_logs").load("Chat_Log.php");   
    },1000);

  setInterval(function(){
    $("#get_name").load("user_clicked_on.php");
  },1000);

  setInterval(function(){
    $("#get_users_profile").load("get_users_profile.php");
  },1000);

  $("#send_button").hover(function() {

  $(this).attr("src","../img/send2.png");
      }, function(){

  $(this).attr("src","../img/send.png");
  });

  $("#send_button").click(function(){
    $("#btn_Send").trigger("click");
  });

  $("#btn_Send").click(function(){
    $(this).submit();
  });

  $("#my_profile_picture").load("Get_Profile_Picture.php");

  $(" #my_profile_picture").click(function(){
  $('#file').trigger("click");
  });

  $("#file").change(function(){
    $("#submit_file").trigger("click");
  });

  $("#submit_file").click(function(){
      $(this).submit();
  });

  $("#submit_file").submit(function(){
  $("#my_profile_picture").load("Get_Profile_Picture.php");
  });


    $(".calendar").yacal({
    tpl: {
    weekday: '<strong class="wday wd#weekday#">#weekdayName#<\/strong>'
    } });
});

</script>

<script>
  function Logout(){
  $.get("../Logout/Logout.php");
  }
</script>

</body>
</html>
