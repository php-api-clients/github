<?php

declare (strict_types=1);
namespace ApiClients\Client\GitHub\Router\Delete;

use ApiClients\Client\GitHub\Error as ErrorSchemas;
use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Operation;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\WebHook;
use ApiClients\Client\GitHub\Router;
use ApiClients\Client\GitHub\ChunkSize;
final class Migrations
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
    public function cancelImport(array $params)
    {
        $arguments = array();
        if (array_key_exists('owner', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: owner');
        }
        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo');
        }
        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (\array_key_exists(Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀CbOwnerRcb🌀CbRepoRcb🌀Import();
        }
        $operation = new Operation\Migrations\CancelImport($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Import::class], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deleteArchiveForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('migration_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: migration_id');
        }
        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (\array_key_exists(Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Archive();
        }
        $operation = new Operation\Migrations\DeleteArchiveForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Archive::class], $arguments['migration_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function unlockRepoForAuthenticatedUser(array $params)
    {
        $arguments = array();
        if (array_key_exists('migration_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: migration_id');
        }
        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists('repo_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo_name');
        }
        $arguments['repo_name'] = $params['repo_name'];
        unset($params['repo_name']);
        if (\array_key_exists(Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock::class] = $this->hydrators->getObjectMapperOperation🌀User🌀Migrations🌀CbMigrationIdRcb🌀Repos🌀CbRepoNameRcb🌀Lock();
        }
        $operation = new Operation\Migrations\UnlockRepoForAuthenticatedUser($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock::class], $arguments['migration_id'], $arguments['repo_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deleteArchiveForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: migration_id');
        }
        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Archive();
        }
        $operation = new Operation\Migrations\DeleteArchiveForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Archive::class], $arguments['org'], $arguments['migration_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function unlockRepoForOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('migration_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: migration_id');
        }
        $arguments['migration_id'] = $params['migration_id'];
        unset($params['migration_id']);
        if (array_key_exists('repo_name', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: repo_name');
        }
        $arguments['repo_name'] = $params['repo_name'];
        unset($params['repo_name']);
        if (\array_key_exists(Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀CbOrgRcb🌀Migrations🌀CbMigrationIdRcb🌀Repos🌀CbRepoNameRcb🌀Lock();
        }
        $operation = new Operation\Migrations\UnlockRepoForOrg($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\CbOrgRcb\Migrations\CbMigrationIdRcb\Repos\CbRepoNameRcb\Lock::class], $arguments['org'], $arguments['migration_id'], $arguments['repo_name']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
}
