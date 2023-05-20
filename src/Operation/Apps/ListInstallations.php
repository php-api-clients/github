<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Apps;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListInstallations
{
    public const OPERATION_ID    = 'apps/list-installations';
    public const OPERATION_MATCH = 'GET /app/installations';
    private const METHOD         = 'GET';
    private const PATH           = '/app/installations';
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    private string $outdated;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $since, string $outdated, int $perPage = 30, int $page = 1)
    {
        $this->since    = $since;
        $this->outdated = $outdated;
        $this->perPage  = $perPage;
        $this->page     = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{since}', '{outdated}', '{per_page}', '{page}'], [$this->since, $this->outdated, $this->perPage, $this->page], self::PATH . '?since={since}&outdated={outdated}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
