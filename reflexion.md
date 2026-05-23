# Reflexión — CI/CD con Jenkins, Cloudflare y GitHub Actions

## 1. ¿Qué problema resuelve CI/CD en el desarrollo web?

CI/CD elimina el proceso manual de despliegue. Sin CI/CD, cada vez que quiero actualizar
el CV tengo que conectarme por SSH a la Raspberry Pi, copiar los ficheros a mano, reiniciar
Apache y comprobar que no he olvidado ningún archivo. Con CI/CD, solo hago git push y todo
ocurre automáticamente: Jenkins descarga el código, valida que no hay errores de sintaxis en
PHP y despliega los ficheros en Apache. Si algo falla, el código roto nunca llega a producción.

## 2. ¿Por qué usamos Jenkins para el backend y no GitHub Actions?

GitHub Actions ejecuta los pipelines en servidores de GitHub, en internet, y no puede acceder
a la Raspberry Pi porque está en una red local sin IP pública fija. Jenkins está instalado
dentro de la misma red que el servidor, por eso puede copiar ficheros y reiniciar Apache
directamente. En empresas reales, los servidores de producción casi nunca son accesibles
desde internet, por eso Jenkins es el estándar para esos entornos.

## 3. ¿Qué ventajas aporta una CDN como Cloudflare?

Una CDN como Cloudflare distribuye el contenido desde servidores repartidos por todo el mundo,
de forma que el usuario recibe la respuesta desde el nodo más cercano a su ubicación. Esto
reduce la latencia y acelera la carga de la web. Además, Cloudflare gestiona el HTTPS
automáticamente sin necesidad de instalar certificados manualmente, protege contra ataques
DDoS absorbiendo el tráfico malicioso antes de que llegue a la Raspberry Pi, y oculta la IP
real del servidor.
