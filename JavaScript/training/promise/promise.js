
// setTimeout(function() {
//     console.log('A');
// }, 3000);

// setTimeout(function() {
//     console.log('B');
// }, 2000);

// setTimeout(function() {
//     console.log('C');
// }, 1000);


// 1. 콜백함수를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.

    // setTimeout(() => {
    //     console.log('A');
    //     setTimeout(() => {
    //         console.log('B');
    //         setTimeout(() => {
    //             console.log('C');
    //         },1000);
    //     },2000);
    // }, 3000);


// 2. promise를 이용해서 A, B, C 순서로 콘솔에 출력해 주세요.(promise를 함수로 넣어서 구현)
function log123(alp, time) {
    return new Promise((resolve) => {
        setTimeout(() => {
            console.log(alp);
            resolve();
        },time);
    });
}

function log1234() {
    log123('A', 3000)
    .then(() => log123('B', 2000))
    .then(() => log123('C', 1000));
}

log1234();
