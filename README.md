![izpara](https://user-images.githubusercontent.com/98668706/190103147-4f2a98a1-28b5-4797-a909-86b5d6e4e644.png)

![izparaadmin](https://user-images.githubusercontent.com/98668706/190103239-ca3d7423-a4e4-4ce0-9bb6-928d4ff9574d.png)


Home Page Preview Video:

https://www.youtube.com/watch?v=psSeXXostDY

Admin Panel Preview Video:

https://www.youtube.com/watch?v=oS8wEiQho-w

1-Setup (install/create) Database and PHP server.

2-Install Composer

3-Install npm.

4-Install git. Get this project from Github (git clone).

5-Copy ".env.example" file and rename to ".env". Edit the .env file (connect to DB).

6-Run "composer update".

7-Run "npm install", then "npm run dev". (npm run build)

8-Run "php artisan key:generate". It will add application key to the .env file.

9-Run "php artisan migrate" Laravel Migrations.

10-It's the correct way to seeding: "php artisan db:seed --class=DatabaseSeeder" Laravel Seeding.

11-You can run the project on local host with the 'php artisan serve' command
