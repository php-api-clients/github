<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Router\Patch;

use ApiClients\Client\GitHub\Hydrator;
use ApiClients\Client\GitHub\Hydrators;
use ApiClients\Client\GitHub\Operator;
use ApiClients\Client\GitHub\Schema\BasicError;
use ApiClients\Client\GitHub\Schema\CommitComment;
use ApiClients\Client\GitHub\Schema\FullRepository;
use ApiClients\Client\GitHub\Schema\Hook;
use ApiClients\Client\GitHub\Schema\ProtectedBranchPullRequestReview;
use ApiClients\Client\GitHub\Schema\Release;
use ApiClients\Client\GitHub\Schema\ReleaseAsset;
use ApiClients\Client\GitHub\Schema\RepositoryInvitation;
use ApiClients\Client\GitHub\Schema\StatusCheckPolicy;
use ApiClients\Client\GitHub\Schema\WebhookConfig;
use ApiClients\Contracts\HTTP\Headers\AuthenticationInterface;
use EventSauce\ObjectHydrator\ObjectMapper;
use InvalidArgumentException;
use League\OpenAPIValidation\Schema\SchemaValidator;
use React\Http\Browser;

use function array_key_exists;

final class Repos
{
    /** @var array<class-string, ObjectMapper> */
    private array $hydrator = [];

    public function __construct(private SchemaValidator $requestSchemaValidator, private SchemaValidator $responseSchemaValidator, private Hydrators $hydrators, private Browser $browser, private AuthenticationInterface $authentication)
    {
    }

    /** @return */
    public function update(array $params): FullRepository|BasicError|array
    {
        $matched   = true;
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
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo();
        }

        $operator = new Operator\Repos\Update($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $params);
    }

    /** @return array{code: int} */
    public function acceptInvitationForAuthenticatedUser(array $params): array
    {
        $matched   = true;
        $arguments = [];
        if (array_key_exists('invitation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: invitation_id');
        }

        $arguments['invitation_id'] = $params['invitation_id'];
        unset($params['invitation_id']);
        if (array_key_exists(Hydrator\Operation\User\RepositoryInvitations\InvitationId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\User\RepositoryInvitations\InvitationId::class] = $this->hydrators->getObjectMapperOperation🌀User🌀RepositoryInvitations🌀InvitationId();
        }

        $operator = new Operator\Repos\AcceptInvitationForAuthenticatedUser($this->browser, $this->authentication, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\User\RepositoryInvitations\InvitationId::class]);

        return $operator->call($arguments['invitation_id']);
    }

    /** @return */
    public function updateCommitComment(array $params): CommitComment|array
    {
        $matched   = true;
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
        if (array_key_exists('comment_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: comment_id');
        }

        $arguments['comment_id'] = $params['comment_id'];
        unset($params['comment_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Comments🌀CommentId();
        }

        $operator = new Operator\Repos\UpdateCommitComment($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Comments\CommentId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['comment_id'], $params);
    }

    /** @return */
    public function updateWebhook(array $params): Hook|array
    {
        $matched   = true;
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
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId();
        }

        $operator = new Operator\Repos\UpdateWebhook($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['hook_id'], $params);
    }

    /** @return */
    public function updateInvitation(array $params): RepositoryInvitation|array
    {
        $matched   = true;
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
        if (array_key_exists('invitation_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: invitation_id');
        }

        $arguments['invitation_id'] = $params['invitation_id'];
        unset($params['invitation_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Invitations🌀InvitationId();
        }

        $operator = new Operator\Repos\UpdateInvitation($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Invitations\InvitationId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['invitation_id'], $params);
    }

    /** @return */
    public function updateRelease(array $params): Release|array
    {
        $matched   = true;
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
        if (array_key_exists('release_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: release_id');
        }

        $arguments['release_id'] = $params['release_id'];
        unset($params['release_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀ReleaseId();
        }

        $operator = new Operator\Repos\UpdateRelease($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\ReleaseId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['release_id'], $params);
    }

    /** @return */
    public function updateWebhookConfigForRepo(array $params): WebhookConfig|array
    {
        $matched   = true;
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
        if (array_key_exists('hook_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: hook_id');
        }

        $arguments['hook_id'] = $params['hook_id'];
        unset($params['hook_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Hooks🌀HookId🌀Config();
        }

        $operator = new Operator\Repos\UpdateWebhookConfigForRepo($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Hooks\HookId\Config::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['hook_id'], $params);
    }

    /** @return */
    public function updateReleaseAsset(array $params): ReleaseAsset|array
    {
        $matched   = true;
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
        if (array_key_exists('asset_id', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: asset_id');
        }

        $arguments['asset_id'] = $params['asset_id'];
        unset($params['asset_id']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Releases🌀Assets🌀AssetId();
        }

        $operator = new Operator\Repos\UpdateReleaseAsset($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Releases\Assets\AssetId::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['asset_id'], $params);
    }

    /** @return */
    public function updatePullRequestReviewProtection(array $params): ProtectedBranchPullRequestReview|array
    {
        $matched   = true;
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
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredPullRequestReviews();
        }

        $operator = new Operator\Repos\UpdatePullRequestReviewProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredPullRequestReviews::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch'], $params);
    }

    /** @return */
    public function updateStatusCheckProtection(array $params): StatusCheckPolicy|array
    {
        $matched   = true;
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
        if (array_key_exists('branch', $params) === false) {
            throw new InvalidArgumentException('Missing mandatory field: branch');
        }

        $arguments['branch'] = $params['branch'];
        unset($params['branch']);
        if (array_key_exists(Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks::class, $this->hydrator) === false) {
            $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks::class] = $this->hydrators->getObjectMapperOperation🌀Repos🌀Owner🌀Repo🌀Branches🌀Branch🌀Protection🌀RequiredStatusChecks();
        }

        $operator = new Operator\Repos\UpdateStatusCheckProtection($this->browser, $this->authentication, $this->requestSchemaValidator, $this->responseSchemaValidator, $this->hydrator[Hydrator\Operation\Repos\Owner\Repo\Branches\Branch\Protection\RequiredStatusChecks::class]);

        return $operator->call($arguments['owner'], $arguments['repo'], $arguments['branch'], $params);
    }
}
