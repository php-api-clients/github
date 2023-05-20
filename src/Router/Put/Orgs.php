<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Put;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Orgs
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];
    private readonly SchemaValidator $requestSchemaValidator;
    private readonly SchemaValidator $responseSchemaValidator;
    private readonly Hydrators $hydrators;
    private readonly Browser $browser;
    private readonly AuthenticationInterface $authentication;

    public function __construct(SchemaValidator $requestSchemaValidator, SchemaValidator $responseSchemaValidator, Hydrators $hydrators, Browser $browser, AuthenticationInterface $authentication)
    {
        $this->requestSchemaValidator  = $requestSchemaValidator;
        $this->responseSchemaValidator = $responseSchemaValidator;
        $this->hydrators               = $hydrators;
        $this->browser                 = $browser;
        $this->authentication          = $authentication;
    }

    public function blockUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Blocks\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Blocks\Username::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Blocks🌀Username();
        }

        $operator = new Operator\Orgs\BlockUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Blocks\Username::class]);

        return $operator->call($arguments['org'], $arguments['username']);
    }

    public function setMembershipForUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\Memberships\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\Memberships\Username::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Memberships🌀Username();
        }

        $operator = new Operator\Orgs\SetMembershipForUser($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\Memberships\Username::class]);

        return $operator->call($arguments['org'], $arguments['username'], $params);
    }

    public function convertMemberToOutsideCollaborator(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀OutsideCollaborators🌀Username();
        }

        $operator = new Operator\Orgs\ConvertMemberToOutsideCollaborator($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\OutsideCollaborators\Username::class]);

        return $operator->call($arguments['org'], $arguments['username'], $params);
    }

    public function setPublicMembershipForAuthenticatedUser(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists(Hydrator\Operation\Orgs\Org\PublicMembers\Username::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Orgs\Org\PublicMembers\Username::class] = $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀PublicMembers🌀Username();
        }

        $operator = new Operator\Orgs\SetPublicMembershipForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Orgs\Org\PublicMembers\Username::class]);

        return $operator->call($arguments['org'], $arguments['username']);
    }

    public function addSecurityManagerTeam(array $params)
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('team_slug', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: team_slug');
        }

        $arguments['team_slug'] = $params['team_slug'];
        unset($params['team_slug']);
        $operator = new Operator\Orgs\AddSecurityManagerTeam($this->browser, $this->authentication);

        return $operator->call($arguments['org'], $arguments['team_slug']);
    }
}
