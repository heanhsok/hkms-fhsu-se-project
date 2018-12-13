Integration Testing

Requirement:
- Laravel Application with all the dependencies (including both the production and development dependencies) installed (See README1.txt for instruction)
- Run Database Migration and Database Seeding (See README4.txt for instruction)

How to Run Unit Testing:
- Nagivate to the inside of the laravel application main directory
- Run the following command: "php artisan dusk"

Test Case:

RegisterStandardUserTest
- testRegisterStandardUser():
Steps:
1. Visit the website
2. Click on "Sign Up" button
3. Fill in the required information
4. CLick on "Register" button
5. Successfully Registered and Redirected to Home Page


RegisterPremiemUsertest
- testRegisterPremiemUser():
1. Visit the website
2. Click on "Sign Up" button
3. Click on "Register as Professor/Recruiter" button
4. Fill in the required information
5. CLick on "Register" button
6. Successfully Registered and Redirected to Home Page

LoginTest
testLogin():
1. Visit the website
2. Click on "Login" button
3. Type in username and password
4. Click on "Login"
5. Successfully Logged in and Redirected to Home Page

CreateOpportunityPagePostTest
- testCreateOpportunityPagePost():
1. Visit the website
2. Login in as premiem user
3. Visit "/opportunity" page
4. Upload a picture
5. Fill in all the requirement information
6. Click on "Create"
7. Successfully created a post in opportunity page 

CreateForumQuestionTest
- testCreateForumQuestion():
1. Visit the website
2. Login in as standard user
3. Visit "/forum" page
4. Type in question and description of the question
5. Click submit
6. Successfully created a forum question 