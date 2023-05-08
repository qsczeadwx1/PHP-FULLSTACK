// 타이머 함수

// 1. setTimeout() / clearTimeout()
const timeOut = setTimeout(() => console.log('A'), 2000);

clearTimeout(timeOut); // 타이머 제거

// 2. setInterval() / clearInterval()
const myinterval = setInterval(() => console.log('A'), 1000);

clearInterval(myinterval); // 인터벌 제거

// 1 ~ 5를 순서대로 1초마다 콘솔에 출력해 주세요.

let num = 1;
const timeset = setInterval(() => {
    console.log(num++);
    if (num === 6) {
        clearInterval(timeset);
    }
}, 1000);
let i = 1;
const now = new Date();
const now123 = document.querySelector('.now_time');
const timer1 = setInterval(() => Math.floor((now.getTime() / 1000) + i++), 1000);






