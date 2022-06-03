<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Actions;

final class GetGithubActionsPermissionsOrganization_
{
    private const OPERATION_ID = 'actions/get-github-actions-permissions-organization';
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
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{org}'), array($this->org), '/orgs/{org}/actions/permissions?'));
    }
    function validateResponse()
    {
    }
}
