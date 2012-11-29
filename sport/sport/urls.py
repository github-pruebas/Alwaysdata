from tastypie.api import Api
from apppendiente.api.resources import PendienteResource
from django.conf.urls import patterns, include, url

# Uncomment the next two lines to enable the admin
from django.contrib import admin
admin.autodiscover()

v1_api = Api(api_name='v1')
v1_api.register(PendienteResource())

urlpatterns = patterns('',

    url(r'^$', 'appsport.views.home_page'),

    # Uncomment the admin/doc line below to enable admin documentation:
    # url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    url(r'^admin/', include(admin.site.urls)),
    url(r'^count/', 'apppendiente.views.count'),
    url(r'^api/', include(v1_api.urls)),
)
