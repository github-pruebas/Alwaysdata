# coding: utf-8
from django.template import RequestContext
from django.shortcuts import render_to_response, get_object_or_404, redirect
from django.contrib.auth.decorators import login_required
from django.contrib.auth import logout
from django.core.mail import send_mail
from models import *
from forms import *


def count(request):
    total_pendientes = Pendiente.objects.count()
    lista_pend = Pendiente.objects.all()
    # el return se podría hacer más sencillo con locals(), así, ya que locals carga TODAS las variables locales:
    # return render_to_response('count.html', locals(), context_instance=RequestContext(request))
    return render_to_response('count.html',{'total_pendientes':total_pendientes,'lista_pend':lista_pend},context_instance=RequestContext(request))


@login_required(login_url='/accounts/login/')
def tarea_create(request):
    tarea = None

    if request.method == 'POST':
        # Cuando se intenta enviar el formulario, se comprueba si es válido, se guarda y nos vamos a otro HTML
        form = AltaTareaForm(request.POST, instance=tarea)
        if form.is_valid():
            tarea = form.save()
            return render_to_response('create_ok.html', context_instance=RequestContext(request))
    else:
        # Primer acceso, no hay POST, muestra el formulario vacío
        form = AltaTareaForm(instance=tarea)
    return render_to_response('create.html', locals(), context_instance=RequestContext(request))


# En el curso que nos dio A.Melé en QDQ instalamos el smtp server "postfix" para tener el servidor smtp en 
# nuestro local host, pero como no hay mucho espacio en alwaysdata, voy a usar el smtp de gmail, con el user
# "pruebasalwaysdata@gmail.com" (ver password en settings)
def email_saludo(request): 
   if request.method == 'POST': # If the form has been submitted...
        form = EmailSaludoForm(request.POST) # A form linked to the POST data
        if form.is_valid(): # All validation rules pass
	    send_mail(form.cleaned_data['remitente'] + ' te ha mandado un mensaje desde el Sandbox en Alwaysdata',
                      form.cleaned_data['mensaje'], 
                      'pruebasalwaysdata@gmail.com', 
                      ['asalasl@gmail.com'], 
                      fail_silently=False)
	    return render_to_response('email_ok.html', context_instance=RequestContext(request))
   else:
        form = EmailSaludoForm()
   return render_to_response('email.html', locals(), context_instance=RequestContext(request))


def logout_manual(request):
    logout(request)
    return render_to_response('logout_manual.html', context_instance=RequestContext(request))

# Expresiones SEO
def tortuga_tomasa_letra(request):
    titulo = "Tortuga Tomasa: letra"
    descripcion = "Letra canción Tortuga Tomasa, versión más conocida de la famosa canción de la Tortuga Tomasa"
    keywords = "Tortuga Tomasa, Letra Tortuga Tomasa, Tortuga Tomasa letra, Letra de la Tortuga Tomasa" 
    cabecera = "Letra de la canción de la Tortuga Tomasa" 
    return render_to_response('tortuga-tomasa-letra.html', locals(), context_instance=RequestContext(request))
    
def tortuga_tomasa_cancion(request):
    titulo = "Tortuga Tomasa: historia de la canción"
    descripcion = "Historia canción Tortuga Tomasa, así como de la intérprete: Teresa Rabal"
    keywords = "Tortuga Tomasa, cancion Tortuga Tomasa, Tortuga Tomasa historia, historia cancion de la Tortuga Tomasa" 
    cabecera = "Historia de la canción de la Tortuga Tomasa" 
    return render_to_response('tortuga-tomasa-cancion.html', locals(), context_instance=RequestContext(request))

def tortuga_tomasa_asociaciones(request):
    titulo = "Tortuga Tomasa: asociaciones y grupos"
    descripcion = "Asociaciones y grupos relacionados con la Tortuga Tomasa"
    keywords = "Tortuga Tomasa, Asociaciones Tortuga Tomasa, Tortuga Tomasa Grupos" 
    cabecera = "Asociaciones y grupos relacionados con la Tortuga Tomasa" 
    return render_to_response('tortuga-tomasa-asociaciones.html', locals(), context_instance=RequestContext(request))

def tortuga_tomasa_objetivo(request):
    titulo = "Tortuga Tomasa: objetivo de esta web"
    descripcion = "Objetivo de esta web sobre la Tortuga Tomasa"
    keywords = "Tortuga Tomasa, Objetivo de esta web Tortuga Tomasa, Tortuga Tomasa objetivo" 
    cabecera = "Objetivo de esta web" 
    return render_to_response('tortuga-tomasa-objetivo.html', locals(), context_instance=RequestContext(request))
