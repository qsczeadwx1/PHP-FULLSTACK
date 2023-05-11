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

