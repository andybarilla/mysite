#!/bin/sh

python manage.py migrate

python manage.py collectstatic --no-input

gunicorn mysite.wsgi:application -w 2 -b :8000
