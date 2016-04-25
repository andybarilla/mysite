from bandsintown import BandsInTown
import dateutil.parser
from django.http import HttpResponse
from django.template import loader


def index(request):
    template = loader.get_template('main/index.html')

    client = BandsInTown('andybarilla.com')
    events = client.events('The Rhythm Ratz')
    events.extend(client.events('Tinker\'s Damn'))

    events = sorted(events, key=lambda x: x.datetime)

    context = {
        'events': events,
    }

    return HttpResponse(template.render(context, request))


