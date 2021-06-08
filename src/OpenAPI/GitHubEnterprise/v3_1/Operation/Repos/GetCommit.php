<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetCommit
{
    private const OPERATION_ID = 'repos/get-commit';
    public string $owner;
    public string $repo;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100).**/
    public int $per_page;
    /**ref parameter**/
    public string $ref;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, int $page = 1, int $per_page = 30, $ref)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->page     = $page;
        $this->per_page = $per_page;
        $this->ref      = $ref;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{page}', '{per_page}', '{ref}'], [$this->owner, $this->repo, $this->page, $this->per_page, $this->ref], '/repos/{owner}/{repo}/commits/{ref}?page={page}&per_page={per_page}'));
    }

    function validateResponse(): void
    {
    }
}
