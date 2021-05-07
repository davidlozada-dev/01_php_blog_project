# 01_php_blog_project

__Project's status: *finished*__ :heavy_check_mark:

__I'M CURRENTLY WORKING ON THE README.md FILE__
## Index

1. [Introduction](#1-Introduction)

	1.[Motivation behind the project](#11-Motivation-behind-the-project)

	2.[Naming convention](#12-Naming-convention)

	3.[Database schemas](#13-Database-schemas )

	4.[Blog layouts](#14-Blog-layouts)

1. [Technical aspects](#2-Technical-aspects)

	1.[Triggers](#21-Triggers)

	2.[Includes](#22-Includes)

1. [Contributor](#3-Contributor)

## Introduction

### 1.1 Motivation behind the project 

This project's purpose is to use basic __PHP__ and __MySQL__ knowledge to build a video game blog where signed-up users can create, read, update and detele entries about their favorite video games. At the same time, if a certain category isn't set yet, they can create it and make it available for everyone to use it, as well as, the registered users can modify their profile information. Those features were developed by using tools such as __Dia__ for making the database schemas and __HeidiSQL__ for exporting under some standars the database coded on the MySQL Command-Line.

#### Technologies/tools used for this project
	
	1. CSS
	2. Dia
	3. HeidiSQL
	4. HTML5
	5. MySQL
	6. PHP 


### 1.2 Naming convention

1. The __table names__ are in plural and lowercase. 
	
	>E.g: *__users__*.

1. The __column names__ are fully human-readable, in order to make that possible the names are in singular and use camelCase naming practice followed by an underscore and then the first three letters of the table's name where each column belongs to. 
	
	>E.g: *__userName_use__*. This is a column that belongs to a table called "users".

1. The __primary key column names__ use as default name "ID" followed by an underscore and then the first three letters of the table's name where each primary key column belongs to.

	>E.g.: *__ID_use__*. This is a primary key column that belongs to a table called "users".

### 1.3 Database schemas 

#### Related tables

The 1st schema shows the tables that are in the database and how they are related to each other through one-to-many relationships.

![01 schema](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/01_php_blog_project_db_schema_01.png)

#### Non-related tables

The 2nd schema show the tables thar are not related with each other in the database, these have as main function to backup all the data from the related tables.

![02 schema](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/01_php_blog_project_db_schema_02.png)

### 1.4 Blog layouts

#### About me

The __about me__ layout shows information about the site owner.

![About me](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/about_me_layout.png)

#### Category

The __category__ layout is used to show all the entries from a particular category.

![Category](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/category_layout.png)

#### Contact me

The __contact me__ layout displays the contact information for the site owner.

![Contact me](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/contact_me_layout.png)

#### Create category

The __create category__ layout presents a form to create a category.

![Create category](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/create_category_layout.png)

#### Create entry

The __create entry__ layout presents a form to create an entry.


![Create entry](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/create_entry_layout.png)

#### Edit profile

The __edit profile__ layout shows a form to update the user's profile information.

![Edit profile](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/edit_profile_layout.png)

#### Home page

The __home page__ layouts displays the last 5 entries.

![Home page](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/home_page_layout.png)

#### Signed in

The __signed in__ layout is the first page a user gets once is signed in.

![Signed In](https://raw.githubusercontent.com/davidlozada-dev/01_php_blog_project/master/assets/img/signed_in_layout.png)