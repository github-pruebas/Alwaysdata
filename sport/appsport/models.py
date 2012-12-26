# coding: utf-8
from django.db import models
from django.db.models.signals import post_save
from django.core.mail import send_mail

class Sport(models.Model):
    # Para crear índices ponemos "db_index=True" en la definición del campo, y luego syncdb
    nombre = models.CharField(max_length=100, db_index=True)
    contacto = models.BooleanField(default=False)

    class Meta:
        ordering = ('nombre',)

    def __unicode__(self):
        return self.nombre


class Participante(models.Model):
    # Para crear índices ponemos "db_index=True" en la definición del campo, y luego syncdb
    sport = models.ForeignKey(Sport, related_name= 'sports', db_index=True)
    tipo = models.CharField(max_length=100)
    funcion = models.TextField(blank=True)

    def __unicode__(self):
        return self.tipo
    
    class Meta:
        ordering = ('id',)

def signal_envia_mail(sender, instance=False, **kwargs):
    send_mail('Django-Signals: Creado/modificado el participante "'+instance.tipo+'"',
              'Se ha creado o modificado un registro de participante en el Sandbox en Alwaysdata, con el nombre de: "'+instance.tipo+'" y cuya tarea es:"'+instance.funcion+'"',
              'pruebasalwaysdata@gmail.com', 
              ['asalasl@gmail.com'], 
              fail_silently=False)

post_save.connect(signal_envia_mail, sender=Participante)


