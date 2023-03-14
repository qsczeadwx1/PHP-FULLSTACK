SELECT *
FROM employees
WHERE emp_no = 10001
OR emp_no = 10005;

SELECT *
FROM employees
WHERE emp_no IN(10001, 10005, 10006);

SELECT *
FROM employees
WHERE first_name LIKE('___m');

SELECT emp_no, title
FROM titles
WHERE title LIKE('%Engineer%');

SELECT distinct emp_no
FROM dept_emp;

SELECT *
FROM employees
LIMIT 100 OFFSET 100;

SELECT COUNT(emp_no)
FROM employees
WHERE emp_no = 10001;

SELECT avg(salary)
FROM salaries;

SELECT MAX(salary)
FROM salaries;

SELECT MIN(salary)
FROM salaries;

-- 그룹으로 묶어서 조회
-- group by 컬럼명 [HAVING 집계함수조건]

SELECT title, COUNT(title)
FROM titles
GROUP BY title HAVING COUNT(title) >= 100000;

SELECT emp_no, AVG(salary)
FROM salaries
GROUP BY emp_no;

SELECT concat(last_name, ' ' ,first_name) AS fullname
FROM employees;

-- 서브쿼리(subQuery) : 쿼리 안에 또 다른 쿼리가 있는 형태
SELECT *
FROM dept_manager
WHERE dept_no = (
						SELECT dept_no 
						FROM dept_manager
						WHERE emp_no = 110344
						);


-- date 타입의 속성 비교 
SELECT *, NOW()
FROM titles
WHERE emp_no = 10009
AND to_date >= NOW();

