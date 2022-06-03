<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Pulls;

final class ListReviewCommentsForRepo_
{
    private const OPERATION_ID = 'pulls/list-review-comments-for-repo';
    /**The account owner of the repository. The name is not case sensitive.**/
    public string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    public string $repo;
    /****/
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
    function __construct($owner, $repo, $sort, $direction, $since, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sort = $sort;
        $this->direction = $direction;
        $this->since = $since;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->sort, $this->direction, $this->since, $this->per_page, $this->page), '/repos/{owner}/{repo}/pulls/comments?sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
