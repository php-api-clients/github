<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Git;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListMatchingRefs
{
    private const OPERATION_ID = 'git/list-matching-refs';
    public string $owner;
    public string $repo;
    /**ref parameter**/
    public string $ref;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $ref, int $per_page = 30, int $page = 1)
    {
        $this->owner    = $owner;
        $this->repo     = $repo;
        $this->ref      = $ref;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{ref}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->ref, $this->per_page, $this->page], '/repos/{owner}/{repo}/git/matching-refs/{ref}?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
