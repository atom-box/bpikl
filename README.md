# TATLL is a URL shortener

## Introduction

This is a web app for shortening links.  If given a long URL, the site generates a shortened URL, stores it in a table, and becomes a redirecter for the new shortened URL.

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
|**three pages of html**    |   ![done][done]     |  |   |
|**schema**           |  ![done][done]        |   ![done][done]   |  |                                  |
|**SQL**           |   ![done][done]      |  ![done][done]  |  |                                  |
|**tests**    |   ![done][done]    |  |   |                        |
|**write shortener logic (5 - 9 alphanumeric)**   |    ![done][done]    |    ![done][done]             |               |                                  |
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
[x] Imitate a short, existing stack of yours on first run ('Worlds smallest LAMP')  
[x] fix NULL in session id in links
[x] Imitate the CSS style of an admired page
[x] Ugh, whole-project pause: reorganize code to 1 class, 3 controllers, two main templates. Make sure still works.
[x] Make the shortener function
[x] Pass in the long URL from form to page 2
[x] First trivial test. Config phpunit.  
[x] Make the checker for avoiding collisions, like the robot names? Use prepared statements per link below.
[x] Formify everything on the first page

[x] Make second page
[ ] Make the route work, the redirect
[ ] use bootstrap on the validation  
[ ] leverage composer libraries  (for sanitizing??)  
[ ] button on success page should say 'make another'   
[ ] Add Validation  
[ ] Sanitize inputs using 12-1 from d powers book
[ ] 2nd route works 
[ ] implement DBM with Apache.  DB writes to .htaccess 
[ ] change echo, error, to logging.  Get a logger from composer. Add log path to config  
>  https://getbootstrap.com/docs/5.0/forms/validation/
[ ] break up into classes a bit, views a bit
[ ] scrape new links for their favicons
[ ] add UI more like https://free-url-shortener.rb.gy/ but with my twinning JS    
[ ] accessible 
[ ] add a lower caser to the final phase 3 part   
[ ] remove unused USE statements    
[ ] call logging in core/helpers/addToLinkages.php
[ ] Write at least three test cases in the tests/ folder. Run php bin/phpunit
[ ] Add a parser option to put the originals URL in as a dubdomain.
[ ] Composer package to avoid obscenity?
[ ] Lint: todos.  Error printers.  Commented out code.
[ ] Add captcha?
[ ] Lint: core/helpers/addLinkToDb.php and other helpers, are hacky
[ ] Look over the actual algorithm ideas at https://stackoverflow.com/questions/742013/how-do-i-create-a-url-shortener 
[ ] David Powers 11-6,
[ ] rightclick format document on everything or run phpcs at BASh 
[ ] refactor require/use/namespace everywhere, especially in tests.  If desperate can try to use global namespace option onn some things per https://blog.eduonix.com/web-programming-tutorials/namespaces-in-php/  
[ ] could add a number of times clicked

## Debugging Apache: text file version  


__/etc/apache2/apache2.conf__
```
#...
Nothing added here at all. Not even 'RewriteEngine on'
```

__/etc/apache2/sites-enabled/tatll.org.conf__  
Note: Must set up reference map outside of the directory block. Okay to say 'rewriterule' inside of block though! 
```
 1 <VirtualHost *:80>
 2     ServerName tatll.org
 3     ServerAlias www.tatll.org
 4     ServerAdmin webmaster@localhost
 5     DocumentRoot /var/www/tatll.org
 6     ErrorLog ${APACHE_LOG_DIR}/error.log
 7     CustomLog ${APACHE_LOG_DIR}/access.log combined
 8     RewriteEngine on
 9     RewriteMap pickleFlat txt:15 
16         # For all requests where files and folders do not exist
17         RewriteCond %{REQUEST_FILENAME} !-d
18         RewriteCond %{REQUEST_FILENAME} !-f
19         RewriteRule . templates/404.php [L]
/var/www/tatll.org/utilities/pickleFlat.txt
10
11     <Directory /var/www/tatll.org>
12         Options Indexes FollowSymLinks
13         AllowOverride All
14         Require all granted
15         RewriteRule (\w{6}\d{2})$ ${pickleFlat:$1}
15 
16         # For all requests where files and folders do not exist
17         RewriteCond %{REQUEST_FILENAME} !-d
18         RewriteCond %{REQUEST_FILENAME} !-f
19         RewriteRule . templates/404.php [L]

16     </Directory>
17 </VirtualHost>
18
```

__/var/www/tatll.org/utilities/pickleFlat.txt__
```
abcdef12 https://example.com
```



## Resources

[https://www.php.net/manual/en/pdo.prepare.php](PDO examples for calling the db)