FROM python:3.4
ENV PYTHONUNBUFFERED 1

ADD requirements.txt /srv/therhythmratz.com/app/requirements.txt
WORKDIR /srv/therhythmratz.com
RUN pip install -r app/requirements.txt
EXPOSE 8000

COPY ./docker-entrypoint.sh /
ENTRYPOINT ["/docker-entrypoint.sh"]
