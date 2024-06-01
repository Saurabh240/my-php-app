# my-php-app

## Description
This is a PHP application that connects to a remote MySQL database, reads a JSON file from an NTFS share, and allows web users to edit and save it.

## Prerequisites
- Docker
- Kubernetes
- NTFS share setup on host machine

## Steps to Build and Run

### Docker

1. **Build Docker Image**:
   docker build -t my-php-app:latest .

2. **Push Docker Image to Docker Hub**:
   docker login
   docker tag my-php-app:latest <your-dockerhub-username>/my-php-app:latest
   docker push <your-dockerhub-username>/my-php-app:latest

### Kubernetes

1. **Apply Kubernetes Configuration**:
   kubectl apply -f kubernetes/persistent-volume.yaml
   kubectl apply -f kubernetes/deployment.yaml
   kubectl apply -f kubernetes/service.yaml

2. **Access the Application**:
   - Get the external IP of the service:
     kubectl get services
   - Access the application via the external IP.

## Configuration
- Update `app/config.php` with your decryption logic for the database credentials.

## Notes
- Ensure that the NTFS share is properly set up on your host machine.
- The PHP application expects the JSON file to be present at `/mnt/ntfs-share/data.json`.

This guide should help you set up a PHP application in a Docker container, connect it to a remote MySQL database, and deploy it on Kubernetes with shared NTFS storage.