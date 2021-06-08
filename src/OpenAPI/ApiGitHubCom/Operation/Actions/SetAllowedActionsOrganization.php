<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetAllowedActionsOrganization
{
    private const OPERATION_ID = 'actions/set-allowed-actions-organization';
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
        return new Request('put', str_replace(['{org}'], [$this->org], '/orgs/{org}/actions/permissions/selected-actions?'));
    }

    function validateResponse(): void
    {
    }
}
