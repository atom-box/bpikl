# URL shortener

## Introduction

A PHP OOP web app to for shortening links.  If given a long URL, the site generates a shortened URL, stores it in a table, and becomes a redirecter for the new shortened URL.

## Schema

Deploy notes for the database (PostgreSQL).  The app uses three tables:  

### sessions
```
CREATE TABLE IF NOT EXISTS sessions (
    session_id  serial,
    user_id     int NOT NULL,
    date        timestamp
);
```

### users
```
CREATE TABLE IF NOT EXISTS users (
    user_id     serial,
    email       varchar(255) UNIQUE NOT NULL,
    last_reset  timestamp,
    name        varchar(60),
    type        varchar(12) DEFAULT 'free',
    created     timestamp,
    password    varchar(32)
);
```

### links
```
CREATE TABLE IF NOT EXISTS links (
    link_id     serial,
    session_id  int,
    long        varchar(1000) NOT NULL,
    short       varchar(40) UNIQUE
);
```
[done]: https://user-images.githubusercontent.com/29199184/32275438-8385f5c0-bf0b-11e7-9406-42265f71e2bd.png "Done"

|               Section              | 1<br>Basics | 2<br>Works   | 3<br>Polished     | 4<br>Linted |
|:-------------------------------- |:-----------------:|:-------------:|:-------------:|:----------------:|
|**three pages of html**    |      |  |   |
|**schema**           |  ![done][done]        |    |  |                                  |
|**doctrine**           |       |  |  |                                  |
|**tests**    |     |  |   |                        |
|**write shortener logic (5 - 9 alphanumeric)**   |      |               |               |                                  |
|**Session management**         |                   |               |               |                                  |
|**CSS**         |![done][done]   |               |               |                                  |


## todo list
[ ] Imitate your 'world' stack on first run  
[ ] Basic Database Configuration.  
[ ] leverage composer libraries    
[ ] pressing button should append a stripe div, repeatedly on the success page  
[ ] button on success page should say 'make another'   
[ ] Add Validation
[ ] Hook up the database
[ ] Write the Doctrine part
[ ] do something to the submission, like ALL CAPS it   
[ ] 2nd route works   
[ ] once routeOne twig works, undo the html of main   
[ ] add UI more like https://free-url-shortener.rb.gy/ but with my twinning JS    
[ ] accessible    
[ ] remove unused USE statements    
[ ] config file 
[ ] Write at least three test cases in the tests/ folder. Run php bin/phpunit
