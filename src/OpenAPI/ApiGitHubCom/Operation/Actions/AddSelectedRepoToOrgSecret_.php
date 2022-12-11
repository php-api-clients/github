<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Actions;

final class AddSelectedRepoToOrgSecret_
{
    private const OPERATION_ID = 'actions/add-selected-repo-to-org-secret';
    /**The organization name. The name is not case sensitive.**/
    private readonly string $org;
    /**The name of the secret.**/
    private readonly string $secret_name;
    private readonly int $repository_id;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(string $org, string $secret_name, int $repository_id)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
        $this->repository_id = $repository_id;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('put', \str_replace(array('{org}', '{secret_name}', '{repository_id}'), array($this->org, $this->secret_name, $this->repository_id), '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}'));
    }
    function validateResponse()
    {
    }
}
