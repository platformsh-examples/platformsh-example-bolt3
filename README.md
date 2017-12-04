# Bolt project template for Platform.sh

This project provides a starter kit for Bolt 3 projects hosted on [Platform.sh](http://platform.sh). It
is very closely based on the [Bolt quick install instructions](https://docs.bolt.cm/3.4/installation/quick-install).

## Starting a new project

You can start a new Bolt 3 project on Platform.sh in a few simple steps:

1. Clone this repository

2. Select "import your existing code" on the Platform.sh project setup screen

3. Add the Platform.sh git remote

4. Push to Platform.sh

## Using as a reference

You can also use this repository as a reference for your own Bolt projects, then borrow whatever code is needed.  The most important parts are the [`.platform.app.yaml`](/.platform.app.yaml) and [`platform_config.php`](platform_config.php) files.
`platform_config.php` is run as a deploy hook and creates a `config_local.yml` with the database connection information from your environment.

## How does this starter kit differ from vanilla Bolt from Bolt.cm?

1. This project template includes Platform.sh configuration files and a short program that creates additional configuration for Bolt.

2. The `extensions` directory will not be writable.
The Bolt control panel will issue a warning about this, but it's intentional.
Platform.sh is designed to only run code committed to the git repository.
It's a key safety feature of the service.
