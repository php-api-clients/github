<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Operation\Orgs;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use cebe\openapi\Reader;
use League\OpenAPIValidation\Schema\SchemaValidator;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use RingCentral\Psr7\Request;
use RuntimeException;

use function explode;
use function json_decode;
use function str_replace;

final class ListAttestations
{
    public const OPERATION_ID    = 'orgs/list-attestations';
    public const OPERATION_MATCH = 'GET /orgs/{org}/attestations/{subject_digest}';
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results before this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $before;
    /**A cursor, as given in the [Link header](https://docs.github.com/rest/guides/using-pagination-in-the-rest-api#using-link-headers). If specified, the query only searches for results after this cursor. For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private string $after;
    /**The organization name. The name is not case sensitive. **/
    private string $org;
    /**The parameter should be set to the attestation's subject's SHA256 digest, in the form `sha256:HEX_DIGEST`. **/
    private string $subjectDigest;
    /**The number of results per page (max 100). For more information, see "[Using pagination in the REST API](https://docs.github.com/rest/using-the-rest-api/using-pagination-in-the-rest-api)." **/
    private int $perPage;

    public function __construct(private readonly SchemaValidator $responseSchemaValidator, private readonly Internal\Hydrator\Operation\Orgs\Org\Attestations\SubjectDigest $hydrator, string $before, string $after, string $org, string $subjectDigest, int $perPage = 30)
    {
        $this->before        = $before;
        $this->after         = $after;
        $this->org           = $org;
        $this->subjectDigest = $subjectDigest;
        $this->perPage       = $perPage;
    }

    public function createRequest(): RequestInterface
    {
        return new Request('GET', str_replace(['{before}', '{after}', '{org}', '{subject_digest}', '{per_page}'], [$this->before, $this->after, $this->org, $this->subjectDigest, $this->perPage], '/orgs/{org}/attestations/{subject_digest}' . '?before={before}&after={after}&per_page={per_page}'));
    }

    public function createResponse(ResponseInterface $response): Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok
    {
        $code          = $response->getStatusCode();
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        switch ($contentType) {
            case 'application/json':
                $body = json_decode($response->getBody()->getContents(), true);
                switch ($code) {
                    /**
                     * Response
                     **/
                    case 200:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\Operations\Orgs\ListAttestations\Response\ApplicationJson\Ok::class, $body);
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
