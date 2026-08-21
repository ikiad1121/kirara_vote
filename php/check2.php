<?php
    session_start();
    $_SESSION['err211'] = false;
    $_SESSION['err221'] = false;
    $_SESSION['err231'] = false;


    if(isset($_POST["second-vote21"])){
        if($_POST["second-vote21"] != "選択してください"){
            $firstVote21 = $_POST["first-vote21"];
            $secondVote21 = $_POST["second-vote21"];
            $firstVote22 = '';
            $secondVote22 = '';
            $thirdVote22 = '';
            $firstVote23 = '';
            $secondVote23 = '';
            $thirdVote23 = '';
            $firstVote24 = '';
            $secondVote24 = '';
            $thirdVote24 = '';
            $firstVote25 = '';
            $secondVote25 = '';
            $thirdVote25 = '';
            $firstVote26 = '';
            $secondVote26 = '';
            $thirdVote26 = '';
            $firstVote27 = '';
            $secondVote27 = '';
            $thirdVote27 = '';

            $_SESSION['first-vote21-sub'] = $firstVote21;
            $_SESSION['second-vote21-sub'] = $secondVote21;

            if(mb_strlen($_POST["third-vote21"]) > 100){
                $_SESSION['err212'] = true;
            }else{
                $thirdVote21 = htmlspecialchars($_POST["third-vote21"]);
                $_SESSION['third-vote21-sub'] = $thirdVote21;
            }
        }else{
            $_SESSION['err211'] = true;
        }
    }else{
        $_SESSION['err211'] = true;
    }

    if(isset($_POST["second-vote22"])){
        if($_POST["second-vote22"] != "選択してください"){
            $firstVote22 = $_POST["first-vote22"];
            $secondVote22 = $_POST["second-vote22"];
            $firstVote23 = '';
            $secondVote23 = '';
            $firstVote24 = '';
            $secondVote24 = '';
            $firstVote25 = '';
            $secondVote25 = '';
            
            $_SESSION['first-vote22-sub'] = $firstVote22;
            $_SESSION['second-vote22-sub'] = $secondVote22;

            if(mb_strlen($_POST["third-vote22"]) > 100){
                $_SESSION['err222'] = true;
            }else{
                $thirdVote22 = htmlspecialchars($_POST["third-vote22"]);
                $_SESSION['third-vote22-sub'] = $thirdVote22;
            }
        }else{
            $_SESSION['err221'] = true;
        }
    }else{
        $_SESSION['err221'] = true;
    }

    if(isset($_POST["second-vote23"])){
        if($_POST["second-vote23"] != "選択してください"){
            $firstVote23 = $_POST["first-vote23"];
            $secondVote23 = $_POST["second-vote23"];
            $firstVote24 = '';
            $secondVote24 = '';
            $firstVote25 = '';
            $secondVote25 = '';
            
            $_SESSION['first-vote23-sub'] = $firstVote23;
            $_SESSION['second-vote23-sub'] = $secondVote23;

            if(mb_strlen($_POST["third-vote23"]) > 100){
                $_SESSION['err232'] = true;
            }else{
                $thirdVote23 = htmlspecialchars($_POST["third-vote23"]);
                $_SESSION['third-vote23-sub'] = $thirdVote23;
            }
        }else{
            $_SESSION['err231'] = true;
        }
    }else{
        $_SESSION['err231'] = true;
    }

    if(isset($_POST["second-vote24"])){
        if($_POST["second-vote24"] != '選択してください'){
            $firstVote24 = $_POST["first-vote24"];
            $secondVote24 = $_POST["second-vote24"];
            
            $_SESSION['first-vote24-sub'] = $firstVote24;
            $_SESSION['second-vote24-sub'] = $secondVote24;

            if(mb_strlen($_POST["third-vote24"]) > 100){
                $_SESSION['err242'] = true;
            }else{
                $thirdVote24 = htmlspecialchars($_POST["third-vote24"]);
                $_SESSION['third-vote24-sub'] = $thirdVote24;
            }
        }
    }

    if(isset($_POST["second-vote25"])){
        if($_POST["second-vote25"] != '選択してください'){
            $firstVote25 = $_POST["first-vote25"];
            $secondVote25 = $_POST["second-vote25"];
            
            $_SESSION['first-vote25-sub'] = $firstVote25;
            $_SESSION['second-vote25-sub'] = $secondVote25;

            if(mb_strlen($_POST["third-vote25"]) > 100){
                $_SESSION['err252'] = true;
            }else{
                $thirdVote25 = htmlspecialchars($_POST["third-vote25"]);
                $_SESSION['third-vote25-sub'] = $thirdVote25;
            }
        }
    }

    if(isset($_POST["second-vote26"])){
        if($_POST["second-vote26"] != '選択してください'){
            $firstVote26 = $_POST["first-vote26"];
            $secondVote26 = $_POST["second-vote26"];
            
            $_SESSION['first-vote26-sub'] = $firstVote26;
            $_SESSION['second-vote26-sub'] = $secondVote26;

            if(mb_strlen($_POST["third-vote26"]) > 100){
                $_SESSION['err262'] = true;
            }else{
                $thirdVote26 = htmlspecialchars($_POST["third-vote26"]);
                $_SESSION['third-vote26-sub'] = $thirdVote26;
            }
        }
    }

    if(isset($_POST["second-vote27"])){
        if($_POST["second-vote27"] != '選択してください'){
            $firstVote27 = $_POST["first-vote27"];
            $secondVote27 = $_POST["second-vote27"];
            
            $_SESSION['first-vote27-sub'] = $firstVote27;
            $_SESSION['second-vote27-sub'] = $secondVote27;

            if(mb_strlen($_POST["third-vote27"]) > 100){
                $_SESSION['err272'] = true;
            }else{
                $thirdVote27 = htmlspecialchars($_POST["third-vote27"]);
                $_SESSION['third-vote27-sub'] = $thirdVote27;
            }
        }
    }

    if(
        $_SESSION['err211']
        || $_SESSION['err212']
        || $_SESSION['err221']
        || $_SESSION['err222']
        || $_SESSION['err231']
        || $_SESSION['err232']
        || $_SESSION['err242']
        || $_SESSION['err252']
        || $_SESSION['err262']
        || $_SESSION['err272']
    ){
        header('location: main2.php');
    }

?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="../css/styles.css" />
		<link rel="icon" href="../assets/image/iconF.ico">
        <title>投票アプリ</title>
    </head>
    <body>
        <nav></nav>
        <header></header>
        <main>
            <div class="pagehead">
                <h1>キャラクター部門</h1>
                <p>
                    1番推し～7番推しまで、最大で7人への投票が可能となっております。
                    4番推し～7番推しについては任意ですが、最低でも3人へは投票をしなければなりません。<br>
                    なお、コメント欄も用意しておりますが、こちらは必須項目ではありません。そのキャラクターに並々ならぬ熱意を持っている方はぜひとご活用ください。
                </p>
            </div>
            <div class="pagemid1">
                <p>
                    以下の投票内容でよろしいでしょうか？<br>
                    1番推し<br>
                    <?php
                        echo $firstVote21.' '.$secondVote21;
                        if($thirdVote21){
                            echo '<br>コメント：'.$thirdVote21.'('.mb_strlen($thirdVote21).')';
                        }
                    ?><br>
                    <br>
                    2番推し<br>
                    <?php
                        echo $firstVote22.' '.$secondVote22;
                        if($thirdVote22){
                            echo '<br>コメント：'.$thirdVote22;
                        }
                    ?><br>
                    <br>
                    3番推し<br>
                    <?php   
                        echo $firstVote23.' '.$secondVote23;
                        if($thirdVote23){
                            echo '<br>コメント：'.$thirdVote23;
                        }
                    ?><br>
                    <br>
                    4番推し<br>
                    <?php   
                        if($secondVote24){
                            echo $firstVote24.' '.$secondVote24;
                            if($thirdVote24){
                                echo '<br>コメント：'.$thirdVote24;
                            }
                        }else{
                            echo '未記入';
                        }
                    ?><br>
                    <br>
                    5番推し<br>
                    <?php   
                        if($secondVote25){
                            echo $firstVote25.' '.$secondVote25;
                            if($thirdVote25){
                                echo '<br>コメント：'.$thirdVote25;
                            }
                        }else{
                            echo '未記入';
                        }
                    ?><br>
                    <br>
                    6番推し<br>
                    <?php   
                        if($secondVote26){
                            echo $firstVote26.' '.$secondVote26;
                            if($thirdVote26){
                                echo '<br>コメント：'.$thirdVote26;
                            }
                        }else{
                            echo '未記入';
                        }
                    ?><br>
                    <br>
                    7番推し<br>
                    <?php   
                        if($secondVote27){
                            echo $firstVote27.' '.$secondVote27;
                            if($thirdVote27){
                                echo '<br>コメント：'.$thirdVote27;
                            }
                        }else{
                            echo '未記入';
                        }
                    ?><br>
                    <form action="vote2.php" method="POST">
                        <input type="hidden" name="first-vote21" value="<?php echo $firstVote21 ?>"></input>
                        <input type="hidden" name="first-vote22" value="<?php echo $firstVote22 ?>"></input>
                        <input type="hidden" name="first-vote23" value="<?php echo $firstVote23 ?>"></input>
                        <?php
                            if($firstVote24){
                                echo '<input type="hidden" name="first-vote24" value="'.$firstVote24.'"></input>';
                            }
                            if($firstVote25){
                                echo '<input type="hidden" name="first-vote25" value="'.$firstVote25.'"></input>';
                            }
                            if($firstVote26){
                                echo '<input type="hidden" name="first-vote26" value="'.$firstVote26.'"></input>';
                            }
                            if($firstVote27){
                                echo '<input type="hidden" name="first-vote27" value="'.$firstVote27.'"></input>';
                            }
                        ?>
                        <input type="hidden" name="second-vote21" value="<?php echo $secondVote21 ?>"></input>
                        <input type="hidden" name="second-vote22" value="<?php echo $secondVote22 ?>"></input>
                        <input type="hidden" name="second-vote23" value="<?php echo $secondVote23 ?>"></input>
                        <?php
                            if($secondVote24){
                                echo '<input type="hidden" name="second-vote24" value="'.$secondVote24.'"></input>';
                            }
                            if($secondVote25){
                                echo '<input type="hidden" name="second-vote25" value="'.$secondVote25.'"></input>';
                            }
                            if($secondVote26){
                                echo '<input type="hidden" name="second-vote26" value="'.$secondVote26.'"></input>';
                            }
                            if($secondVote27){
                                echo '<input type="hidden" name="second-vote27" value="'.$secondVote27.'"></input>';
                            }
                            
                            if($thirdVote21){
                                echo '<input type="hidden" name="third-vote21" value="'.$thirdVote21.'"></input>';
                            }
                            if($thirdVote22){
                                echo '<input type="hidden" name="third-vote22" value="'.$thirdVote22.'"></input>';
                            }
                            if($thirdVote23){
                                echo '<input type="hidden" name="third-vote23" value="'.$thirdVote23.'"></input>';
                            }
                            if($thirdVote24){
                                echo '<input type="hidden" name="third-vote24" value="'.$thirdVote4.'"></input>';
                            }
                            if($thirdVote25){
                                echo '<input type="hidden" name="third-vote25" value="'.$thirdVote25.'"></input>';
                            }
                            if($thirdVote26){
                                echo '<input type="hidden" name="third-vote26" value="'.$thirdVote26.'"></input>';
                            }
                            if($thirdVote27){
                                echo '<input type="hidden" name="third-vote27" value="'.$thirdVote27.'"></input>';
                            }
                        ?>
                        <button type="submit" class="a-btn">OK</button><br>
                        <a href="main2.php">やり直す</a>
                    </form>
                </p>
            </div>
        </main>
        <footer></footer>
    </body>
</html>