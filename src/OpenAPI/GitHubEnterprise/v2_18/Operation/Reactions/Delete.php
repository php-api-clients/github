<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Delete
{
    private const OPERATION_ID = 'reactions/delete';
    /**This API is under preview and subject to change.**/
    public string $accept;
    public int $reaction_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(string $accept = 'application/vnd.github.echo-preview+json,application/vnd.github.squirrel-girl-preview+json', $reaction_id)
    {
        $this->accept      = $accept;
        $this->reaction_id = $reaction_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{reaction_id}'], [$this->reaction_id], '/reactions/{reaction_id}?'));
    }

    function validateResponse(): void
    {
    }
}
