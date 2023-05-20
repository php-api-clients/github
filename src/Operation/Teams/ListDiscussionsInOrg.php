<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Teams;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListDiscussionsInOrg
{
    public const OPERATION_ID    = 'teams/list-discussions-in-org';
    public const OPERATION_MATCH = 'GET /orgs/{org}/teams/{team_slug}/discussions';
    private const METHOD         = 'GET';
    private const PATH           = '/orgs/{org}/teams/{team_slug}/discussions';
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The slug of the team name. **/
    private string $teamSlug;
    /**Pinned discussions only filter **/
    private string $pinned;
    /**The direction to sort the results by. **/
    private string $direction;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $org, string $teamSlug, string $pinned, string $direction = 'desc', int $perPage = 30, int $page = 1)
    {
        $this->org       = $org;
        $this->teamSlug  = $teamSlug;
        $this->pinned    = $pinned;
        $this->direction = $direction;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{org}', '{team_slug}', '{pinned}', '{direction}', '{per_page}', '{page}'], [$this->org, $this->teamSlug, $this->pinned, $this->direction, $this->perPage, $this->page], self::PATH . '?pinned={pinned}&direction={direction}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
