<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_22\Operation\Activity;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListReceivedEventsForUser
{
    private const OPERATION_ID = 'activity/list-received-events-for-user';
    public string $username;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($username, int $per_page = 30, int $page = 1)
    {
        $this->username = $username;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{username}', '{per_page}', '{page}'], [$this->username, $this->per_page, $this->page], '/users/{username}/received_events?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
