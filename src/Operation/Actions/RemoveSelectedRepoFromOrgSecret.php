<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class RemoveSelectedRepoFromOrgSecret
{
    public const OPERATION_ID = 'actions/remove-selected-repo-from-org-secret';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/secrets/{secret_name}/repositories/{repository_id}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secretName;
    private int $repositoryId;
    public function __construct(string $org, string $secretName, int $repositoryId)
    {
        $this->org = $org;
        $this->secretName = $secretName;
        $this->repositoryId = $repositoryId;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{secret_name}', '{repository_id}'), array($this->org, $this->secretName, $this->repositoryId), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
