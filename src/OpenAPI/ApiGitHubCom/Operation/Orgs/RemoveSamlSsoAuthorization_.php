<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Orgs;

final class RemoveSamlSsoAuthorization_
{
    private const OPERATION_ID = 'orgs/remove-saml-sso-authorization';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /****/
    public int $credential_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $credential_id)
    {
        $this->org = $org;
        $this->credential_id = $credential_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{credential_id}'), array($this->org, $this->credential_id), '/orgs/{org}/credential-authorizations/{credential_id}'));
    }
    function validateResponse()
    {
    }
}
