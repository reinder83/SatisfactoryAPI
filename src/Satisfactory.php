<?php

namespace SatisfactoryAPI;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Http\PendingRequest;
use SatisfactoryAPI\Requests\QueryServerState;
use SatisfactoryAPI\Requests\RenameServer;
use SatisfactoryAPI\Responses\QueryServerStateResponse;

class Satisfactory extends Connector
{
    public function __construct(
        protected readonly string  $host,
        protected readonly int     $port,
        protected readonly ?string $token = null
    )
    {
    }

    public function boot(PendingRequest $pendingRequest): void
    {
    }

    /**
     * @inheritDoc
     */
    public function resolveBaseUrl(): string
    {
        return 'https://' . $this->host . ':' . $this->port . '/api/v1';
    }

    public function queryServerState(): QueryServerStateResponse
    {
        return $this->send(new QueryServerState())->dtoOrFail();
    }

    public function renameServer(string $name): bool
    {
        return $this->send(new RenameServer($name))->status() === 204;
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    protected function defaultAuth(): ?Authenticator
    {
        if ($this->token === null) {
            return null;
        }

        return new TokenAuthenticator($this->token);
    }
}