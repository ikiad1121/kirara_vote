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

let datas;
const url = "../assets/api/charadata";
fetch(url)
    .then((res) => res.json()).then((data) => {
    console.log(data);
    charaArray(data);
});

const charaArray = (d) =>{
    datas = d;
};

const firstVote11 = document.getElementById("first-vote11");
const thirdVote11 = document.getElementById("third-vote11");

const firstVote12 = document.getElementById("first-vote12");
const thirdVote12 = document.getElementById("third-vote12");

const firstVote13 = document.getElementById("first-vote13");
const thirdVote13 = document.getElementById("third-vote13");

const firstVote14 = document.getElementById("first-vote14");
const thirdVote14 = document.getElementById("third-vote14");

const firstVote15 = document.getElementById("first-vote15");
const thirdVote15 = document.getElementById("third-vote15");

for(var i1 = 0; i1 < animes.length; i1++){
    firstVote11.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
}

firstVote11.addEventListener('change', ()=>{
    thirdVote11.disabled = false;
    firstVote12.disabled = false;
    thirdVote12.disabled = true;
    firstVote13.disabled = true;
    thirdVote13.disabled = true;
    firstVote14.disabled = true;
    thirdVote14.disabled = true;
    firstVote15.disabled = true;
    thirdVote15.disabled = true;

    firstVote12.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        if(firstVote11.value != animes[i1]){
            firstVote12.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    firstVote13.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    firstVote14.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    firstVote15.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
});

firstVote12.addEventListener('change', ()=>{
    thirdVote12.disabled = false;
    firstVote13.disabled = false;
    thirdVote13.disabled = true;
    firstVote14.disabled = true;
    thirdVote14.disabled = true;
    firstVote15.disabled = true;
    thirdVote15.disabled = true;

    firstVote13.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        if(
            firstVote11.value != animes[i1]&&
            firstVote12.value != animes[i1]
        ){
            firstVote13.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    firstVote14.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    firstVote15.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
});

firstVote13.addEventListener('change', ()=>{
    thirdVote13.disabled = false;
    firstVote14.disabled = false;
    thirdVote14.disabled = true;
    firstVote15.disabled = true;
    thirdVote15.disabled = true;

    firstVote14.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        if(
            firstVote11.value != animes[i1]&&
            firstVote12.value != animes[i1]&&
            firstVote13.value != animes[i1]
        ){
            firstVote14.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    firstVote15.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
});

firstVote14.addEventListener('change', ()=>{
    thirdVote14.disabled = false;
    firstVote15.disabled = false;
    thirdVote15.disabled = true;

    firstVote15.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        if(
            firstVote11.value != animes[i1]&&
            firstVote12.value != animes[i1]&&
            firstVote13.value != animes[i1]&&
            firstVote14.value != animes[i1]
        ){
            firstVote15.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
});

firstVote15.addEventListener('change', ()=>{
    thirdVote15.disabled = false;
});