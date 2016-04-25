server {
	listen 80 default_server;
    server_name andybarilla.com *.andybarilla.com;

    location /static/ {
        root /var/www/andybarilla.com;
    }

    location / {
        include proxy_params;
        proxy_pass http://unix:/var/www/andybarilla.com/mysite.sock;
    }
}
