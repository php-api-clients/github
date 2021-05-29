<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class SetPublicMembershipForAuthenticatedUser
{
    private const OPERATION_ID = 'orgs/set-public-membership-for-authenticated-user';
    public string $org;
    public string $username;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $username)
    {
        $this->org      = $org;
        $this->username = $username;
    }

    function createRequest(): RequestInterface
    {
        return new Request('put', str_replace(['{org}', '{username}'], [$this->org, $this->username], '/orgs/{org}/public_members/{username}?'));
    }

    function validateResponse(): void
    {
    }
}