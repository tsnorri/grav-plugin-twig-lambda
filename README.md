# Twig Lambda Plugin

The **Twig Lambda** Plugin is for [Grav CMS](http://github.com/getgrav/grav). It may be used to enable the Twig Lambda extension by Damian Połać.

## Installation

Installing the Twig Lambda plugin can be done in one of two ways. The GPM (Grav Package Manager) installation method enables you to quickly and easily install the plugin with a simple terminal command, while the manual method enables you to do so via a zip file.

### GPM Installation (Preferred)

The simplest way to install this plugin is via the [Grav Package Manager (GPM)](http://learn.getgrav.org/advanced/grav-gpm) through your system's terminal (also called the command line).  From the root of your Grav install type:

    bin/gpm install twig-lambda

This will install the Twig Lambda plugin into your `/user/plugins` directory within Grav. Its files can be found under `/your/site/grav/user/plugins/twig-lambda`.

### Manual Installation

To install this plugin, just download the zip version of this repository and unzip it under `/your/site/grav/user/plugins`. Then, rename the folder to `twig-lambda`. You can find these files on [GitHub](https://github.com/tsnorri/grav-plugin-twig-lambda) or via [GetGrav.org](http://getgrav.org/downloads/plugins#extras).

You should now have all the plugin files under

    /your/site/grav/user/plugins/twig-lambda
	
> NOTE: This plugin is a modular component for Grav which requires [Grav](http://github.com/getgrav/grav) and the [Error](https://github.com/getgrav/grav-plugin-error) and [Problems](https://github.com/getgrav/grav-plugin-problems) to operate.

## Configuration

Before configuring this plugin, you should copy the `user/plugins/twig-lambda/twig-lambda.yaml` to `user/config/plugins/twig-lambda.yaml` and only edit that copy.

Here is the default configuration and an explanation of available options:

```yaml
enabled: true
```

## Usage

The Twig Lambda extension needs to be installed with ```composer require dpolac/twig-lambda```. Please refer to the [extension documentation](https://github.com/dpolac/twig-lambda).

Additionally, this plugin adds one filter, `dictionary\_from\_pairs`. It may be used to create a `Dictionary` from an array that contains keys and values as arrays of two elements.
