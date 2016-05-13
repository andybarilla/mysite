FROM python:3.4
ENV PYTHONUNBUFFERED 1

ADD requirements.txt /srv/app/requirements.txt
WORKDIR /srv
RUN pip install -r app/requirements.txt
EXPOSE 8000

COPY ./docker-entrypoint.sh /
ENTRYPOINT ["/docker-entrypoint.sh"]
