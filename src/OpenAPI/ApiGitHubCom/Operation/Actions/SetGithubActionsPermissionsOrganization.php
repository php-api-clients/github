<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class SetGithubActionsPermissionsOrganization
{
    private const OPERATION_ID = 'actions/set-github-actions-permissions-organization';
    /****/
    public string $org;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org)
    {
        $this->org = $org;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/permissions?'));
    }
    function validateResponse()
    {
    }
}
