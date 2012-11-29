from django.db import models

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
