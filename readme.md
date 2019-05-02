# a Shorter-url

This is a URL shortening application


## How to run locally

1. git clone this repo to your computer
    * <code>$ git clone git@github.com:billkremer/shortenerl.git</code>
2. cd shortenerl
3. composer install
4. yarn
5. <code>$ cp .env.example .env</code>
5. <code>$ php artisan key:generate</code>
6. npm run dev
7. php artisan serve
8. find app at [http://localhost:8000/](https://localhost:8000/)


## Find on Heroku

[https://shortenerl.herokuapp.com/](https://shortenerl.herokuapp.com/)


### Big Plan
1. DB

    a. Auth table: id, username, password (hashed)

    b. Link table: id, userid, original link URL, shorter URL, hit count


2. Routes

    a. login  /login -- not authenticated

    b. registration /, /register -- not authenticated

    c. URL shortener and shortened URLs table /home -- authenticated

    d. /t/? to navigate to the shortened URL which should then open the long URL -- not authenticated



3. Functions

    a. random num / char generator 3 - 5 chars long? -- using 5 



4. Future Features

	a. Reset password ability

	b. Ability to delete URLs or manage URLs

	c. Custom shortened URLs

	d. Consider having the shortened url be the id in the db - use hex/base 62? https://stackoverflow.com/a/1562793/7937542

	e. Consider having URLs have similar padding to Sign Out on /home relative to box below.

	f. Consider a error on the url page or redirect to / 

	g. Consider styling the URLs to look like URLs (blue and underlined) so user isn't confused




5. Double check

	a. check that it's case specific -- yes, but be careful because browser will try to help & may fix.


## Log
* 25-04-2019 initial creation
* 28-04-2019 registration / login ok
* 28-04-2019 getting urls from db
* 30-04-2019 adding urls to db 
* 01-05-2019 cleanup of loose ends 

