<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Gists;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListComments
{
    private const OPERATION_ID = 'gists/list-comments';
    /**gist_id parameter**/
    public string $gist_id;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($gist_id, int $per_page = 30, int $page = 1)
    {
        $this->gist_id  = $gist_id;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{gist_id}', '{per_page}', '{page}'], [$this->gist_id, $this->per_page, $this->page], '/gists/{gist_id}/comments?per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
