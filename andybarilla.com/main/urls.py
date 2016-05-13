from django.conf.urls import url
from django.contrib.staticfiles.storage import staticfiles_storage
from django.views.generic.base import RedirectView

from . import views

urlpatterns = [
    url(r'^favicon.ico$',
        RedirectView.as_view(
            url=staticfiles_storage.url('main/favicon.ico'),
            permanent=False)),
    url(r'^$', views.index, name='index'),
]

