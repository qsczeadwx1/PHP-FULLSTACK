// DATE
const NOW = new Date('2023-04-30 15:20:30');

// getFullYear() : 연도만 가져오는 메소드
let y = NOW.getFullYear();

// getMonth() : 월을 가져오는 메소드(0 ~ 11로 값을 나타내기 때문에
//              현재 월을 가져오려면 + 1 을 해줘야함)
let m = NOW.getMonth() + 1 ;

// getDate() : 일을 가져오는 메소드
let d = NOW.getDate();

// getDay() : 요일을 가져오는 메소드
let w = NOW.getDay();

// getTime() : 1970/01/01 기준으로 몇초가 지났는지 밀리초를 가져온다.
let t = NOW.getTime();

// getHour() : 시간을 가져오는 메소드
let h = NOW.getHours();

// getMinutes() : 분을 가져오는 메소드
let mi = NOW.getMinutes();

// getSeconds() : 초를 가져오는 메소드
let sec = NOW.getSeconds();

// getMilliseconds() : 밀리초를 가져오는 메소드
let milsec = NOW.getMilliseconds();


// 기준일 : 2022년 9월 30일 19시 20분 10초
// 오늘부터 며칠 전인지 출력

const NOW1 = new Date();
const NOW2 = new Date('2022-09-30 19:20:10');

let t1 = NOW1.getTime();
let t2 = NOW2.getTime();
let sub = t1 - t2;
let divide = sub/1000/60/60/24;
let result = Math.ceil(divide);
console.log(result);
