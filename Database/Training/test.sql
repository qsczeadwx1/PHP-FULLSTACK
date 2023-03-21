--12
SELECT emp_no
		,birth_date
		,CONCAT(last_name, ' ', first_name) full_name
		,gender
FROM employees;

--13

SELECT MAX(salary)
FROM salaries;

-- 14
SELECT AVG(salary)
FROM salaries;

-- 15

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
		,DATE(20200101)
	);

-- 16

UPDATE employees
SET birth_date = DATE(19900301)
	,last_name = 'test'
WHERE emp_no = 500000;

-- 17

DELETE 
FROM employees
WHERE emp_no = 500000;

-- 18

SELECT emp.birth_date
		,tit.title
FROM employees emp
	INNER JOIN titles tit
	ON emp.emp_no = tit.emp_no
	WHERE emp.emp_no = 10001
	AND tit.to_date = DATE(99990101);
	
-- 19

CREATE TABLE test_table(
	column_no INT PRIMARY KEY
	,client_no INT UNIQUE
	,client_id VARCHAR(30) NOT NULL
);

-- 20
CREATE INDEX client_no ON test_table(client_no);
	
-- 21

DROP TABLE test_table;