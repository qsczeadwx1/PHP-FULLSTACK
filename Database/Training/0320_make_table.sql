--성적관리시스템

-- 학생정보
-- 학번, 이름, 생년월일, 주소, 전화번호, 성별, 재학상태, 입학일, 졸업일

-- 성적정보
-- 과목번호, 학번, 과목점수, 과목석차, 이수일

-- 교수정보
-- 교번, 이름, 생년월일, 학위번호, 이메일, 직급, 연구실번호,
-- 성별, 임용일

-- 과목정보
-- 과번, 과목명, 교수번호, 정원수, 강의학기, 강의호실, 강의 시작시간,
-- 강의 종료시간, 교재번호, 필수이수

-- 교재번호
-- 교재번호, 교재명

-- 과목번호 정보
-- 과번, 과목명

CREATE DATABASE Grades_management;

CREATE TABLE Stu_info(
	stu_no INT(11)
	,stu_na VARCHAR(30) NOT NULL
	,stu_birth DATE NOT NULL
	,stu_addr VARCHAR(100) NOT NULL 
	,stu_pho CHAR(11)
	,stu_sex ENUM('M','F') 
	,stu_attend ENUM('Y','N') 
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
	,profe_sex ENUM('M','F') 
	,profe_appo DATE NOT NULL
	,CONSTRAINT pk_Profe_info_profe_no
	PRIMARY KEY(profe_no)
	);
	
CREATE TABLE Subject_info(
	subject_no INT(11)
	,subject_na VARCHAR(50) NOT NULL 
	,profe_no INT(11)
	,subject_stu_limit INT(3) NOT NULL 
	,subject_term ENUM('1','2','summer_vaction','winter_vaction')
	,subject_room VARCHAR(20) NOT NULL 
	,subject_start TIME NOT NULL
	,subject_end TIME NOT NULL 
	,text_no INT(11) NOT NULL 
	,subject_ess ENUM('Y','N') 
	,CONSTRAINT pk_Subject_info_subject_no
	PRIMARY KEY(subject_no, profe_no)
	,CONSTRAINT fk_Profe_info_Subject_info_profe_no FOREIGN KEY(profe_no) REFERENCES Profe_info(profe_no)
	,CONSTRAINT fk_Textbook_info_Subject_info_text_no FOREIGN KEY(text_no) REFERENCES Textbook_info(text_no)
	,CONSTRAINT fk_Subject_no_info_Subject_info_subject_no FOREIGN KEY(subject_no) REFERENCES Subject_no_info(subject_no)
	);
	
	
CREATE TABLE Stu_grades(
	subject_no INT(11) 
	,stu_no INT(11) 
	,subject_grades INT(3) NOT NULL 
	,subject_rank INT(3) NOT NULL 
	,subject_date DATE NOT NULL 
	,CONSTRAINT pk_Stu_grades_subject_no_stu_no
	PRIMARY KEY(subject_no, stu_no)	
	,CONSTRAINT fk_Subject_info_Stu_grades_subject_no FOREIGN KEY(subject_no) REFERENCES Subject_info(subject_no)
	,CONSTRAINT fk_Stu_info_Stu_grades_stu_no FOREIGN KEY(stu_no) REFERENCES Stu_info(stu_no)
	);
	
CREATE TABLE Textbook_info(
	text_no INT(11)
	,text_na VARCHAR(50) NOT NULL
	,CONSTRAINT pk_Textbook_info_text_no
	PRIMARY KEY(text_no)
	);
	
CREATE TABLE Subject_no_info(
	subject_no INT(11)
	,subject_na VARCHAR(50) NOT NULL
	,CONSTRAINT pk_Subject_no_info_subject_no
	PRIMARY KEY(subject_no)
	);
	