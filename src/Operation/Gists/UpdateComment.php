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
use function json_encode;
use function str_replace;

final class UpdateComment
{
    public const OPERATION_ID    = 'gists/update-comment';
    public const OPERATION_MATCH = 'PATCH /gists/{gist_id}/comments/{comment_id}';
    private const METHOD         = 'PATCH';
    private const PATH           = '/gists/{gist_id}/comments/{comment_id}';
    private readonly SchemaValidator $requestSchemaValidator;
    /**The unique identifier of the gist. **/
    private string $gistId;
    /**The unique identifier of the comment. **/
    private int $commentId;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\Gists\GistId\Comments\CommentId $hydrator;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrator\Operation\Gists\GistId\Comments\CommentId $hydrator, string $gistId, int $commentId)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->gistId                  = $gistId;
        $this->commentId               = $commentId;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator                = $hydrator;
    }

    public function createRequest(array $data): RequestInterface
    {
        $this->requestSchemaValidator->validate($data, Reader::readFromJson(Schema\Gists\CreateComment\Request\ApplicationJson::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

        return new Request(self::METHOD, str_replace(['{gist_id}', '{comment_id}'], [$this->gistId, $this->commentId], self::PATH), ['Content-Type' => 'application/json'], json_encode($data));
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
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\GistComment::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        return $this->hydrator->hydrateObject(Schema\GistComment::class, $body);
                    /**
                     * Resource not found
                     **/

                    case 404:
                        $this->responseSchemaValidator->validate($body, Reader::readFromJson(Schema\BasicError::SCHEMA_JSON, \cebe\openapi\spec\Schema::class));

                        throw new ErrorSchemas\BasicError(404, $this->hydrator->hydrateObject(Schema\BasicError::class, $body));
                }

                break;
        }

        throw new RuntimeException('Unable to find matching response code and content type');
    }
}
