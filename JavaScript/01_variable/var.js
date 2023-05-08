console.log("안녕하세요. js파일입니다.", "두번째");


// ------------------------
// 변수
// ------------------------
// var : 중복 선언 가능, 재할당 가능, 함수레벨 스코프
// var u_name = "홍길동";
// var u_name = "갑순이";
// u_name = "갑돌이";
// console.log( u_name );

// let : 중복 선언 불가능, 재할당 가능, 블록레벨 스코프
// let u_age = 20;
// u_age = 30;

// console.log( u_age );

// 상수 : 중복 선언 불가능, 재할당 불가능, 블록레벨 스코프
// const gender = "남자";
// gender = "여자";

// --------------------------
// 스코프
// --------------------------

// 전역 스코프
let name_1 = "홍길동";

// 함수 레벨 스코프
function test() {
    console.log(name_1);
    let age_1 = 30;
    console.log(age_1);
}

// 블록 레벨 스코프 : 중괄호{}안을 블록레벨이라하고, 그안에서만 사용가능
function test1() {
    const abc = "a";
    let test_let = "let변수";
    if( true ){
        test_let = "함수 : 테스트1";
        var var_1 = "var로 선언";
    }
    console.log(test_let);
    console.log(var_1);
    console.log(abc);
}


// ------------------
// 호이스팅 ( hoisting )
// ------------------
// 인터프리터가 변수와 함수의 메모리 공간을 선언 전에 미리 할당하는 것
// (인터프리터 : 프로그래밍 언어의 소스 코드를 바로 실행하는 컴퓨터 프로그램 또는 환경)
// 코드가 실행되기 전에 변수와 함수를 최상단에 끌어 올려지는 것

// 함수는 최상단에서 미리 할당되어 사용할 수 있음
// var로 변수를 입력하면, 최상단에 할당은 하지만, 값은 아직 할당되어 있지 않고 undefined로 설정
// const와 let으로 변수를 입력하면, 최상단에 할당은 하지만, undefined로 값을 초기화해주지 않음

console.log( hTest() );
console.log( "63행 : " + varTest);
// console.log( "59행 : " + letTest);
function hTest() {
    return "함수 : hTest";
}

var varTest = "var : var변수";

console.log( "71행 : " + varTest);

let letTest = "let 변수";
console.log( "74행 : " + letTest);