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
final class Teams
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
    public function deleteInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_slug');
        }
        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        $operation = new Operation\Teams\DeleteInOrg($arguments['org'], $arguments['team_slug']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function deleteDiscussionLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: discussion_number');
        }
        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        $operation = new Operation\Teams\DeleteDiscussionLegacy($arguments['team_id'], $arguments['discussion_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeMemberLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operation = new Operation\Teams\RemoveMemberLegacy($arguments['team_id'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeMembershipForUserLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operation = new Operation\Teams\RemoveMembershipForUserLegacy($arguments['team_id'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeProjectLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb🌀Projects🌀CbProjectIdRcb();
        }
        $operation = new Operation\Teams\RemoveProjectLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb\Projects\CbProjectIdRcb::class], $arguments['team_id'], $arguments['project_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deleteLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (\array_key_exists(Hydrator\Operation\Teams\CbTeamIdRcb::class, $this->hydrator) == false) {
            $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb::class] = $this->hydrators->getObjectMapperOperation🌀Teams🌀CbTeamIdRcb();
        }
        $operation = new Operation\Teams\DeleteLegacy($this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Teams\CbTeamIdRcb::class], $arguments['team_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : mixed {
            return $operation->createResponse($response);
        });
    }
    public function deleteDiscussionInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_slug');
        }
        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: discussion_number');
        }
        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        $operation = new Operation\Teams\DeleteDiscussionInOrg($arguments['org'], $arguments['team_slug'], $arguments['discussion_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeMembershipForUserInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_slug');
        }
        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('username', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: username');
        }
        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operation = new Operation\Teams\RemoveMembershipForUserInOrg($arguments['org'], $arguments['team_slug'], $arguments['username']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeProjectInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_slug');
        }
        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('project_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: project_id');
        }
        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        $operation = new Operation\Teams\RemoveProjectInOrg($arguments['org'], $arguments['team_slug'], $arguments['project_id']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function deleteDiscussionCommentLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: discussion_number');
        }
        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (array_key_exists('comment_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: comment_number');
        }
        $arguments['comment_number'] = $params['comment_number'];
        unset($params['comment_number']);
        $operation = new Operation\Teams\DeleteDiscussionCommentLegacy($arguments['team_id'], $arguments['discussion_number'], $arguments['comment_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeRepoLegacy(array $params)
    {
        $arguments = array();
        if (array_key_exists('team_id', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_id');
        }
        $arguments['team_id'] = $params['team_id'];
        unset($params['team_id']);
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
        $operation = new Operation\Teams\RemoveRepoLegacy($arguments['team_id'], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function removeRepoInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_slug');
        }
        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
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
        $operation = new Operation\Teams\RemoveRepoInOrg($arguments['org'], $arguments['team_slug'], $arguments['owner'], $arguments['repo']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
    public function deleteDiscussionCommentInOrg(array $params)
    {
        $arguments = array();
        if (array_key_exists('org', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: org');
        }
        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: team_slug');
        }
        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        if (array_key_exists('discussion_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: discussion_number');
        }
        $arguments['discussion_number'] = $params['discussion_number'];
        unset($params['discussion_number']);
        if (array_key_exists('comment_number', $params) === false) {
            throw new \InvalidArgumentException('Missing mandatory field: comment_number');
        }
        $arguments['comment_number'] = $params['comment_number'];
        unset($params['comment_number']);
        $operation = new Operation\Teams\DeleteDiscussionCommentInOrg($arguments['org'], $arguments['team_slug'], $arguments['discussion_number'], $arguments['comment_number']);
        $request = $operation->createRequest($params);
        return $this->browser->request($request->getMethod(), (string) $request->getUri(), $request->withHeader('Authorization', $this->authentication->authHeader())->getHeaders(), (string) $request->getBody())->then(function (\Psr\Http\Message\ResponseInterface $response) use($operation) : \Psr\Http\Message\ResponseInterface {
            return $operation->createResponse($response);
        });
    }
}
