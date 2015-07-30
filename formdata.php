<!DOCTYPE html>
<head>
<!--Created by Star
    Base template (without user's data) checked by http://starstudios.ru-->
<title>Сообшение отправлено!</title>
<meta name="author" lang="ru" content="starstudios.ru">
<meta name="copyright" content="&copy; StarStudio 2011-2012">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="date" content="2011-11-23T22:49:37+03:00"/>
<meta http-equiv="Refresh" content="1; URL=index.php">
<style>

body
{
		 margin: 0;
		 padding: 0;
		 font: 12px Arial, Helvetica, sans-serif;
		 background: #f1f1f1;
}

.message
{
		-webkit-background-size: 40px 40px;
		-moz-background-size: 40px 40px;
		background-size: 40px 40px;			
		background-image: -webkit-gradient(linear, left top, right bottom,
								color-stop(.25, rgba(255, 255, 255, .05)), color-stop(.25, transparent),
								color-stop(.5, transparent), color-stop(.5, rgba(255, 255, 255, .05)),
								color-stop(.75, rgba(255, 255, 255, .05)), color-stop(.75, transparent),
								to(transparent));
		background-image: -webkit-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
							transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
							transparent 75%, transparent);
		background-image: -moz-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
							transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
							transparent 75%, transparent);
		background-image: -ms-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
							transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
							transparent 75%, transparent);
		background-image: -o-linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
							transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
							transparent 75%, transparent);
		background-image: linear-gradient(135deg, rgba(255, 255, 255, .05) 25%, transparent 25%,
							transparent 50%, rgba(255, 255, 255, .05) 50%, rgba(255, 255, 255, .05) 75%,
							transparent 75%, transparent);
								
		 -moz-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
		 -webkit-box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);		
		 box-shadow: inset 0 -1px 0 rgba(255,255,255,.4);
		 width: 100%;
		 border: 1px solid;
		 color: #fff;
		 padding: 15px;
		 position: fixed;
		 _position: absolute;
		 text-shadow: 0 1px 0 rgba(0,0,0,.5);
		 -webkit-animation: animate-bg 5s linear infinite;
		 -moz-animation: animate-bg 5s linear infinite;
}


.warning
{
		 background-color: #eaaf51;
		 border-color: #d99a36;}
.success
{
		 background-color: #61b832;
		 border-color: #55a12c;
}

.message h3
{
		 margin: 0 0 5px 0;													 
}

.message p
{
		 margin: 0;													 
}

@-webkit-keyframes animate-bg
{
    from {
        background-position: 0 0;
    }
    to {
       background-position: -80px 0;
    }


@-moz-keyframes animate-bg 
{
    from {
        background-position: 0 0;
    }
    to {
       background-position: -80px 0;
    }
}


#trigger-list
{
		 text-align: center;
		 margin: 100px 0;
		 padding: 0;
}

#trigger-list li
{
		 display: inline-block;
		 *display: inline;
		 zoom: 1;
}

#trigger-list .trigger
{
		 display: inline-block;
		 background: #ddd;
		 border: 1px solid #777;
		 padding: 10px 20px;
		 margin: 0 5px;
		 font: bold 12px Arial, Helvetica;
		 text-decoration: none;
		 color: #333;
		 -moz-border-radius: 3px;
		 -webkit-border-radius: 3px;
		 border-radius: 3px;
}

#trigger-list .trigger:hover
{
		background: #f5f5f5;
}

/*--------------------------------------*/



</style>

</head>
<body>

<?php
$beget_headers = "Content-type: text/html; charset=utf-8\r\n";
$beget_headers .= "Content-Transfer-Encoding: 8bit \r\n";
$address = 'ramazanovi.ru@mail.ru';
$sub = "Сообщение из сайта Ramazanovi.ru";
//$result = mail("ramazanovi.ru@mail.ru","Анкета с сайта","
$result = mail("ramazanovi.ru@mail.ru","Анкета с сайта","
Имя: $_POST[name] <br/>
Почта: $_POST[mail]<br/>
Номер: $_POST[phone]<br/> 
Сообщение: $_POST[message]<br/>", $beget_headers);
if($result){
	echo "<div class='success message'>
		 <h1>Сообщение доставлено</h1>

</div>";}
	
	else {
	echo "<div class='error message'>
		 <h1>Ой, произошла ошибка!</h1>
		 </div>";}

?>

</body>
</html>
