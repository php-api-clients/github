<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\3.0\Operation\Actions\ActionsPolicies;

final class GetGithubActionsPermissionsOrganization
{
    private const OPERATION_ID = 'actions/actions-policies/get-github-actions-permissions-organization';
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
