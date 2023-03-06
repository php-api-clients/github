<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Actions;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class DeleteOrgSecret
{
    public const OPERATION_ID = 'actions/delete-org-secret';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/actions/secrets/{secret_name}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/actions/secrets/{secret_name}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secret_name;
    public function __construct(string $org, string $secret_name)
    {
        $this->org = $org;
        $this->secret_name = $secret_name;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{secret_name}'), array($this->org, $this->secret_name), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
