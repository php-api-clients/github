<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListSelfHostedRunnersForRepo
{
    private const OPERATION_ID = 'actions/list-self-hosted-runners-for-repo';
    public string $owner;
    public string $repo;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, int $per_page = 30, int $page = 1)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->per_page, $this->page], '/repos/{owner}/{repo}/actions/runners?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
