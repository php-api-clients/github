<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListColumns
{
    private const OPERATION_ID = 'projects/list-columns';
    public int $project_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($project_id, int $per_page = 30, int $page = 1)
    {
        $this->project_id = $project_id;
        $this->per_page   = $per_page;
        $this->page       = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{project_id}', '{per_page}', '{page}'], [$this->project_id, $this->per_page, $this->page], '/projects/{project_id}/columns?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
