// 1. async & await 란?
// 	비동기처리를 좀 더 가독성 좋고 편하게 쓰기위해 promise를사용했는데,
// 	promise 또한 체이닝이 계속 될 경우 코드가 난잡해 질 수 있어 async & await가 도입되었습니다.
// 	async & await는 promise를 기반으로 동작합니다.

// 2. async
// 동기처리
// function delay() {
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime) {}
//     console.log('B');
// }
// console.log('A');
// delay();
// console.log('C');

// promise로 비동기 처리 처럼보이게 
// function delay2() {
//     return new Promise ((resolve) => {
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime) {}
//     resolve('B');
// });
// }
// console.log('A');
// delay2().then(resolve1 => console.log(resolve1));
// console.log('C');

// async로 비동기 처리
// async function delay3() {
//     const delayTime = Date.now() +2000;
//     while(Date.now() < delayTime) {}
//     return 'B';
// }

// console.log('A');
// delay3().then(resolve1 => console.log(resolve1));
// console.log('C');

// 3. await : async가 붙은 함수 안에서만 사용 가능
function delay4(ms) {
    return new Promise( resolve => setTimeout(resolve, ms) );
}

async function getA() {
    await delay4(1000);
    return 'A';
}
async function getB() {
    await delay4(2000);
    return 'B';
}


// promise 방식으로 출력(promise도 체이닝이 많아지면 콜백지옥과 비슷해짐)
// function getAll() {
//     getA()
//     .then(strA => { 
//         return getB()
//                 .then(strB => console.log(`${strA} : ${strB}`))
//     });
// }


// 병렬처리를 하려는 경우
// async를 이용할 순 있지만, 잘 사용안함
async function getAll2() {
    const strA = await getA();
    const strB = await getB();

    console.log(`${strA} : ${strB}`);
}

getAll2();

// Promise.all() 메소드 이용
async function getAll3() {
    Promise.all([getA(), getB()])
    .then(all => console.log(all.join(' : ')));
}

getAll3();

// 복수의 Promise객체 중 먼저 완료 된 객체만 이용 : Promise.race() 메소드
// async function getAll() {
// 	return Promise.race([getA(), getB()]);
// }
// getAll().then(console.log);