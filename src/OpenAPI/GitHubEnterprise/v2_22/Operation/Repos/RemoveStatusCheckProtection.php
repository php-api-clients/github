<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveStatusCheckProtection
{
    private const OPERATION_ID = 'repos/remove-status-check-protection';
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
        return new Request('delete', str_replace(['{owner}', '{repo}', '{branch}'], [$this->owner, $this->repo, $this->branch], '/repos/{owner}/{repo}/branches/{branch}/protection/required_status_checks?'));
    }

    function validateResponse(): void
    {
    }
}
