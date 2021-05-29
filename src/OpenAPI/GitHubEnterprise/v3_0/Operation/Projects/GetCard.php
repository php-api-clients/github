<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetCard
{
    private const OPERATION_ID = 'projects/get-card';
    /**card_id parameter**/
    public int $card_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($card_id)
    {
        $this->card_id = $card_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{card_id}'], [$this->card_id], '/projects/columns/cards/{card_id}?'));
    }

    function validateResponse(): void
    {
    }
}
