<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Internal\Router\Get;

use ApiClients\Client\GitHub\Internal;
use ApiClients\Client\GitHub\Schema;
use ApiClients\Client\GitHub\Schema\Project;
use ApiClients\Client\GitHub\Schema\ProjectCard;
use ApiClients\Client\GitHub\Schema\ProjectCollaboratorPermission;
use ApiClients\Client\GitHub\Schema\ProjectColumn;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use ApiClients\Tools\OpenApiClient\Utils\Response\WithoutBody;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Projects
{
    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Internal\Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function get(array $params): Project|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('project_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: project_id');
        }

        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        $operator = new Internal\Operator\Projects\Get($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId());

        return $operator->call($arguments['project_id']);
    }

    /** @return iterable<int,Schema\Project> */
    public function listForOrg(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('org', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: org');
        }

        $arguments['org'] = $params['org'];
        unset($params['org']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Projects\ListForOrg($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Orgs🌀Org🌀Projects());

        return $operator->call($arguments['org'], $arguments['state'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getColumn(array $params): ProjectColumn|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('column_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: column_id');
        }

        $arguments['column_id'] = $params['column_id'];
        unset($params['column_id']);
        $operator = new Internal\Operator\Projects\GetColumn($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId());

        return $operator->call($arguments['column_id']);
    }

    /** @return iterable<int,Schema\SimpleUser>|WithoutBody */
    public function listCollaborators(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('project_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: project_id');
        }

        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists('affiliation', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: affiliation');
        }

        $arguments['affiliation'] = $params['affiliation'];
        unset($params['affiliation']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Projects\ListCollaborators($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators());

        return $operator->call($arguments['project_id'], $arguments['affiliation'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<int,Schema\ProjectColumn>|WithoutBody */
    public function listColumns(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('project_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: project_id');
        }

        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Projects\ListColumns($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Columns());

        return $operator->call($arguments['project_id'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<int,Schema\Project> */
    public function listForUser(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Projects\ListForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Users🌀Username🌀Projects());

        return $operator->call($arguments['username'], $arguments['state'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getCard(array $params): ProjectCard|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('card_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: card_id');
        }

        $arguments['card_id'] = $params['card_id'];
        unset($params['card_id']);
        $operator = new Internal\Operator\Projects\GetCard($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀Cards🌀CardId());

        return $operator->call($arguments['card_id']);
    }

    /** @return iterable<int,Schema\ProjectCard>|WithoutBody */
    public function listCards(array $params): iterable|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('column_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: column_id');
        }

        $arguments['column_id'] = $params['column_id'];
        unset($params['column_id']);
        if (array_key_exists('archived_state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: archived_state');
        }

        $arguments['archived_state'] = $params['archived_state'];
        unset($params['archived_state']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Projects\ListCards($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀Columns🌀ColumnId🌀Cards());

        return $operator->call($arguments['column_id'], $arguments['archived_state'], $arguments['per_page'], $arguments['page']);
    }

    /** @return iterable<int,Schema\Project> */
    public function listForRepo(array $params): iterable
    {
        $arguments = [];
        if (array_key_exists('owner', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: owner');
        }

        $arguments['owner'] = $params['owner'];
        unset($params['owner']);
        if (array_key_exists('repo', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: repo');
        }

        $arguments['repo'] = $params['repo'];
        unset($params['repo']);
        if (array_key_exists('state', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: state');
        }

        $arguments['state'] = $params['state'];
        unset($params['state']);
        if (array_key_exists('per_page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: per_page');
        }

        $arguments['per_page'] = $params['per_page'];
        unset($params['per_page']);
        if (array_key_exists('page', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: page');
        }

        $arguments['page'] = $params['page'];
        unset($params['page']);
        $operator = new Internal\Operator\Projects\ListForRepo($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Projects());

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['state'], $arguments['per_page'], $arguments['page']);
    }

    /** @return */
    public function getPermissionForUser(array $params): ProjectCollaboratorPermission|WithoutBody
    {
        $arguments = [];
        if (array_key_exists('project_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: project_id');
        }

        $arguments['project_id'] = $params['project_id'];
        unset($params['project_id']);
        if (array_key_exists('username', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: username');
        }

        $arguments['username'] = $params['username'];
        unset($params['username']);
        $operator = new Internal\Operator\Projects\GetPermissionForUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrators->getObjectMapperOperation🌀Projects🌀ProjectId🌀Collaborators🌀Username🌀Permission());

        return $operator->call($arguments['project_id'], $arguments['username']);
    }
}
