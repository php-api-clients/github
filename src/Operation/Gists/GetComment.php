<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Operation\Gists;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
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

final class GetComment
{
    public const OPERATION_ID    = 'gists/get-comment';
    public const OPERATION_MATCH = 'GET /gists/{gist_id}/comments/{comment_id}';
    private const METHOD         = 'GET';
    private const PATH           = '/gists/{gist_id}/comments/{comment_id}';
    /**The unique identifier of the gist.**/
    private string $gistId;
    /**The unique identifier of the comment.**/
    private int $commentId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb $hydrator;

    public function __construct(SchemaValidator $responseSchemaValidator, Hydrator\Operation\Gists\CbGistIdRcb\Comments\CbCommentIdRcb $hydrator, string $gistId, int $commentId)
    {
        $this->gistId                  = $gistId;
        $this->commentId               = $commentId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data = []): RequestInterface
    {
        return new Request(self::METHOD, str_replace(['{gist_id}', '{comment_id}'], [$this->gistId, $this->commentId], self::PATH));
    }

    public function createResponse(ResponseInterface $response): Schema\GistComment
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GistComment::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        return $this->hydrator->hydrateObject(Schema\GistComment::class, $body);
                    /**
                     * Resource not found
                    **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                    /**
                     * Forbidden Gist
                    **/

                    case 403:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\Operation\Gists\Get\Response\Applicationjson\H403::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));

                        throw new ErrorSchemas\Operation\Gists\Get\Response\Applicationjson\H403(403, $this->hydrator->hydrateObject(Schema\Operation\Gists\Get\Response\Applicationjson\H403::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
