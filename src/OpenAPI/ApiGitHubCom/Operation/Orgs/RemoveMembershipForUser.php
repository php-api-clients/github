<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveMembershipForUser
{
    private const OPERATION_ID = 'orgs/remove-membership-for-user';
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
        return new Request('delete', str_replace(['{org}', '{username}'], [$this->org, $this->username], '/orgs/{org}/memberships/{username}?'));
    }

    function validateResponse(): void
    {
    }
}
