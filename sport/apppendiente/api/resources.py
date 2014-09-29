from tastypie.authorization import Authorization
from tastypie.resources import ModelResource
from apppendiente.models import Pendiente

class PendienteResource(ModelResource):
    class Meta:
        queryset = Pendiente.objects.all()
        allowed_methods = ['get','post']
        authorization = Authorization()
        