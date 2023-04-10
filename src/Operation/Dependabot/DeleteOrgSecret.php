<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Dependabot;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class DeleteOrgSecret
{
    public const OPERATION_ID = 'dependabot/delete-org-secret';
    public const OPERATION_MATCH = 'DELETE /orgs/{org}/dependabot/secrets/{secret_name}';
    private const METHOD = 'DELETE';
    private const PATH = '/orgs/{org}/dependabot/secrets/{secret_name}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The name of the secret.**/
    private string $secretName;
    public function __construct(string $org, string $secretName)
    {
        $this->org = $org;
        $this->secretName = $secretName;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{secret_name}'), array($this->org, $this->secretName), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
