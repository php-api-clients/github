<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetSelectedRepositoriesEnabledGithubActionsOrganization
{
    private const OPERATION_ID = 'actions/set-selected-repositories-enabled-github-actions-organization';
    public string $org;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org)
    {
        $this->org = $org;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{org}'], [$this->org], '/orgs/{org}/actions/permissions/repositories?'));
    }

    function validateResponse(): void
    {
    }
}
