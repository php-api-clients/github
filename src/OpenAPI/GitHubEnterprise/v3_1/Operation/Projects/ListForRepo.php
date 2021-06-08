<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForRepo
{
    private const OPERATION_ID = 'projects/list-for-repo';
    public string $owner;
    public string $repo;
    /**Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, string $state = 'open', int $per_page = 30, int $page = 1)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->state    = $state;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{state}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->state, $this->per_page, $this->page], '/repos/{owner}/{repo}/projects?state={state}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
