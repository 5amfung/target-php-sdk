# Adobe Target PHP SDK

## Quick Start

```bash
$ brew install composer              # Install composer
$ composer install                   # Install dependencies
```

### Create autoload helper
To be able to run the tests we have to ensure that we have a generated auto-loader. To generate the auto-loader use:
```bash
$ composer dump-autoload
``` 
### Run tests
```bash
$ composer test
```

### Format code
```bash
$ composer format
```

### Code generation
The SDK depends on [Target Open API](https://github.com/adobe/target-openapi). It uses Open API and the `Open API generator` to generate the low level HTTP client.

To be able to use `Target Open API` for code generation, we are leveraging Git subtree.

To import `Target Open API` as `openapi` folder please use commands:
```bash
$ git subtree add --prefix openapi git@github.com:adobe/target-openapi.git main --squash
```
To refresh the imported subtree use this command:
```bash
$ git subtree pull --prefix openapi git@github.com:adobe/target-openapi.git main --squash
```

`Open API generator` is a Java application hence the code generation process requires a few tools besides `Composer`:
- Java 8+
- NPM 6+

NPM is required since we are relying on `openapi-generator-cli`.

Once all the tools are installed, there is no need to invoke them directly, everything is wrapped in a `Composer` script, which can be invoked by running:
```bash
$ composer codegen
```

### Gotchas

#### Composer

On Mac you might have to disable IPv6 to make composer work.
See https://www.maximumbuilders.my/news/trouble-shooting-on-composer-timeout

#### Running Github Workflows on forked repositories

Github Workflows don't run on forked repositories by default.
You must enable GitHub Actions in the Actions tab of the forked repository.

See more details at https://docs.github.com/en/free-pro-team@latest/actions/reference/events-that-trigger-workflows#pull-request-events-for-forked-repositories

## Contributing

Contributions are welcomed! Read the [Contributing Guide](./.github/CONTRIBUTING.md) for more information.

## Licensing

This project is licensed under the Apache V2 License. See [LICENSE](LICENSE) for more information.
