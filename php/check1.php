<?php
    session_start();
    $_SESSION['err111'] = false;
    $_SESSION['err121'] = false;
    $_SESSION['err131'] = false;

    if(isset($_POST["first-vote11"])){
        if($_POST["first-vote11"] != "選択してください"){
            $firstVote11 = $_POST["first-vote11"];
            $firstVote12 = '';
            $thirdVote12 = '';
            $firstVote13 = '';
            $thirdVote13 = '';
            $firstVote14 = '';
            $thirdVote14 = '';
            $firstVote15 = '';
            $thirdVote15 = '';

            $_SESSION['first-vote11-sub'] = $firstVote11;

            if(mb_strlen($_POST["third-vote11"]) > 100){
                $_SESSION['err112'] = true;
            }else{
                $thirdVote11 = htmlspecialchars($_POST["third-vote11"]);
                $_SESSION['third-vote11-sub'] = $thirdVote11;
            }
        }else{
            $_SESSION['err111'] = true;
        }
    }else{
        $_SESSION['err111'] = true;
    }

    if(isset($_POST["first-vote12"])){
        if($_POST["first-vote12"] != "選択してください"){
            $firstVote12 = $_POST["first-vote12"];
            $firstVote13 = '';
            $thirdVote13 = '';
            $firstVote14 = '';
            $thirdVote14 = '';
            $firstVote15 = '';
            $thirdVote15 = '';

            $_SESSION['first-vote12-sub'] = $firstVote12;

            if(mb_strlen($_POST["third-vote12"]) > 100){
                $_SESSION['err122'] = true;
            }else{
                $thirdVote12 = htmlspecialchars($_POST["third-vote12"]);
                $_SESSION['third-vote12-sub'] = $thirdVote12;
            }
        }else{
            $_SESSION['err121'] = true;
        }
    }else{
        $_SESSION['err121'] = true;
    }

    if(isset($_POST["first-vote13"])){
        if($_POST["first-vote13"] != "選択してください"){
            $firstVote13 = $_POST["first-vote13"];
            $firstVote14 = '';
            $thirdVote14 = '';
            $firstVote15 = '';
            $thirdVote15 = '';

            $_SESSION['first-vote13-sub'] = $firstVote13;

            if(mb_strlen($_POST["third-vote13"]) > 100){
                $_SESSION['err132'] = true;
            }else{
                $thirdVote13 = htmlspecialchars($_POST["third-vote13"]);
                $_SESSION['third-vote13-sub'] = $thirdVote13;
            }
        }else{
            $_SESSION['err131'] = true;
        }
    }else{
        $_SESSION['err131'] = true;
    }

    if(isset($_POST["first-vote14"])){
        if($_POST["first-vote14"] != '選択してください'){
            $firstVote14 = $_POST["first-vote14"];
            $_SESSION['first-vote14-sub'] = $firstVote14;

            if(mb_strlen($_POST["third-vote14"]) > 100){
                $_SESSION['err142'] = true;
            }else{
                $thirdVote14 = htmlspecialchars($_POST["third-vote14"]);
                $_SESSION['third-vote14-sub'] = $thirdVote14;
            }
        }
    }

    if(isset($_POST["first-vote15"])){
        if($_POST["first-vote15"] != '選択してください'){
            $firstVote15 = $_POST["first-vote15"];
            $_SESSION['first-vote15-sub'] = $firstVote15;

            if(mb_strlen($_POST["third-vote15"]) > 100){
                $_SESSION['err152'] = true;
            }else{
                $thirdVote15 = htmlspecialchars($_POST["third-vote15"]);
                $_SESSION['third-vote15-sub'] = $thirdVote15;
            }
        }
    }

    if(
        $_SESSION['err111']
        || $_SESSION['err112']
        || $_SESSION['err121']
        || $_SESSION['err122']
        || $_SESSION['err131']
        || $_SESSION['err132']
        || $_SESSION['err142']
        || $_SESSION['err152']
    ){
        header('location: main1.php');
    }
?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/styles.css" />
		<link rel="icon" href="../assets/image/iconF.ico">
        <title>作品部門｜きららキャラ人気投票ページ(非公式)</title>
    </head>
    <body>
        <nav></nav>
        <header></header>
        <main>
            <div class="pagehead">
                <h1>作品部門</h1>
                <p>
                    1番推し～5番推しまで、最大で5作品への投票が可能となっております。
                    4番推し・5番推しについては任意ですが、最低でも3作品へは投票をしなければなりません。<br>
                    なお、コメント欄も用意しておりますが、こちらは必須項目ではありません。その作品に並々ならぬ熱意を持っている方はぜひとご活用ください。
                </p>
            </div>
            <div class="pagemid1">
                <p>
                    以下の投票内容でよろしいでしょうか？<br>
                    1番推し<br>
                    <?php
                        echo $firstVote11;
                        if($thirdVote11){
                            echo '<br>コメント：'.$thirdVote11.'('.mb_strlen($thirdVote11).')';
                        }
                    ?><br>
                    <br>
                    2番推し<br>
                    <?php
                        echo $firstVote12;
                        if($thirdVote12){
                            echo '<br>コメント：'.$thirdVote12;
                        }
                    ?><br>
                    <br>
                    3番推し<br>
                    <?php   
                        echo $firstVote13;
                        if($thirdVote13){
                            echo '<br>コメント：'.$thirdVote13;
                        }
                    ?><br>
                    <br>
                    4番推し<br>
                    <?php   
                        if($firstVote14){
                            echo $firstVote14;
                            if($thirdVote14){
                                echo '<br>コメント：'.$thirdVote14;
                            }
                        }else{
                            echo '未記入';
                        }
                    ?><br>
                    <br>
                    5番推し<br>
                    <?php   
                        if($firstVote15){
                            echo $firstVote15;
                            if($thirdVote15){
                                echo '<br>コメント：'.$thirdVote15;
                            }
                        }else{
                            echo '未記入';
                        }
                    ?><br>
                    <form action="vote1.php" method="POST">
                        <input type="hidden" name="first-vote11" value="<?php echo $firstVote11 ?>"></input>
                        <input type="hidden" name="first-vote12" value="<?php echo $firstVote12 ?>"></input>
                        <input type="hidden" name="first-vote13" value="<?php echo $firstVote13 ?>"></input>
                        <?php
                            if($firstVote14){
                                echo '<input type="hidden" name="first-vote14" value="'.$firstVote14.'"></input>';
                            }
                            if($firstVote15){
                                echo '<input type="hidden" name="first-vote15" value="'.$firstVote15.'"></input>';
                            }
                            
                            if($thirdVote11){
                                echo '<input type="hidden" name="third-vote11" value="'.$thirdVote11.'"></input>';
                            }
                            if($thirdVote12){
                                echo '<input type="hidden" name="third-vote12" value="'.$thirdVote12.'"></input>';
                            }
                            if($thirdVote13){
                                echo '<input type="hidden" name="third-vote13" value="'.$thirdVote13.'"></input>';
                            }
                            if($thirdVote14){
                                echo '<input type="hidden" name="third-vote14" value="'.$thirdVote14.'"></input>';
                            }
                            if($thirdVote15){
                                echo '<input type="hidden" name="third-vote15" value="'.$thirdVote15.'"></input>';
                            }
                        ?>
                        <button type="submit" class="a-btn">OK</button><br>
                        <a href="main1.php">やり直す</a>
                    </form>
                </p>
            </div>
        </main>
        <footer></footer>
    </body>
</html>