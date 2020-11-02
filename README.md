# psalm-attributes

A repository for PHP 8 Attributes that you can use with Psalm.

## Installation

The potential for PHP 8's runtime attribute reflection somewhere in your codebase makes this complicated.

If the following code exists your codebase:

```php
function getClassAttributes(string $className) {
    foreach ((new ReflectionClass($className))->getAttributes() as $attr) {
        $attr->newInstance();
    }
}
```

_And_ there’s a possibility it might load classes with these particular attributes then install with

```
composer require psalm/attributes:*
```

If you’re not planning to use any runtime attribute reflection (and nobody might use it on your library/package classes) then it should be safe to install with

```
composer require --dev psalm/attributes
```
