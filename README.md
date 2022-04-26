CodeReview 10
Good Morning Dear Students!

Welcome to your 10th CodeReview. 

You will need to achieve more than 60 points to pass this CodeReview successfully. 

You will be graded according to the results achieved. Please see the number of points for each task below. 

The grading system has the following rules:

Up to 60 points = red

Between 61 and 79 = yellow

Over 80 = green

You can submit your solution (as GitHub project link) until Saturday at 18:00:00.


Project description:


Task: As a Full Stack Web Developer you got your first full-stack project, the Big Library web application. The customer wants you to create a big list of all media available in the library (books, CDs, DVDs) and make it available over the web.


The information that you will need to have in your DataBase is:

Consider them as columns for the table:

title, image (HTTP link to an image*), ISBN code, short_description, type (book, CD, DVD), author_ first_name, author_last_name, publisher_ name, publisher_address, publish_date.

Additionally, status (“available” or “reserved”)  required for Bonus Points.

*Feel free to choose if you would like to use:

file uploader as in prework

image name only and the images are already all available in a folder. You only need to make the reference in the DB.

link from the internet as https://cdn.pixabay.com/photo/2016/09/10/17/18/book-1659717_1280.jpg


Project Naming:

Create a GitHub Repository named: BE15-CR10-Name. Push the files into it and send the link through the learning management system (LMS). Please make your repository private and collaborate with codefactorygit. See an example of a GitHub link below:

https://github.com/JohnDoe/repositoryname.git.

 

For this CodeReview, the following criteria will be graded:

(20) Create a database and name it: BE15_CR10_YourName_BigLibrary. The database must have the name as specified in this task! 

(Please note that YourName must be exchanged by your name)


**Only one table is required for this CodeReview! **

(5) Add test data: at least 10 entries 

(20) Display List of Media: Fetch the media data from your database and display it on the browser.

(15) User-Friendly GUI: Create web-pages with a nice design using the Bootstrap framework or just HTML/CSS/JavaScript.

(20) Insert form for Media: Create an inserting form for Media. A user should be able to insert data into the database over the front-end form.

(10) Update form for Media: Create a form for updating Media.

(10) Delete Media: A user should be able to delete Media from the database by clicking on the Delete button.

Bonus Points:

(10) You should create a button - "show media", that will be displayed together with every Media shown on the list. Once that button is clicked, all details regarding that specific Media (title, author, ISBN, short_description, and status (available or reserved) will be displayed on a new web page.

(hint: take a closer look on the edit page, it may inspire you to do this task)

(10) Create a list of Publishers. When you click on a Publisher name, a user should be able to see the list of Media that “belong” to this specific Publisher.

Note: Don’t forget to upload the PHP code together with your database .sql file to the GitHub repository. Please organize your project content (files) into folders according to their type.

Feedback: 85 Points
Serri:
	
Hey Sanja,

well done on this CR. You managed to achieve almost all the main points.
the update page and delete page when i enter them it will redirect me to the error page, the issue that you have there is in line 4 you have this:
if ($_GET['media_id']) {
it should be if ($_GET['id']) {
this value came from the url not from the database.
As some feedback I'd say the in the displayed table there is too much information. That of course is because you didn't try the first bonus points. I'd suggest you try to implement that. And then if you do, you can get rid of some of the columns and for example, add the short description just in the showmedia part.
I'd also suggest you try with the rest of the bonus points.
for the update file, in the input tags, you forgot to add the value attribute and pass the value from the database there, because now the update show inputs that are empty.


Other than that, well done!
feel free to contact me if you have any questions :)
