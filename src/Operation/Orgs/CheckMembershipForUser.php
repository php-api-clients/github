<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Orgs;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class CheckMembershipForUser
{
    public const OPERATION_ID = 'orgs/check-membership-for-user';
    public const OPERATION_MATCH = 'GET /orgs/{org}/members/{username}';
    private const METHOD = 'GET';
    private const PATH = '/orgs/{org}/members/{username}';
    /**The organization name. The name is not case sensitive.**/
    private string $org;
    /**The handle for the GitHub user account.**/
    private string $username;
    public function __construct(string $org, string $username)
    {
        $this->org = $org;
        $this->username = $username;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{org}', '{username}'), array($this->org, $this->username), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
