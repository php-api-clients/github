<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListBranches
{
    private const OPERATION_ID = 'repos/list-branches';
    public string $owner;
    public string $repo;
    /**Setting to `true` returns only protected branches. When set to `false`, only unprotected branches are returned. Omitting this parameter returns all branches.**/
    public bool $protected;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $protected, int $per_page = 30, int $page = 1)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->protected = $protected;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{protected}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->protected, $this->per_page, $this->page], '/repos/{owner}/{repo}/branches?protected={protected}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
