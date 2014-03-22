# coding: utf-8
from django.template import RequestContext
from django.shortcuts import redirect, render_to_response, get_object_or_404
from models import *

def home_page(request):
   """short description of the function home_page

    longish explanation: redirects to "/inicio"

    :param: request

    :returns: home page
    """
    #return redirect('http://www.as.com/')
    return redirect('/inicio')
