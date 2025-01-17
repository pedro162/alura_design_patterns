````
# Alura Design Patterns

This PHP project represents my studies on design patterns such as **Command**, **Observer**, **State**, **Strategy**, **Iterator**, and others. It uses modern PHP (version 8.2+) and is structured to follow the PSR-4 autoloading standard.

## Features

- Implementation of various design patterns.
- Organized structure with PSR-4 autoloading.
- Docker support for containerized development.
- Ready-to-use `docker-compose` setup for local development.

## Requirements

- PHP 8.2+
- Composer
- Docker and Docker Compose (for containerized usage)

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/pedro162/alura_design_patterns.git
   cd alura_design_patterns
   ```
````

2. Install dependencies:

   ```bash
   composer install
   ```

3. Start the Docker environment (optional):

   ```bash
   docker-compose up -d
   ```

4. Access the project:
   - PHP CLI usage can be done directly if running locally.
   - If using Docker, connect to the PHP container:
     ```bash
     docker exec -it <container_name> bash
     ```

## Project Structure

```
├── src/                  # Core application files
├── testes/               # Test cases
├── composer.json         # Composer configuration
├── Dockerfile            # Docker image definition
├── docker-compose.yml    # Docker Compose setup
```

### Composer Autoload Configuration

The project uses the following PSR-4 namespaces:

- **`Alura\DesignPattern\`**: For the main application code.
- **`Alura\Testes\`**: For test-related code.

## Dependencies

The project currently uses:

- PHP 8.2 (as specified in `composer.json`)

## How to Contribute

1. Fork this repository.
2. Create a new branch for your feature or fix:
   ```bash
   git checkout -b my-feature-branch
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add my new feature"
   ```
4. Push your branch:
   ```bash
   git push origin my-feature-branch
   ```
5. Open a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

```

### Notas
- Se o projeto já possui um script específico para rodar testes ou outro fluxo, posso adicionar instruções adicionais no `README.md`.
- Caso precise detalhar o conteúdo do `docker-compose.yml` ou do `Dockerfile`, também podemos incluir no documento.
```
