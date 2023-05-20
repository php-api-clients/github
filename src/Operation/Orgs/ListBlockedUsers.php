<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListBlockedUsers
{
    public const OPERATION_ID    = 'orgs/list-blocked-users';
    public const OPERATION_MATCH = 'GET /orgs/{org}/blocks';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/blocks';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, int $perPage = 30, int $page = 1)
    {
        $this->org     = $org;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{per_page}', '{page}'], [$this->org, $this->perPage, $this->page], self::PATH . '?per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
