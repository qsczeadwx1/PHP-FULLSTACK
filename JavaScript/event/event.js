// 인라인 이벤트 등록
// html파일 11행, 13행 참조
// onclick

// 프로퍼티 리스너
const btn = document.querySelector('#btn1');
btn.onclick = function() {
    location.href = "http://www.google.co.kr";
}