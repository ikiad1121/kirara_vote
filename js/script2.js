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

const firstVote21 = document.getElementById("first-vote21");
const secondVote21 = document.getElementById("second-vote21");
const thirdVote21 = document.getElementById("third-vote21");

const firstVote22 = document.getElementById("first-vote22");
const secondVote22 = document.getElementById("second-vote22");
const thirdVote22 = document.getElementById("third-vote22");

const firstVote23 = document.getElementById("first-vote23");
const secondVote23 = document.getElementById("second-vote23");
const thirdVote23 = document.getElementById("third-vote23");

const firstVote24 = document.getElementById("first-vote24");
const secondVote24 = document.getElementById("second-vote24");
const thirdVote24 = document.getElementById("third-vote24");

const firstVote25 = document.getElementById("first-vote25");
const secondVote25 = document.getElementById("second-vote25");
const thirdVote25 = document.getElementById("third-vote25");

const firstVote26 = document.getElementById("first-vote26");
const secondVote26 = document.getElementById("second-vote26");
const thirdVote26 = document.getElementById("third-vote26");

const firstVote27 = document.getElementById("first-vote27");
const secondVote27 = document.getElementById("second-vote27");
const thirdVote27 = document.getElementById("third-vote27");

for(var i1 = 0; i1 < animes.length; i1++){
    firstVote21.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
}

firstVote21.addEventListener('change', ()=>{
    secondVote21.disabled = false;
    thirdVote21.disabled = true;
    firstVote22.disabled = true;
    secondVote22.disabled = true;
    thirdVote22.disabled = true;
    firstVote23.disabled = true;
    secondVote23.disabled = true;
    thirdVote23.disabled = true;
    firstVote24.disabled = true;
    secondVote24.disabled = true;
    thirdVote24.disabled = true;
    firstVote25.disabled = true;
    secondVote25.disabled = true;
    thirdVote25.disabled = true;
    firstVote26.disabled = true;
    secondVote26.disabled = true;
    thirdVote26.disabled = true;
    firstVote27.disabled = true;
    secondVote27.disabled = true;
    thirdVote27.disabled = true;

    secondVote21.innerHTML = '<option hidden>選択してください</option>';
    if(firstVote21.value){
        for(var i1 = 0; i1 < datas[firstVote21.value].length; i1++){
            secondVote21.innerHTML += `<option value="${datas[firstVote21.value][i1]}">${datas[firstVote21.value][i1]}</option>`;
        }
    }else{
        secondVote21.innerHTML = '<option hidden>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    }

    firstVote22.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote22.innerHTML = '<option hidden>選択できません</option>';
    firstVote23.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote23.innerHTML = '<option hidden>選択できません</option>';
    firstVote24.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote24.innerHTML = '<option hidden>選択できません</option>';
    firstVote25.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote25.innerHTML = '<option hidden>選択できません</option>';
    firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote26.innerHTML = '<option hidden>選択できません</option>';
    firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote27.innerHTML = '<option hidden>選択できません</option>';
});

secondVote21.addEventListener('change', ()=>{
    thirdVote21.disabled = false;
    firstVote22.disabled = false;
    secondVote22.disabled = true;
    thirdVote22.disabled = true;
    firstVote23.disabled = true;
    secondVote23.disabled = true;
    thirdVote23.disabled = true;
    firstVote24.disabled = true;
    secondVote24.disabled = true;
    thirdVote24.disabled = true;
    firstVote25.disabled = true;
    secondVote25.disabled = true;
    thirdVote25.disabled = true;
    firstVote26.disabled = true;
    secondVote26.disabled = true;
    thirdVote26.disabled = true;
    firstVote27.disabled = true;
    secondVote27.disabled = true;
    thirdVote27.disabled = true;

    firstVote22.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        let count21 = 0;
        for(var ii1 = 0; ii1 < datas[animes[i1]].length; ii1++){
            if(secondVote21.value == datas[animes[i1]][ii1]){
                count21++;
            }
        }
        if(count21 != datas[animes[i1]].length){
            firstVote22.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    secondVote22.innerHTML = '<option hidden>選択できません</option>';
    firstVote23.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote23.innerHTML = '<option hidden>選択できません</option>';
    firstVote24.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote24.innerHTML = '<option hidden>選択できません</option>';
    firstVote25.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote25.innerHTML = '<option hidden>選択できません</option>';
    firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote26.innerHTML = '<option hidden>選択できません</option>';
    firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote27.innerHTML = '<option hidden>選択できません</option>';
});

    firstVote22.addEventListener('change', ()=>{
        secondVote22.disabled = false;
        thirdVote22.disabled = true;
        firstVote23.disabled = true;
        secondVote23.disabled = true;
        thirdVote23.disabled = true;
        firstVote24.disabled = true;
        secondVote24.disabled = true;
        thirdVote24.disabled = true;
        firstVote25.disabled = true;
        secondVote25.disabled = true;
        thirdVote25.disabled = true;
        firstVote26.disabled = true;
        secondVote26.disabled = true;
        thirdVote26.disabled = true;
        firstVote27.disabled = true;
        secondVote27.disabled = true;
        thirdVote27.disabled = true;

        secondVote22.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote22.value){
            for(var i1 = 0; i1 < datas[firstVote22.value].length; i1++){
                if(secondVote21.value != datas[firstVote22.value][i1]){
                    secondVote22.innerHTML += `<option value="${datas[firstVote22.value][i1]}">${datas[firstVote22.value][i1]}</option>`;
                }
            }
        }else{
            secondVote22.innerHTML = '<option hidden>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote23.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote23.innerHTML = '<option hidden>選択できません</option>';
        firstVote24.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote24.innerHTML = '<option hidden>選択できません</option>';
        firstVote25.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote25.innerHTML = '<option hidden>選択できません</option>';
        firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote26.innerHTML = '<option hidden>選択できません</option>';
        firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote27.innerHTML = '<option hidden>選択できません</option>';
    });

secondVote22.addEventListener('change', ()=>{
    thirdVote22.disabled = false;
    firstVote23.disabled = false;
    secondVote23.disabled = true;
    thirdVote23.disabled = true;
    firstVote24.disabled = true;
    secondVote24.disabled = true;
    thirdVote24.disabled = true;
    firstVote25.disabled = true;
    secondVote25.disabled = true;
    thirdVote25.disabled = true;
    firstVote26.disabled = true;
    secondVote26.disabled = true;
    thirdVote26.disabled = true;
    firstVote27.disabled = true;
    secondVote27.disabled = true;
    thirdVote27.disabled = true;

    firstVote23.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        let count22 = 0;
        for(var ii1 = 0; ii1 < datas[animes[i1]].length; ii1++){
            if(secondVote21.value == datas[animes[i1]][ii1]){
                count22++;
            }
            if(secondVote22.value == datas[animes[i1]][ii1]){
                count22++;
            }
        }
        if(count22 != datas[animes[i1]].length){
            firstVote23.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    secondVote23.innerHTML = '<option hidden>選択できません</option>';
    firstVote24.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote24.innerHTML = '<option hidden>選択できません</option>';
    firstVote25.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote25.innerHTML = '<option hidden>選択できません</option>';
    firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote26.innerHTML = '<option hidden>選択できません</option>';
    firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote27.innerHTML = '<option hidden>選択できません</option>';
});

    firstVote23.addEventListener('change', ()=>{
        secondVote23.disabled = false;
        thirdVote23.disabled = true;
        firstVote24.disabled = true;
        secondVote24.disabled = true;
        thirdVote24.disabled = true;
        firstVote25.disabled = true;
        secondVote25.disabled = true;
        thirdVote25.disabled = true;
        firstVote26.disabled = true;
        secondVote26.disabled = true;
        thirdVote26.disabled = true;
        firstVote27.disabled = true;
        secondVote27.disabled = true;
        thirdVote27.disabled = true;

        secondVote23.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote23.value){
            for(var i1 = 0; i1 < datas[firstVote23.value].length; i1++){
                if(
                    secondVote22.value != datas[firstVote23.value][i1]
                    &&secondVote21.value != datas[firstVote23.value][i1]
                ){
                    secondVote23.innerHTML += `<option value="${datas[firstVote23.value][i1]}">${datas[firstVote23.value][i1]}</option>`;
                }
            }
        }else{
            secondVote23.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote24.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote24.innerHTML = '<option hidden>選択できません</option>';
        firstVote25.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote25.innerHTML = '<option hidden>選択できません</option>';
        firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote26.innerHTML = '<option hidden>選択できません</option>';
        firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote27.innerHTML = '<option hidden>選択できません</option>';
    });

secondVote23.addEventListener('change', ()=>{
    thirdVote23.disabled = false;
    firstVote24.disabled = false;
    secondVote24.disabled = true;
    thirdVote24.disabled = true;
    firstVote25.disabled = true;
    secondVote25.disabled = true;
    thirdVote25.disabled = true;
    firstVote26.disabled = true;
    secondVote26.disabled = true;
    thirdVote26.disabled = true;
    firstVote27.disabled = true;
    secondVote27.disabled = true;
    thirdVote27.disabled = true;

    firstVote24.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        let count23 = 0;
        for(var ii1 = 0; ii1 < datas[animes[i1]].length; ii1++){
            if(secondVote21.value == datas[animes[i1]][ii1]){
                count23++;
            }
            if(secondVote22.value == datas[animes[i1]][ii1]){
                count23++;
            }
            if(secondVote23.value == datas[animes[i1]][ii1]){
                count23++;
            }
        }
        if(count23 != datas[animes[i1]].length){
            firstVote24.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    secondVote24.innerHTML = '<option hidden>選択できません</option>';
    firstVote25.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote25.innerHTML = '<option hidden>選択できません</option>';
    firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote26.innerHTML = '<option hidden>選択できません</option>';
    firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote27.innerHTML = '<option hidden>選択できません</option>';

    firstVote24.addEventListener('change', ()=>{
        secondVote24.disabled = false;
        thirdVote24.disabled = true;
        firstVote25.disabled = true;
        secondVote25.disabled = true;
        thirdVote25.disabled = true;
        firstVote26.disabled = true;
        secondVote26.disabled = true;
        thirdVote26.disabled = true;
        firstVote27.disabled = true;
        secondVote27.disabled = true;
        thirdVote27.disabled = true;

        secondVote24.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote24.value){
            for(var i1 = 0; i1 < datas[firstVote24.value].length; i1++){
                if(
                    secondVote23.value != datas[firstVote24.value][i1]
                    &&secondVote22.value != datas[firstVote24.value][i1]
                    &&secondVote21.value != datas[firstVote24.value][i1]
                ){
                    secondVote24.innerHTML += `<option value="${datas[firstVote24.value][i1]}">${datas[firstVote24.value][i1]}</option>`;
                }
            }
        }else{
            secondVote24.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVot25.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote25.innerHTML = '<option hidden>選択できません</option>';
        firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote26.innerHTML = '<option hidden>選択できません</option>';
        firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote27.innerHTML = '<option hidden>選択できません</option>';
    });
});

secondVote24.addEventListener('change', ()=>{
    thirdVote24.disabled = false;
    firstVote25.disabled = false;
    secondVote25.disabled = true;
    thirdVote25.disabled = true;
    firstVote26.disabled = true;
    secondVote26.disabled = true;
    thirdVote26.disabled = true;
    firstVote27.disabled = true;
    secondVote27.disabled = true;
    thirdVote27.disabled = true;

    firstVote25.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        let count24 = 0;
        for(var ii1 = 0; ii1 < datas[animes[i1]].length; ii1++){
            if(secondVote21.value == datas[animes[i1]][ii1]){
                count24++;
            }
            if(secondVote22.value == datas[animes[i1]][ii1]){
                count24++;
            }
            if(secondVote23.value == datas[animes[i1]][ii1]){
                count24++;
            }
            if(secondVote24.value == datas[animes[i1]][ii1]){
                count24++;
            }
        }
        if(count24 != datas[animes[i1]].length){
            firstVote25.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    secondVote25.innerHTML = '<option hidden>選択できません</option>';
    firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote26.innerHTML = '<option hidden>選択できません</option>';
    firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote27.innerHTML = '<option hidden>選択できません</option>';

    firstVote25.addEventListener('change', ()=>{
        secondVote25.disabled = false;
        thirdVote25.disabled = true;
        firstVote26.disabled = true;
        secondVote26.disabled = true;
        thirdVote26.disabled = true;
        firstVote27.disabled = true;
        secondVote27.disabled = true;
        thirdVote27.disabled = true;

        secondVote25.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote25.value){
            for(var i1 = 0; i1 < datas[firstVote25.value].length; i1++){
                if(
                    secondVote24.value != datas[firstVote25.value][i1]
                    &&secondVote23.value != datas[firstVote25.value][i1]
                    &&secondVote22.value != datas[firstVote25.value][i1]
                    &&secondVote21.value != datas[firstVote25.value][i1]
                ){
                    secondVote25.innerHTML += `<option value="${datas[firstVote25.value][i1]}">${datas[firstVote25.value][i1]}</option>`;
                }
            }
        }else{
            secondVote25.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote26.innerHTML = '<option hidden>選択できません</option>';
        firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote27.innerHTML = '<option hidden>選択できません</option>';
    });
});

secondVote25.addEventListener('change', ()=>{
    thirdVote25.disabled = false;
    firstVote26.disabled = false;
    secondVote26.disabled = true;
    thirdVote26.disabled = true;
    firstVote27.disabled = true;
    secondVote27.disabled = true;
    thirdVote27.disabled = true;

    firstVote26.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        let count25 = 0;
        for(var ii1 = 0; ii1 < datas[animes[i1]].length; ii1++){
            if(secondVote21.value == datas[animes[i1]][ii1]){
                count25++;
            }
            if(secondVote22.value == datas[animes[i1]][ii1]){
                count25++;
            }
            if(secondVote23.value == datas[animes[i1]][ii1]){
                count25++;
            }
            if(secondVote24.value == datas[animes[i1]][ii1]){
                count25++;
            }
            if(secondVote25.value == datas[animes[i1]][ii1]){
                count25++;
            }
        }
        if(count25 != datas[animes[i1]].length){
            firstVote26.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    secondVote26.innerHTML = '<option hidden>選択できません</option>';
    firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
    secondVote27.innerHTML = '<option hidden>選択できません</option>';

    firstVote26.addEventListener('change', ()=>{
        secondVote26.disabled = false;
        thirdVote26.disabled = true;
        firstVote27.disabled = true;
        secondVote27.disabled = true;
        thirdVote27.disabled = true;

        secondVote26.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote26.value){
            for(var i1 = 0; i1 < datas[firstVote26.value].length; i1++){
                if(
                    secondVote25.value != datas[firstVote26.value][i1]
                    &&secondVote24.value != datas[firstVote26.value][i1]
                    &&secondVote23.value != datas[firstVote26.value][i1]
                    &&secondVote22.value != datas[firstVote26.value][i1]
                    &&secondVote21.value != datas[firstVote26.value][i1]
                ){
                    secondVote26.innerHTML += `<option value="${datas[firstVote26.value][i1]}">${datas[firstVote26.value][i1]}</option>`;
                }
            }
        }else{
            secondVote26.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }

        firstVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        secondVote27.innerHTML = '<option hidden>選択できません</option>';
    });
});



secondVote26.addEventListener('change', ()=>{
    thirdVote26.disabled = false;
    firstVote27.disabled = false;
    secondVote27.disabled = true;
    thirdVote27.disabled = true;

    firstVote27.innerHTML = `<option hidden>選択してください</option>`;
    for(var i1 = 0; i1 < animes.length; i1++){
        let count26 = 0;
        for(var ii1 = 0; ii1 < datas[animes[i1]].length; ii1++){
            if(secondVote21.value == datas[animes[i1]][ii1]){
                count26++;
            }
            if(secondVote22.value == datas[animes[i1]][ii1]){
                count26++;
            }
            if(secondVote23.value == datas[animes[i1]][ii1]){
                count26++;
            }
            if(secondVote24.value == datas[animes[i1]][ii1]){
                count26++;
            }
            if(secondVote25.value == datas[animes[i1]][ii1]){
                count26++;
            }
            if(secondVote26.value == datas[animes[i1]][ii1]){
                count26++;
            }
        }
        if(count26 != datas[animes[i1]].length){
            firstVote27.innerHTML += `<option value="${animes[i1]}">${animes[i1]}</option>`;
        }
    }
    secondVote27.innerHTML = '<option hidden>選択できません</option>';

    firstVote27.addEventListener('change', ()=>{
        secondVote27.disabled = false;
        thirdVote27.disabled = true;

        secondVote27.innerHTML = '<option hidden>選択してください</option>';
        if(firstVote27.value){
            for(var i1 = 0; i1 < datas[firstVote27.value].length; i1++){
                if(
                    secondVote26.value != datas[firstVote27.value][i1]
                    &&secondVote25.value != datas[firstVote27.value][i1]
                    &&secondVote24.value != datas[firstVote27.value][i1]
                    &&secondVote23.value != datas[firstVote27.value][i1]
                    &&secondVote22.value != datas[firstVote27.value][i1]
                    &&secondVote21.value != datas[firstVote27.value][i1]
                ){
                    secondVote27.innerHTML += `<option value="${datas[firstVote27.value][i1]}">${datas[firstVote27.value][i1]}</option>`;
                }
            }
        }else{
            secondVote27.innerHTML = '<option>選択できません</option><option hidden>おちこぼれフルーツタルト</option>';
        }
    });
});

secondVote27.addEventListener('change', ()=>{
    thirdVote27.disabled = false;
});