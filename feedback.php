<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Contact</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <script src="form.js"></script>
        
    </head>
    <style>


html{    
  background:url('img/feed.jpg') ;
  background-size: cover;
  height:100%;
}
body
{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
}

#feedback-page{
	text-align:center;
}

#form-main{
	width:100%;
	float:left;
	padding-top:0px;
}

#form-div {
	background-color:rgba(72,72,72,0.4);
	padding-left:35px;
	padding-right:35px;
	padding-top:35px;
	padding-bottom:50px;
	width: 450px;
	float: left;
	left: 50%;
	position: absolute;
  margin-top:30px;
	margin-left: -260px;
  border-radius: 7px;
  
}

.montform .feedback-input {
	color:#3c3c3c;
	font-family: Helvetica, Arial, sans-serif;
  font-weight:500;
	font-size: 18px;
	border-radius: 0;
	line-height: 22px;
	background-color: #fbfbfb;
	padding: 13px 13px 13px 54px;
	margin-bottom: 10px;
	width:100%;
	box-sizing: border-box;
	border: 3px solid rgba(0,0,0,0);
}
.montform .feedback-input:focus{
	background: #fff;
	border: 3px solid #3498db;
	color: #3498db;
	outline: none;
  padding: 13px 13px 13px 54px;
}


.montform  #name{
	background-image: url(https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/svgs/fi-address-book.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

.montform  #name:focus{
	background-image: url(https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/svgs/fi-address-book.svg);
	background-size: 30px 30px;
	background-position: 8px 5px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

.montform  #email{
	background-image: url(https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/svgs/fi-mail.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

.montform  #email:focus{
	background-image: url(https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/svgs/fi-mail.svg);
	background-size: 30px 30px;
  background-position: 11px 8px;
	background-repeat: no-repeat;
}

.montform  #comment{
	background-image: url(https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/svgs/fi-pencil.svg);
	background-size: 30px 30px;
	background-position: 11px 8px;
	background-repeat: no-repeat;
}

.montform  textarea {
    width: 100%;
    height: 150px;
    line-height: 150%;
    resize:vertical;
}

.montform  input:hover, .montform  textarea:hover,
.montform  input:focus, .montform  textarea:focus {
	background-color:#e6e6e6;
}

.button-blue{
	font-family: 'Montserrat', Arial, Helvetica, sans-serif;
	float:left;
	width: 100%;
	border: #fbfbfb solid 4px;
	cursor:pointer;
	background-color: #3498db;
	color:white;
	font-size:24px;
	padding-top:22px;
	padding-bottom:22px;
	transition: all 0.3s;
  margin-top:-4px;
  font-weight:700;
}

.button-blue:hover{
	background-color: rgba(0,0,0,0);
	color: #0493bd;
}
	
.montform  .submit:hover {
	color: #3498db;
}
	
.ease {
	width: 0px;
	height: 74px;
	background-color: #fbfbfb;
	transition: .3s ease;
}

.submit:hover .ease{
  width:100%;
  background-color:white;
}


@media  only screen and (max-width: 580px) {
	#form-div{
		left: 3%;
		margin-right: 3%;
		width: 88%;
		margin-left: 0;
		padding-left: 3%;
		padding-right: 3%;
	}
}


    </style>
    <body >
        <div class="container">
            <div id="form-main">
                <div id="form-div">
                    <form class="montform" id="reused_form"  method="post" >
                        <p class="name">
                            <input name="name" type="text" class="feedback-input" required placeholder="Name" id="name" />
                        </p>
                        <p class="email">
                            <input name="email" type="email" required class="feedback-input" id="email" placeholder="Email" />
                        </p>
                        <p class="text">
                            <textarea name="message" class="feedback-input" id="comment" placeholder="Message"></textarea>
                        </p>
                        <div class="submit">
                            <button type="submit" class="button-blue" >SUBMIT</button>
                            <div class="ease"></div>
                        </div>
                    </form>
                    <div id="error_message" style="width:100%; height:100%; display:none; ">
                        <h4>
                            Error
                        </h4>
                        Sorry there was an error sending your form. 
                    </div>
                    <div id="success_message" style="width:100%; height:100%; display:none; "> <h2>Success! Your Message was Sent Successfully.</h2> </div>
                </div>
            </div>
        </div>
        
    </body>


    <?php
require_once 'connection.php';
 $dbI = mysqli_query($conn, "INSERT INTO feed
 VALUES('$_POST[name]', '$_POST[email]',
 '$_POST[message]')");
 
 

?>

</html>