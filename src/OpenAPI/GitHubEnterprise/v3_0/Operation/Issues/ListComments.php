<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListComments
{
    private const OPERATION_ID = 'issues/list-comments';
    public string $owner;
    public string $repo;
    /**issue_number parameter**/
    public int $issue_number;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $issue_number, $since, int $per_page = 30, int $page = 1)
    {
        $this->owner        = $owner;
        $this->repo         = $repo;
        $this->issue_number = $issue_number;
        $this->since        = $since;
        $this->per_page     = $per_page;
        $this->page         = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{issue_number}', '{since}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->issue_number, $this->since, $this->per_page, $this->page], '/repos/{owner}/{repo}/issues/{issue_number}/comments?since={since}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
