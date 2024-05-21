DROP TABLE users;
CREATE TABLE users(
  id SERIAL PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL,
  password VARCHAR(50) NOT NULL,
  datejoin TIMESTAMP DEFAULT NOW()
);

ALTER TABLE users
ADD COLUMN datejoin TIMESTAMP DEFAULT NOW();



INSERT INTO users (username, email, password)
VALUES 
('keval', 'keval@example.com', 'password123'),
('dharmi', 'dharmi@example.com', 'password456'),
('sahil', 'sahil@example.com', 'password789'),
('yash', 'yash@example.com', 'password101'),
('ajay', 'ajay@example.com', 'password202');

SELECT * FROM users;

DROP TABLE admins;
CREATE TABLE admins (
	aid SERIAL PRIMARY KEY,
	username VARCHAR(50) NOT NULL,
	email VARCHAR(100) NOT NULL,
	password VARCHAR(50) NOT NULL
);

INSERT INTO admins (username, email, password)
VALUES 
('admin1', 'admin1@example.com', 'password123'),
('admin2', 'admin2@example.com', 'password456'),
('admin3', 'admin3@example.com', 'password789'),
('admin4', 'admin4@example.com', 'password101'),
('admin5', 'admin5@example.com', 'password202');

SELECT * FROM admins;

DROP TABLE Contest;
CREATE TABLE Contest (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(100) NOT NULL,
  start_date DATETIME NOT NULL,
  end_date DATETIME NOT NULL,
  description VARCHAR(500) NOT NULL,
  contest_type VARCHAR(50) NOT NULL
);
INSERT INTO Contest (id, name, start_date, end_date, description, contest_type)
VALUES 
(1, 'CodeMaster 2023', '2023-05-01 09:00:00', '2023-05-02 17:00:00', 'A programming contest for college students', 'Individual'),
(2, 'HackTheWorld 2023', '2023-08-10 10:00:00', '2023-08-11 18:00:00', 'A global programming contest for professionals', 'Individual'),
(3, 'JuniorCoder 2024', '2024-02-15 08:00:00', '2024-02-16 16:00:00', 'A programming contest for high school students', 'Individual'),
(4, 'BuildIt 2024', '2024-06-20 11:00:00', '2024-06-21 19:00:00', 'A programming contest for software developers', 'Individual'),
(5, 'CodeFiesta 2025', '2025-09-05 07:00:00', '2025-09-06 15:00:00', 'A programming contest for beginners', 'Individual');

SELECT * FROM Contest;

DROP TABLE Problem;
CREATE TABLE Problem (
  id INT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  description VARCHAR(500) NOT NULL,
  contest_id INT NOT NULL,
  FOREIGN KEY (contest_id) REFERENCES Contest(id)
);
INSERT INTO Problem (id, name, description, contest_id)
VALUES 
(1, 'Problem A', 'Write a program to find the maximum element in an array.', 1),
(2, 'Problem B', 'Write a program to count the number of vowels in a string.', 1),
(3, 'Problem C', 'Write a program to calculate the factorial of a number.', 1),
(4, 'Problem D', 'Write a program to find the shortest path between two nodes in a graph.', 2),
(5, 'Problem G', 'Write a program to find the sum of all prime numbers up to a given limit.', 3),
(6, 'Problem H', 'Write a program to find the GCD of two numbers.', 3),
(7, 'Problem I', 'Write a program to implement a bubble sort algorithm.', 3);
SELECT * FROM Problem;


DROP TABLE Submission;
CREATE TABLE Submission (
  id INT PRIMARY KEY,
  timestamp DATETIME NOT NULL,
  problem_id INT NOT NULL,
  user_id SERIAL NOT NULL,
  code VARCHAR(1000) NOT NULL,
  FOREIGN KEY (problem_id) REFERENCES Problem(id),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

DROP TABLE Performance;
CREATE TABLE Performance (
  id INT PRIMARY KEY,
  timestamp DATETIME NOT NULL,
  name VARCHAR(100) NOT NULL,
  start_time DATETIME NOT NULL,
  end_time DATETIME NOT NULL,
  description VARCHAR(500) NOT NULL,
  problem_id INT NOT NULL,
  user_id SERIAL NOT NULL,
  code VARCHAR(1000) NOT NULL,
  FOREIGN KEY (problem_id) REFERENCES Problem(id),
  FOREIGN KEY (user_id) REFERENCES users(id)
);

DROP TABLE Test_Case;
CREATE TABLE Test_Case (
  id SERIAL PRIMARY KEY,
  problem_id INT NOT NULL,
  input VARCHAR(1000) NOT NULL,
  output VARCHAR(1000) NOT NULL,
  FOREIGN KEY (problem_id) REFERENCES Problem(id)
);

DROP TABLE Result;
	CREATE TABLE Result (
	  user_id SERIAL NOT NULL,
	  contest_id INT NOT NULL,
	  score INT NOT NULL,
	  PRIMARY KEY (user_id, contest_id),
	  FOREIGN KEY (user_id) REFERENCES users(id),
	  FOREIGN KEY (contest_id) REFERENCES Contest(id)
	);
INSERT INTO Result (user_id, contest_id, score) VALUES (2, 1, 75);
SELECT * FROM Result;

SELECT u.username, r.score
FROM users u
JOIN Result r ON u.id = r.user_id
WHERE r.contest_id = 1;

SELECT c.name, p.name, s.timestamp
FROM Contest c
JOIN Problem p ON c.id = p.contest_id
JOIN Submission s ON p.id = s.problem_id
WHERE c.id = '1';

SELECT u.username, r.score
FROM users u
LEFT JOIN Result r ON u.id = r.user_id
WHERE r.contest_id = 1 OR r.contest_id IS NULL;

