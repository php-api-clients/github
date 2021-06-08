<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetMembershipForAuthenticatedUser
{
    private const OPERATION_ID = 'orgs/get-membership-for-authenticated-user';
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
        return new Request('get', str_replace(['{org}'], [$this->org], '/user/memberships/orgs/{org}?'));
    }

    function validateResponse(): void
    {
    }
}
