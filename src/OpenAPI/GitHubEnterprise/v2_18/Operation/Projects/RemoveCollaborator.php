<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveCollaborator
{
    private const OPERATION_ID = 'projects/remove-collaborator';
    public int $project_id;
    public string $username;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($project_id, $username)
    {
        $this->project_id = $project_id;
        $this->username   = $username;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{project_id}', '{username}'], [$this->project_id, $this->username], '/projects/{project_id}/collaborators/{username}?'));
    }

    function validateResponse(): void
    {
    }
}
