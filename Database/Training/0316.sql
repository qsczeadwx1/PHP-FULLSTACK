-- 1 사원의 사원번호, 풀네임, 직책명을 출력

SELECT emp.emp_no
		,CONCAT(last_name, ' ', first_name) full_name
		,tit.title
FROM employees emp
	INNER JOIN titles tit
		ON emp.emp_no = tit.emp_no
        WHERE tit.to_date = DATE(99990101);

-- 2 사원의 사원번호, 성별, 현재 월급을 출력

SELECT emp.emp_no
		,emp.gender
		,sal.salary
FROM employees emp
	INNER JOIN salaries sal
	ON emp.emp_no = sal.emp_no
WHERE sal.to_date = DATE(99990101);

-- 3 10010 사원의 풀네임, 과거부터 현재까지 월급 이력을 출력

SELECT CONCAT(last_name, ' ', first_name) full_name
		,sal.salary
FROM employees emp
		INNER JOIN salaries sal
		ON emp.emp_no = sal.emp_no
WHERE emp.emp_no = 10010;

-- 4 사원의 사원번호, 풀네임, 소속부서명을 출력

SELECT emp.emp_no
		,CONCAT(last_name, ' ', first_name) full_name
		,dept.dept_name
FROM employees emp
		INNER JOIN dept_emp dept_e
		ON emp.emp_no = dept_e.emp_no
		INNER JOIN departments dept
		ON dept_e.dept_no = dept.dept_no
        WHERE dept_e.to_date = DATE(99990101)
		ORDER BY emp.emp_no;

-- 5 현재 월급의 상위 10위까지 사원의 사번, 풀네임, 월급을 출력

SELECT sal.emp_no
		,CONCAT(last_name, ' ', first_name) full_name
		,sal.salary
FROM salaries sal
		INNER JOIN employees emp
		ON emp.emp_no = sal.emp_no
WHERE sal.to_date = DATE(99990101)
ORDER BY sal.salary DESC
LIMIT 10;
			
-- 6 각 부서의 부서장의 부서명, 풀네임, 입사일을 출력

SELECT d_m.dept_no
		,CONCAT(last_name, ' ', first_name) full_name
		,emp.hire_date
FROM dept_manager d_m
		INNER JOIN employees emp
		ON emp.emp_no = d_m.emp_no	
WHERE d_m.to_date >= DATE(99990101);


-- 7 현재 직책이 "Staff"인 사원의 현재 전체 평균 월급을 출력

SELECT AVG(salary) A_S
FROM salaries sal
	INNER JOIN titles tit
	ON sal.emp_no = tit.emp_no
	WHERE tit.title = 'Staff'
		AND tit.to_date = DATE(99990101)
        AND sal.to_date = DATE(99990101);
			
-- 8 부서장직을 역임했던 모든 사원의 풀네임과 입사일, 사번, 부서번호를 출력

SELECT CONCAT(last_name, ' ', first_name) full_name
		,hire_date
		,emp.emp_no
		,d_m.dept_no
FROM employees emp
	INNER JOIN dept_manager d_m
		ON emp.emp_no = d_m.emp_no
		WHERE d_m.to_date < DATE(99990101);
	
-- 9 현재 각 직급별 평균월급 중 60,000이상인 직급의 직급명, 평균월급(정수)를 내림차순으로 출력

SELECT tit.title
		,TRUNCATE(AVG(salary), 0) a_s
FROM titles tit
	INNER JOIN salaries sal
	 ON sal.emp_no = tit.emp_no
	 WHERE tit.to_date = DATE(99990101) 
	 AND sal.to_date = DATE(99990101)
	 GROUP BY tit.title HAVING a_s >= 60000
	 ORDER BY a_s DESC;

-- 10 성별이 여자인 사원들의 직급별 사원수를 출력

SELECT tit.title
		,COUNT(gender) C_G
FROM employees emp
	INNER JOIN titles tit
	ON tit.emp_no = emp.emp_no
	WHERE emp.gender = 'F'
	AND tit.to_date = DATE(99990101)
	GROUP BY tit.title;

-- 11 직급별 퇴사한 여자 사원수

SELECT A.gender, COUNT(A.gender) cnt
	FROM employees A
	INNER JOIN (
				SELECT emp_no
				FROM titles
				GROUP BY emp_no
				HAVING MAX(to_date) != DATE(99990101)
				) B
	ON A.emp_no = B.emp_no
	GROUP BY A.gender;






