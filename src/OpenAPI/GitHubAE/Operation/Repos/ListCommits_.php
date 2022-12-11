<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

final class ListCommits_
{
    private const OPERATION_ID = 'repos/list-commits';
    /**The account owner of the repository. The name is not case sensitive.**/
    private readonly string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private readonly string $repo;
    /**SHA or branch to start listing commits from. Default: the repository’s default branch (usually `master`).**/
    private readonly string $sha;
    /**Only commits containing this file path will be returned.**/
    private readonly string $path;
    /**GitHub login or email address by which to filter by commit author.**/
    private readonly string $author;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private readonly string $since;
    /**Only commits before this date will be returned. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private readonly string $until;
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $owner, string $repo, string $sha, string $path, string $author, string $since, string $until, int $per_page = 30, int $page = 1)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->sha = $sha;
        $this->path = $path;
        $this->author = $author;
        $this->since = $since;
        $this->until = $until;
        $this->per_page = $per_page;
        $this->page = $page;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{owner}', '{repo}', '{sha}', '{path}', '{author}', '{since}', '{until}', '{per_page}', '{page}'), array($this->owner, $this->repo, $this->sha, $this->path, $this->author, $this->since, $this->until, $this->per_page, $this->page), '/repos/{owner}/{repo}/commits?sha={sha}&path={path}&author={author}&since={since}&until={until}&per_page={per_page}&page={page}'));
    }
    function validateResponse()
    {
    }
}
