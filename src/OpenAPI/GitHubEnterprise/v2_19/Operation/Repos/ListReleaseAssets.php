<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReleaseAssets
{
    private const OPERATION_ID = 'repos/list-release-assets';
    public string $owner;
    public string $repo;
    /**release_id parameter**/
    public int $release_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $release_id, int $per_page = 30, int $page = 1)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->release_id = $release_id;
        $this->per_page   = $per_page;
        $this->page       = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}', '{release_id}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->release_id, $this->per_page, $this->page], '/repos/{owner}/{repo}/releases/{release_id}/assets?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
