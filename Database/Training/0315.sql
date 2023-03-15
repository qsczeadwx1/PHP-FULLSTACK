-- 사원 정보를 각자의 정보를 적절하게 넣기.
-- 월급, 직책, 소속부서 테이블에 각자의 정보를 넣기.
-- 짝궁의 [1,2]것도 넣기.
-- 나와 짝궁의 사원 소속 부서를 d009로 변경.
-- 짝궁의 모든 정보를 삭제.
-- 'd009'부서의 관리자를 나로 변경.
-- 오늘 날짜부로 나의 직책을 'Senior Enginner'로 변경.
-- 최고 연봉 사원과 최저 연봉 사원의 사번과 이름을 출력.
-- 전체 사원의 평균 연봉을 출력.
-- 사번이 499,975인 사원의 지금까지 평균 연봉을 출력.

INSERT INTO employees(
       emp_no
      ,birth_date
      ,first_name
      ,last_name
      ,gender
      ,hire_date
      )
VALUES(
       500000
       ,DATE(19980501)
       ,'MinGyu'
       ,'Kim'
       ,'M'
       ,NOW()
       );
       
INSERT INTO salaries(
      emp_no
      ,salary
      ,from_date
      ,to_date
      )
VALUES(
      500000
      ,60000
      ,DATE(20220315)
      ,DATE(20230315)
      );
      
INSERT INTO titles(
		emp_no
		,title
		,from_date
		,to_date
		)
VALUES(
		500000
		,'Engineer'
		,DATE(20010101)
		,DATE(20230315)
		);

INSERT INTO dept_emp(
		emp_no
		,dept_no
		,from_date
		,to_date
		)
VALUES(
		500000
		,'d001'
		,DATE(20010101)
		,DATE(20230315)
		);

INSERT INTO employees(
       emp_no
      ,birth_date
      ,first_name
      ,last_name
      ,gender
      ,hire_date
      )
VALUES(
       500001
       ,DATE(20010101)
       ,'GilDong'
       ,'Hong'
       ,'M'
       ,NOW()
       );
       
INSERT INTO salaries(
      emp_no
      ,salary
      ,from_date
      ,to_date
      )
VALUES(
      500001
      ,50000
      ,DATE(20220315)
      ,DATE(20230315)
      );
      
INSERT INTO titles(
		emp_no
		,title
		,from_date
		,to_date
		)
VALUES(
		500001
		,'Engineer'
		,DATE(20010101)
		,DATE(20230315)
		);

INSERT INTO dept_emp(
		emp_no
		,dept_no
		,from_date
		,to_date
		)
VALUES(
		500001
		,'d001'
		,DATE(20010101)
		,DATE(20230315)
		);

INSERT INTO dept_emp(
		emp_no
		,dept_no
		,from_date
		,to_date
		)
VALUES(
		500001
		,'d009'
		,DATE(20230315)
		,DATE(99991231)
		);

INSERT INTO dept_emp(
		emp_no
		,dept_no
		,from_date
		,to_date
		)
VALUES(
		500000
		,'d009'
		,DATE(20230315)
		,DATE(99991231)
		);

DELETE
FROM employees
WHERE emp_no = 500001;

DELETE
FROM salaries
WHERE emp_no = 500001;

DELETE
FROM titles
WHERE emp_no = 500001;

DELETE
FROM dept_emp
WHERE emp_no = 500001;
 
UPDATE dept_manager
SET to_date = DATE(20000101)
WHERE emp_no = 111939;
 
INSERT INTO dept_manager(
		dept_no
		,emp_no
		,from_date
		,to_date
		)
VALUES(
		'd009'
		,500000
		,DATE(20000101)
		,DATE(99991231)
		);

INSERT INTO titles(
		emp_no
		,title
		,from_date
		,to_date
		)
VALUES(
		500000
		,'Senior Engineer'
		,DATE(20230315)
		,DATE(99991231)
		);

SELECT emp_no, first_name
FROM employees
WHERE emp_no = (
					SELECT emp_no
					FROM salaries
					WHERE salary = (
										select MAX(salary)
										FROM salaries
										)
					);
					
SELECT emp_no, first_name
FROM employees
WHERE emp_no = (
					SELECT emp_no
					FROM salaries
					WHERE salary = (
										select MIN(salary)
										FROM salaries
										)
					);
				  
SELECT emp_no, first_name
FROM employees
WHERE emp_no = (
					SELECT emp_no
					FROM salaries
					ORDER BY salary
					LIMIT 1
					)
					OR
		emp_no = (
					SELECT emp_no
					FROM salaries
					ORDER BY salary
					DESC LIMIT 1
					);

SELECT AVG(salary)
FROM salaries
WHERE salary;

SELECT AVG(salary)
FROM salaries
WHERE emp_no = 499975;


