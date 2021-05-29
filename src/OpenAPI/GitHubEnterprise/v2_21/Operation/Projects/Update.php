<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Update
{
    private const OPERATION_ID = 'projects/update';
    public int $project_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($project_id)
    {
        $this->project_id = $project_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('patch', str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}?'));
    }

    function validateResponse(): void
    {
    }
}
