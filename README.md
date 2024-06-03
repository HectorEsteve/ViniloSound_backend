# Proyecto ViniloSound

Para el correcto funcionamiento de la web se debe desplegar tanto el frontend como el backend. A continuación está descrito el despliegue del backend en local, mientras que el frontend lo podéis encontrar en [ViniloSound_frontend](https://github.com/HectorEsteve/ViniloSound_frontend).

## Instalación de Docker

Para instalar Docker, podéis seguir el tutorial de instalación en el siguiente enlace: [Instalación de Docker](https://docs.docker.com/engine/install/).

Para darle permisos y no tener que usar `sudo` en los comandos, ejecutad los siguientes comandos:

```sh
sudo usermod -aG docker $USER
newgrp docker
```

## Clonar el Repositorio y preparar documentos

El segundo paso es clonar este repositorio:

```sh
git clone https://github.com/HectorEsteve/ViniloSound_backend
```

Una vez instalado, accedemos a la carpeta `ViniloSound_backend`:

```sh
cd ViniloSound_backend
```

Y copiamos el contenido de la carpeta `.env.example` en `.env`:

```sh
cp .env.example .env
```

## Montar el Contenedor

Ya podemos montar el contenedor y levantarlo:

```sh
docker-compose build
docker-compose up -d
```

Por último, tendremos que hacer las migraciones para que se cree la base de datos:

```sh
docker exec -it laravel_app php artisan migrate:fresh --seed
```
