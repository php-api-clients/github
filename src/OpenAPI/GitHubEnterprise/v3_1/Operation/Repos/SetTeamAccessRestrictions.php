<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetTeamAccessRestrictions
{
    private const OPERATION_ID = 'repos/set-team-access-restrictions';
    public string $owner;
    public string $repo;
    /**The name of the branch.**/
    public string $branch;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $branch)
    {
        $this->owner  = $owner;
        $this->repo   = $repo;
        $this->branch = $branch;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{owner}', '{repo}', '{branch}'], [$this->owner, $this->repo, $this->branch], '/repos/{owner}/{repo}/branches/{branch}/protection/restrictions/teams?'));
    }

    function validateResponse(): void
    {
    }
}
