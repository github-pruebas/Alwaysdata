# -*- encoding: utf-8 -*-
from django import forms
from models import Pendiente

class AltaTareaForm(forms.ModelForm):
    class Meta:
        model = Pendiente
        # Si no se indica nada, es equivalente a  
        #fields = ('tarea', 'prioridad',)
        # También se puede no indicar nada e incluir todos excepto algunos, así:
        #exclude = ('prioridad',) 
