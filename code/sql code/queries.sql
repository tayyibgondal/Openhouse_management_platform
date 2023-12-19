-- Insert 20 records into the projects table
INSERT INTO projects (token, password, name, description, category) VALUES
('token1', 'password1', 'Project 1', 'Description for Project 1', 'Category 1'),
('token2', 'password2', 'Project 2', 'Description for Project 2', 'Category 2'),
('token3', 'password3', 'Project 3', 'Description for Project 3', 'Category 3'),
('token4', 'password4', 'Project 4', 'Description for Project 4', 'Category 4'),
('token5', 'password5', 'Project 5', 'Description for Project 5', 'Category 5'),
('token6', 'password6', 'Project 6', 'Description for Project 6', 'Category 1'),
('token7', 'password7', 'Project 7', 'Description for Project 7', 'Category 2'),
('token8', 'password8', 'Project 8', 'Description for Project 8', 'Category 3'),
('token9', 'password9', 'Project 9', 'Description for Project 9', 'Category 4'),
('token10', 'password10', 'Project 10', 'Description for Project 10', 'Category 5'),
('token11', 'password11', 'Project 11', 'Description for Project 11', 'Category 1'),
('token12', 'password12', 'Project 12', 'Description for Project 12', 'Category 2'),
('token13', 'password13', 'Project 13', 'Description for Project 13', 'Category 3'),
('token14', 'password14', 'Project 14', 'Description for Project 14', 'Category 4'),
('token15', 'password15', 'Project 15', 'Description for Project 15', 'Category 5'),
('token16', 'password16', 'Project 16', 'Description for Project 16', 'Category 1'),
('token17', 'password17', 'Project 17', 'Description for Project 17', 'Category 2'),
('token18', 'password18', 'Project 18', 'Description for Project 18', 'Category 3'),
('token19', 'password19', 'Project 19', 'Description for Project 19', 'Category 4'),
('token20', 'password20', 'Project 20', 'Description for Project 20', 'Category 5');


-- Insert 60 records into the students table
INSERT INTO students (name, email, project_id) VALUES
('Student 1', 'student1@example.com', 1),
('Student 2', 'student2@example.com', 1),
('Student 3', 'student3@example.com', 1),
('Student 4', 'student4@example.com', 2),
('Student 5', 'student5@example.com', 2),
('Student 6', 'student6@example.com', 2),
('Student 7', 'student7@example.com', 3),
('Student 8', 'student8@example.com', 3),
('Student 9', 'student9@example.com', 3),
('Student 10', 'student10@example.com', 4),
('Student 11', 'student11@example.com', 4),
('Student 12', 'student12@example.com', 4),
('Student 13', 'student13@example.com', 5),
('Student 14', 'student14@example.com', 5),
('Student 15', 'student15@example.com', 5),
('Student 16', 'student16@example.com', 6),
('Student 17', 'student17@example.com', 6),
('Student 18', 'student18@example.com', 6),
('Student 19', 'student19@example.com', 7),
('Student 20', 'student20@example.com', 7),
('Student 21', 'student21@example.com', 7),
('Student 22', 'student22@example.com', 8),
('Student 23', 'student23@example.com', 8),
('Student 24', 'student24@example.com', 8),
('Student 25', 'student25@example.com', 9),
('Student 26', 'student26@example.com', 9),
('Student 27', 'student27@example.com', 9),
('Student 28', 'student28@example.com', 10),
('Student 29', 'student29@example.com', 10),
('Student 30', 'student30@example.com', 10),
('Student 31', 'student31@example.com', 11),
('Student 32', 'student32@example.com', 11),
('Student 33', 'student33@example.com', 11),
('Student 34', 'student34@example.com', 12),
('Student 35', 'student35@example.com', 12),
('Student 36', 'student36@example.com', 12),
('Student 37', 'student37@example.com', 13),
('Student 38', 'student38@example.com', 13),
('Student 39', 'student39@example.com', 13),
('Student 40', 'student40@example.com', 14),
('Student 41', 'student41@example.com', 14),
('Student 42', 'student42@example.com', 14),
('Student 43', 'student43@example.com', 15),
('Student 44', 'student44@example.com', 15),
('Student 45', 'student45@example.com', 15),
('Student 46', 'student46@example.com', 16),
('Student 47', 'student47@example.com', 16),
('Student 48', 'student48@example.com', 16),
('Student 49', 'student49@example.com', 17),
('Student 50', 'student50@example.com', 17),
('Student 51', 'student51@example.com', 17),
('Student 52', 'student52@example.com', 18),
('Student 53', 'student53@example.com', 18),
('Student 54', 'student54@example.com', 18),
('Student 55', 'student55@example.com', 19),
('Student 56', 'student56@example.com', 19),
('Student 57', 'student57@example.com', 19),
('Student 58', 'student58@example.com', 20),
('Student 59', 'student59@example.com', 20),
('Student 60', 'student60@example.com', 20);

-- Insert 15 records into the evaluators table with categories 1-5
INSERT INTO evaluators (name, email, password, category) VALUES
('Evaluator 1', 'evaluator1@example.com', 'password1', 'Category 1'),
('Evaluator 2', 'evaluator2@example.com', 'password2', 'Category 2'),
('Evaluator 3', 'evaluator3@example.com', 'password3', 'Category 3'),
('Evaluator 4', 'evaluator4@example.com', 'password4', 'Category 4'),
('Evaluator 5', 'evaluator5@example.com', 'password5', 'Category 5'),
('Evaluator 6', 'evaluator6@example.com', 'password6', 'Category 1'),
('Evaluator 7', 'evaluator7@example.com', 'password7', 'Category 2'),
('Evaluator 8', 'evaluator8@example.com', 'password8', 'Category 3'),
('Evaluator 9', 'evaluator9@example.com', 'password9', 'Category 4'),
('Evaluator 10', 'evaluator10@example.com', 'password10', 'Category 5'),
('Evaluator 11', 'evaluator11@example.com', 'password11', 'Category 1'),
('Evaluator 12', 'evaluator12@example.com', 'password12', 'Category 2'),
('Evaluator 13', 'evaluator13@example.com', 'password13', 'Category 3'),
('Evaluator 14', 'evaluator14@example.com', 'password14', 'Category 4'),
('Evaluator 15', 'evaluator15@example.com', 'password15', 'Category 5');

-- Insert 5 records into the evaluator_project table
INSERT INTO evaluator_project (evaluator_id, project_id) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5);

-- Insert 1 record into the admin table
INSERT INTO admin (email, password) VALUES
('admin@example.com', '123');



