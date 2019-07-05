## Chuck Norris Jokes

Doing mpociot's PHP Package Development course.

This course consists of several videos on how to make a package in PHP. You can get information about the course on the official [website](https://phppackagedevelopment.com).

## Installation

Require the package using composer:

```bash
composer require vikas5914/chuck-norris-jokes
```
## Usage

```php
use Vikas5914\ChuckNorrisJokes\JokeFactory;

$jokes =  new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[MIT](./LICENSE)
