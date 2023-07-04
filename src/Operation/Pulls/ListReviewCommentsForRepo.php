<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Pulls;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReviewCommentsForRepo
{
    public const OPERATION_ID    = 'pulls/list-review-comments-for-repo';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/pulls/comments';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/pulls/comments';
    /**The account owner of the repository. The name is not case sensitive. **/
    private string $owner;
    /**The name of the repository without the `.git` extension. The name is not case sensitive. **/
    private string $repo;
    /**The direction to sort results. Ignored without `sort` parameter. **/
    private string $direction;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`. **/
    private string $since;
    /**The number of results per page (max 100). **/
    private int $perPage;
    /**Page number of the results to fetch. **/
    private int $page;

    public function __construct(string $owner, string $repo, private string $sort, string $direction, string $since, int $perPage = 30, int $page = 1)
    {
        $this->owner     = $owner;
        $this->repo      = $repo;
        $this->direction = $direction;
        $this->since     = $since;
        $this->perPage   = $perPage;
        $this->page      = $page;
    }

    public function createRequest(): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}', '{sort}', '{direction}', '{since}', '{per_page}', '{page}'], [$this->owner, $this->repo, $this->sort, $this->direction, $this->since, $this->perPage, $this->page], self::PATH . '?sort={sort}&direction={direction}&since={since}&per_page={per_page}&page={page}'));
    }

    public function createResponse(ResponseInterface $response): ResponseInterface
    {
        return $response;
    }
}
