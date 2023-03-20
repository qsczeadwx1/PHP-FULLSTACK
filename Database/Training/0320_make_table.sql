CREATE DATABASE Grades_management;

CREATE TABLE Stu_info(
	stu_no INT(11)
	,stu_na VARCHAR(30) NOT NULL
	,stu_birth DATE NOT NULL
	,stu_addr VARCHAR(100) NOT NULL 
	,stu_pho INT(20)
	,stu_sex ENUM('M','F') NOT NULL 
	,stu_attend ENUM('Y','N') NOT NULL 
	,stu_admis DATE NOT NULL
	,stu_gradu DATE NOT NULL 
	,CONSTRAINT pk_Grades_management_stu_no
	PRIMARY KEY(stu_no)
	);
	
CREATE TABLE Profe_info(
	profe_no INT(11)
	,profe_na VARCHAR(30) NOT NULL 
	,profe_birth DATE NOT NULL 
	,profe_degree INT(11)
	,profe_email VARCHAR(50) NOT NULL 
	,profe_rank VARCHAR(20) NOT NULL 
	,profe_room VARCHAR(20) NOT NULL 
	,profe_sex ENUM('M','F') NOT NULL 
	,profe_appo DATE NOT NULL
	,CONSTRAINT pk_Profe_info_profe_no
	PRIMARY KEY(profe_no)
	);
	
CREATE TABLE Subject_info(
	subject_no INT(11)
	,subject_na VARCHAR(50) NOT NULL 
	,profe_no INT(11) NOT NULL
	,subject_stu_limit INT(3)
	,subject_term ENUM('1학기','2학기','여름계절학기','겨울계절학기') NOT NULL
	,subject_room VARCHAR(20) NOT NULL 
	,subject_start TIME NOT NULL
	,subject_end TIME NOT NULL 
	,text_no INT(11) NOT NULL 
	,subject_ess ENUM('Y','N') NOT NULL 
	,CONSTRAINT pk_Subject_info_subject_no
	PRIMARY KEY(subject_no)
	);
-- 교수번호 교재번호 fk지정
	
CREATE TABLE Stu_grades(
	subject_no INT(11) NOT NULL 
	,stu_no INT(11) NOT NULL 
	,subject_grades INT(3) NOT NULL 
	,subject_rank INT(3) NOT NULL 
	,subject_date DATE NOT NULL 
	,CONSTRAINT pk_Stu_grades_subject_no_stu_no
	PRIMARY KEY(subject_no, stu_no)	
	);
-- 과목번호, 학생번호 fk 지정
