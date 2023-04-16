<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UnblockUser
{
    public const OPERATION_ID    = 'orgs/unblock-user';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/blocks/{username}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/orgs/{org}/blocks/{username}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The handle for the GitHub user account.**/
    private string $username;

    public function __construct(string $org, string $username)
    {
        $this->org      = $org;
        $this->username = $username;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{username}'], [$this->org, $this->username], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
