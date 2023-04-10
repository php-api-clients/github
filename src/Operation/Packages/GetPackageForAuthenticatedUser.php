<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Packages;

use ApiClients\Client\Github\Error as ErrorSchemas;
use ApiClients\Client\Github\Hydrator;
use ApiClients\Client\Github\Operation;
use ApiClients\Client\Github\Schema;
use ApiClients\Client\Github\WebHook;
final class GetPackageForAuthenticatedUser
{
    public const OPERATION_ID = 'packages/get-package-for-authenticated-user';
    public const OPERATION_MATCH = 'GET /user/packages/{package_type}/{package_name}';
    private const METHOD = 'GET';
    private const PATH = '/user/packages/{package_type}/{package_name}';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    private string $packageType;
    /**The name of the package.**/
    private string $packageName;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb $hydrator, string $packageType, string $packageName)
    {
        $this->packageType = $packageType;
        $this->packageName = $packageName;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    public function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{package_type}', '{package_name}'), array($this->packageType, $this->packageName), self::PATH));
    }
    /**
     * @return Schema\Package
     */
    public function createResponse(\Psr\Http\Message\ResponseInterface $response) : Schema\Package
    {
        [$contentType] = explode(';', $response->getHeaderLine('Content-Type'));
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(Schema\Package::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject(Schema\Package::class, $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
