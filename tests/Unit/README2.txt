README2.txt
Unit Testing

Requirement:
- Laravel Application with all the dependencies (including both the production and development dependencies) installed (See README1.txt for instruction)
- Run Database Migration and Database Seeding (See README4.txt for instruction)

How to Run Unit Testing:
- Nagivate to the inside of the laravel application main directory
- Run the following command: ".\vendor\bin\phpunit"

Test Cases:

- UserTest

testCreateUser(): create a user, assign it Premiem role and insert it into database

- UserProfileTest

testCreateUserProfile() : create a user profile and assign it to a user
testUpdateUserProfile() : update an existing user profile of a user

- UserEducationTest

testCreateUserEducation() : create a education record and assign it to user
testUpdateUserEducation() : update an existing education record of a user
testDeleteUserEducation() : delete an existing education record of a user

- UserWokExpTest

testCreateUserUserWorkExp() : create a work experience record and assign it to user
testUpdateUserWorkExp() : update an existing work experience record of a user
testDeleteUserWorkExp() : delete an existing work experience record of a user

- UserVolunteerExpTest

testCreateUserVolunteerExp() : create a volunteer experience record and assign it to user
testUpdateUserVolunteerExp() : update an existing volunteer experience record of a user
testDeleteUserVolunteerExp() : delete an existing volunteer experience record of a user

- OpportunityPagePostTest

testCreateOpportunityPagePost() : create an post, assign it a type, and assign it to a user
updateOpportunityPagePost() : update an existing an existing opportunity page post
deleteOpportunityPagePost() : delete an existing an existing opportunity page post