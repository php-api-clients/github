<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\OauthAuthorizations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class DeleteAuthorization
{
    private const OPERATION_ID = 'oauth-authorizations/delete-authorization';
    /**authorization_id parameter**/
    public int $authorization_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($authorization_id)
    {
        $this->authorization_id = $authorization_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{authorization_id}'], [$this->authorization_id], '/authorizations/{authorization_id}?'));
    }

    function validateResponse(): void
    {
    }
}
