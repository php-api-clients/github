<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class CancelInvitation
{
    private const OPERATION_ID = 'orgs/cancel-invitation';
    public string $org;
    /**invitation_id parameter**/
    public int $invitation_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $invitation_id)
    {
        $this->org           = $org;
        $this->invitation_id = $invitation_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{invitation_id}'], [$this->org, $this->invitation_id], '/orgs/{org}/invitations/{invitation_id}?'));
    }

    function validateResponse(): void
    {
    }
}
