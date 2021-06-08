<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class UpdateMembershipForAuthenticatedUser
{
    private const OPERATION_ID = 'orgs/update-membership-for-authenticated-user';
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
        return new Request('patch', str_replace(['{org}'], [$this->org], '/user/memberships/orgs/{org}?'));
    }

    function validateResponse(): void
    {
    }
}
