# Yii3 Web Application

A modern web application built with [Yii3 Framework](https://www.yiiframework.com/), a high-performance PHP framework.

## Features

- 🚀 Built on Yii3 framework
- 🐳 Docker support for development, testing, and production
- ✅ Pre-configured testing environment with Codeception
- 🎨 Asset management
- 🔐 CSRF protection
- 📦 PSR-compliant architecture
- 🛠️ Code quality tools (Psalm, PHP CS Fixer, Rector)
- 🗄️ Database migrations support

## Requirements

- PHP 8.2 - 8.5
- Composer
- Docker and Docker Compose (optional, for containerized development)

## Installation

### Standard Installation

1. Clone the repository:
```bash
git clone <repository-url>
cd yii3_project
```

2. Install dependencies:
```bash
composer install
```

3. Set up environment configuration:
```bash
cp .env.example .env
# Edit .env with your configuration
```

4. Run database migrations:
```bash
./yii migrate/up
```

5. Start the development server:
```bash
APP_ENV=dev ./yii serve --port=8080
```

The application will be available at `http://localhost:8080`

### Docker Installation

1. Copy the environment file:
```bash
cp docker/.env.example docker/.env
# Edit docker/.env if needed
```

2. Build and start the containers:
```bash
make build
make up
```

3. Access the application at `http://localhost:80`

## Project Structure

```
yii3_project/
├── assets/              # Frontend assets (CSS, JS, images)
├── config/              # Application configuration
│   ├── common/          # Shared configuration
│   ├── console/         # Console application config
│   ├── web/             # Web application config
│   └── environments/    # Environment-specific configs
├── docker/              # Docker configuration files
├── public/              # Web root directory
│   └── index.php        # Entry script
├── runtime/             # Runtime files (logs, cache)
├── src/                 # Application source code
│   ├── Console/         # Console commands
│   ├── Migration/       # Database migrations
│   ├── Shared/          # Shared components
│   └── Web/             # Web application components
│       ├── Echo/        # Echo module
│       ├── HomePage/    # Home page module
│       ├── NotFound/    # 404 handler
│       ├── Page/        # Page module
│       └── Shared/      # Shared web components
├── tests/               # Test files
│   ├── Console/         # Console tests
│   ├── Functional/      # Functional tests
│   ├── Unit/            # Unit tests
│   └── Web/             # Web tests
└── vendor/              # Composer dependencies
```

## Available Commands

### Development Commands

- `./yii serve` - Start the built-in development server
- `./yii hello` - Example console command

### Using Make (Docker)

- `make build` - Build Docker images
- `make up` - Start development environment
- `make down` - Stop development environment
- `make shell` - Access container shell
- `make composer <args>` - Run Composer commands
- `make yii <args>` - Execute Yii console commands

### Code Quality

- `make rector` - Run Rector for automated refactoring
- `make cs-fix` - Run PHP CS Fixer to fix code style
- `make psalm` - Run Psalm static analysis

### Testing

Run all tests:
```bash
make test
```

Run specific test suite:
```bash
make test Console
make test Functional
make test Unit
make test Web
```

Generate test coverage:
```bash
make test-coverage
```

Without Docker:
```bash
./vendor/bin/codecept run
```

## Configuration

Application configuration is located in the `config/` directory:

- **common/** - Configuration shared between web and console applications
- **web/** - Web application specific configuration
- **console/** - Console application specific configuration
- **environments/** - Environment-specific configurations (dev, prod, test)

Environment variables can be configured through `.env` files.

## Database Migrations

Create a new migration:
```bash
./yii migrate/create <migration-name>
```

Run migrations:
```bash
./yii migrate/up
```

Rollback migrations:
```bash
./yii migrate/down
```

## Development

### Adding a New Page

1. Create a new directory in `src/Web/`
2. Implement your controller/handler
3. Add routes in `config/common/routes.php`
4. Create views in your module directory

### Adding Console Commands

1. Create a new command class in `src/Console/`
2. Register it in `config/console/commands.php`
3. Run with `./yii <command-name>`

## Production Deployment

For production deployment using Docker:

```bash
docker compose -f docker/compose.yml -f docker/prod/compose.yml up -d
```

Make sure to:
1. Set `APP_ENV=prod` in your environment
2. Configure your production database
3. Set up proper file permissions
4. Configure your web server (if not using Docker)

## Testing

The project uses Codeception for testing with multiple test suites:

- **Console** - Console command tests
- **Functional** - Functional tests for web application
- **Unit** - Unit tests
- **Web** - Web acceptance tests

## Support

- [Issues](https://github.com/yiisoft/app/issues?state=open)
- [Forum](https://www.yiiframework.com/forum/)
- [Telegram](https://t.me/yii3en)
- IRC: ircs://irc.libera.chat:6697/yii

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

This project is licensed under the BSD-3-Clause License.

## Acknowledgments

Built with ❤️ using [Yii Framework](https://www.yiiframework.com/)

For more information about Yii3, visit the [official documentation](https://github.com/yiisoft/docs).
