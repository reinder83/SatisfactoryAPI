<?php

namespace SatisfactoryAPI;

use Saloon\Contracts\Authenticator;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Http\PendingRequest;
use Saloon\Http\Response;
use SatisfactoryAPI\Exceptions\ConnectException;
use SatisfactoryAPI\Exceptions\Exception;
use SatisfactoryAPI\Requests\QueryServerState;
use SatisfactoryAPI\Requests\RenameServer;
use SatisfactoryAPI\Resources\Auth;
use SatisfactoryAPI\Responses\QueryServerStateResponse;
use Throwable;

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

    public function auth(): Auth
    {
        return new Auth($this);
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

    protected function defaultConfig(): array 
    {
        return [
            'verify' => false
        ];
    }

    protected function defaultAuth(): ?Authenticator
    {
        if ($this->token === null) {
            return null;
        }

        return new TokenAuthenticator($this->token);
    }

    public function getRequestException(Response $response, ?Throwable $senderException): ?Throwable
    {
        switch(get_class($senderException)) {
            case FatalRequestException::class:
                if (str_contains($senderException->getMessage(), 'Failed to connect')) {
                    return new ConnectException($senderException->getMessage(), $senderException->getCode(), $senderException);
                }
                break;
        }

        return new Exception($senderException->getMessage(), $senderException->getCode(), $senderException);
    }
}