# sfPropelBootstrapThemePlugin

This is a [Twitter's Bootstrap](http://getbootstrap.com/2.3.2/index.html) theme for the [Symfony 1.4](http://symfony.com/legacy) [admin generator](https://github.com/propelorm/sfPropelORMPlugin) using [Propel 1.6.7](https://github.com/propelorm/Propel/releases/tag/1.6.7).

## Installation
Add as Git submodule into project's plugins directory.
```shell
$ cwd [project]
$ git submodule add https://github.com/gedeh/sfPropelBootstrapThemePlugin plugins/sfPropelBootstrapThemePlugin
```
Then enable the plugin in project's `config/ProjectConfiguration.class.php` file.
```php
  public function setup()
  {
    $this->enablePlugins(
      'sfPropelORMPlugin', // depends on sfPropelORMPlugin
      'sfPropelBootstrapThemePlugin'
      ... // install other plugin, the order doesn't matter
      );
  }
```
Then publish the assets.
```shell
$ php symfony plugin:publish-assets
```
Then use it from any `generator.yml` of admin generator generated module.
```yaml
generator:
  class: sfPropelBoostrapGenerator
  param:
    model_class:           PropelModelClassName
    theme:                 sfBootstrapTheme
    ...
    css:                   main
```

## Features
A theme that integrates Twitter Bootstrap to Symfony admin generator (sfPropelORMPlugin)

## Using
Twitter Bootstrap 2.3.2, jQuery 1.8.1, Symfony 1.4, and Propel 1.6.7

## Contributors
* [Luciano Coggiola](https://github.com/tanoinc)
* [Gede Hendra Saputra](https://github.com/gedeh)
