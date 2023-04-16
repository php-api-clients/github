<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Apps;

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

final class ListInstallations
{
    public const OPERATION_ID    = 'apps/list-installations';
    public const OPERATION_MATCH = 'GET /app/installations';
    private const METHOD         = 'GET';
    private const PATH           = '/app/installations';
    /**Only show notifications updated after the given time. This is a timestamp in [ISO 8601](https://en.wikipedia.org/wiki/ISO_8601) format: `YYYY-MM-DDTHH:MM:SSZ`.**/
    private string $since;
    private string $outdated;
    /**The number of results per page (max 100).**/
    private int $perPage;
    /**Page number of the results to fetch.**/
    private int $page;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\App\Installations $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\App\Installations $hydrator, string $since, string $outdated, int $perPage = 30, int $page = 1)
    {
        $this->since                   = $since;
        $this->outdated                = $outdated;
        $this->perPage                 = $perPage;
        $this->page                    = $page;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{since}', '{outdated}', '{per_page}', '{page}'], [$this->since, $this->outdated, $this->perPage, $this->page], self::PATH . '?since={since}&outdated={outdated}&per_page={per_page}&page={page}'));
    }

    /**
     * @return Observable<Schema\Installation>
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
                     * The permissions the installation has are included under the `permissions` key.
                    **/
                    case 200:
                        foreach ($body as $bodyItem) {
                            $this->responseSchemaValidator->validate($bodyItem, Reader::readFromJson(Schema\Installation::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        }

                        return Observable::fromArray($body, new ImmediateScheduler())->map(function (array $body): Schema\Installation {
                            return $this->hydrator->hydrateObject(Schema\Installation::class, $body);
                        });
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
