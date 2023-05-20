<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Orgs;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListOutsideCollaborators
{
    public const OPERATION_ID    = 'orgs/list-outside-collaborators';
    public const OPERATION_MATCH = 'GET /orgs/{org}/outside_collaborators';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/outside_collaborators';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Filter the list of outside collaborators. `2fa_disabled` means that only outside collaborators without [two-factor authentication](https://github.com/blog/1614-two-factor-authentication) enabled will be returned. **/
    private string $filter;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, string $filter = 'all', int $perPage = 30, int $page = 1)
    {
        $this->org     = $org;
        $this->filter  = $filter;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{filter}', '{per_page}', '{page}'], [$this->org, $this->filter, $this->perPage, $this->page], self::PATH . '?filter={filter}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
