<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Repos;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForUser
{
    private const OPERATION_ID = 'repos/list-for-user';
    public string $username;
    /**Can be one of `all`, `owner`, `member`.**/
    public string $type;
    /**Can be one of `created`, `updated`, `pushed`, `full_name`.**/
    public string $sort;
    /**Can be one of `asc` or `desc`. Default: `asc` when using `full_name`, otherwise `desc`**/
    public string $direction;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($username, string $type = 'owner', string $sort = 'full_name', $direction, int $per_page = 30, int $page = 1)
    {
        $this->username  = $username;
        $this->type      = $type;
        $this->sort      = $sort;
        $this->direction = $direction;
        $this->per_page  = $per_page;
        $this->page      = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}', '{type}', '{sort}', '{direction}', '{per_page}', '{page}'], [$this->username, $this->type, $this->sort, $this->direction, $this->per_page, $this->page], '/users/{username}/repos?type={type}&sort={sort}&direction={direction}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
