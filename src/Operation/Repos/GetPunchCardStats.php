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

final class GetPunchCardStats
{
    public const OPERATION_ID    = 'repos/get-punch-card-stats';
    public const OPERATION_MATCH = 'GET /repos/{owner}/{repo}/stats/punch_card';
    private const METHOD         = 'GET';
    private const PATH           = '/repos/{owner}/{repo}/stats/punch_card';
    /**The account owner of the repository. The name is not case sensitive.**/
    private string $owner;
    /**The name of the repository. The name is not case sensitive.**/
    private string $repo;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\PunchCard $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Stats\PunchCard $hydrator, string $owner, string $repo)
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
     * @return Observable<Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200>
     */
    public function createResponse(ResponseInterface $response): Observable
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * For example, `[2, 14, 25]` indicates that there were 25 total commits, during the 2:00pm hour on Tuesdays. All times are based on the time zone of individual commits.
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200 {
                            return $this->hydrator->hydrateObject(Schema\Operation\Repos\GetCodeFrequencyStats\Response\Applicationjson\H200::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
