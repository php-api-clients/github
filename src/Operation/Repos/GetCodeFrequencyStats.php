<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Repos;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;
use Rx\Observable;
use Rx\Scheduler\ImmediateScheduler;

use function explode;
use function json_decode;
use function str_replace;

final class GetCodeFrequencyStats
{
    public const OPERATION_ID    = 'repos/get-code-frequency-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/code_frequency';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/stats/code_frequency';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\CodeFrequency $hydrator, string $owner, string $repo)
    {
        $this->owner                   = $owner;
        $this->repo                    = $repo;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{owner}', '{repo}'], [$this->owner, $this->repo], self::PATH));
    }

    /**
     * @return Observable<Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200>|Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202
     */
    public function createResponse(ResponseInterface $response): Observable|Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Returns a weekly aggregate of the number of additions and deletions pushed to a repository.
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200 {
                            return $this->hydrator->hydrateObject(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200::class, $body);
                        });
                    /**
                     * Accepted
                    **/

                    case 202:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H202::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
