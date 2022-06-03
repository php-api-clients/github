<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Dependabot;

final class DeleteOrgSecret_
{
    private const OPERATION_ID = 'dependabot/delete-org-secret';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The name of the secret.**/
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
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{secret_name}'), array($this->org, $this->secret_name), '/orgs/{org}/dependabot/secrets/{secret_name}?'));
    }
    function validateResponse()
    {
    }
}
