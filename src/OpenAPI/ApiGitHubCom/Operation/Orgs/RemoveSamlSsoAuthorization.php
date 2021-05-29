<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class RemoveSamlSsoAuthorization
{
    private const OPERATION_ID = 'orgs/remove-saml-sso-authorization';
    public string $org;
    public int $credential_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $credential_id)
    {
        $this->org           = $org;
        $this->credential_id = $credential_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('delete', str_replace(['{org}', '{credential_id}'], [$this->org, $this->credential_id], '/orgs/{org}/credential-authorizations/{credential_id}?'));
    }

    function validateResponse(): void
    {
    }
}
