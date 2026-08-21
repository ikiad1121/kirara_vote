<?php
    session_start();

    $errmsg211 = '';
    $errmsg212 = '';
    $errmsg213 = '';
    $errmsg221 = '';
    $errmsg222 = '';
    $errmsg223 = '';
    $errmsg231 = '';
    $errmsg232 = '';
    $errmsg233 = '';
    $errmsg242 = '';
    $errmsg252 = '';
    $errmsg262 = '';
    $errmsg272 = '';
    if(
        isset($_SESSION['err211'])
    ){
        if($_SESSION['err211']){
            $errmsg211 = '<span class="warn">必須項目です</span>';
        }else{
            if(
                isset($_SESSION['first-vote21-sub'])
                && isset($_SESSION['second-vote21-sub'])
                && isset($_SESSION['third-vote21-sub'])
            ){
                $errmsg211 = '';
                $errmsg212 = '<script>
                                document.getElementById("third-vote21").disabled = false;
                                document.getElementById("third-vote21").value = "'.$_SESSION['third-vote21-sub'].'";
                            </script>
                            ';
                $errmsg213 = '<script>
                                fetch(url1)
                                    .then((res) => res.json()).then((data) => {
                                    console.log(data);
                                    titleArray1(data);
                                });

                                const titleArray1 = (d) =>{
                                    datas1 = d;
                                };

                                fetch(url2)
                                    .then((res) => res.json()).then((data) => {
                                    console.log(data);
                                    charaArray1(data);
                                });

                                const charaArray1 = (d) =>{
                                    datas2 = d;

                                    document.getElementById("first-vote21").innerHTML = `<option value="'.$_SESSION['first-vote21-sub'].'" hidden>'.$_SESSION['first-vote21-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote21.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("second-vote21").innerHTML = `<option value="'.$_SESSION['second-vote21-sub'].'" hidden>'.$_SESSION['second-vote21-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas2[\''.$_SESSION['first-vote21-sub'].'\'].length; i1++){
                                        secondVote21.innerHTML += `<option value="${datas2[\''.$_SESSION['first-vote21-sub'].'\'][i1]}">${datas2[\''.$_SESSION['first-vote21-sub'].'\'][i1]}</option>`;
                                    }
                                    document.getElementById("second-vote21").disabled = false;
                                    document.getElementById("first-vote22").innerHTML = `<option hidden>選択してください</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote22.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("first-vote22").disabled = false;
                                };
                            </script>
                            ';
            }
        }
    }

    if(
        isset($_SESSION['err221']) 
    ){
        if($_SESSION['err221']){
            $errmsg221 = '<span class="warn">必須項目です</span>';
        }else{
            if(
                isset($_SESSION['first-vote22-sub'])
                && isset($_SESSION['second-vote22-sub'])
                && isset($_SESSION['third-vote22-sub'])
            ){
                $errmsg221 = '';
                $errmsg222 = '<script>
                                document.getElementById("third-vote22").disabled = false;
                                document.getElementById("third-vote22").value = "'.$_SESSION['third-vote22-sub'].'";
                            </script>
                            ';
                $errmsg223 = '<script>
                                fetch(url1)
                                    .then((res) => res.json()).then((data) => {
                                    console.log(data);
                                    titleArray2(data);
                                });

                                const titleArray2 = (d) =>{
                                    datas1 = d;
                                };

                                fetch(url2)
                                    .then((res) => res.json()).then((data) => {
                                    console.log(data);
                                    charaArray2(data);
                                });

                                const charaArray2 = (d) =>{
                                    datas2 = d;

                                    console.log("datas2: ", datas2);

                                    document.getElementById("first-vote21").innerHTML = `<option value="'.$_SESSION['first-vote21-sub'].'" hidden>'.$_SESSION['first-vote21-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote21.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("second-vote21").innerHTML = `<option value="'.$_SESSION['second-vote21-sub'].'" hidden>'.$_SESSION['second-vote21-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas2[\''.$_SESSION['first-vote21-sub'].'\'].length; i1++){
                                        secondVote21.innerHTML += `<option value="${datas2[\''.$_SESSION['first-vote21-sub'].'\'][i1]}">${datas2[\''.$_SESSION['first-vote21-sub'].'\'][i1]}</option>`;
                                    }
                                    document.getElementById("second-vote21").disabled = false;

                                    document.getElementById("first-vote22").innerHTML = `<option value="'.$_SESSION['first-vote22-sub'].'" hidden>'.$_SESSION['first-vote22-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote22.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("second-vote22").innerHTML = `<option value="'.$_SESSION['second-vote22-sub'].'" hidden>'.$_SESSION['second-vote22-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas2[\''.$_SESSION['first-vote22-sub'].'\'].length; i1++){
                                        secondVote22.innerHTML += `<option value="${datas2[\''.$_SESSION['first-vote22-sub'].'\'][i1]}">${datas2[\''.$_SESSION['first-vote22-sub'].'\'][i1]}</option>`;
                                    }
                                    document.getElementById("second-vote22").disabled = false;

                                    document.getElementById("first-vote23").innerHTML = `<option hidden>選択してください</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote23.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("first-vote23").disabled = false;
                                };
                            </script>
                            ';
            }
        }
    }

    if(
        isset($_SESSION['err231'])
    ){
        if($_SESSION['err231']){
            $errmsg231 = '<span class="warn">必須項目です</span>';
        }else{
            if(
                isset($_SESSION['first-vote23-sub'])
                && isset($_SESSION['second-vote23-sub'])
                && isset($_SESSION['third-vote23-sub'])
            ){
                $errmsg231 = '';
                $errmsg232 = '<script>
                                document.getElementById("third-vote23").disabled = false;
                                document.getElementById("third-vote23").value = "'.$_SESSION['third-vote23-sub'].'";
                            </script>
                            ';
                $errmsg233 = '<script>
                                fetch(url1)
                                    .then((res) => res.json()).then((data) => {
                                    console.log(data);
                                    titleArray3(data);
                                });

                                const titleArray3 = (d) =>{
                                    datas1 = d;
                                };

                                fetch(url2)
                                    .then((res) => res.json()).then((data) => {
                                    console.log(data);
                                    charaArray3(data);
                                });

                                const charaArray3 = (d) =>{
                                    datas2 = d;

                                    console.log("datas2: ", datas2);

                                    document.getElementById("first-vote21").innerHTML = `<option value="'.$_SESSION['first-vote21-sub'].'" hidden>'.$_SESSION['first-vote21-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote21.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("second-vote21").innerHTML = `<option value="'.$_SESSION['second-vote21-sub'].'" hidden>'.$_SESSION['second-vote21-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas2[\''.$_SESSION['first-vote21-sub'].'\'].length; i1++){
                                        secondVote21.innerHTML += `<option value="${datas2[\''.$_SESSION['first-vote21-sub'].'\'][i1]}">${datas2[\''.$_SESSION['first-vote21-sub'].'\'][i1]}</option>`;
                                    }
                                    document.getElementById("second-vote21").disabled = false;

                                    document.getElementById("first-vote22").innerHTML = `<option value="'.$_SESSION['first-vote22-sub'].'" hidden>'.$_SESSION['first-vote22-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote22.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("second-vote22").innerHTML = `<option value="'.$_SESSION['second-vote22-sub'].'" hidden>'.$_SESSION['second-vote22-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas2[\''.$_SESSION['first-vote22-sub'].'\'].length; i1++){
                                        secondVote22.innerHTML += `<option value="${datas2[\''.$_SESSION['first-vote22-sub'].'\'][i1]}">${datas2[\''.$_SESSION['first-vote22-sub'].'\'][i1]}</option>`;
                                    }
                                    document.getElementById("second-vote22").disabled = false;

                                    document.getElementById("first-vote23").innerHTML = `<option value="'.$_SESSION['first-vote23-sub'].'" hidden>'.$_SESSION['first-vote23-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote23.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("second-vote23").innerHTML = `<option value="'.$_SESSION['second-vote23-sub'].'" hidden>'.$_SESSION['second-vote23-sub'].'</option>`;
                                    for(var i1 = 0; i1 < datas2[\''.$_SESSION['first-vote23-sub'].'\'].length; i1++){
                                        secondVote23.innerHTML += `<option value="${datas2[\''.$_SESSION['first-vote23-sub'].'\'][i1]}">${datas2[\''.$_SESSION['first-vote23-sub'].'\'][i1]}</option>`;
                                    }
                                    document.getElementById("second-vote23").disabled = false;

                                    document.getElementById("first-vote24").innerHTML = `<option hidden>選択してください</option>`;
                                    for(var i1 = 0; i1 < datas1.length; i1++){
                                        firstVote24.innerHTML += `<option value="${datas1[i1]}">${datas1[i1]}</option>`;
                                    }
                                    document.getElementById("first-vote24").disabled = false;
                                };
                            </script>
                            ';
            }
        }
    }

    if(
        isset($_SESSION['err212'])
    ){
        if($_SESSION['err212']){
            $errmsg212 = $errmsg212.'<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err222'])
    ){
        if($_SESSION['err222']){
            $errmsg222 = $errmsg222.'<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err232'])
    ){
        if($_SESSION['err232']){
            $errmsg232 = $errmsg232.'<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err242'])
    ){
        if($_SESSION['err242']){
            $errmsg242 = '<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err252'])
    ){
        if($_SESSION['err252']){
            $errmsg252 = '<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err262'])
    ){
        if($_SESSION['err262']){
            $errmsg262 = '<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err272'])
    ){
        if($_SESSION['err272']){
            $errmsg272 = '<span class="warn">100文字以下にしてください。</span>';
        }
    }

    $_SESSION['err211'] = false;
    $_SESSION['err212'] = false;
    $_SESSION['err221'] = false;
    $_SESSION['err222'] = false;
    $_SESSION['err231'] = false;
    $_SESSION['err232'] = false;
    $_SESSION['err242'] = false;
    $_SESSION['err252'] = false;
    $_SESSION['err262'] = false;
    $_SESSION['err272'] = false;
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
                <h1>キャラクター部門</h1>
                <p>
                    1番推し～7番推しまで、最大で7人への投票が可能となっております。
                    4番推し～7番推しについては任意ですが、最低でも3人へは投票をしなければなりません。<br>
                    なお、コメント欄も用意しておりますが、こちらは必須項目ではありません。そのキャラクターに並々ならぬ熱意を持っている方はぜひとご活用ください。
                </p>
            </div>
            <div class="pagemid1">
                <form action="check2.php" method="POST">
                    <script>
                        let datas1;
                        let datas2;
                        const url1 = "../assets/api/titledata";
                        const url2 = "../assets/api/charadata";
                    </script>
                    <label for="first-vote21">1番(最推し)</label><br>
                    <select id="first-vote21" name="first-vote21">
                        <option hidden>選択してください</option>
                    </select>
                    <label for="second-vote21"></label>
                    <select id="second-vote21" name="second-vote21" disabled>
                        <option>選択できません</option>
                    </select>
                    <span class="required">必須</span>
                    <?php echo $errmsg211 ?>
                    <br>
                    <label for="third-vote21">コメント：</label>
                    <textarea id="third-vote21" name="third-vote21" col="60" row="1" disabled></textarea>
                    <?php echo $errmsg212 ?>
                    <br>
                    ※最推しのところには2票分入ります。
                    <br>
                    <br>
                    <label for="first-vote22">2番</label><br>
                    <select id="first-vote22" name="first-vote22" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <?php echo $errmsg213 ?>
                    <label for="second-vote22"></label>
                    <select id="second-vote22" name="second-vote22" disabled>
                        <option hidden>選択できません</option>
                    </select>
                    <span class="required">必須</span>
                    <?php echo $errmsg221 ?>
                    <br>
                    <label for="third-vote22">コメント：</label>
                    <textarea id="third-vote22" name="third-vote22" col="60" row="1" disabled></textarea>
                    <?php echo $errmsg222 ?>
                    <br>
                    <br>
                    <label for="first-vote23">3番</label><br>
                    <select id="first-vote23" name="first-vote23" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <?php echo $errmsg223 ?>
                    <label for="second-vote23"></label>
                    <select id="second-vote23" name="second-vote23" disabled>
                        <option hidden>選択できません</option>
                    </select>
                    <span class="required">必須</span>
                    <?php echo $errmsg231 ?>
                    <br>
                    <label for="third-vote23">コメント：</label>
                    <textarea id="third-vote23" name="third-vote23" col="60" row="1" disabled></textarea>
                    <?php echo $errmsg232 ?>
                    <br>
                    <br>
                    <label for="first-vote24">4番</label><br>
                    <select id="first-vote24" name="first-vote24" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <?php echo $errmsg233 ?>
                    <label for="second-vote24"></label>
                    <select id="second-vote24" name="second-vote24" disabled>
                        <option hidden>選択できません</option>
                    </select>
                    <br>
                    <label for="third-vote24">コメント：</label>
                    <textarea id="third-vote24" name="third-vote24" col="60" row="1" disabled></textarea>
                    <br>
                    <br>
                    <label for="first-vote25">5番</label><br>
                    <select id="first-vote25" name="first-vote25" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <label for="second-vote25"></label>
                    <select id="second-vote25" name="second-vote25" disabled>
                        <option hidden>選択できません</option>
                    </select>
                    <br>
                    <label for="third-vote25">コメント：</label>
                    <textarea id="third-vote25" name="third-vote25" col="60" row="1" disabled></textarea>
                    <br>
                    <br>
                    <label for="first-vote26">6番</label><br>
                    <select id="first-vote26" name="first-vote26" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <label for="second-vote26"></label>
                    <select id="second-vote26" name="second-vote26" disabled>
                        <option hidden>選択できません</option>
                    </select>
                    <br>
                    <label for="third-vote26">コメント：</label>
                    <textarea id="third-vote26" name="third-vote26" col="60" row="1" disabled></textarea>
                    <br>
                    <br>
                    <label for="first-vote27">7番</label><br>
                    <select id="first-vote27" name="first-vote27" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <label for="second-vote27"></label>
                    <select id="second-vote27" name="second-vote27" disabled>
                        <option hidden>選択できません</option>
                    </select>
                    <br>
                    <label for="third-vote27">コメント：</label>
                    <textarea id="third-vote27" name="third-vote27" col="60" row="1" disabled></textarea>
                    <br>
                    <br>
                    <button type="submit">決定</button>
                </form>
            </div>
            <p>
                <a href="menu.php">メニューへ</a>&nbsp;
                <a href="../index.html">トップへ</a>
            </p>
        </main>
        <footer></footer>
        <script src="../js/script2.js"></script>
    </body>
</html>