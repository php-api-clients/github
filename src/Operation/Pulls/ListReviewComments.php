<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Pulls;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReviewComments
{
    public const OPERATION_ID    = 'pulls/list-review-comments';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/{pull_number}/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/{pull_number}/comments';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository. The name is not case sensitive. **/
    private string $repo;
    /**The number that identifies the pull request. **/
    private int $pullNumber;
    /**The direction to sort results. Ignored without `sort` parameter. **/
    private string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    /**The property to sort the results by. **/
    private string $sort;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $owner, string $repo, int $pullNumber, string $direction, string $since, string $sort = 'created', int $perPage = 30, int $page = 1)
    {
        $this->owner      = $owner;
        $this->repo       = $repo;
        $this->pullNumber = $pullNumber;
        $this->direction  = $direction;
        $this->since      = $since;
        $this->sort       = $sort;
        $this->perPage    = $perPage;
        $this->page       = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{pull_number}', '{direction}', '{since}', '{sort}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->pullNumber, $this->direction, $this->since, $this->sort, $this->perPage, $this->page], self::PATH . '?direction={direction}&since={since}&sort={sort}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
