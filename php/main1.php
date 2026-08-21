<?php
    session_start();

    $errmsg111 = '';
    $errmsg112 = '';
    $errmsg113 = '';
    $errmsg121 = '';
    $errmsg122 = '';
    $errmsg123 = '';
    $errmsg131 = '';
    $errmsg132 = '';
    $errmsg133 = '';
    $errmsg142 = '';
    $errmsg152 = '';
    if(
        isset($_SESSION['err111'])
    ){
        if($_SESSION['err111']){
            $errmsg111 = '<span class="warn">必須項目です</span>';
        }else{
            if(
                isset($_SESSION['first-vote11-sub'])
                && isset($_SESSION['second-vote11-sub'])
                && isset($_SESSION['third-vote11-sub'])
            ){
                $errmsg111 = '';
                $errmsg112 = '<script>
                                document.getElementById("third-vote21").disabled = false;
                                document.getElementById("third-vote21").value = "'.$_SESSION['third-vote21-sub'].'";
                            </script>
                            ';
                $errmsg113 = '<script>
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
        isset($_SESSION['err121']) 
    ){
        if($_SESSION['err121']){
            $errmsg121 = '<span class="warn">必須項目です</span>';
        }else{
            if(
                isset($_SESSION['first-vote12-sub'])
                && isset($_SESSION['second-vote12-sub'])
                && isset($_SESSION['third-vote12-sub'])
            ){
                $errmsg121 = '';
                $errmsg122 = '<script>
                                document.getElementById("third-vote22").disabled = false;
                                document.getElementById("third-vote22").value = "'.$_SESSION['third-vote22-sub'].'";
                            </script>
                            ';
                $errmsg123 = '<script>
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
        isset($_SESSION['err131'])
    ){
        if($_SESSION['err131']){
            $errmsg131 = '<span class="warn">必須項目です</span>';
        }else{
            if(
                isset($_SESSION['first-vote13-sub'])
                && isset($_SESSION['second-vote13-sub'])
                && isset($_SESSION['third-vote13-sub'])
            ){
                $errmsg131 = '';
                $errmsg132 = '<script>
                                document.getElementById("third-vote23").disabled = false;
                                document.getElementById("third-vote23").value = "'.$_SESSION['third-vote23-sub'].'";
                            </script>
                            ';
                $errmsg133 = '<script>
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
        isset($_SESSION['err112'])
    ){
        if($_SESSION['err112']){
            $errmsg112 = $errmsg112.'<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err122'])
    ){
        if($_SESSION['err122']){
            $errmsg122 = $errmsg122.'<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err132'])
    ){
        if($_SESSION['err132']){
            $errmsg132 = $errmsg132.'<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err142'])
    ){
        if($_SESSION['err142']){
            $errmsg142 = '<span class="warn">100文字以下にしてください。</span>';
        }
    }

    if(
        isset($_SESSION['err152'])
    ){
        if($_SESSION['err152']){
            $errmsg152 = '<span class="warn">100文字以下にしてください。</span>';
        }
    }

    $_SESSION['err111'] = false;
    $_SESSION['err112'] = false;
    $_SESSION['err121'] = false;
    $_SESSION['err122'] = false;
    $_SESSION['err131'] = false;
    $_SESSION['err132'] = false;
    $_SESSION['err142'] = false;
    $_SESSION['err152'] = false;
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
                <form action="check1.php" method="POST">
                    <script>
                        let datas1;
                        let datas2;
                        const url1 = "../assets/api/titledata";
                        const url2 = "../assets/api/charadata";
                    </script>
                    <label for="first-vote11">1番(最推し)</label><br>
                    <select id="first-vote11" name="first-vote11">
                        <option hidden>選択してください</option>
                    </select>
                    <span class="required">必須</span>
                    <?php echo $errmsg111 ?>
                    <br>
                    <label for="third-vote11">コメント：</label>
                    <textarea id="third-vote11" name="third-vote11" col="60" row="1" disabled></textarea>
                    <?php echo $errmsg112 ?>
                    <br>
                    ※最推しのところには2票分入ります。
                    <br>
                    <br>
                    <label for="first-vote12">2番</label><br>
                    <select id="first-vote12" name="first-vote12" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <?php echo $errmsg113 ?>
                    <span class="required">必須</span>
                    <?php echo $errmsg121 ?>
                    <br>
                    <label for="third-vote12">コメント：</label>
                    <textarea id="third-vote12" name="third-vote12" col="60" row="1" disabled></textarea>
                    <?php echo $errmsg122 ?>
                    <br>
                    <br>
                    <label for="first-vote13">3番</label><br>
                    <select id="first-vote13" name="first-vote13" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <?php echo $errmsg123 ?>
                    <span class="required">必須</span>
                    <?php echo $errmsg131 ?>
                    <br>
                    <label for="third-vote13">コメント：</label>
                    <textarea id="third-vote13" name="third-vote13" col="60" row="1" disabled></textarea>
                    <?php echo $errmsg132 ?>
                    <br>
                    <br>
                    <label for="first-vote14">4番</label><br>
                    <select id="first-vote14" name="first-vote14" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <?php echo $errmsg133 ?>
                    <br>
                    <label for="third-vote14">コメント：</label>
                    <textarea id="third-vote14" name="third-vote14" col="60" row="1" disabled></textarea>
                    <br>
                    <br>
                    <label for="first-vote15">5番</label><br>
                    <select id="first-vote15" name="first-vote15" disabled>
                        <option>選択できません</option>
                        <option hidden>おちこぼれフルーツタルト</option>
                    </select>
                    <br>
                    <label for="third-vote15">コメント：</label>
                    <textarea id="third-vote15" name="third-vote15" col="60" row="1" disabled></textarea>
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
        <script src="../js/script1.js"></script>
    </body>
</html>