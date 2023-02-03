<?php

namespace ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Operation\Repos;

final class GetCodeFrequencyStats
{
    private const OPERATION_ID = 'repos/get-code-frequency-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/code_frequency';
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator;
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    public function operationId() : string
    {
        return self::OPERATION_ID;
    }
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Hydrator $hydrator, string $owner, string $repo)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
        $this->owner = $owner;
        $this->repo = $repo;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request('GET', \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), '/repos/{owner}/{repo}/stats/code_frequency'));
    }
    /**
     * @return \Rx\Observable<\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeFrequencyStats\Response\Application\Json\H200>|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeFrequencyStats\Response\Application\Json\H202|int
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeFrequencyStats\Response\Application\Json\H202|int
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Returns a weekly aggregate of the number of additions and deletions pushed to a repository.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeFrequencyStats\Response\Application\Json\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : \ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeFrequencyStats\Response\Application\Json\H200 {
                            return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\GetCodeFrequencyStats\\Response\\Application\\Json\\H200', $body);
                        });
                }
                break;
            /**Accepted**/
            case 202:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\OpenAPI\ApiGitHubCom\Schema\Operation\GetCodeFrequencyStats\Response\Application\Json\H202::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\OpenAPI\\ApiGitHubCom\\Schema\\Operation\\GetCodeFrequencyStats\\Response\\Application\\Json\\H202', $body);
                }
                break;
            /**A header with no content is returned.**/
            case 204:
                return 204;
                break;
        }
        throw new \RuntimeException('Unable to find matching reponse code and content type');
    }
}
