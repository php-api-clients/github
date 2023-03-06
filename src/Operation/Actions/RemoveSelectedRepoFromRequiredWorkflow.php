<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class RemoveSelectedRepoFromRequiredWorkflow
{
    public const OPERATION_ID = 'actions/remove-selected-repo-from-required-workflow';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/required_workflows/{required_workflow_id}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the required workflow.**/
    private int $required_workflow_id;
    /**The unique identifier of the repository.**/
    private int $repository_id;
    public function __construct(string $org, int $required_workflow_id, int $repository_id)
    {
        $this->org = $org;
        $this->required_workflow_id = $required_workflow_id;
        $this->repository_id = $repository_id;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{required_workflow_id}', '{repository_id}'), array($this->org, $this->required_workflow_id, $this->repository_id), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
