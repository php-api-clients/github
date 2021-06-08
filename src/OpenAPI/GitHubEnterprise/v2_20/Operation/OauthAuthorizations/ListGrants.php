<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_20\Operation\OauthAuthorizations;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListGrants
{
    private const OPERATION_ID = 'oauth-authorizations/list-grants';
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;
    /**The client ID of your GitHub app.**/
    public string $client_id;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct(int $per_page = 30, int $page = 1, $client_id)
    {
        $this->per_page  = $per_page;
        $this->page      = $page;
        $this->client_id = $client_id;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{per_page}', '{page}', '{client_id}'], [$this->per_page, $this->page, $this->client_id], '/applications/grants?per_page={per_page}&page={page}&client_id={client_id}'));
    }

    function validateResponse(): void
    {
    }
}
