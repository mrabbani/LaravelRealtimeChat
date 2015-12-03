##Requirements:
-  [Nodejs][2]
-  [Redis][3]

##Install Redis
To instal redis in your pc from [here][1] and run redis server 
    
    sudo service redis-server restart
 
[1]: https://gitlab.com/gitlab-org/gitlab-ce/blob/master/doc/install/installation.md
[2]: https://nodejs.org/
[3]: http://redis.io

##installation:
Go to project directory and run the following commands from terminal

    composer install    
    npm install
now rename `.env.example` file to `.env`  and  add the following line in `.env` file 
    
##Run Project
Open two new terminal and go to the project's root directory
####Tarmian 1: 
    
    node socket.js    
####Tarminal 2:

    php artisan key:generate
    php artisan serve
##See Output    
Open two tab in browser
####Browser Tab1:
    localhost:8000/test
####Browser Tab2:
    localhost:8000/fire

Now will see 10 in tab1 and if reload tabe2 the value will 20 in tab1
    
    
    