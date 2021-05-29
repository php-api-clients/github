<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_21\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReposStarredByUser
{
    private const OPERATION_ID = 'activity/list-repos-starred-by-user';
    public string $username;
    /**One of `created` (when the repository was starred) or `updated` (when it was last pushed to).**/
    public string $sort;
    /**One of `asc` (ascending) or `desc` (descending).**/
    public string $direction;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($username, string $sort = 'created', string $direction = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->username  = $username;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}', '{sort}', '{direction}', '{per_page}', '{page}'], [$this->username, $this->sort, $this->direction, $this->per_page, $this->page], '/users/{username}/starred?sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
