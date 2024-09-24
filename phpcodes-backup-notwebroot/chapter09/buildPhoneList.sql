## build phone list
## for mySQL
USE ph_6;
DROP TABLE IF EXISTS phoneList;

CREATE TABLE phoneList (
  id INT PRIMARY KEY,
  firstName VARCHAR(15),
  lastName VARCHAR (15),
  email VARCHAR(20),
  phone VARCHAR(15)
);

INSERT INTO phoneList 
VALUES (
  0, 'Andy', 'Harris', 'aharris@cs.iupui.edu', '123-4567'
);

SELECT * FROM phoneList;
