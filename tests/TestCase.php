<?php

namespace SatisfactoryAPI\Tests;

use Saloon\Http\Faking\MockClient;
use SatisfactoryAPI\Satisfactory;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{
    protected Satisfactory $client;
    protected MockClient $mock;

    protected function setUp(): void
    {
        parent::setUp();

        $this->mock = new MockClient();
        $this->client = new Satisfactory('host', 123);
        $this->client->withMockClient($this->mock);
    }
}