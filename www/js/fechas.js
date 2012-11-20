var fecha=new Date();
var diasemana=fecha.getDay();

var textosemana = new Array (7);
  textosemana[0]="domingo";
  textosemana[1]="lunes";
  textosemana[2]="martes";
  textosemana[3]="mi\u00e9rcoles";
  textosemana[4]="jueves";
  textosemana[5]="viernes";
  textosemana[6]="s\u00e1bado";

var citasemana = new Array (7);
  citasemana[0]="No hay domingo sin sol ni hortera sin transistor.";
  citasemana[1]="Ma\u00f1ana martes, ni te cases ni te embarques.";
  citasemana[2]="El martes, trabajas hasta que te jartes.";
  citasemana[3]="Mi\u00e9rcoles con Ch\u00e9rcoles.";
  citasemana[4]="El jueves, trabajas, trabajas y no te mueves.";
  citasemana[5]="Viernes: finde en ciernes.";
  citasemana[6]="S\u00e1bado, sabadete.";

document.write("Fecha completa sin formato: " + fecha + "<br><br>");
document.write("La cita de hoy " + textosemana[diasemana] + " es:<br>");
document.write(citasemana[diasemana] + "<br>");
