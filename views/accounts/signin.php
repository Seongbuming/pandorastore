<!doctype html>
<html xml:lang="ko" lang="ko">
<head>
    <?=$this->loadLayout("head")?>
    <link rel="stylesheet" href="/stylesheets/accounts.css" />
</head>

<body>
    <header>
        <?=$this->loadLayout("header")?>
    </header>

    <div id="contents">
        <form class="signin-form" action="/accounts/signin_auth" method="post">
            <h2>환영합니다.</h2>
            <input name="UserID" type="text" placeholder="아이디" required />
            <input name="Password" type="password" placeholder="비밀번호" required />
            <input type="submit" value="로그인" />
        </form>
    </div>

    <footer>
        <?=$this->loadLayout("footer")?>
    </footer>

    <script src="/libraries/jquery.js"></script>
    <script src="/modules/stickymenu/stickymenu.js"></script>
    <script src="/scripts/header.js"></script>
</body>
</html>
