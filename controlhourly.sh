curl antoniosalas.es > $HOME/controlerrores.log

resul_antoniosalas='OK'
contenido=`cat $HOME/controlerrores.log | wc -l`
if (( $contenido == 0 ))  
    then resul_antoniosalas='RESPUESTA_NULA'
else
    errores=`grep -i 'error\|not\ found\|"could\ not\ resolve"' $HOME/controlerrores.log | wc -l`
    if (( $errores != 0 ))  
        then resul_antoniosalas='ENCONTRADOS_ERRORES'
    fi
fi

################################################################################

curl asalas.alwaysdata.net/tortuga-tomasa-cancion/ > $HOME/controlerrores.log
resul_alwaysdata='OK'
contenido=`cat $HOME/controlerrores.log | wc -l`
if (( $contenido == 0 ))  
    then resul_alwaysdata='RESPUESTA_NULA'
else
    errores=`grep -i 'error\|not\ found\|"could\ not\ resolve"' $HOME/controlerrores.log | wc -l`
    if (( $errores != 0 ))  
        then resul_alwaysdata='ENCONTRADOS_ERRORES'
    fi
fi

################################################################################

fecha=`date`
linea="$fecha --> antoniosalas: $resul_antoniosalas; alwaysdata: $resul_alwaysdata"
echo $linea >> $HOME/log_dia.log	
if [ $resul_antoniosalas != "OK" ] || [ $resul_alwaysdata != "OK" ] 
	then
	mail -s "ALERTA: Algún servidor no va bien" "asalasl@gmail.com" < $HOME/log_dia.log
fi
