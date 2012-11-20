from models import *
from django.contrib import admin

class PendienteAdmin(admin.ModelAdmin):
    list_display = ['tarea','prioridad']
    list_filter = ['prioridad']
    ordering = ['prioridad']

admin.site.register(Pendiente, PendienteAdmin)

