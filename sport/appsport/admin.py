from models import *
from django.contrib import admin

class SportAdmin(admin.ModelAdmin):
    list_display = ['nombre','contacto']
    list_filter = ['contacto']
    ordering = ['nombre']

admin.site.register(Sport, SportAdmin)

class ParticipanteAdmin(admin.ModelAdmin):
    list_display = ['tipo','sport','funcion']
    list_filter = ['sport__nombre']
    search_fields = ['tipo','sport__nombre','funcion']
    ordering = ['id']

admin.site.register(Participante, ParticipanteAdmin)

