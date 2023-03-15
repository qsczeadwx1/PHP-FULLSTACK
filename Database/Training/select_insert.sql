SELECT *
FROM employees
ORDER BY emp_no DESC;

SELECT *
FROM employees
ORDER BY first_name ASC, last_name ASC;

SELECT emp_no, AVG(salary) AS avg_s
FROM salaries
GROUP BY emp_no HAVING avg_s >= 30000 
AND avg_s <= 50000;

SELECT *
FROM dept_manager
WHERE emp_no in (
					SELECT emp_no 
					FROM dept_manager
					WHERE dept_no = 'd009'
				);
						
SELECT *
FROM dept_manager
WHERE emp_no = ANY(
						SELECT emp_no
						FROM dept_manager
						WHERE dept_no = 'd009'
						);

SELECT *
FROM dept_manager
WHERE dept_no = ALL(
						SELECT dept_no 
						FROM dept_manager
						WHERE emp_no IN (110344)
						);

SELECT emp_no, first_name, last_name, gender
FROM employees
WHERE emp_no IN(
					SELECT emp_no
					FROM salaries
					GROUP BY emp_no HAVING AVG(salary) >= 70000
					);


SELECT emp_no, last_name
FROM employees
WHERE emp_no IN (
					SELECT emp_no
					FROM titles
					WHERE title = 'Senior Engineer'
					AND to_date >= NOW()
					);

INSERT INTO employees(
	emp_no
	,birth_date
	,first_name
	,last_name
	,gender
	,hire_date
)
VALUES
(
	500000
	,NOW()
	,'MinGyu'
	,'Kim'
	,'M'
	,NOW()
);


ROLLBACK;

SELECT @@autocommit;
