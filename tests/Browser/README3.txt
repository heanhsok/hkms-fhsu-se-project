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
3. Fill in the requirement information
4. CLick on "Register" button


RegisterPremiemUsertest
- testRegisterPremiemUser():
1. Visit the website
2. Click on "Sign Up" button
3. Click on "Register as Professor/Recruiter" button
4. Fill in the requirement information
5. CLick on "Register" button

LoginTest
testLogin():

CreateOpportunityPagePostTest
- testCreateOpportunityPagePost():
1.