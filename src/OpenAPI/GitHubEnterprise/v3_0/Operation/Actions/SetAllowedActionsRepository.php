<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetAllowedActionsRepository
{
    private const OPERATION_ID = 'actions/set-allowed-actions-repository';
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
        return new Request('put', str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], '/repos/{owner}/{repo}/actions/permissions/selected-actions?'));
    }

    function validateResponse(): void
    {
    }
}
