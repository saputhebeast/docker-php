# Run PHP Web Page Using Docker
1. Run the init SQL script in the local database

2. Build the Docker image using this command:
   ```sh
   docker build -t my-php-local-mysql .
   ```

4. Run the built image:
   ```sh
   docker run -d -p 8082:80 --name my-php-local-mysql-app-container my-php-local-mysql
   ```

5. Open Chrome and go to `http://localhost:8082`.
