<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Get;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Packages
{
    /**
     * @var array<class-string, \EventSauce\ObjectHydrator\ObjectMapper>
     */
    private array $hydrator = array();
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator;
    private readonly \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator;
    private readonly \ApiClients\Client\GitHub\Hydrators $hydrators;
    private readonly \React\Http\Browser $browser;
    private readonly \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication;
    public function __construct(\League\OpenAPIValidation\Schema\SchemaValidator $requestSchemaValidator, \League\OpenAPIValidation\Schema\SchemaValidator $responseSchemaValidator, \ApiClients\Client\GitHub\Hydrators $hydrators, \React\Http\Browser $browser, \ApiClients\Contracts\HTTP\Headers\AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators = $hydrators;
        $this->browser = $browser;
        $this->authentication = $authentication;
    }
    public function listPackagesForOrganization(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('visibility', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: visibility');
        }
        $arguments['visibility'] = $params['visibility'];
        unset($params['visibility']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Packages::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages();
        }
        $operation = new Operation\Packages\ListPackagesForOrganization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages::class], $arguments['package_type'], $arguments['org'], $arguments['visibility'], $arguments['page'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listDockerMigrationConflictingPackagesForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (\array_key_exists(Hydrator\Operation\User\Docker\Conflicts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Docker\Conflicts::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Docker🌀Conflicts();
        }
        $operation = new Operation\Packages\ListDockerMigrationConflictingPackagesForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Docker\Conflicts::class]);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listPackagesForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('visibility', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: visibility');
        }
        $arguments['visibility'] = $params['visibility'];
        unset($params['visibility']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Packages::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Packages();
        }
        $operation = new Operation\Packages\ListPackagesForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages::class], $arguments['package_type'], $arguments['visibility'], $arguments['username'], $arguments['page'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listDockerMigrationConflictingPackagesForOrganization(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Docker\Conflicts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Docker\Conflicts::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Docker🌀Conflicts();
        }
        $operation = new Operation\Packages\ListDockerMigrationConflictingPackagesForOrganization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Docker\Conflicts::class], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getPackageForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (\array_key_exists(Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb();
        }
        $operation = new Operation\Packages\GetPackageForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb::class], $arguments['package_type'], $arguments['package_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Package {
            return $operation->createResponse($response);
        });
    }
    public function listDockerMigrationConflictingPackagesForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Docker\Conflicts::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Docker\Conflicts::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Docker🌀Conflicts();
        }
        $operation = new Operation\Packages\ListDockerMigrationConflictingPackagesForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Docker\Conflicts::class], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function listPackagesForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('visibility', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: visibility');
        }
        $arguments['visibility'] = $params['visibility'];
        unset($params['visibility']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (\array_key_exists(Hydrator\Operation\User\Packages::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Packages::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages();
        }
        $operation = new Operation\Packages\ListPackagesForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages::class], $arguments['package_type'], $arguments['visibility'], $arguments['page'], $arguments['per_page']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getPackageForOrganization(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb();
        }
        $operation = new Operation\Packages\GetPackageForOrganization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['org']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Package {
            return $operation->createResponse($response);
        });
    }
    public function getAllPackageVersionsForPackageOwnedByAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (\array_key_exists(Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions();
        }
        $operation = new Operation\Packages\GetAllPackageVersionsForPackageOwnedByAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class], $arguments['package_type'], $arguments['package_name'], $arguments['page'], $arguments['per_page'], $arguments['state']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getPackageForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb();
        }
        $operation = new Operation\Packages\GetPackageForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\Package {
            return $operation->createResponse($response);
        });
    }
    public function getAllPackageVersionsForPackageOwnedByOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: page');
        }
        $arguments['page'] = $params['page'];
        unset($params['page']);
        if (array_key_exists('per_page', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: per_page');
        }
        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('state', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: state');
        }
        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions();
        }
        $operation = new Operation\Packages\GetAllPackageVersionsForPackageOwnedByOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class], $arguments['package_type'], $arguments['package_name'], $arguments['org'], $arguments['page'], $arguments['per_page'], $arguments['state']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getPackageVersionForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_version_id');
        }
        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (\array_key_exists(Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions🌀CbPackageVersionIdRcb();
        }
        $operation = new Operation\Packages\GetPackageVersionForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['package_version_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\PackageVersion {
            return $operation->createResponse($response);
        });
    }
    public function getAllPackageVersionsForPackageOwnedByUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions();
        }
        $operation = new Operation\Packages\GetAllPackageVersionsForPackageOwnedByUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions::class], $arguments['package_type'], $arguments['package_name'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Rx\Observable {
            return $operation->createResponse($response);
        });
    }
    public function getPackageVersionForOrganization(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_version_id');
        }
        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions🌀CbPackageVersionIdRcb();
        }
        $operation = new Operation\Packages\GetPackageVersionForOrganization($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['org'], $arguments['package_version_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\PackageVersion {
            return $operation->createResponse($response);
        });
    }
    public function getPackageVersionForUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('package_type', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_type');
        }
        $arguments['package_type'] = $params['package_type'];
        unset($params['package_type']);
        if (array_key_exists('package_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_name');
        }
        $arguments['package_name'] = $params['package_name'];
        unset($params['package_name']);
        if (array_key_exists('package_version_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: package_version_id');
        }
        $arguments['package_version_id'] = $params['package_version_id'];
        unset($params['package_version_id']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (\array_key_exists(Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Users🌀CbUsernameRcb🌀Packages🌀CbPackageTypeRcb🌀CbPackageNameRcb🌀Versions🌀CbPackageVersionIdRcb();
        }
        $operation = new Operation\Packages\GetPackageVersionForUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Users\CbUsernameRcb\Packages\CbPackageTypeRcb\CbPackageNameRcb\Versions\CbPackageVersionIdRcb::class], $arguments['package_type'], $arguments['package_name'], $arguments['package_version_id'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \ApiClients\Client\GitHub\Schema\PackageVersion {
            return $operation->createResponse($response);
        });
    }
}
