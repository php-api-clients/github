<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CheckRepoIsStarredByAuthenticatedUser
{
    private const OPERATION_ID = 'activity/check-repo-is-starred-by-authenticated-user';
    public string $owner;
    public string $repo;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo)
    {
        $this->owner = $owner;
        $this->repo  = $repo;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/user/starred/{owner}/{repo}?'));
    }

    function validateResponse(): void
    {
    }
}
