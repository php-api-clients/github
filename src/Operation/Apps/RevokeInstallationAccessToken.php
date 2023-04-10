<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Apps;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class RevokeInstallationAccessToken
{
    public const OPERATION_ID = 'apps/revoke-installation-access-token';
    public const OPERATION_MATCH = 'DELETE /installation/token';
    private const METHOD = 'DELETE';
    private const PATH = '/installation/token';
    public function __construct()
    {
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array(), array(), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
