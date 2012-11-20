from django.conf.urls.defaults import patterns, include, url
from sport.appsport.views import *

urlpatterns = patterns('',
    url(r'^$', inicio, name='appsport_inicio'),
    url(r'^participantes/$', participantes, name='participante_list'),
    url(r'^participantes/(?P<id>\d+)/$', participante_detail, name='participante_detail'),
)
