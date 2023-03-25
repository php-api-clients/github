<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class AddSelectedRepoToOrgVariable
{
    public const OPERATION_ID = 'actions/add-selected-repo-to-org-variable';
    public const OPERATION_MATCH = 'PUT /orgs/{org}/actions/variables/{name}/repositories/{repository_id}';
    private const METHOD = 'PUT';
    private const PATH = '/orgs/{org}/actions/variables/{name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the variable.**/
    private string $name;
    private int $repositoryId;
    public function __construct(string $org, string $name, int $repositoryId)
    {
        $this->org = $org;
        $this->name = $name;
        $this->repositoryId = $repositoryId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{name}', '{repository_id}'), array($this->org, $this->name, $this->repositoryId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
