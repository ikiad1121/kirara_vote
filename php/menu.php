<?php
    session_start();

    if(
        isset($_SESSION['err211']) 
        && isset($_SESSION['first-vote21-sub'])
        && isset($_SESSION['second-vote21-sub'])
        ){
        unset($_SESSION['first-vote21-sub']);
        unset($_SESSION['second-vote21-sub']);
    }

    if(
        isset($_SESSION['err221']) 
        && isset($_SESSION['first-vote22-sub'])
        && isset($_SESSION['second-vote22-sub'])
        ){
        unset($_SESSION['first-vote22-sub']);
        unset($_SESSION['second-vote22-sub']);
    }

    if(
        isset($_SESSION['err231']) 
        && isset($_SESSION['first-vote23-sub'])
        && isset($_SESSION['second-vote23-sub'])
        ){
        unset($_SESSION['first-vote23-sub']);
        unset($_SESSION['second-vote23-sub']);
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/styles.css" />
		<link rel="icon" href="../assets/image/iconF.ico">
        <title>キャラクター部門｜きららキャラ人気投票ページ(非公式)</title>
    </head>
    <body>
        <nav></nav>
        <header></header>
        <main>
            <div class="pagehead">
                <h1>部門選択</h1>
                <p>
                    このページでは「作品部門」「キャラクター部門」の2つの部門を用意しております。
                </p>
            </div>
            <div class="pagemid1">
                <p>
                    <ol>
                        <li>
                            <a href="main1.php">作品部門</a><br>
                            作品単位で投票を行います。
                        </li>
                        <br>
                        <li>
                            <a href="main2.php">キャラクター部門</a><br>
                            キャラクター単位で投票を行います。
                        </li>
                    </ol>
                </p>
            </div>
            <p>
                <a href="../index.html">戻る</a>
            </p>
        </main>
        <footer></footer>
    </body>
</html>