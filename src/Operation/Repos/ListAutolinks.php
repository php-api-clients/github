<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListAutolinks
{
    public const OPERATION_ID    = 'repos/list-autolinks';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/autolinks';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/autolinks';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $owner, string $repo, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
        $this->page  = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{page}'], [$this->owner, $this->repo, $this->page], self::PATH . '?page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
