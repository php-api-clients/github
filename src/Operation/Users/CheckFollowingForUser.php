<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Operation\Users;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
final class CheckFollowingForUser
{
    public const OPERATION_ID = 'users/check-following-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/following/{target_user}';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/following/{target_user}';
    /**The handle for the GitHub user account.**/
    private string $username;
    private string $targetUser;
    public function __construct(string $username, string $targetUser)
    {
        $this->username = $username;
        $this->targetUser = $targetUser;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{username}', '{target_user}'), array($this->username, $this->targetUser), self::PATH));
    }
    /**
     * @return \Psr\Http\Message\ResponseInterface
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Psr\Http\Message\ResponseInterface
    {
        return $response;
    }
}
