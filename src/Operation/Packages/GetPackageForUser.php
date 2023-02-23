<?php

declare (strict_types=1);
namespace ApiClients\Client\Github\Operation\Packages;

final class GetPackageForUser
{
    public const OPERATION_ID = 'packages/get-package-for-user';
    public const OPERATION_MATCH = 'GET /users/{username}/packages/{package_type}/{package_name}';
    private const METHOD = 'GET';
    private const PATH = '/users/{username}/packages/{package_type}/{package_name}';
    /**The type of supported package. Packages in GitHub's Gradle registry have the type `maven`. Docker images pushed to GitHub's Container registry (`ghcr.io`) have the type `container`. You can use the type `docker` to find images that were pushed to GitHub's Docker registry (`docker.pkg.github.com`), even if these have now been migrated to the Container registry.**/
    private string $package_type;
    /**The name of the package.**/
    private string $package_name;
    /**The handle for the GitHub user account.**/
    private string $username;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb $hydrator;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\Github\Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb $hydrator, string $package_type, string $package_name, string $username)
    {
        $this->package_type = $package_type;
        $this->package_name = $package_name;
        $this->username = $username;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrator = $hydrator;
    }
    function createRequest(array $data = array()) : \Psr\Http\Message\RequestInterface
    {
        return new \RingCentral\Psr7\Request(self::METHOD, \str_replace(array('{package_type}', '{package_name}', '{username}'), array($this->package_type, $this->package_name, $this->username), self::PATH));
    }
    /**
     * @return \ApiClients\Client\Github\Schema\Package
     */
    function createResponse(\Psr\Http\Message\ResponseInterface $response) : \ApiClients\Client\Github\Schema\Package
    {
        $contentType = $response->getHeaderLine('Content-Type');
        $body = json_decode($response->getBody()->getContents(), true);
        switch ($response->getStatusCode()) {
            /**Response**/
            case 200:
                switch ($contentType) {
                    case 'application/json':
                        $this->responseSchemaValidator->validate($body, \cebe\openapi\Reader::readFromJson(\ApiClients\Client\Github\Schema\Package::SCHEMA_JSON, '\\cebe\\openapi\\spec\\Schema'));
                        return $this->hydrator->hydrateObject('\\ApiClients\\Client\\Github\\Schema\\Package', $body);
                }
                break;
        }
        throw new \RuntimeException('Unable to find matching response code and content type');
    }
}
