<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\OauthAuthorizations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteGrant
{
    private const OPERATION_ID = 'oauth-authorizations/delete-grant';
    /**grant_id parameter**/
    public int $grant_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($grant_id)
    {
        $this->grant_id = $grant_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{grant_id}'], [$this->grant_id], '/applications/grants/{grant_id}?'));
    }

    function validateResponse(): void
    {
    }
}
