<?php

namespace Vikas5914\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Vikas5914\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName
    public function it_returns_a_random_joke()
    {
        $jokes = new JokeFactory([
            'This is a joke',
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName
    public function it_returns_a_predefined_joke()
    {
        $chuckNorrisJokes = [
            'Chuck Norris\' tears cure cancer. Too bad he has never cried.',
            'Chuck Norris counted to infinity... Twice.',
            'If you can see Chuck Norris, he can see you. If you can\'t see Chuck Norris you may be only seconds away from death.',
        ];

        $jokes = new JokeFactory();
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $chuckNorrisJokes);
    }
}
