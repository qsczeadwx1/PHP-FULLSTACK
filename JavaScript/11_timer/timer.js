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

const now123 = document.querySelector('.now_time');
// const timer1 = setInterval(() => Math.floor((now.getTime() / 1000) + i++), 1000);

function nowTime() {
    const now = new Date();
    let h = now.getHours();
    let m = now.getMinutes();
    let s = now.getSeconds();
    if( h < 12 ) {
        h = " 오전 " + now.getHours();
    }
    else if( h > 12) {
        h = " 오후 " + ( 12 - now.getHours());
    }
    now123.innerText = ("현재시간" + h + " : "+ (m < 10 ? "0"+m : m) + " : " + (s < 10 ? "0"+s : s) );
}

nowTime();
let setTimer = setInterval(nowTime,1000);

const stop1 = document.querySelector('.stop_btn');

stop1.addEventListener('click', () => {
    setTimer = clearInterval(setTimer);
});

const restart1 = document.querySelector('.restart_btn');

restart1.addEventListener('click', () => {
    if(!setTimer) {
    nowTime();
    setTimer = setInterval(nowTime,1000);
    }
});




