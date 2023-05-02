// 제어문

// 조건문( if, switch )
if( 1 > 0 ) {
    console.log("1은 0보다 크다.");
} else if( 1 < 0 ) {
    console.log("1은 0보다 작다.");
} else {
    console.log("기타 등등");
}

let u_age = 30;
switch ( u_age ) {
    case 20:
        console.log("20살");
        break;

    default:
        console.log(u_age + "살");
        break;
}

// -------------------
// 반복문 ( while, do_while, for, foreach, for...in, for...of )
// -------------------

// while
let num = 0;
while( num <= 3 ) {
    console.log(num);
    num++;
}

// do while
let i = 1;
do {
    console.log( 2 + " * " + i + " = " + 2 * i );
    i++;
} while ( i <= 9);

// for
for( let ii = 0; ii < 5; ii++ ) {
    for( let star = 0; star <= ii; star++ ) {
        console.log("*");
    }
    console.log("\n");
}

for( let iii = 5; iii > 0; iii--) {
    for( let star1 = 0; star1 < iii; star1++ ) {
        console.log("*");
    }
    console.log("\n");
}

// foreach 배열만 쓸수 있음
let arr = [1, 2, 3, 4];

arr.forEach( function(val)  {
    console.log(val);
});

// for...in 모든 객체 다 사용가능
let arr1 = {
    u_name: "홍길동"
    ,u_age: 0
}

for( let a in arr1 ) {
    console.log( a + " : " + arr1[a] );
}

// for...of : 
let arr2 = [5, 4, 3];
arr2.nu1 = 2;

for( let b of arr2 ) {
    console.log( b );
}