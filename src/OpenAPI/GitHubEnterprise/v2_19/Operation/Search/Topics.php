<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v2_19\Operation\Search;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Topics
{
    private const OPERATION_ID = 'search/topics';
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/enterprise-server@2.19/rest/reference/search#constructing-a-search-query).**/
    public string $q;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($q)
    {
        $this->q = $q;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{q}'], [$this->q], '/search/topics?q={q}'));
    }

    function validateResponse(): void
    {
    }
}
