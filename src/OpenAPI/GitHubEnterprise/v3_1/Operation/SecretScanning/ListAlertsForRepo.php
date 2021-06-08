<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\SecretScanning;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListAlertsForRepo
{
    private const OPERATION_ID = 'secret-scanning/list-alerts-for-repo';
    public string $owner;
    public string $repo;
    /**Set to `open` or `resolved` to only list secret scanning alerts in a specific state.**/
    public string $state;
    /**Page number of the results to fetch.**/
    public int $page;
    /**Results per page (max 100).**/
    public int $per_page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $state, int $page = 1, int $per_page = 30)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->state    = $state;
        $this->page     = $page;
        $this->per_page = $per_page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{state}', '{page}', '{per_page}'], [$this->owner, $this->repo, $this->state, $this->page, $this->per_page], '/repos/{owner}/{repo}/secret-scanning/alerts?state={state}&page={page}&per_page={per_page}'));
    }

    function validateResponse(): void
    {
    }
}
