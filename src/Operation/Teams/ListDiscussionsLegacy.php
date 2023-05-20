<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListDiscussionsLegacy
{
    public const OPERATION_ID    = 'teams/list-discussions-legacy';
    public const OPERATION_MATCH = 'GET /teams/{team_id}/discussions';
    private const METHOD         = 'GET';
    private const PATH           = '/teams/{team_id}/discussions';
    /**The unique identifier of the team. **/
    private int $teamId;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(int $teamId, string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->teamId    = $teamId;
        $this->direction = $direction;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{team_id}', '{direction}', '{per_page}', '{page}'], [$this->teamId, $this->direction, $this->perPage, $this->page], self::PATH . '?direction={direction}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
