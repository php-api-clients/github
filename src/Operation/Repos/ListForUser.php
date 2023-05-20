<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForUser
{
    public const OPERATION_ID    = 'repos/list-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/repos';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/repos';
    /**The handle for the GitHub user account. **/
    private string $username;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`. **/
    private string $direction;
    /**Limit results to repositories of the specified type. **/
    private string $type;
    /**The property to sort the results by. **/
    private string $sort;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $username, string $direction, string $type = 'owner', string $sort = 'full_name', int $perPage = 30, int $page = 1)
    {
        $this->username  = $username;
        $this->direction = $direction;
        $this->type      = $type;
        $this->sort      = $sort;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}', '{direction}', '{type}', '{sort}', '{per_page}', '{page}'], [$this->username, $this->direction, $this->type, $this->sort, $this->perPage, $this->page], self::PATH . '?direction={direction}&type={type}&sort={sort}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
