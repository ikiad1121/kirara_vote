const animes = [
    "ひだまりスケッチ",
    "けいおん！",
    "魔法少女まどかマギカ",
    "ゆゆ式",
    "キルミーベイベー",
    "ステラのまほう",
    "きんいろモザイク",
    "ご注文はうさぎですか？",
    "がっこうぐらし",
    "アニマエール",
    "NEW GAME!",
    "ブレンド・S",
    "ゆるキャン△",
    "スロウスタート",
    "まちカドまぞく",
    "恋する小惑星",
    "おちこぼれフルーツタルト",
    "きららファンタジア",
    "スローループ",
    "星屑テレパス",
    "ぼっち・ざ・ろっく！",
    "mono",
    "ばっどがーる"
];

/*const datas = {
    "ひだまりスケッチ":["ゆの","沙英"],
    "けいおん！":["平沢唯","秋山澪","田井中律"],
    "魔法少女まどかマギカ":["鹿目まどか","巴マミ"],
    "NEW GAME!":["涼風青葉","八神コウ","遠山りん","滝本ひふみ","飯島ゆん","篠田はじめ","桜ねね","阿波根うみこ","葉月しずく","望月紅葉","鳴海ツバメ","星川ほたる","大和クリスティーナ和子"],
    "ブレンド・S":["桜ノ宮苺香","日向夏帆","星川麻冬","天野美雨","神崎ひでり","ディーノ","秋月紅葉"],
    "ゆるキャン△":["各務原なでしこ","志摩リン","大垣千明","犬山あおい","斎藤恵那","土岐綾乃","瑞浪絵真","中津川メイ","鳥羽美波","新城肇","犬山あかり"],
    "スロウスタート":["一之瀬花名","十倉栄依子","百地たまて","千石冠","万年大会","億果実","京塚志温"],
    "おちこぼれフルーツタルト":["桜衣乃","関野ロコ","貫井はゆ","前原仁菜","緑へも","梶野志穂"],
    "スローループ":["海凪ひより","海凪小春","吉永恋","福元二葉"],
    "星屑テレパス":["小ノ星海果","明内ユウ","宝木遥乃","雷門瞬","笑原茜","秋月慧","小ノ星穂波"]
};*/

let datas;
const url = "../API/charadata";
fetch(url)
    .then((res) => res.json()).then((data) => {
    console.log(data);
    charaArray(data);
});

const charaArray = (d) =>{
    datas = d;
};

const firstVote1 = document.getElementById("first-vote1");
const secondVote1 = document.getElementById("second-vote1");
const thirdVote1 = document.getElementById("third-vote1");

const firstVote2 = document.getElementById("first-vote2");
const secondVote2 = document.getElementById("second-vote2");
const thirdVote2 = document.getElementById("third-vote2");

const firstVote3 = document.getElementById("first-vote3");
const secondVote3 = document.getElementById("second-vote3");
const thirdVote3 = document.getElementById("third-vote3");

const firstVote4 = document.getElementById("first-vote4");
const secondVote4 = document.getElementById("second-vote4");
const thirdVote4 = document.getElementById("third-vote4");

const firstVote5 = document.getElementById("first-vote5");
const secondVote5 = document.getElementById("second-vote5");
const thirdVote5 = document.getElementById("third-vote5");

const firstVote6 = document.getElementById("first-vote6");
const secondVote6 = document.getElementById("second-vote6");
const thirdVote6 = document.getElementById("third-vote6");

const firstVote7 = document.getElementById("first-vote7");
const secondVote7 = document.getElementById("second-vote7");
const thirdVote7 = document.getElementById("third-vote7");

for(var i1 = 0; i1 < animes.length; i1++){
    firstVote1.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
}

firstVote1.addEventListener('change', ()=>{
    secondVote1.disabled = false;
    thirdVote1.disabled = true;
    firstVote2.disabled = true;
    secondVote2.disabled = true;
    thirdVote2.disabled = true;
    firstVote3.disabled = true;
    secondVote3.disabled = true;
    thirdVote3.disabled = true;
    firstVote4.disabled = true;
    secondVote4.disabled = true;
    thirdVote4.disabled = true;
    firstVote5.disabled = true;
    secondVote5.disabled = true;
    thirdVote5.disabled = true;
    firstVote6.disabled = true;
    secondVote6.disabled = true;
    thirdVote6.disabled = true;
    firstVote7.disabled = true;
    secondVote7.disabled = true;
    thirdVote7.disabled = true;

    secondVote1.innerHTML = '<option hidden>選択してください</option>';
    if(firstVote1.value){
        for(var i1 = 0; i1 < datas[firstVote1.value].length; i1++){
            secondVote1.innerHTML += `<option value="${datas[firstVote1.value][i1]}">${datas[firstVote1.value][i1]}</option>`;
        }
    }else{
        secondVote1.innerHTML = '<option hidden>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    }

    firstVote2.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote2.innerHTML = '<option hidden>選択できません</option>';
    firstVote3.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote3.innerHTML = '<option hidden>選択できません</option>';
    firstVote4.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote4.innerHTML = '<option hidden>選択できません</option>';
    firstVote5.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote5.innerHTML = '<option hidden>選択できません</option>';
    firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote6.innerHTML = '<option hidden>選択できません</option>';
    firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote7.innerHTML = '<option hidden>選択できません</option>';
});

secondVote1.addEventListener('change', ()=>{
    thirdVote1.disabled = false;
    firstVote2.disabled = false;
    secondVote2.disabled = true;
    thirdVote2.disabled = true;
    firstVote3.disabled = true;
    secondVote3.disabled = true;
    thirdVote3.disabled = true;
    firstVote4.disabled = true;
    secondVote4.disabled = true;
    thirdVote4.disabled = true;
    firstVote5.disabled = true;
    secondVote5.disabled = true;
    thirdVote5.disabled = true;
    firstVote6.disabled = true;
    secondVote6.disabled = true;
    thirdVote6.disabled = true;
    firstVote7.disabled = true;
    secondVote7.disabled = true;
    thirdVote7.disabled = true;

    firstVote2.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        firstVote2.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
    }
    secondVote2.innerHTML = '<option hidden>選択できません</option>';
    firstVote3.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote3.innerHTML = '<option hidden>選択できません</option>';
    firstVote4.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote4.innerHTML = '<option hidden>選択できません</option>';
    firstVote5.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote5.innerHTML = '<option hidden>選択できません</option>';
    firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote6.innerHTML = '<option hidden>選択できません</option>';
    firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote7.innerHTML = '<option hidden>選択できません</option>';
});

    firstVote2.addEventListener('change', ()=>{
        secondVote2.disabled = false;
        thirdVote2.disabled = true;
        firstVote3.disabled = true;
        secondVote3.disabled = true;
        thirdVote3.disabled = true;
        firstVote4.disabled = true;
        secondVote4.disabled = true;
        thirdVote4.disabled = true;
        firstVote5.disabled = true;
        secondVote5.disabled = true;
        thirdVote5.disabled = true;
        firstVote6.disabled = true;
        secondVote6.disabled = true;
        thirdVote6.disabled = true;
        firstVote7.disabled = true;
        secondVote7.disabled = true;
        thirdVote7.disabled = true;

        secondVote2.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote2.value){
            for(var i1 = 0; i1 < datas[firstVote2.value].length; i1++){
                if(secondVote1.value != datas[firstVote2.value][i1]){
                    secondVote2.innerHTML += `<option value="${datas[firstVote2.value][i1]}">${datas[firstVote2.value][i1]}</option>`;
                }
            }
        }else{
            secondVote2.innerHTML = '<option hidden>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote3.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote3.innerHTML = '<option hidden>選択できません</option>';
        firstVote4.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote4.innerHTML = '<option hidden>選択できません</option>';
        firstVote5.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote5.innerHTML = '<option hidden>選択できません</option>';
        firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote6.innerHTML = '<option hidden>選択できません</option>';
        firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote7.innerHTML = '<option hidden>選択できません</option>';
    });

secondVote2.addEventListener('change', ()=>{
    thirdVote2.disabled = false;
    firstVote3.disabled = false;
    secondVote3.disabled = true;
    thirdVote3.disabled = true;
    firstVote4.disabled = true;
    secondVote4.disabled = true;
    thirdVote4.disabled = true;
    firstVote5.disabled = true;
    secondVote5.disabled = true;
    thirdVote5.disabled = true;
    firstVote6.disabled = true;
    secondVote6.disabled = true;
    thirdVote6.disabled = true;
    firstVote7.disabled = true;
    secondVote7.disabled = true;
    thirdVote7.disabled = true;

    firstVote3.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        firstVote3.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
    }
    secondVote3.innerHTML = '<option hidden>選択できません</option>';
    firstVote4.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote4.innerHTML = '<option hidden>選択できません</option>';
    firstVote5.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote5.innerHTML = '<option hidden>選択できません</option>';
    firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote6.innerHTML = '<option hidden>選択できません</option>';
    firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote7.innerHTML = '<option hidden>選択できません</option>';
});

    firstVote3.addEventListener('change', ()=>{
        secondVote3.disabled = false;
        thirdVote3.disabled = true;
        firstVote4.disabled = true;
        secondVote4.disabled = true;
        thirdVote4.disabled = true;
        firstVote5.disabled = true;
        secondVote5.disabled = true;
        thirdVote5.disabled = true;
        firstVote6.disabled = true;
        secondVote6.disabled = true;
        thirdVote6.disabled = true;
        firstVote7.disabled = true;
        secondVote7.disabled = true;
        thirdVote7.disabled = true;

        secondVote3.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote3.value){
            for(var i1 = 0; i1 < datas[firstVote3.value].length; i1++){
                if(
                    secondVote2.value != datas[firstVote3.value][i1]
                    &&secondVote1.value != datas[firstVote3.value][i1]
                ){
                    secondVote3.innerHTML += `<option value="${datas[firstVote3.value][i1]}">${datas[firstVote3.value][i1]}</option>`;
                }
            }
        }else{
            secondVote3.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote4.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote4.innerHTML = '<option hidden>選択できません</option>';
        firstVote5.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote5.innerHTML = '<option hidden>選択できません</option>';
        firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote6.innerHTML = '<option hidden>選択できません</option>';
        firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote7.innerHTML = '<option hidden>選択できません</option>';
    });

secondVote3.addEventListener('change', ()=>{
    thirdVote3.disabled = false;
    firstVote4.disabled = false;
    secondVote4.disabled = true;
    thirdVote4.disabled = true;
    firstVote5.disabled = true;
    secondVote5.disabled = true;
    thirdVote5.disabled = true;
    firstVote6.disabled = true;
    secondVote6.disabled = true;
    thirdVote6.disabled = true;
    firstVote7.disabled = true;
    secondVote7.disabled = true;
    thirdVote7.disabled = true;

    firstVote4.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        firstVote4.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
    }
    secondVote4.innerHTML = '<option hidden>選択できません</option>';
    firstVote5.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote5.innerHTML = '<option hidden>選択できません</option>';
    firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote6.innerHTML = '<option hidden>選択できません</option>';
    firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote7.innerHTML = '<option hidden>選択できません</option>';

    firstVote4.addEventListener('change', ()=>{
        secondVote4.disabled = false;
        thirdVote4.disabled = true;
        firstVote5.disabled = true;
        secondVote5.disabled = true;
        thirdVote5.disabled = true;
        firstVote6.disabled = true;
        secondVote6.disabled = true;
        thirdVote6.disabled = true;
        firstVote7.disabled = true;
        secondVote7.disabled = true;
        thirdVote7.disabled = true;

        secondVote4.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote4.value){
            for(var i1 = 0; i1 < datas[firstVote4.value].length; i1++){
                if(
                    secondVote3.value != datas[firstVote4.value][i1]
                    &&secondVote2.value != datas[firstVote4.value][i1]
                    &&secondVote1.value != datas[firstVote4.value][i1]
                ){
                    secondVote4.innerHTML += `<option value="${datas[firstVote4.value][i1]}">${datas[firstVote4.value][i1]}</option>`;
                }
            }
        }else{
            secondVote4.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote5.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote5.innerHTML = '<option hidden>選択できません</option>';
        firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote6.innerHTML = '<option hidden>選択できません</option>';
        firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote7.innerHTML = '<option hidden>選択できません</option>';
    });
});

secondVote4.addEventListener('change', ()=>{
    thirdVote4.disabled = false;
    firstVote5.disabled = false;
    secondVote5.disabled = true;
    thirdVote5.disabled = true;
    firstVote6.disabled = true;
    secondVote6.disabled = true;
    thirdVote6.disabled = true;
    firstVote7.disabled = true;
    secondVote7.disabled = true;
    thirdVote7.disabled = true;

    firstVote5.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        firstVote5.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
    }
    secondVote5.innerHTML = '<option hidden>選択できません</option>';
    firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote6.innerHTML = '<option hidden>選択できません</option>';
    firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote7.innerHTML = '<option hidden>選択できません</option>';

    firstVote5.addEventListener('change', ()=>{
        secondVote5.disabled = false;
        thirdVote5.disabled = true;
        firstVote6.disabled = true;
        secondVote6.disabled = true;
        thirdVote6.disabled = true;
        firstVote7.disabled = true;
        secondVote7.disabled = true;
        thirdVote7.disabled = true;

        secondVote5.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote5.value){
            for(var i1 = 0; i1 < datas[firstVote5.value].length; i1++){
                if(
                    secondVote4.value != datas[firstVote5.value][i1]
                    &&secondVote3.value != datas[firstVote5.value][i1]
                    &&secondVote2.value != datas[firstVote5.value][i1]
                    &&secondVote1.value != datas[firstVote5.value][i1]
                ){
                    secondVote5.innerHTML += `<option value="${datas[firstVote5.value][i1]}">${datas[firstVote5.value][i1]}</option>`;
                }
            }
        }else{
            secondVote5.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote6.innerHTML = '<option hidden>選択できません</option>';
        firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote7.innerHTML = '<option hidden>選択できません</option>';
    });
});

secondVote5.addEventListener('change', ()=>{
    thirdVote5.disabled = false;
    firstVote6.disabled = false;
    secondVote6.disabled = true;
    thirdVote6.disabled = true;
    firstVote7.disabled = true;
    secondVote7.disabled = true;
    thirdVote7.disabled = true;

    firstVote6.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        firstVote6.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
    }
    secondVote6.innerHTML = '<option hidden>選択できません</option>';
    firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote7.innerHTML = '<option hidden>選択できません</option>';

    firstVote6.addEventListener('change', ()=>{
        secondVote6.disabled = false;
        thirdVote6.disabled = true;
        firstVote7.disabled = true;
        secondVote7.disabled = true;
        thirdVote7.disabled = true;

        secondVote6.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote6.value){
            for(var i1 = 0; i1 < datas[firstVote6.value].length; i1++){
                if(
                    secondVote5.value != datas[firstVote6.value][i1]
                    &&secondVote4.value != datas[firstVote6.value][i1]
                    &&secondVote3.value != datas[firstVote6.value][i1]
                    &&secondVote2.value != datas[firstVote6.value][i1]
                    &&secondVote1.value != datas[firstVote6.value][i1]
                ){
                    secondVote6.innerHTML += `<option value="${datas[firstVote6.value][i1]}">${datas[firstVote6.value][i1]}</option>`;
                }
            }
        }else{
            secondVote6.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote7.innerHTML = '<option hidden>選択できません</option>';
    });
});



secondVote6.addEventListener('change', ()=>{
    thirdVote6.disabled = false;
    firstVote7.disabled = false;
    secondVote7.disabled = true;
    thirdVote7.disabled = true;

    firstVote7.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        firstVote7.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
    }
    secondVote7.innerHTML = '<option hidden>選択できません</option>';

    firstVote7.addEventListener('change', ()=>{
        secondVote7.disabled = false;
        thirdVote7.disabled = true;

        secondVote7.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote7.value){
            for(var i1 = 0; i1 < datas[firstVote7.value].length; i1++){
                if(
                    secondVote6.value != datas[firstVote7.value][i1]
                    &&secondVote5.value != datas[firstVote7.value][i1]
                    &&secondVote4.value != datas[firstVote7.value][i1]
                    &&secondVote3.value != datas[firstVote7.value][i1]
                    &&secondVote2.value != datas[firstVote7.value][i1]
                    &&secondVote1.value != datas[firstVote7.value][i1]
                ){
                    secondVote7.innerHTML += `<option value="${datas[firstVote7.value][i1]}">${datas[firstVote7.value][i1]}</option>`;
                }
            }
        }else{
            secondVote7.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }
    });
});

secondVote7.addEventListener('change', ()=>{
    thirdVote7.disabled = false;
});