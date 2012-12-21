from django.db import models
from django.db.models.signals import post_save
from django.core.mail import send_mail

class Pendiente(models.Model):
    tarea = models.CharField(max_length=300)
    prioridad = models.IntegerField()

    class Meta:
        ordering = ('prioridad',)

    def __unicode__(self):
        return self.tarea

def signal_mail_save_tarea(sender, instance=False, **kwargs):
    send_mail('Django-Signals: Se ha creado/modificado una tarea en el Sandbox en Alwaysdata',
              'Se ha creado/modificado una tarea en el Sandbox en Alwaysdata',
              'pruebasalwaysdata@gmail.com', 
              ['asalasl@gmail.com'], 
              fail_silently=False)

post_save.connect(signal_mail_save_tarea, sender=Pendiente)

