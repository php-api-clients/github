<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Issues;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListCommentsForRepo
{
    private const OPERATION_ID = 'issues/list-comments-for-repo';
    public string $owner;
    public string $repo;
    /**One of `created` (when the repository was starred) or `updated` (when it was last pushed to).**/
    public string $sort;
    /**Either `asc` or `desc`. Ignored without the `sort` parameter.**/
    public string $direction;
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

    function __construct($owner, $repo, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->since     = $since;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->sort, $this->direction, $this->since, $this->per_page, $this->page], '/repos/{owner}/{repo}/issues/comments?sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
