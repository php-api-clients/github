<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class MoveColumn
{
    private const OPERATION_ID = 'projects/move-column';
    /**column_id parameter**/
    public int $column_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($column_id)
    {
        $this->column_id = $column_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('post', str_replace(['{column_id}'], [$this->column_id], '/projects/columns/{column_id}/moves?'));
    }

    function validateResponse(): void
    {
    }
}
