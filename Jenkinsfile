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
                sh 'find . -name *.php -exec php -l {} +'
            }
        }
        stage('Desplegar en Apache') {
            steps {
                sh 'sudo rm -rf /var/www/html/cv_site'
                sh 'sudo cp -r . /var/www/html/cv_site'
                sh 'sudo chown -R www-data:www-data /var/www/html/cv_site'
                sh 'sudo systemctl reload apache2'
            }
        }
    }
}
