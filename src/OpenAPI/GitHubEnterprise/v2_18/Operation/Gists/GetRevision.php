<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Gists;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class GetRevision
{
    private const OPERATION_ID = 'gists/get-revision';
    /**gist_id parameter**/
    public string $gist_id;
    public string $sha;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($gist_id, $sha)
    {
        $this->gist_id = $gist_id;
        $this->sha     = $sha;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{gist_id}', '{sha}'], [$this->gist_id, $this->sha], '/gists/{gist_id}/{sha}?'));
    }

    function validateResponse(): void
    {
    }
}
