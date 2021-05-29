<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveOutsideCollaborator
{
    private const OPERATION_ID = 'orgs/remove-outside-collaborator';
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
        return new Request('delete', str_replace(['{org}', '{username}'], [$this->org, $this->username], '/orgs/{org}/outside_collaborators/{username}?'));
    }

    function validateResponse(): void
    {
    }
}
