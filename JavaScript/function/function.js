// 함수

// 함수 선언문
function add( a, b ) {
    return a + b;
}

// 함수 표현식
let add2 = function( a, b ) {
    return a + b;
}

// 화살표 함수 : 위아래 함수가 같은거임
let test1 = () => "안녕";

// function test1() {
//     return "안녕";
// }

let add3 = ( a, b ) => a + b;
// 익명 함수
// function( a, b ) {
//     return a + b;
// }

// function 생성자 함수
let add4 = Function('a', 'b', 'return a + b;');9