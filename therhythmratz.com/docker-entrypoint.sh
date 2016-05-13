#!/bin/sh

python manage.py migrate

python manage.py collectstatic --no-input

gunicorn therhythmratz.wsgi:application -w 2 -b :8000
