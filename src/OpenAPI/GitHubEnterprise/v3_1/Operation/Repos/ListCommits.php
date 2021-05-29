<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListCommits
{
    private const OPERATION_ID = 'repos/list-commits';
    public string $owner;
    public string $repo;
    /**SHA or branch to start listing commits from. Default: the repository’s default branch (usually `master`).**/
    public string $sha;
    /**Only commits containing this file path will be returned.**/
    public string $path;
    /**GitHub login or email address by which to filter by commit author.**/
    public string $author;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $since;
    /**Only commits before this date will be returned. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    public string $until;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $sha, $path, $author, $since, $until, int $per_page = 30, int $page = 1)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->sha      = $sha;
        $this->path     = $path;
        $this->author   = $author;
        $this->since    = $since;
        $this->until    = $until;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{sha}', '{path}', '{author}', '{since}', '{until}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->sha, $this->path, $this->author, $this->since, $this->until, $this->per_page, $this->page], '/repos/{owner}/{repo}/commits?sha={sha}&path={path}&author={author}&since={since}&until={until}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}