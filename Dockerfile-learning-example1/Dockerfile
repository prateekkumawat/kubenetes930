# Base image for building any application  
FROM ubuntu:latest

# RUN instruction for manage command 
RUN apt-get update 
RUN apt install -y nginx
RUN mkdir /prateek  
RUN useradd prateek

# Copy Instruction for dockerfiles 
COPY src/ /var/www/html/
COPY --chown=prateek:prateek  data/ /prateek

# setup default login path of container 
WORKDIR /prateek 
USER prateek