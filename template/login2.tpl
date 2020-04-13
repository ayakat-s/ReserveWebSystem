<!DOCTYPE html>
<html lang="jp">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン画面</title>
</head>
<body>
    
</body>
</html>
    <HEAD>
    <META HTTP EQUIV='Content-Type' CONTENT='text/html;charset=UTF-8'>
    <TITLE>ログイン画面</TITLE>
    </HEAD>
    <BODY>
    <P STYLE='color: red'>ABC写真</P>
    ログインしてください<br>
    <FORM ACTION="" METHOD="post">
    ユーザ名<INPUT TYPE='text' NAME='user' SIZE ='30'><br>
    パスワード<INPUT TYPE="password" NAME ="pass" SIZE ="30">
    <INPUT TYPE ="submit" ID="login" NAME="login" VALUE="送信">
    <P>{$errorMessagePASS}</P>　　　　　　　　　　　　　　　　　　　　⑯
    <P>{$errorMessageUSER}</P>　　　　　　　　　　　　　　　　　　　   ⑰
    </FORM>
    </BODY>
    </HTML>