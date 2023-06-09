PROYECTO CRUCE DE DATOS

este proyecto fue creado con el fin de realizar el control primario de retiros de una empresa multinacional. El proyecto consiste en el cruce de usuarios que fueron reportados como retirados de la empresa, se generan distintas llaves (documento, combinación de nombres e identidad) para realizar la busqueda de los usuarios en los distintos legados a nivel Aplicativo, Base de datos y Servidores. Además de hacer el cruce con los export de los legados entregados, tambien se conecta a algunas bases de datos y hace el cruce en tiempo real. Al final de la busqueda de los usuarios en todos los legados, se hacen validaciones para descartar homonimos o falsos positivos, al finalizar se genera un reporte con los usuarios que aun se encuentran Activos, esto con el fin de solicitar el retiro donde sea necesario.

El proyecto fue realizado en Python con la librería Pandas.
