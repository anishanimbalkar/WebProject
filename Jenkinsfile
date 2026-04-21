pipeline {
  agent any
  stages {
    stage('Build') {
      steps {
        echo 'Building project...'
        bat 'echo "Compiling"'
      }
    }
    stage('Test') {
      steps {
        echo 'Running tests...'
        bat 'echo "compiling"'
      }
    }
    stage('Deploy') {
      steps {
        echo 'Deploying application...'
      }
    }
  }
}
