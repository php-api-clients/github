<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class EnableSelectedRepositoryGithubActionsOrganization
{
    private const OPERATION_ID = 'actions/enable-selected-repository-github-actions-organization';
    public string $org;
    public int $repository_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $repository_id)
    {
        $this->org           = $org;
        $this->repository_id = $repository_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{org}', '{repository_id}'], [$this->org, $this->repository_id], '/orgs/{org}/actions/permissions/repositories/{repository_id}?'));
    }

    function validateResponse(): void
    {
    }
}
