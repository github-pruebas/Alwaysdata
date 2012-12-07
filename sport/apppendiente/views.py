# -*- encoding: utf-8 -*-
from django.template import RequestContext
from django.shortcuts import render_to_response, get_object_or_404, redirect
from models import *
from forms import *

def count(request):
    total_pendientes = Pendiente.objects.count()
    lista_pend = Pendiente.objects.all()
    return render_to_response('count.html',{'total_pendientes':total_pendientes,'lista_pend':lista_pend},context_instance=RequestContext(request))


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
