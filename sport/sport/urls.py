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
    #url(r'^admin/doc/', include('django.contrib.admindocs.urls')),

    # Uncomment the next line to enable the admin:
    url(r'^admin/', include(admin.site.urls)),
    # Esta es la que rellena el frame de tareas pendientes
    url(r'^count/', 'apppendiente.views.count'),
    # Para la API tastypie
    url(r'^api/', include(v1_api.urls)),
    # Alta por formulario
    url(r'^altaform/$', 'apppendiente.views.tarea_create'),
    # Manda un email a mi cuenta asalasl@gmail.com
    url(r'^email_saludo/$', 'apppendiente.views.email_saludo'),

    # Expresiones SEO
    url(r'^tortuga-tomasa-letra/$', 'apppendiente.views.tortuga_tomasa_letra'),
    url(r'^tortuga-tomasa-historia/$', 'apppendiente.views.tortuga_tomasa_historia'),
    url(r'^tortuga-tomasa-asociaciones/$', 'apppendiente.views.tortuga_tomasa_asociaciones'),
    url(r'^tortuga-tomasa-objetivo/$', 'apppendiente.views.tortuga_tomasa_objetivo'),

    # login / logout
    url(r'^accounts/login/$', 'django.contrib.auth.views.login'),
    url(r'^accounts/logout/$', 'django.contrib.auth.views.logout'),
    # Este es mi logout
    url(r'^logout_manual/$', 'apppendiente.views.logout_manual'),

    # -------------------------------------------------------------------------------------------
    # Vistas genericas: son vistas que ofrece Django. Por ejemplo, con TemplateView podemos
    # llamar asi directamente a un template, sin tener que generar y llamar a una vista
    # que lo renderice
    #(r'^about/', TemplateView.as_view(template_name="about.html")),
    # -------------------------------------------------------------------------------------------

)
