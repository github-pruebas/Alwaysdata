# coding: utf-8
from django.db import models
from django.db.models.signals import post_save
from django.core.mail import send_mail

class Pendiente(models.Model):
    tarea = models.CharField(max_length=300)
    # Para crear índices ponemos "db_index=True" en la definición del campo, y luego syncdb
    prioridad = models.IntegerField(db_index=True)

    class Meta:
        ordering = ('prioridad',)

    def __unicode__(self):
        return self.tarea

def signal_mail_save_tarea(sender, instance=False, **kwargs):
    send_mail('Django-Signals: Creada/modificada la tarea "' + instance.tarea +'"',
              'Se ha creado/modificado la tarea "'+ instance.tarea +'" en el Sandbox en Alwaysdata con prioridad '+str(instance.prioridad),
              'pruebasalwaysdata@gmail.com', 
              ['asalasl@gmail.com'], 
              fail_silently=False)
    
post_save.connect(signal_mail_save_tarea, sender=Pendiente)
