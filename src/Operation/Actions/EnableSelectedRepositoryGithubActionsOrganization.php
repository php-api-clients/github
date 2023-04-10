<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class EnableSelectedRepositoryGithubActionsOrganization
{
    public const OPERATION_ID = 'actions/enable-selected-repository-github-actions-organization';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/permissions/repositories/{repository_id}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/actions/permissions/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The unique identifier of the repository.**/
    private int $repositoryId;
    public function __construct(string $org, int $repositoryId)
    {
        $this->org = $org;
        $this->repositoryId = $repositoryId;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{repository_id}'), array($this->org, $this->repositoryId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
