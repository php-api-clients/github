<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Reactions;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteLegacy
{
    private const OPERATION_ID = 'reactions/delete-legacy';
    public int $reaction_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($reaction_id)
    {
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
