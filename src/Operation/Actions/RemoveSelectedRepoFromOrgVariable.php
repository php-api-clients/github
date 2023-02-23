<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Actions;

final class RemoveSelectedRepoFromOrgVariable
{
    public const OPERATION_ID = 'actions/remove-selected-repo-from-org-variable';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/variables/{name}/repositories/{repository_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/variables/{name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the variable.**/
    private string $name;
    private int $repository_id;
    public function __construct(string $org, string $name, int $repository_id)
    {
        $this->org = $org;
        $this->name = $name;
        $this->repository_id = $repository_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{name}', '{repository_id}'), array($this->org, $this->name, $this->repository_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
