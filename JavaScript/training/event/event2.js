const btn1 = document.querySelector('.btn1');
const div1 = document.querySelector('#div1');

btn1.addEventListener('mousedown', () => alert('안녕하세요. \n숨어있는 div를 찾아보세요.'));
div1.addEventListener('mouseenter', () => {alert('두근두근')}, {once : true});

const ran = Math.floor(Math.random() * 101);
const ran2 = Math.floor(Math.random() * 101);

div1.style.top = ran + 'vh';
div1.style.left = ran2 + 'vw';
 
div1.addEventListener('click', () => {
    const color1 = div1.style.backgroundColor;
    if( color1 === 'white' || color1 === '') {
            alert('들켰다!');
            div1.style.backgroundColor = 'beige';
        } else {
            alert('다시 숨는다!');
            div1.style.backgroundColor = 'white';
            div1.style.top = Math.floor(Math.random() * 101)+'vh';
            div1.style.left = Math.floor(Math.random() * 101)+'vw';
            div1.addEventListener('mouseenter', () => {alert('두근두근')}, {once : true});
        }});

// 새로고침해서 하는법
// div1.addEventListener('click', () => {
//     const color1 = div1.style.backgroundColor;
//     if( color1 === 'white' || color1 === '') {
//             alert('들켰다!');
//             div1.style.backgroundColor = 'beige';
//         } else {
//             alert('다시 숨는다!');
//             div1.style.backgroundColor = 'white';
//             location.reload();
//         }});