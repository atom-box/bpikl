# TATLL is a URL shortener

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
[x] Write the schema  
[x] Make the Apache root directory  
[x] Config file in dev and prod and .gitignore  
[x] Start the rsync to the Apache root dir  

> run as `sudo /bin/bcompare` 
or
> sudo chown -R $USER:$USER /var/www/your_domain

[x] Serve a test page  from prod  
[x] Serve cards from php
[x] config file   
[x] Hook up the database  
[x] Basic Database Configuration.  
[x] loading the homepage pings the dataconnection to get a count query of the db
[x] flushing css to bottom. Did this by making a wrap div 100% height 
[x] pressing button should append a stripe div, repeatedly on the success page  
[x] Make a html with put to db; every time home page loads a random url will be put to db
[x] Make a html with get from db; every time home page loads all the links retrieve and display from db
[x] Imitate your 'world' stack on first run  
[x] fix NULL in session id in links
[x] Imitate the CSS style of an admired page
[ ] Make the shortener function
[ ] Make the checker for avoiding collisions, like the robot names? 
[ ] Formify everything on the first page

[ ] Make second page
[ ] Make the route work, the redirect
[ ] First trivial test. Config phpunit.  
[ ] leverage composer libraries    
[ ] button on success page should say 'make another'   
[ ] use bootstrap on the validation  
[ ] Add Validation  
[ ] Sanitize inputs using 12-1 from d powers book
[ ] 2nd route works 
[ ] change echo, error, to logging.  Get a logger from composer. Add log path to config  
>  https://getbootstrap.com/docs/5.0/forms/validation/
[ ] break up into classes a bit, views a bit
[ ] scrape new links for their favicons
[ ] add UI more like https://free-url-shortener.rb.gy/ but with my twinning JS    
[ ] accessible 
[ ] add a lower caser to the final phase 3 part   
[ ] remove unused USE statements    
[ ] Write at least three test cases in the tests/ folder. Run php bin/phpunit
[ ] Look over the actual algorithm ideas at https://stackoverflow.com/questions/742013/how-do-i-create-a-url-shortener 
