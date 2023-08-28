<?php
// // [알고리즘] 문제 #1. 찍신 찾기
// // { answer : 정답 번호 (1~5), score : number }로 이루어진 배열 arr이 정답지로 넘어갈 때,
// // 가장 점수가 높은 수포자의 이름과 점수를 “이름 : 점수” 형태로 리턴해 주세요
// // 시험 응시자는 1번으로 모두 찍은 a, 3번으로 모두 찍은 b, 5번으로 모두 찍은 c가 있습니다.
// // 🚩 [입출력 예]
// // [ { answer : 1, score : 5 }, { answer : 3, score : 3 }, { answer : 2, score : 4 } ] → a : 5
// // [ { answer : 1, score : 5 }, { answer : 5, score : 5 }, { answer : 2, score : 4 } ] → a : 5, c : 5


// // 1. 답
// function findHighestScorer($answers) {
//     // 시험 응시자들의 답을 저장할 배열
//     $participants = ['a' => 0, 'b' => 0, 'c' => 0];

//     // 정답지를 순회하면서 응시자들의 답과 비교하여 점수 계산
//     foreach ($answers as $answer) {
//         if ($answer['answer'] === 1) {
//             $participants['a'] += $answer['score'];
//         } elseif ($answer['answer'] === 3) {
//             $participants['b'] += $answer['score'];
//         } elseif ($answer['answer'] === 5) {
//             $participants['c'] += $answer['score'];
//         }
//     }

//     // 가장 높은 점수를 받은 수포자와 점수를 찾아서 저장
//     $highestScore = max($participants);
//     $highestScorers = [];
//     foreach ($participants as $name => $score) {
//         if ($score === $highestScore) {
//             $highestScorers[] = "$name : $score";
//         }
//     }

//     return implode(", ", $highestScorers);
// }

// // 테스트 입력 데이터
// $test1 = [
//     ['answer' => 1, 'score' => 5],
//     ['answer' => 3, 'score' => 3],
//     ['answer' => 2, 'score' => 4],
// ];

// $test2 = [
//     ['answer' => 1, 'score' => 5],
//     ['answer' => 5, 'score' => 5],
//     ['answer' => 2, 'score' => 4],
// ];

// // 함수 호출 및 결과 출력
// echo findHighestScorer($test1)."\n"; // 출력: "a : 5"

// echo findHighestScorer($test2); // 출력: "a : 5, c : 5"


// // [알고리즘] 문제 #2. 최소 공배수의 합
// // 양의 정수의 배열 arr이 주어질 때 모든 원소들이 둘 씩 짝지어 생기는 최소공배수를 합한 값을 리턴하는 solution 함수를 작성해주세요.
// // 🚩 [제한사항]
// // - arr 내 원소들은 중복되지 않습니다. 
// // - arr 배열의 길이는 최소 3입니다.
// // - 입출력 예 : [ 1 , 2 , 3 ] → ( {1 | 2} → 2 + { 1 | 3 } → 3 + { 2 | 3 } → 6 ) = 11

// // 2.답
// function gcd($a, $b) {
//     // 유클리드 호제법을 이용하여 최대공약수를 구하는 함수
//     if ($b === 0) {
//         return $a;
//     }
//     return gcd($b, $a % $b);
// }

// function lcm($a, $b) {
//     // 최소공배수를 구하는 함수
//     return ($a * $b) / gcd($a, $b);
// }

// function solution($arr) {
//     $n = count($arr);
//     $answer = 0;

//     // 모든 원소 쌍에 대해 최소공배수를 계산하여 더함
//     for ($i = 0; $i < $n; $i++) {
//         for ($j = $i + 1; $j < $n; $j++) {
//             $answer += lcm($arr[$i], $arr[$j]);
//         }
//     }

//     return $answer;
// }

// // 테스트 입력 데이터
// $arr = [1, 2, 3];

// // 함수 호출 및 결과 출력
// echo solution($arr); // 출력: 11


// [알고리즘] 문제 #3. 소수의 합
// 양의 정수인 a값이 주어질 때 1부터 a값 이하에 존재하는 모든 소수의 합을 리턴하는
// solution 함수를 작성해주세요.
// 🚩 [제한사항]
// - 소수란 1과 자기 자신으로만 나눠지는 수 입니다. ( 1인 소수가 아닙니다. )
// - a는 최소 4부터 주어집니다.
// 🚩 [입출력 예]
// a : 5 → 10
// a : 10 → 17
// a : 30 → 129

// [SQL] 문제 #4. 등급 매기기
// 허브대학교 1학년 1학기 코딩테스트 점수가 모두 채점되어 아래 DataBase Table에 Insert 되어있습니다.
// 이 때 , A등급은 90점 이상 , B등급은 80점 이상 , C등급은 70점 이상 , D등급은 60점 이상 
// 이 외 모든 점수는 F등급으로 매겨질 때, 학생의 이름과 등급을 가져오는 SQL문을 작성해주세요.
// 🚩 [제한사항]
// - 단 , 결석 회수가 4회 이상인 학생은 무조건 F등급입니다.
// - 모든 데이터는 null 값이 허용되지 않습니다.
// - 코딩테스트 점수 테이블
// 🚩 [테이블]
// name(이름)	score(성적)	absent(결석회수)
// 홍길동	95	1
// 춘향이	72	0
// 심청이	85	3
// 심봉사	90	4
// 콩쥐	65	0
// 팥쥐	52	1

// [SQL] 문제 #5. 부서별 최근 공지사항
// 아래 테이블은 A 회사의 공지사항 테이블입니다.
// 이 테이블에서 부서별 최신 공지사항의 제목, 조회수, 게시일을 가져오는 SQL문을 작성해주세요.
// 🚩 [제한사항]
// - 모든 데이터는 null 값이 허용되지 않습니다.
// 🚩 [테이블]

// idx(고유번호)	title(제목)	notice_dept(부서)		post_date(게시일)	view_count(조회수)
// 1	개발팀 전체 공지	개발팀	2023-01-05 00:00:00	205
// 2	기획팀 전체 공지	기획팀	2023-01-20 00:00:00	98
// 3	디자인팀 공유 사이트 공지	디자인팀	2023-01-29 00:00:00	150
// 4	회계팀 Q 컨퍼런스 정리 공지	회게팀	2023-02-05 00:00:00	135
// 5	개발팀 Y 프로젝트 미팅 공지	개발팀	2023-02-06 00:00:00	86
// 6	디자인팀 X 프로젝트 미팅 공지	디자인팀	2023-02-06 00:00:00	52

// for($i=0; $i<5; $i++) {
//     for($j=0; $j<=$i; $j++) {
//         echo '*';
//     }
//     echo "\n";
// }

for($dan=2; $dan < 10; $dan++) {
    echo $dan."단\n";
    for($num = 1; $num < 10; $num++) {
        echo $dan." * ".$num."=".$dan*$num."\n";
    }
}

// num ~ num 까지 합 구하기
$result = 0;
$num = 100;
for($i=1; $i<=$num; $i++) {
    $result = $result + $i;
}
echo "1부터 ".$num."까지의 합은 ".$result."입니다.\n";

// 팩토리얼 값 구하기
$num1 = 10;
$result1 = 1;
for($i=1; $i <= $num1; $i++) {
    $result1 = $result1 * $i;

}
echo $num1."!의 값은 ".$result1."입니다.\n";

// 단리 복리 이자계산기
$money = 100000;
$interest_rate = 0.1;

for($year=1; $year<=10; $year++)
{
    $simple = $money*(1+$interest_rate * $year);

    $compound = $money;
    for($i=1; $i<=$year; $i++)
    {
    $compound *=(1+$interest_rate);
    }

    echo number_format($money)."원의 ".$year."년 단리는 ".number_format(floor($simple))."원, 복리는 ".number_format(floor($compound))."원 입니다.\n";
}
?>