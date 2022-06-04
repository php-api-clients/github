<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class EnableSelectedRepositoryGithubActionsOrganization_
{
    private const OPERATION_ID = 'actions/enable-selected-repository-github-actions-organization';
    /**The organization name. The name is not case sensitive.**/
    public string $org;
    /**The unique identifier of the repository.**/
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
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{repository_id}'), array($this->org, $this->repository_id), '/orgs/{org}/actions/permissions/repositories/{repository_id}'));
    }
    function validateResponse()
    {
    }
}
