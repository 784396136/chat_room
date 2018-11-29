<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>基于meiziui的仿微信pc端</title>
	<link rel="stylesheet" href="/css/amazeui.min.css" />
	<link rel="stylesheet" href="/css/main.css" />
    <link rel="stylesheet" href="/css/login.css" />
    <style>
        .contnet {
            box-shadow: 2px 2px 2px 2px rgba(148, 196, 228, 0.24),0 0 2px rgba(78, 168, 228, 0.274);
        }
    </style>
</head>

<body>
	<div class="box">
		<div class="wechat">
            <div class="face">
                <img src="/images/face/20181113111958.jpg" alt="" width="100%" height="100%">
            </div>
            <div class="login">
                <input type="text" placeholder="用户名" name="username" autocomplete="off"><br>
                <input type="text" placeholder="密码" name="password" autocomplete="off">
            </div>
		</div>
	</div>

	<script type="text/javascript" src="/js/jquery.min.js"></script>
</body>

</html>
<script>
    $('input').focus(function(){
        $(this).addClass('contnet');
    })

    $('input').blur(function(){
        $(this).removeClass('contnet')
    })

    // $('input[name=username]').change(function(){
    //     var username = $(this).val();
    //     $.ajax({
    //         type:"POST",
    //     })
    // })
</script>