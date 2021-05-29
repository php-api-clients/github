<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\GitHubEnterprise\v3_0\Operation\Search;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class Code
{
    private const OPERATION_ID = 'search/code';
    /**The query contains one or more search keywords and qualifiers. Qualifiers allow you to limit your search to specific areas of GitHub. The REST API supports the same qualifiers as GitHub.com. To learn more about the format of the query, see [Constructing a search query](https://docs.github.com/enterprise-server@3.0/rest/reference/search#constructing-a-search-query). See "[Searching code](https://help.github.com/articles/searching-code/)" for a detailed list of qualifiers.**/
    public string $q;
    /**Sorts the results of your query. Can only be `indexed`, which indicates how recently a file has been indexed by the GitHub Enterprise Server search infrastructure. Default: [best match](https://docs.github.com/enterprise-server@3.0/rest/reference/search#ranking-search-results)**/
    public string $sort;
    /**Determines whether the first search result returned is the highest number of matches (`desc`) or lowest number of matches (`asc`). This parameter is ignored unless you provide `sort`.**/
    public string $order;
    /**Results per page (max 100).**/
    public int $per_page;
    /**Page number of the results to fetch.**/
    public int $page;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($q, $sort, string $order = 'desc', int $per_page = 30, int $page = 1)
    {
        $this->q        = $q;
        $this->sort     = $sort;
        $this->order    = $order;
        $this->per_page = $per_page;
        $this->page     = $page;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{q}', '{sort}', '{order}', '{per_page}', '{page}'], [$this->q, $this->sort, $this->order, $this->per_page, $this->page], '/search/code?q={q}&sort={sort}&order={order}&per_page={per_page}&page={page}'));
    }

    function validateResponse(): void
    {
    }
}
