<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Gists;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Delete
{
    private const OPERATION_ID = 'gists/delete';
    /**gist_id parameter**/
    public string $gist_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($gist_id)
    {
        $this->gist_id = $gist_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{gist_id}'], [$this->gist_id], '/gists/{gist_id}?'));
    }

    function validateResponse(): void
    {
    }
}
