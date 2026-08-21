<?php
    session_start();
    $_SESSION['err211'] = false;

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
            
            if(isset($_POST["third-vote21"])){
                $thirdVote21 = htmlspecialchars($_POST["third-vote21"]);
            }else{
                $thirdVote21 = '';
            }
        }else{
            $_SESSION['err211'] = true;
            header('location: main.php');
        }
    }else{
        $_SESSION['err211'] = true;
        header('location: main.php');
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

            if(isset($_POST["third-vote22"])){
                $thirdVote22 = htmlspecialchars($_POST["third-vote22"]);
                $_SESSION['third-vote22-sub'] = $thirdVote22;
            }else{
                $thirdVote22 = '';
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

            if(isset($_POST["third-vote23"])){
                $thirdVote23 = htmlspecialchars($_POST["third-vote23"]);
                $_SESSION['third-vote23-sub'] = $thirdVote23;
            }else{
                $thirdVote23 = '';
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
            
            if(isset($_POST["third-vote24"])){
                $thirdVote24 = htmlspecialchars($_POST["third-vote24"]);
                $_SESSION['third-vote24-sub'] = $thirdVote24;
            }else{
                $thirdVote24 = '';
            }
        }
    }

    if(isset($_POST["second-vote25"])){
        if($_POST["second-vote25"] != '選択してください'){
            $firstVote25 = $_POST["first-vote25"];
            $secondVote25 = $_POST["second-vote25"];
            
            $_SESSION['first-vote25-sub'] = $firstVote25;
            $_SESSION['second-vote25-sub'] = $secondVote25;
            
            if(isset($_POST["third-vote25"])){
                $thirdVote25 = htmlspecialchars($_POST["third-vote25"]);
                $_SESSION['third-vote25-sub'] = $thirdVote25;
            }else{
                $thirdVote25 = '';
            }
        }
    }

    if(isset($_POST["second-vote26"])){
        if($_POST["second-vote26"] != '選択してください'){
            $firstVote26 = $_POST["first-vote26"];
            $secondVote26 = $_POST["second-vote26"];
            
            $_SESSION['first-vote26-sub'] = $firstVote26;
            $_SESSION['second-vote26-sub'] = $secondVote26;

            if(isset($_POST["third-vote26"])){
                $thirdVote26 = htmlspecialchars($_POST["third-vote26"]);
                $_SESSION['third-vote26-sub'] = $thirdVote26;
            }else{
                $thirdVote26 = '';
            }
        }
    }

    if(isset($_POST["second-vote27"])){
        if($_POST["second-vote27"] != '選択してください'){
            $firstVote27 = $_POST["first-vote27"];
            $secondVote27 = $_POST["second-vote27"];
            
            $_SESSION['first-vote27-sub'] = $firstVote27;
            $_SESSION['second-vote27-sub'] = $secondVote27;
            
            if(isset($_POST["third-vote27"])){
                $thirdVote27 = htmlspecialchars($_POST["third-vote27"]);
                $_SESSION['third-vote27-sub'] = $thirdVote27;
            }else{
                $thirdVote27 = '';
            }
        }
    }

    //vote writers
    $jsonf = Array();
    $id_flug = true;

    /*$reader = fopen('../assets/api/data1.csv', 'r');
    $reader = mb_convert_encoding($reader, 'UTF-8');*/
    $data = file_get_contents('../assets/api/data2.csv');
    $data = mb_convert_encoding($data, 'UTF-8', 'sjis-win');
    $temp = tmpfile();

    fwrite($temp, $data);
    rewind($temp);

    $i = 0;
    while (($data = fgetcsv($temp, 0, ",")) !== FALSE) {
        $i = $i + 1;
        /*echo '$data[0]'.$data[0];
        echo '$data[1]'.$data[1];
        echo '$data[2]'.$data[2];*/
        if($i > 0){
            array_push(
                $jsonf,
                 [
                    "firstVote21" => $data[0], "secondVote21" => $data[1], "thirdVote21" => $data[2],
                    "firstVote22" => $data[3], "secondVote22" => $data[4], "thirdVote22" => $data[5],
                    "firstVote23" => $data[6], "secondVote23" => $data[7], "thirdVote23" => $data[8],
                    "firstVote24" => $data[9], "secondVote24" => $data[10], "thirdVote24" => $data[11],
                    "firstVote25" => $data[12], "secondVote25" => $data[13], "thirdVote25" => $data[14],
                    "firstVote26" => $data[15], "secondVote26" => $data[16], "thirdVote26" => $data[17],
                    "firstVote27" => $data[18], "secondVote27" => $data[19], "thirdVote27" => $data[20]
                ]
            );
        }
    }
    fclose($temp);

    if($secondVote22){
        array_push(
            $jsonf,
             [
                "firstVote21" => $firstVote21, "secondVote21" => $secondVote21, "thirdVote21" => $thirdVote21,
                "firstVote22" => $firstVote22, "secondVote22" => $secondVote22, "thirdVote22" => $thirdVote22,
                "firstVote23" => $firstVote23, "secondVote23" => $secondVote23, "thirdVote23" => $thirdVote23,
                "firstVote24" => $firstVote24, "secondVote24" => $secondVote24, "thirdVote24" => $thirdVote24,
                "firstVote25" => $firstVote25, "secondVote25" => $secondVote25, "thirdVote25" => $thirdVote25,
                "firstVote26" => $firstVote26, "secondVote26" => $secondVote26, "thirdVote26" => $thirdVote26,
                "firstVote27" => $firstVote27, "secondVote27" => $secondVote27, "thirdVote27" => $thirdVote27
            ]
        );

        $writer = fopen('../assets/api/data2.csv', 'w+b');
        //fputcsv($writer, $jsonf);
        foreach($jsonf as $data){
            mb_convert_variables('SJIS-win', 'UTF-8', $data);
            //fwrite($writer, implode(',' , $data) . "\n");
            fputcsv($writer, $data);
        }
        fclose($writer);
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
            <p>
                投票が完了しました。<br>
                <a href="../index.html">戻る</a>
            </p>
        </main>
        <footer></footer>
    </body>
</html>