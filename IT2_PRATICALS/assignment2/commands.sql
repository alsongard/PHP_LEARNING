CREATE DATABASE campaign_feedback;

CREATE TABLE feedback(
	id INT(11) PRIMARY KEY AUTO_INCREMENT,
   	name VARCHAR(100),
    email VARCHAR(100),
    feedback TEXT,
    rating (INT),
    submission_date  DATETIME NOT NULL DEFAULT CURRENT TIME;
);