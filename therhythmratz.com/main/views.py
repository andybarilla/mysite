from os import listdir
from os.path import isfile
from os.path import join
from os.path import splitext

from bandsintown import Bandsintown
from django.conf import settings
from django.contrib.staticfiles.templatetags.staticfiles import static
from django.shortcuts import render


def index(request):
    client = Bandsintown('andybarilla.com')

    context = {
        'events': client.events('The Rhythm Ratz')
    }

    return render(request, 'main/index.html', context)

def art(request):

    files = listdir(join(settings.STATIC_ROOT, 'main', 'art'))
    images = []
    for f in files:
        if splitext(f)[1].lower() in ['.jpg', '.png']:
            images.append(FileInfo(f, "main/art/{}".format(f)))

    context = {
        'files': images
    }

    return render(request, 'main/art.html', context)


class FileInfo:
    def __init__(self, name, path):
        self.name = name
        self.path = path
