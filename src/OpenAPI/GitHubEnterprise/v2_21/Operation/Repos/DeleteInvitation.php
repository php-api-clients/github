<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteInvitation
{
    private const OPERATION_ID = 'repos/delete-invitation';
    public string $owner;
    public string $repo;
    /**invitation_id parameter**/
    public int $invitation_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($owner, $repo, $invitation_id)
    {
        $this->owner         = $owner;
        $this->repo          = $repo;
        $this->invitation_id = $invitation_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{owner}', '{repo}', '{invitation_id}'], [$this->owner, $this->repo, $this->invitation_id], '/repos/{owner}/{repo}/invitations/{invitation_id}?'));
    }

    function validateResponse(): void
    {
    }
}
