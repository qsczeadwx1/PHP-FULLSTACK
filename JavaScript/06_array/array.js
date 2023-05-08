
let arr = [1, 2, 3, 4, 5];
let arr1 = [1, 2, 3, 4, 5];
// push() 메소드 : 배열에 값 추가
arr.push(6, 7, 8, 9, 10, 'abc', 'aaa');

// delete : 배열의 값 삭제( 인덱스는 남아있음 )
delete arr[5];

// index 2번부터 3개를 삭제
arr.splice(2,3);

// index 2번 뒤에 값 3을 추가
arr.splice(2,0,3);

// index 2번부터 5개를 지우고, 100을 삽입
arr.splice(2,5,100);

// index 2번부터 2개를 지우고, 뒤에 10, 11, 12, 13 14를 삽입
arr.splice(2,2,10,11,12,13,14);

arr1.splice(0,0,0);

// indexOf() 메소드 : 배열에서 특정 요소를 찾는데 사용
// ()안에 찾고 싶은 값을 넣으면 첫번째 값의 index의 번호가 나옴,
// 만약 없는 값을 넣으면 -1로 반환
// lastIndexOf() : 값의 마지막 index번호가 나옴
let arr2 = [1, 2, 3, 4, 5, 5, 5, 5];

// slice() : 갖고 오고 싶은 문자열 

let str = ['abcdefg'];
str.slice(1,3);

let fileName = 'javaScript.log.php';
// 아래처럼 콘솔에 출력 (indexOf(), lastIndexOf(), slice()이용)
let firstDot = fileName.indexOf('.');
let lastDot = fileName.lastIndexOf('.');
// javaScript
// log
// php

console.log(fileName.slice(0,firstDot));
console.log(fileName.slice(firstDot+1,lastDot));
console.log(fileName.slice(lastDot+1));


// concat() 메소드 : 배열들의 값을 기존 배열에 합쳐서 새 배열을 반환
let arrCon1 = [1, 2, 3];
let arrCon2 = [10, 20, 30];
let arrCon4 = [100, 200, 300];
let arrCon3 = arrCon1.concat( arrCon2, arrCon4 );
console.log( arrCon3 );

// includes() 메소드 : 배열이 특정요소를 가지고 있는지 판별(있으면 true 없으면 false)
let arrInc = [1, 2, 3, 4];
console.log( arrInc.includes( 2 ) );

// sort() 메소드 : 배열의 요소를 아스키코드 기준으로 정렬해서 변환
const arrSort = [6, 1, 7, 20, 11, 34, 2, 68, 1257, 123, 54, 29];
arrSort.sort();
// 오름차순 정렬
arrSort.sort(
    function( a, b ) {
        return a - b;
    }
);
// 내림차순 정렬
arrSort.sort( ( a, b ) => b - a );

// join() 메소드 : 배열의 모든 요소를 연결해서 하나의 문자열로 만들어줌
const arrJoin = ["안녕", "하세", "요"];
arrJoin.join(); // "안녕,하세,요"
arrJoin.join(''); // "안녕하세요"
arrJoin.join('aa'); // "안녕aa하세aa요"

// every() 메소드 : 배열의 요소들이 주어진 함수를 통과하는 판별
const arrEvery = [1, 2, 3, 4, 5];
let result = arrEvery.every( function( val )  {
                                return val <= 5;
                            });
console.log( result );

// every를 사용해서 모든 요소의 2로 나눈 나머지가 0인지 판별해 주세요
let result1 = arrEvery.every( val => val % 2 === 0 );
console.log( result1 );

// some() 메소드 : 배열 안에 모든 요소 중에 하나라도 
// 주어진 함수를 통과하는 지를 판별
const arrSome = [1, 2, 3, 4, 5];
let result2 = arrSome.some( val => val % 2 === 0 );
console.log( result2 );

// filter() 메소드 : 주어진 함수를 통과하는 모든 요소를 모아서 새로운 배열로 반환
const arrFilter = [1, 2, 3, 4, 5];
let result3 = arrFilter.filter( val => val >= 3 );
console.log( result3 );

