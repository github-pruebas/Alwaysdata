from django.db import models
from django.db.models.signals import post_save
from django.core.mail import send_mail

class Sport(models.Model):
    nombre = models.CharField(max_length=100)
    contacto = models.BooleanField(default=False)

    class Meta:
        ordering = ('nombre',)

    def __unicode__(self):
        return self.nombre


class Participante(models.Model):
    sport = models.ForeignKey(Sport, related_name= 'sports')
    tipo = models.CharField(max_length=100)
    funcion = models.TextField(blank=True)

    def __unicode__(self):
        return self.tipo
    
    class Meta:
        ordering = ('id',)

def signal_envia_mail(sender, instance=False, **kwargs):
    send_mail('Django-Signals: Se ha creado o modificado un registro de participante en el Sandbox en Alwaysdata',
              'Se ha creado o modificado un registro de participante en el Sandbox en Alwaysdata',
              'pruebasalwaysdata@gmail.com', 
              ['asalasl@gmail.com'], 
              fail_silently=False)

post_save.connect(signal_envia_mail, sender=Participante)


