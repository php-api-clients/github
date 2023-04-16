<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckCollaborator
{
    public const OPERATION_ID    = 'repos/check-collaborator';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/collaborators/{username}';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/collaborators/{username}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    /**The handle for the GitHub user account.**/
    private string $username;

    public function __construct(string $owner, string $repo, string $username)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->username = $username;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{username}'], [$this->owner, $this->repo, $this->username], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
