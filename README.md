# Rebuilding-Eudoxus
Our take on redesigning the [Eudoxus](https://eudoxus.gr/) Web Application, a service provided by [Greece's Ministry of Education and Religious Affairs](https://www.minedu.gov.gr/) for the acquirement of textbooks by university students.

This project was the third and final assignment for the [National and Kapodistrian University of Athens](https://en.uoa.gr/), [Department of Informatics and Telecommunications](https://www.di.uoa.gr/en) undergraduate [Human-Computer Interaction](https://www.di.uoa.gr/en/studies/undergraduate/90) course.

## What is Eudoxus? 📚

Eudoxus is an online service provided by Greece's Ministry of Education and Religious Affairs to the country's undergraduate university students. It enables them to browse through, select and order university textbooks, according to their curriculum, free of charge.

## Why should it be redesigned? 🤔

A quick navigation through the application's website reveals a couple of its many flaws. The lack of a search bar, the clutter of text in the center of the homepage, the use of the same image for different functionalities and the lack of simple navigation and links are only some examples of bad web design found in Eudoxus. These factors make the website very hard to use as well as frustrating, despite having to be used by almost all undergraduate students in Greece each semester.

![Eudoxus Homepage](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/Eudoxus%20Homepage.png)

## Who redesigned it? 👩‍💻👨‍💻

- Frini Panteliadi ([@frinipanteliadi](https://github.com/frinipanteliadi))
- Alexandros Nisiotis ([@alexandrosnis](https://github.com/alexandrosnis))

## What technologies were used? 📱

- PHP
- JavaScript
- HTML
- CSS
- XAMPP
- phpMyAdmin
- MySQL

## How can I run it? 🏃‍♂️

In order to run the application you must have [XAMPP](https://www.apachefriends.org/index.html) installed on your machine. Once you have that, follow the instructions shown below in order to make it work:

1.  Launch XAMPP and click on *Start*.

   ![Running (Step 1)](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/Running%20(Step%201).png)

2. When *Status* turns green, switch to the *Services* tab and click on *Start All*.

   ![Running (Step 2)](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/Running%20(Step%202).png)

3. Go to the *Volumes* tab and first on *Mount* and then on *Explore*.

   ![Running (Step 3)](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/Running%20(Step%203).png)

4. Go to the folder named *htdocs* and there clone this repository.

5. Rename the repository's folder name from Rebuilding-Eudoxus to sdi1400301. 

6. Switch back to XAMPP's *General* tab, copy the *IP Address* that's displayed, paste it on your browser's address followed by */phpmyadmin* (e.g. http://192.168.64.3/phpmyadmin) and hit Enter.

7. Choose *New* from the bar on the right, in order to create a new database.

8. Fill in the name of the database in the, choose *utf8_bin* for the encoding and click on *Create*.

9. Choose the *Import* tab and click on *Choose File*.

10. Upload the *edxs.sql* file, found in this repository.

11. Finally, write the *IP Address* on your browser's address bar followed by */sdi1400301* (e.g. http://192.168.64.3/sdi1400301) and hit Enter. The homepage for the newly designed website should appear.

## What is the new look? 📷

### Homepage

![Homepage](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/Running%20(Step%203-Homepage).png)

### Students' Page

![Students' Page](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/StudentsPage.png)

### Bookshops' Page

![Bookshops' Pahe](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/BookshopsPage.png)

### Login

![Login Page](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/LoginPage.png)

### Registration

![Registration Page](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/RegistrationPage.png)

### Search Results

![Search Results Page](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/SearchResults.png)

### Submitting University Textbooks Request Form

- #### Terms & Conditions

  ![Terms & Conditions](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/RequestingBooks(Page%201).png)

- #### Choosing Textbooks and Submitting the Form

  ![Choosing Textbooks](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/RequestingBooks(Page%202).png)

- #### Overview of Chosen Textbooks

  ![Overview](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/RequestingBooks(Page%203).png)

### FAQ

![FAQ Page](https://github.com/frinipanteliadi/Rebuilding-Eudoxus/blob/master/Images/FAQ.png)

