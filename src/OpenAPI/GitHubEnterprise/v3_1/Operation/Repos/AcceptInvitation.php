<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class AcceptInvitation
{
    private const OPERATION_ID = 'repos/accept-invitation';
    /**invitation_id parameter**/
    public int $invitation_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($invitation_id)
    {
        $this->invitation_id = $invitation_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{invitation_id}'], [$this->invitation_id], '/user/repository_invitations/{invitation_id}?'));
    }

    function validateResponse(): void
    {
    }
}
