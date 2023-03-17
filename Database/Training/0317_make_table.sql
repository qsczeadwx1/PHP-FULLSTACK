-- employees

CREATE TABLE test_employees(
	emp_no INT(11)
	,birth_date DATE NOT NULL
	,first_name VARCHAR(14) NOT NULL
	,last_name VARCHAR(16) NOT NULL
	,gender ENUM('M','F') NOT NULL
	,hire_date DATE NOT NULL
	,CONSTRAINT pk_test_employees_emp_no PRIMARY KEY(emp_no)
	);

-- titles

CREATE TABLE test_titles(
	emp_no INT(11) NOT NULL
	,title VARCHAR(50) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT fk_test_employees_test_titles FOREIGN KEY(emp_no) 
	REFERENCES test_employees(emp_no)
	);

CREATE INDEX emp_no ON test_titles (emp_no);
ALTER TABLE test_titles ADD PRIMARY KEY (emp_no, title, from_date);

SHOW INDEX FROM test_titles;
test_employees

-- salaries

CREATE TABLE test_salaries(
	emp_no INT(11) NOT NULL
	,salary INT(11) NOT NULL
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT fk_test_employees_test_salaries 
	FOREIGN KEY(emp_no) 
	REFERENCES test_employees(emp_no)
	);
	
ALTER TABLE test_salaries ADD PRIMARY KEY (emp_no, from_date);
CREATE INDEX emp_no ON test_salaries (emp_no);

SHOW INDEX FROM test_salaries;


-- dept_manager

CREATE TABLE test_dept_manager(
	dept_no CHAR(4)
	,emp_no INT(11)
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT pk_test_dept_manager_emp_no PRIMARY KEY(emp_no, dept_no)
	,CONSTRAINT pk_test_employees_test_dept_manager FOREIGN KEY(emp_no)
	REFERENCES test_employees(emp_no)
	,CONSTRAINT pk_test_departments_test_dept_manager FOREIGN KEY(dept_no)
	REFERENCES test_departments(dept_no)
	);
	
CREATE INDEX emp_no ON test_dept_manager (emp_no);
CREATE INDEX dept_no ON test_dept_manager (dept_no);


-- dept_emp

CREATE TABLE test_dept_emp(
	emp_no INT(11)
	,dept_no CHAR(4)
	,from_date DATE NOT NULL
	,to_date DATE NOT NULL
	,CONSTRAINT pk_test_dept_emp_emp_no PRIMARY KEY(emp_no, dept_no)
	,CONSTRAINT pk_test_employees_test_dept_emp FOREIGN KEY(emp_no)
	REFERENCES test_employees(emp_no)
	,CONSTRAINT pk_test_departments_test_dept_emp FOREIGN KEY(dept_no)
	REFERENCES test_departments(dept_no)
	);
	
CREATE INDEX emp_no ON test_dept_emp (emp_no);
CREATE INDEX dept_no ON test_dept_emp (dept_no);


-- departments

CREATE TABLE test_departments(
	dept_no CHAR(4)
	,dept_name VARCHAR(40)
	,CONSTRAINT pk_test_dept_departments_dept_no PRIMARY KEY(dept_no, dept_name)
	);

CREATE INDEX dept_no ON test_departments (dept_no);