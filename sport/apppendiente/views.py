# -*- encoding: utf-8 -*-
from django.template import RequestContext
from django.shortcuts import render_to_response, get_object_or_404
from models import *

def count(request):
    total_pendientes = Pendiente.objects.count()
    return render_to_response('count.html',{'total_pendientes':total_pendientes},context_instance=RequestContext(request))
