## Project target
is to raise our own nginx server and connect wordpress mysql phpmyadmin connected to each other to it
## Usage
docker build -t server .  
docker run docker run -it --rm -p 80:80 -p 443:443 server
