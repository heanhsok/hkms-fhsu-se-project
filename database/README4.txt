README4.TXT
Database Collection

Requirement:
- Laravel Application with all the dependencies (including both the production and development dependencies) installed (See README1.txt for instruction)
- Create a MySQL database and go to ".env" file and input the following information:
DB_DATABASE="your db name"
DB_USERNAME="your username"
DB_PASSWORD="your password"


Database Migration (use for generating all the table schemas for the application)
- Nagivate to the inside of the laravel application main directory
- To run Database Migration: "php artisan migrate"

After running the command, the following tables will be generated:

- answer_votes
- answers
- migrations
- opportunity_page_posts
- opportunity_pages
- password_resets
- permission_role
- permissions
- question_tags
- question_votes
- questions
- role_user
- roles
- tag_user_follows
- tags
- user_educations
- user_follows
- user_profiles
- user_volunteer_exps
- user_work_exps
- users

Database Seeding (use for inserting test data into the database)
- Nagivate to the inside of the laravel application main directory
- To run Database Seeding: "php artisan db:seed"

After running the command, the following data will be inserted:

RolesTableSeeder
- Generate 3 Default Roles: Standard, Premiem, Admin

UsersTableSeeder
- Generate 3 Default User:
standard with Standard Role
premiem with Premiem Role
admin with Admin Role

- Generate 10 random users 
with User Profile Information, Education, Work Experience, and Volunteer Experience
and random role of either Standard or Premiem

OpportunityPagesTableSeeder
Generate 6 dfault opportunity page types such as 
- Event
- Competition
- Scholarship
- Internship
- Career
- Volunteer

OpportunityPagePostsTableSeeder
Generate 50 posts and randomly assign them to different opportunity page type and user id



