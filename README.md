# form-front-back

Step by step to run the project.

1- Install XAMPP: https://www.apachefriends.org/es/download.html

2- Download the project as a zip file

3- Move the downloaded file into a new folder in C:\xampp\htdocs

4- Open http://localhost/phpmyadmin

5- Create a new database "formdatabase"

6- Go to sql section and paste the following code and click "continuar":
 
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `userdb` (
  `id` int(30) NOT NULL,
  `uemail` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `pwd` varchar(30) NOT NULL,
  `rpwd` varchar(30) NOT NULL,
  `uname` text NOT NULL,
  `ulname` text NOT NULL,
  `ufeedback` int(10) NOT NULL,
  `urecomendacion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `userdb`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uemail` (`uemail`),
  ADD UNIQUE KEY `uname_indice` (`username`);
  
ALTER TABLE `userdb`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;
COMMIT;

// Now your database is ready

7- go to http://localhost/phpForm-03/

// If everything was installed correctly the page should work ! 
