pipeline {
    agent any
    stages {
        stage('Descargar codigo') {
            steps {
                checkout scm
            }
        }
        stage('Validar PHP') {
            steps {
                sh 'find . -name "*.php" -exec php -l {} +'
            }
        }
        stage('Desplegar en Apache') {
            steps {
                sh 'rm -rf /var/www/html/cv_site'
                sh 'cp -r . /var/www/html/cv_site'
                sh 'chmod -R 755 /var/www/html/cv_site'
            }
        }
    }
}
