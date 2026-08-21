<?php
    
    session_start();
    $_SESSION['err111'] = false;

    if(isset($_POST["first-vote11"])){
        if($_POST["first-vote11"] != "選択してください"){
            $firstVote11 = $_POST["first-vote11"];
            if(isset($_POST["third-vote11"])){
                $thirdVote11 = htmlspecialchars($_POST["third-vote11"]);
            }else{
                $thirdVote11 = '';
            }
            $firstVote12 = '';
            $thirdVote12 = '';
            $firstVote13 = '';
            $thirdVote13 = '';
            $firstVote14 = '';
            $thirdVote14 = '';
            $firstVote15 = '';
            $thirdVote15 = '';
        }else{
            $_SESSION['err111'] = true;
            header('location: main.php');
        }
    }else{
        $_SESSION['err111'] = true;
        header('location: main.php');
    }

    if(isset($_POST["first-vote12"])){
        if($_POST["first-vote12"] != "選択してください"){
            $firstVote12 = $_POST["first-vote12"];
            if(isset($_POST["third-vote12"])){
                $thirdVote12 = htmlspecialchars($_POST["third-vote12"]);
            }else{
                $thirdVote12 = '';
            }
            $firstVote13 = '';
            $thirdVote13 = '';
            $firstVote14 = '';
            $thirdVote14 = '';
            $firstVote15 = '';
            $thirdVote15 = '';
        }else{
            $_SESSION['err121'] = true;
            header('location: main1.php');
        }
    }else{
        $_SESSION['err121'] = true;
        header('location: main1.php');
    }

    if(isset($_POST["first-vote13"])){
        if($_POST["first-vote13"] != "選択してください"){
            $firstVote13 = $_POST["first-vote13"];
            if(isset($_POST["third-vote13"])){
                $thirdVote13 = htmlspecialchars($_POST["third-vote13"]);
            }else{
                $thirdVote13 = '';
            }
            $firstVote14 = '';
            $thirdVote14 = '';
            $firstVote15 = '';
            $thirdVote15 = '';
        }else{
            $_SESSION['err131'] = true;
            header('location: main1.php');
        }
    }else{
        $_SESSION['err131'] = true;
        header('location: main1.php');
    }

    if(isset($_POST["first-vote14"])){
        if($_POST["first-vote14"] != "選択してください"){
            $firstVote14 = $_POST["first-vote14"];
            if(isset($_POST["third-vote14"])){
                $thirdVote14 = htmlspecialchars($_POST["third-vote14"]);
            }else{
                $thirdVote14 = '';
            }
            $firstVote15 = '';
            $thirdVote15 = '';
        }
    }

    if(isset($_POST["first-vote15"])){
        if($_POST["first-vote15"] != "選択してください"){
            $firstVote15 = $_POST["first-vote15"];
            if(isset($_POST["third-vote15"])){
                $thirdVote15 = htmlspecialchars($_POST["third-vote15"]);
            }else{
                $thirdVote15 = '';
            }
        }
    }


    //vote writers
    $jsonf = Array();
    $id_flug = true;

    /*$reader = fopen('../assets/api/data1.csv', 'r');
    $reader = mb_convert_encoding($reader, 'UTF-8');*/
    $data = file_get_contents('../assets/api/data1.csv');
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
                    "firstVote11" => $data[0], "thirdVote11" => $data[1],
                    "firstVote12" => $data[2], "thirdVote12" => $data[3],
                    "firstVote13" => $data[4], "thirdVote13" => $data[5],
                    "firstVote14" => $data[6], "thirdVote14" => $data[7],
                    "firstVote15" => $data[8], "thirdVote15" => $data[9]
                ]
            );
        }
    }
    fclose($temp);

    if($firstVote12){
        array_push(
            $jsonf,
             [
                "firstVote11" => $firstVote11, "thirdVote11" => $thirdVote11,
                "firstVote12" => $firstVote12, "thirdVote12" => $thirdVote12,
                "firstVote13" => $firstVote13, "thirdVote13" => $thirdVote13,
                "firstVote14" => $firstVote14, "thirdVote14" => $thirdVote14,
                "firstVote15" => $firstVote15, "thirdVote15" => $thirdVote15,
            ]
        );

        $writer = fopen('../assets/api/data1.csv', 'w+b');
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
        <title>作品部門｜きららキャラ人気投票ページ(非公式)</title>
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