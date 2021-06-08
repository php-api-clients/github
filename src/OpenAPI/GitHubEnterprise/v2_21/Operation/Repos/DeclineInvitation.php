<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeclineInvitation
{
    private const OPERATION_ID = 'repos/decline-invitation';
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
        return new Request('delete', str_replace(['{invitation_id}'], [$this->invitation_id], '/user/repository_invitations/{invitation_id}?'));
    }

    function validateResponse(): void
    {
    }
}
