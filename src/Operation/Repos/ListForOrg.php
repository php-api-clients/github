<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForOrg
{
    public const OPERATION_ID    = 'repos/list-for-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/repos';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/repos';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The order to sort by. Default: `asc` when using `full_name`, otherwise `desc`. **/
    private string $direction;
    /**Specifies the types of repositories you want returned. **/
    private string $type;
    /**The property to sort the results by. **/
    private string $sort;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, string $direction, string $type = 'all', string $sort = 'created', int $perPage = 30, int $page = 1)
    {
        $this->org       = $org;
        $this->direction = $direction;
        $this->type      = $type;
        $this->sort      = $sort;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{direction}', '{type}', '{sort}', '{per_page}', '{page}'], [$this->org, $this->direction, $this->type, $this->sort, $this->perPage, $this->page], self::PATH . '?direction={direction}&type={type}&sort={sort}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
