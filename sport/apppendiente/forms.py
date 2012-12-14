# coding: utf-8
from django import forms
from models import Pendiente

class AltaTareaForm(forms.ModelForm):
    class Meta:
        model = Pendiente
        # Si no se indica nada, es equivalente a todos los campos, es decir:
        #fields = ('tarea', 'prioridad',)
        # También se puede no indicar nada e incluir todos excepto algunos, así:
        #exclude = ('prioridad',) 

# Ojo, este no es un ModelForm, sino un Form
class EmailSaludoForm(forms.Form):
    remitente = forms.CharField(label='Tu nombre',required=True,max_length=15)
    mensaje = forms.CharField(widget=forms.Textarea,required=True,max_length=100)



