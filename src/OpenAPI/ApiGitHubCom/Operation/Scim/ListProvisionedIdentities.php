<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Scim;

use Psr\Http\Message\RequestInterface;
use RingCentral\Psr7\Request;

use function str_replace;

final class ListProvisionedIdentities
{
    private const OPERATION_ID = 'scim/list-provisioned-identities';
    public string $org;
    /**Used for pagination: the index of the first result to return.**/
    public int $startIndex;
    /**Used for pagination: the number of results to return.**/
    public int $count;
    /**Filters results using the equals query parameter operator (`eq`). You can filter results that are equal to `id`, `userName`, `emails`, and `external_id`. For example, to search for an identity with the `userName` Octocat, you would use this query:

    `?filter=userName%20eq%20\"Octocat\"`.

    To filter results for the identity with the email `octocat@github.com`, you would use this query:

    `?filter=emails%20eq%20\"octocat@github.com\"`.**/
    public string $filter;

    public function operationId(): string
    {
        return self::OPERATION_ID;
    }

    function __construct($org, $startIndex, $count, $filter)
    {
        $this->org        = $org;
        $this->startIndex = $startIndex;
        $this->count      = $count;
        $this->filter     = $filter;
    }

    function createRequest(): RequestInterface
    {
        return new Request('get', str_replace(['{org}', '{startIndex}', '{count}', '{filter}'], [$this->org, $this->startIndex, $this->count, $this->filter], '/scim/v2/organizations/{org}/Users?startIndex={startIndex}&count={count}&filter={filter}'));
    }

    function validateResponse(): void
    {
    }
}
