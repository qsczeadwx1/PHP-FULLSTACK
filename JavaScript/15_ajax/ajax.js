






// API실행 버튼을 클릭해야 api요청해서 이미지가 나오도록
// 다시 누르면 기존에 있던 것이 사라지고 다시 나오게
// url input으로 거기다가 적으면 그 url로 이미지를 가져옴
// css파일도 따로 만들기

// https://picsum.photos

let url = "https://picsum.photos/v2/list?page=1&limit=5";
const divImg = document.querySelector('.img_tag');
const btn1 = document.querySelector('.api_btn');
const text1 = document.getElementById('url_input');

fetch(url)
.then(res => {return res.json()})
.then(data => makeList(data))
.catch(console.log);

function makeList(data) {
    data.forEach(item => {
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url);
        divImg.appendChild(tagImg);
    });
}

function makeNewList(data) {
    divImg.innerHTML = "";
    data.forEach(item => {
        const tagImg = document.createElement('img');
        tagImg.setAttribute('src', item.download_url);
        divImg.appendChild(tagImg);
    });
}

function chkResponse(res) {
    return new Promise((resolve, reject) => {
        if(res.ok) {
            resolve(res)
        } else {
            reject('API 에러');
        }
    })
}

btn1.addEventListener('click', () => {
    url = text1.value;
    fetch(url)
    .then(res => {return res.json()})
    .then(data => makeNewList(data))
    .catch(console.log);
});

