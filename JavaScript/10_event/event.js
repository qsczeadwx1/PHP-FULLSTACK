// 인라인 이벤트 등록
// html파일 11행, 13행 참조
// onclick

// 프로퍼티 리스너
const btn = document.querySelector('#btn1');
btn.onclick = function() {
    location.href = "http://www.google.co.kr";
}

// addEventListener(evenType, funciton) 방식
const btn2 = document.getElementById('btn2');

// 현재창에서 열기
// btn2.addEventListener('click', () => {
//     location.href = 'http://www.daum.net';
// });

// 팝업창에서 열기
let newWindow = null;
btn2.addEventListener('click', () => {
    newWindow = open('http://www.daum.net', '', 'width=500 height=500');

});

// // 팝업창 닫기
// function popUpClose(win) {
//     win.close();
// }

// const btn3 = document.getElementById('btn3');
// btn3.addEventListener('click', popUpClose(newWindow));

// // 이벤트 삭제
// // removeEventListener(eventType, function)
// // addEventListener()로 등록한 이벤트의 인수와 같은 인수를 셋팅해야 삭제됨
// btn3.removeEventListener('click', popUpClose(newWindow));



// 이벤트 타입
// 1. 마우스 이벤트
// - mousedown - 마우스가 요소안에서 클릭이 눌릴 때
const div1 = document.querySelector('.div1');
div1.addEventListener('mousedown', () => alert('div1 클릭'));
// - mouseenter - 마우스 포인터가 요소 안으로 진입 했을 때
div1.addEventListener('mouseenter', () => alert('div1 진입'));
// mouseup
// mouseleave
// mousemove
// event.clientX, event.clientY
// event.pageX, event.pageY
// event.target.getBoundingClientRect()
