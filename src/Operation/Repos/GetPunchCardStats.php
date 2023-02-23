<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

final class GetPunchCardStats
{
    public const OPERATION_ID = 'repos/get-punch-card-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/punch_card';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/stats/punch_card';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\PunchCard $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\PunchCard $hydrator, string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), self::PATH));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200>
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**For example, `[2, 14, 25]` indicates that there were 25 total commits, during the 2:00pm hour on Tuesdays. All times are based on the time zone of individual commits.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200 {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Operation\\Repos\\GetCodeFrequencyStats\\Response\\Applicationjson\\H200', $body);
                        });
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
