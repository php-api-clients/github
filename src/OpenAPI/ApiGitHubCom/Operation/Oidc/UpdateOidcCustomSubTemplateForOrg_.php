<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Oidc;

final class UpdateOidcCustomSubTemplateForOrg_
{
    private const OPERATION_ID = 'oidc/update-oidc-custom-sub-template-for-org';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org)
    {
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/oidc/customization/sub'));
    }
    function validateResponse()
    {
    }
}
