<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ProvisionAndInviteUser
{
    private const OPERATION_ID = 'scim/provision-and-invite-user';
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
        return new Request('post', str_replace(['{org}'], [$this->org], '/scim/v2/organizations/{org}/Users?'));
    }

    function validateResponse(): void
    {
    }
}
