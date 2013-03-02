# coding: utf-8
from django.template import RequestContext
from django.shortcuts import redirect, render_to_response, get_object_or_404
from models import *

def home_page(request):
    #return redirect('http://www.as.com/')
    return redirect('/inicio')
