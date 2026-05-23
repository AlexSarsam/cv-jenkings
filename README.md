# CV Online con CI/CD — Alex Sarsam

CV personal con pipeline CI/CD automatizado. Cada git push despliega los cambios automaticamente en la Raspberry Pi mediante Jenkins, con HTTPS gestionado por Cloudflare y las imagenes optimizadas con ImageKit.

## Tech Stack

- PHP + Apache
- Jenkins (Docker) + GitHub Actions
- Cloudflare + ngrok
- ImageKit (WebP)
- Raspberry Pi + Docker

## Requisitos previos

- Raspberry Pi con Docker instalado
- Apache y PHP instalados
- Cuenta GitHub, Cloudflare e ImageKit

## Instalacion y despliegue

1. Clona el repositorio
2. Levanta Jenkins: cd /home/pi/jenkins && docker compose up -d
3. Crea el Job en Jenkins apuntando a este repositorio
4. Haz un push para disparar el pipeline: git push origin main

## Variables de entorno

No hay variables de entorno necesarias.

## Pipeline CI/CD

El Jenkinsfile define 3 etapas:
1. Descargar codigo — Jenkins clona el repo de GitHub
2. Validar PHP — Comprueba errores de sintaxis
3. Desplegar en Apache — Copia ficheros a /var/www/html/cv_site

## Autor

- Nombre: Alex Sarsam
- GitHub: github.com/AlexSarsam
- Email: diputacion530@gmail.com
