<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReposStarredByUser
{
    public const OPERATION_ID    = 'activity/list-repos-starred-by-user';
    public const OPERATION_MATCH = 'GET /users/{username}/starred';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/starred';
    /**The handle for the GitHub user account. **/
    private string $username;
    /**The property to sort the results by. `created` means when the repository was starred. `updated` means when the repository was last pushed to. **/
    private string $sort;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $username, string $sort = 'created', string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->username  = $username;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}', '{sort}', '{direction}', '{per_page}', '{page}'], [$this->username, $this->sort, $this->direction, $this->perPage, $this->page], self::PATH . '?sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
