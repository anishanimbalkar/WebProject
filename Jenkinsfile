pipeline {
  agent any

  stages {

    stage('Build') {
      steps {
        echo 'Checking project files...'
        bat 'dir'
      }
    }

    stage('Test') {
      steps {
        echo 'Validating PHP syntax...'
        bat 'php -l index.php'
      }
    }

    stage('Deploy') {
      steps {
        echo 'Deploying to XAMPP...'
        bat 'xcopy /E /I /Y * C:\\xampp\\htdocs\\webproject'
      }
    }

  }
}
