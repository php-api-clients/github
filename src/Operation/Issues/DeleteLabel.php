<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteLabel
{
    public const OPERATION_ID    = 'issues/delete-label';
    public const OPERATION_MATCH = 'DELETE /repos/{owner}/{repo}/labels/{name}';
    private const METHOD         = 'DELETE';
    private const PATH           = '/repos/{owner}/{repo}/labels/{name}';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private string $name;

    public function __construct(string $owner, string $repo, string $name)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->name  = $name;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{name}'], [$this->owner, $this->repo, $this->name], self::PATH));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
