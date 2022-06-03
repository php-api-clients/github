<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Pulls;

final class ListReviewComments_
{
    private const OPERATION_ID = 'pulls/list-review-comments';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /**The number that identifies the pull request.**/
    public int $pull_number;
    /**The property to sort the results by. `created` means when the repository was starred. `updated` means when the repository was last pushed to.**/
    public string $sort;
    /**Can be either `asc` or `desc`. Ignored without `sort` parameter.**/
    public string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**The number of results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($owner, $repo, $pull_number, string $sort = 'created', $direction, $since, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->pull_number = $pull_number;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->since = $since;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{pull_number}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->pull_number, $this->sort, $this->direction, $this->since, $this->per_page, $this->page), '/repos/{owner}/{repo}/pulls/{pull_number}/comments?sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
