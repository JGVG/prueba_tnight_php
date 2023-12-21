# Prueba para Travel & Night - José Gabriel Vázquez Gil

> [!NOTE]
> El objetivo de la prueba es crear un API usando Symfony para mostrar y añadir usuarios creados.

# Ejecución
Una vez clonado el repositorio de github y despues de haber abierto el proyecto en Visual Studio Code solo habrá que ir a la consola que la IDE proporciona para ejecutar el arranque de la API usando el siguiente comando de Synfony CLI:

```js
symfony server:start
```

> [!TIP]
> Es recomendable tener instalado Postman, un software que tiene el proposito de falicitar el visionado respuestas de peticiones http -> https://www.postman.com/downloads/ pero también podemos usar nuestro navegador para el visualizado del json de respuesta.
> 
>![image](https://github.com/JGVG/prueba_tnight_php/assets/37996973/4176f1fb-cad0-4a1f-b3dd-45ed3fd83fad)


> [!WARNING]
> Tenga en cuenta que la API usa el puerto 8000, asegúrese que no tenga nada ejecutandose en dicho puerto.

La API actualmente dispone de dos peticiones
 - GET: Devuelve una lista de usuarios -> [http://localhost:8080/albums](![image](https://github.com/JGVG/prueba_tnight_php/assets/37996973/fda8c986-ea87-4b04-800a-aee85877fb30))
 - POST: Añadir un usuario -> [http://localhost:8080/albums/2/photos](![image](https://github.com/JGVG/prueba_tnight_php/assets/37996973/bb2a9519-c2f5-4e29-916b-f2b75b6872c5))
