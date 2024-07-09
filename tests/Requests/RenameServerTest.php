<?php

namespace SatisfactoryAPI\Tests\Requests;

use Saloon\Http\Faking\MockResponse;
use SatisfactoryAPI\Responses\QueryServerStateResponse;
use SatisfactoryAPI\Tests\TestCase;

class RenameServerTest extends TestCase
{

    public function testResponse(): void
    {
        $this->mock->addResponse(new MockResponse(
            '',
            204,
            ['Content-Type' => 'application/json'],
        ));

        $response = $this->client->renameServer('New name');

        $this->assertTrue($response);
    }
}