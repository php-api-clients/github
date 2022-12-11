<?php

namespace ApiClients\Client\Github\OpenAPI\GitHubAE\Operation\Apps;

final class ListInstallations_
{
    private const OPERATION_ID = 'apps/list-installations';
    /**The number of results per page (max 100).**/
    private readonly int $per_page;
    /**Page number of the results to fetch.**/
    private readonly int $page;
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private readonly string $since;
    private readonly string $outdated;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    function __construct(int $per_page = 30, int $page = 1, string $since, string $outdated)
    {
        $this->per_page = $per_page;
        $this->page = $page;
        $this->since = $since;
        $this->outdated = $outdated;
    }
    function createRequest() : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('get', \str_replace(array('{per_page}', '{page}', '{since}', '{outdated}'), array($this->per_page, $this->page, $this->since, $this->outdated), '/app/installations?per_page={per_page}&page={page}&since={since}&outdated={outdated}'));
    }
    function validateResponse()
    {
    }
}
