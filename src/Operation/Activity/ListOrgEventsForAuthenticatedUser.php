<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListOrgEventsForAuthenticatedUser
{
    public const OPERATION_ID    = 'activity/list-org-events-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /users/{username}/events/orgs/{org}';
    private const METHOD         = 'GET';
    private const PATH           = '/users/{username}/events/orgs/{org}';
    /**The handle for the GitHub user account. **/
    private string $username;
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $username, string $org, int $perPage = 30, int $page = 1)
    {
        $this->username = $username;
        $this->org      = $org;
        $this->perPage  = $perPage;
        $this->page     = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{username}', '{org}', '{per_page}', '{page}'], [$this->username, $this->org, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
