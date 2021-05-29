<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_18\Operation\Projects;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListForUser
{
    private const OPERATION_ID = 'projects/list-for-user';
    public string $username;
    /**Indicates the state of the projects to return. Can be either `open`, `closed`, or `all`.**/
    public string $state;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($username, string $state = 'open', int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->state    = $state;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}', '{state}', '{per_page}', '{page}'], [$this->username, $this->state, $this->per_page, $this->page], '/users/{username}/projects?state={state}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
