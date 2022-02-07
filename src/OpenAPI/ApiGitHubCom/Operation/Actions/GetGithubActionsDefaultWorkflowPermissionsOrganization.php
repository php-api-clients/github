<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class GetGithubActionsDefaultWorkflowPermissionsOrganization
{
    private const OPERATION_ID = 'actions/get-github-actions-default-workflow-permissions-organization';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/permissions/workflow?'));
    }
    function validateResponse()
    {
    }
}
