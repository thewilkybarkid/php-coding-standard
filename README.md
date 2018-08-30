Libero PHP coding standard
==========================

[![Build Status](https://travis-ci.com/libero/php-coding-standard.svg?branch=master)](https://travis-ci.com/libero/php-coding-standard)

The Libero PHP coding standard is a set of [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) rules applied to all Libero PHP projects. It is based on [PSR-1](https://www.php-fig.org/psr/psr-1/).

Getting started
---------------

Using [Composer](https://getcomposer.org/) you can install the coding standard into your project:

```
composer require --dev libero/coding-standard
```

You can then find violations of the standard by running:

```
vendor/bin/phpcs --standard=Libero /path/to/some/file/to/sniff.php
```

Or automatically correct (at least some of) these violations by running:

```
vendor/bin/phpcbf --standard=Libero /path/to/some/file/to/sniff.php
```

See the [PHP_CodeSniffer documentation](https://github.com/squizlabs/PHP_CodeSniffer/wiki) for more details.

Getting help
------------

-  Report a bug or request a feature on [GitHub](https://github.com/libero/libero/issues/new/choose).
-  Ask a question on the [Libero Community Slack](https://libero-community.slack.com/).
