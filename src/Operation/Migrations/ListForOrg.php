<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Migrations;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForOrg
{
    public const OPERATION_ID    = 'migrations/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/migrations';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/migrations';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**Exclude attributes from the API response to improve performance **/
    private array $exclude;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, array $exclude, int $perPage = 30, int $page = 1)
    {
        $this->org     = $org;
        $this->exclude = $exclude;
        $this->perPage = $perPage;
        $this->page    = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{exclude}', '{per_page}', '{page}'], [$this->org, $this->exclude, $this->perPage, $this->page], self::PATH . '?exclude={exclude}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
