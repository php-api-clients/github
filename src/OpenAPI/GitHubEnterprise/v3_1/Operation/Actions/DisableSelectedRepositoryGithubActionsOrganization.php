<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_1\Operation\Actions;

final class DisableSelectedRepositoryGithubActionsOrganization
{
    private const OPERATION_ID = 'actions/disable-selected-repository-github-actions-organization';
    /****/
    public string $org;
    /****/
    public int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct($org, $repository_id)
    {
        $this->org = $org;
        $this->repository_id = $repository_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('delete', \str_replace(array('{org}', '{repository_id}'), array($this->org, $this->repository_id), '/orgs/{org}/actions/permissions/repositories/{repository_id}?'));
    }
    function validateResponse()
    {
    }
}
