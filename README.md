## CrowdFarm
Before installing CrowdFarm you will need to make sure you have the minimum server requirements and then you'll want to clone the repo to your machine.
## Demo (https://crowdfarm.herokuapp.com/)

### Clone the Repo
You can clone the repo onto your local machine with the following command:

```
git clone 

 ```

Change project_name with the name of your project. Optionally, you may want to create a new Github Repo for your project.

Ok, now we can easily install Wave with these 4 simple steps:

### 1. Create a New Database
During the installation we need to use a MySQL database. You will need to create a new database and save the credentials for the next step.

### 2. Copy the .env.example file
We need to specify our Environment variables for our application. You will see a file named .env.example, you will need to duplicate that file and rename it to .env.

Then, open up the .env file and update your DB_DATABASE, DB_USERNAME, and DB_PASSWORD in the appropriate fields.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=
```

### 3. Add Composer Dependencies
Next, we will need to install all our composer dependencies by running the following command:

```
composer install
```
### 4. Run Migrations 
We need to migrate our database structure into our database, which we can do by running:

```
php artisan migrate
```

🎉 And that's it! You will now be able to visit your URL and see your CrowdFarm application up and running.

For security measures you may want to regenerate your application key, be sure to run the following command below to secure your site before going live.
```
php artisan key:generate
```

## Screenshots

Sign in                |  User Details              | Boarding page 1                |  Boarding page 2
:-------------------------:|:-------------------------:|:-------------------------:|:-------------------------:
![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/1.png) |![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/2.png)|![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/3.png)|![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/4.png)|

All ledgers                |  My investments              | Support campaign    
:-------------------------:|:-------------------------:|:-------------------------:|
![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/5.png) |![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/6.png)|![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/7.png)|

All ledgers                |  My investments              | Support campaign    
:-------------------------:|:-------------------------:|:-------------------------:|
![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/8.png) |![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/9.png)|![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/10.png)|

All ledgers                |  My investments              | Support campaign    
:-------------------------:|:-------------------------:|:-------------------------:|
![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/1.png) |![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/12.png)|![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/13.png)|

All ledgers                |  My investments              | Support campaign    
:-------------------------:|:-------------------------:|:-------------------------:|
![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/14.png) |![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/15.png)|![](https://github.com/thegreenbus/crowdfarm_website/blob/main/ScreenShots/16.png)|




### Built with
1. [PHP](https://www.flutter.dev) <code><img height="30" src="https://raw.githubusercontent.com/github/explore/ccc16358ac4530c6a69b1b80c7223cd2744dea83/topics/php/php.png"></code>

2. [Laravel](https://raw.githubusercontent.com/github/explore/56a826d05cf762b2b50ecbe7d492a839b04f3fbf/topics/laravel/laravel.png)<code><img height="30" src="https://raw.githubusercontent.com/github/explore/56a826d05cf762b2b50ecbe7d492a839b04f3fbf/topics/laravel/laravel.png"></code>

## Authors
1. **Angelita Mashirima** - [MashKapombe](https://github.com/MashKapombe)
