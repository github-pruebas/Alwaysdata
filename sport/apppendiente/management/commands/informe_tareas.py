# coding: utf-8
from django.core.management.base import NoArgsCommand
from django.core.mail import send_mail
from apppendiente.models import *

class Command(NoArgsCommand):
    help = "Cuenta las tareas pendientes y manda un email con el report."
    def handle_noargs(self, **options):

        total_pendientes = Pendiente.objects.count()
        lista_pend = Pendiente.objects.all()

        send_mail('Django-Commands: Informe semanal de tareas pendientes (hay '+str(total_pendientes)+')',
	          lista_pend,
	          'pruebasalwaysdata@gmail.com', 
	          ['asalasl@gmail.com'], 
	          fail_silently=False)

