<?php

namespace Vikas5914\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use Vikas5914\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    // phpcs:disable PSR1.Methods.CamelCapsMethodName
    public function it_returns_a_random_joke()
    {
        // Create a mock and queue two responses.
        $mock = new MockHandler([
            new Response(
                200,
                [],
                '{ "type": "success", "value": { "id": 381, "joke": "Diamonds are not, despite popular belief, carbon. They are, in fact, Chuck Norris fecal matter. This was proven a recently, when scientific analysis revealed what appeared to be Jean-Claude Van Damme bone fragments inside the Hope Diamond.", "categories": [] } }'),
        ]);

        $handler = HandlerStack::create($mock);
        $client = new Client([
            'handler' => $handler,
        ]);

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Diamonds are not, despite popular belief, carbon. They are, in fact, Chuck Norris fecal matter. This was proven a recently, when scientific analysis revealed what appeared to be Jean-Claude Van Damme bone fragments inside the Hope Diamond.',
            $joke);
    }
}
