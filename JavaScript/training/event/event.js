// 1. 버튼 눌렀을때 
// "안녕하세요. 
// 숨어있는 div를 찾아보세요." 라는 경고문구 출력
// 2. 특정 영역에 마우스 포인터가 진입하면 "두근두근"이라는 문구 한번만 출력
// 3. 2번 영역 클릭 했을 때, "들켰다!"라는 문구가 출력되면서 배경색을 베이지색으로 바꿈
// 4. 영역을 다시 클릭 했을 때, "다시 숨는다!"라는 문구를 출력하면서 배경색을 흰색으로 바꿈

const btn1 = document.querySelector('.btn1');
const div1 = document.querySelector('#div1');

btn1.addEventListener('mousedown', () => alert('안녕하세요. \n숨어있는 div를 찾아보세요.'));

div1.addEventListener('mouseenter', () => {alert('두근두근')}, {once : true});
div1.addEventListener('click', () => {
    const color1 = div1.style.backgroundColor;
    if( color1 === 'white' || color1 === '') {
            alert('들켰다!');
            div1.style.backgroundColor = 'beige';
        } else {
            alert('다시 숨는다!');
            div1.style.backgroundColor = 'white';
        }});

// 미리 만들어 놓은 함수를 사용해서 addEventListener에 넣을땐
// clickEvent로 괄호 넣지않고 사용하기, 괄호 넣으면 즉시실행 함수가 되어버림
// function clickEvent() {
//     const color1 = div1.style.backgroundColor;
//     if( color1 === 'white' || color1 === '') {
//         alert('들켰다!');
//         div1.style.backgroundColor = 'beige';
//     } else {
//         alert('다시 숨는다!');
//         div1.style.backgroundColor = 'white';
//     }
// }

