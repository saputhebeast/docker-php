# Run PHP Web Page Using Docker

1. Build the Docker image using this command:
   ```sh
   docker build -t my-php-app .
   ```

2. Run the built image:
   ```sh
   docker run -d -p 8081:80 --name my-php-app-container my-php-app
   ```

3. Open Chrome and go to `http://localhost:8081`.
