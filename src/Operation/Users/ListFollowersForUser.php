<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Users;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListFollowersForUser
{
    public const OPERATION_ID    = 'users/list-followers-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/followers';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/followers';
    /**The handle for the GitHub user account. **/
    private string $username;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $username, int $perPage = 30, int $page = 1)
    {
        $this->username = $username;
        $this->perPage  = $perPage;
        $this->page     = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}', '{per_page}', '{page}'], [$this->username, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
