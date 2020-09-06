## Step 1 
  git clone https://github.com/AungPhyoKywe/Student_Management
## Step 2
  cd Student_Management

## Step 3

  cp .env.example .env

  
## Step 4
  
  docker-compose up -d

## Step 5

  docker-compose exec app php artisan key:generate
## Step 6

  open your broswer  http://your_server_ip
## Step 7

  docker-compose exec db bash
## Step 8
  
  mysql -u root -p
## Step 9

 show databases;

## Step 10

 exit;

## Step 11

 docker-compose exec app php artisan migrate


