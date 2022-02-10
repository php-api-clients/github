<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

final class CreateOrUpdateOrgSecret
{
    private const OPERATION_ID = 'dependabot/create-or-update-org-secret';
    /****/
    public string $org;
    /**secret_name parameter**/
    public string $secret_name;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $secret_name)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{secret_name}'), array($this->org, $this->secret_name), '/orgs/{org}/dependabot/secrets/{secret_name}?'));
    }
    function validateResponse()
    {
    }
}
