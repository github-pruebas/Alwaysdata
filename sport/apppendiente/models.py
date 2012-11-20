from django.db import models
class Pendiente(models.Model):
    tarea = models.CharField(max_length=300)
    prioridad = models.IntegerField()

    class Meta:
        ordering = ('prioridad',)

    def __unicode__(self):
        return self.tarea
