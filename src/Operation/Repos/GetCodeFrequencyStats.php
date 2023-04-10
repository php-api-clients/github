<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Repos;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetCodeFrequencyStats
{
    public const OPERATION_ID = 'repos/get-code-frequency-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/code_frequency';
    private const METHOD = 'GET';
    private const PATH = '/repos/{owner}/{repo}/stats/code_frequency';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency $hydrator, string $owner, string $repo)
    {
        $this->owner = $owner;
        $this->repo = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{owner}', '{repo}'), array($this->owner, $this->repo), self::PATH));
    }
    /**
     * @return \Rx\Observable<Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200>|Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : \Rx\Observable|Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Returns a weekly aggregate of the number of additions and deletions pushed to a repository.**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, \cebe\openapi\Reader::readFromJson(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }
                        return \Rx\Observable::fromArray($body, new \Rx\Scheduler\ImmediateScheduler())->map(function (array $body) : Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200 {
                            return $this->hydrator->hydrateObject(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200::class, $body);
                        });
                }
                break;
            /**Accepted**/
            case 202:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
