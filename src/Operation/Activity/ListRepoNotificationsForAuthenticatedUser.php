<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListRepoNotificationsForAuthenticatedUser
{
    public const OPERATION_ID    = 'activity/list-repo-notifications-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/notifications';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/notifications';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    /**Only show notifications updated before the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $before;
    /**If `true`, show notifications marked as read. **/
    private bool $all;
    /**If `true`, only shows notifications in which the user is directly participating or mentioned. **/
    private bool $participating;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $owner, string $repo, string $since, string $before, bool $all = false, bool $participating = false, int $perPage = 30, int $page = 1)
    {
        $this->owner         = $owner;
        $this->repo          = $repo;
        $this->since         = $since;
        $this->before        = $before;
        $this->all           = $all;
        $this->participating = $participating;
        $this->perPage       = $perPage;
        $this->page          = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{since}', '{before}', '{all}', '{participating}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->since, $this->before, $this->all, $this->participating, $this->perPage, $this->page], self::PATH . '?since={since}&before={before}&all={all}&participating={participating}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
