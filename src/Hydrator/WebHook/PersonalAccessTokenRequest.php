<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class PersonalAccessTokenRequest implements ObjectMapper
{
    private array $hydrationStack = [];
    public function __construct() {}

    /**
     * @template T of object
     * @param class-string<T> $className
     * @return T
     */
    public function hydrateObject(string $className, array $payload): object
    {
        return match($className) {
            'ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestApproved' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestApproved($payload),
                'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($payload),
                'ApiClients\Client\Github\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($payload),
                'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsAdded' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded($payload),
                'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsUpgraded' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded($payload),
                'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsResult' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult($payload),
                'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\Repositories' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️Repositories($payload),
                'ApiClients\Client\Github\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\Github\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCancelled' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestCancelled($payload),
                'ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCreated' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestCreated($payload),
                'ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestDenied' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestDenied($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestApproved(array $payload): \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestApproved
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['personal_access_token_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'personal_access_token_request';
                goto after_personalAccessTokenRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'personalAccessTokenRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['personalAccessTokenRequest'] = $value;

            after_personalAccessTokenRequest:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $missingFields[] = 'installation';
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestApproved', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestApproved::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestApproved(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestApproved', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest(array $payload): \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $missingFields[] = 'owner';
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['permissions_added'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions_added';
                goto after_permissionsAdded;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissionsAdded';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissionsAdded'] = $value;

            after_permissionsAdded:

            $value = $payload['permissions_upgraded'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions_upgraded';
                goto after_permissionsUpgraded;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissionsUpgraded';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissionsUpgraded'] = $value;

            after_permissionsUpgraded:

            $value = $payload['permissions_result'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permissions_result';
                goto after_permissionsResult;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissionsResult';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissionsResult'] = $value;

            after_permissionsResult:

            $value = $payload['repository_selection'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository_selection';
                goto after_repositorySelection;
            }

            $properties['repositorySelection'] = $value;

            after_repositorySelection:

            $value = $payload['repository_count'] ?? null;

            if ($value === null) {
                $properties['repositoryCount'] = null;
                goto after_repositoryCount;
            }

            $properties['repositoryCount'] = $value;

            after_repositoryCount:

            $value = $payload['repositories'] ?? null;

            if ($value === null) {
                $properties['repositories'] = null;
                goto after_repositories;
            }

            static $repositoriesCaster1;

            if ($repositoriesCaster1 === null) {
                $repositoriesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\PersonalAccessTokenRequest\\Repositories',
));
            }

            $value = $repositoriesCaster1->cast($value, $this);

            $properties['repositories'] = $value;

            after_repositories:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_createdAt;
            }

            $properties['createdAt'] = $value;

            after_createdAt:

            $value = $payload['token_expired'] ?? null;

            if ($value === null) {
                $missingFields[] = 'token_expired';
                goto after_tokenExpired;
            }

            $properties['tokenExpired'] = $value;

            after_tokenExpired:

            $value = $payload['token_expires_at'] ?? null;

            if ($value === null) {
                $properties['tokenExpiresAt'] = null;
                goto after_tokenExpiresAt;
            }

            $properties['tokenExpiresAt'] = $value;

            after_tokenExpiresAt:

            $value = $payload['token_last_used_at'] ?? null;

            if ($value === null) {
                $properties['tokenLastUsedAt'] = null;
                goto after_tokenLastUsedAt;
            }

            $properties['tokenLastUsedAt'] = $value;

            after_tokenLastUsedAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PersonalAccessTokenRequest::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\Github\Schema\SimpleUser
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatarId'] = null;
                goto after_gravatarId;
            }

            $properties['gravatarId'] = $value;

            after_gravatarId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followersUrl;
            }

            $properties['followersUrl'] = $value;

            after_followersUrl:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_followingUrl;
            }

            $properties['followingUrl'] = $value;

            after_followingUrl:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gistsUrl;
            }

            $properties['gistsUrl'] = $value;

            after_gistsUrl:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starredUrl;
            }

            $properties['starredUrl'] = $value;

            after_starredUrl:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptionsUrl;
            }

            $properties['subscriptionsUrl'] = $value;

            after_subscriptionsUrl:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizationsUrl;
            }

            $properties['organizationsUrl'] = $value;

            after_organizationsUrl:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_receivedEventsUrl;
            }

            $properties['receivedEventsUrl'] = $value;

            after_receivedEventsUrl:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $missingFields[] = 'type';
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'site_admin';
                goto after_siteAdmin;
            }

            $properties['siteAdmin'] = $value;

            after_siteAdmin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starredAt'] = null;
                goto after_starredAt;
            }

            $properties['starredAt'] = $value;

            after_starredAt:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\SimpleUser(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded(array $payload): \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsAdded
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $properties['repository'] = null;
                goto after_repository;
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['other'] ?? null;

            if ($value === null) {
                $properties['other'] = null;
                goto after_other;
            }

            $properties['other'] = $value;

            after_other:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsAdded', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsAdded::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsAdded(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsAdded', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded(array $payload): \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsUpgraded
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $properties['repository'] = null;
                goto after_repository;
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['other'] ?? null;

            if ($value === null) {
                $properties['other'] = null;
                goto after_other;
            }

            $properties['other'] = $value;

            after_other:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsUpgraded', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsUpgraded::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsUpgraded(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsUpgraded', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult(array $payload): \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsResult
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $properties['repository'] = null;
                goto after_repository;
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['other'] ?? null;

            if ($value === null) {
                $properties['other'] = null;
                goto after_other;
            }

            $properties['other'] = $value;

            after_other:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsResult', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsResult::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsResult(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsResult', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️Repositories(array $payload): \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\Repositories
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_fullName;
            }

            $properties['fullName'] = $value;

            after_fullName:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\Repositories', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\Repositories::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\Repositories(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\Repositories', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple(array $payload): \ApiClients\Client\Github\Schema\OrganizationSimple
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_reposUrl;
            }

            $properties['reposUrl'] = $value;

            after_reposUrl:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_eventsUrl;
            }

            $properties['eventsUrl'] = $value;

            after_eventsUrl:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooksUrl;
            }

            $properties['hooksUrl'] = $value;

            after_hooksUrl:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issuesUrl;
            }

            $properties['issuesUrl'] = $value;

            after_issuesUrl:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_membersUrl;
            }

            $properties['membersUrl'] = $value;

            after_membersUrl:

            $value = $payload['public_members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_members_url';
                goto after_publicMembersUrl;
            }

            $properties['publicMembersUrl'] = $value;

            after_publicMembersUrl:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatarUrl;
            }

            $properties['avatarUrl'] = $value;

            after_avatarUrl:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\OrganizationSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\OrganizationSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\OrganizationSimple(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\OrganizationSimple', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation(array $payload): \ApiClients\Client\Github\Schema\SimpleInstallation
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\SimpleInstallation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\SimpleInstallation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestCancelled(array $payload): \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCancelled
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['personal_access_token_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'personal_access_token_request';
                goto after_personalAccessTokenRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'personalAccessTokenRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['personalAccessTokenRequest'] = $value;

            after_personalAccessTokenRequest:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $missingFields[] = 'installation';
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCancelled', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCancelled::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCancelled(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCancelled', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestCreated(array $payload): \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCreated
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['personal_access_token_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'personal_access_token_request';
                goto after_personalAccessTokenRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'personalAccessTokenRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['personalAccessTokenRequest'] = $value;

            after_personalAccessTokenRequest:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $missingFields[] = 'installation';
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCreated', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCreated::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCreated(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCreated', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestDenied(array $payload): \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestDenied
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['action'] ?? null;

            if ($value === null) {
                $missingFields[] = 'action';
                goto after_action;
            }

            $properties['action'] = $value;

            after_action:

            $value = $payload['personal_access_token_request'] ?? null;

            if ($value === null) {
                $missingFields[] = 'personal_access_token_request';
                goto after_personalAccessTokenRequest;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'personalAccessTokenRequest';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['personalAccessTokenRequest'] = $value;

            after_personalAccessTokenRequest:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organization';
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sender';
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $missingFields[] = 'installation';
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestDenied', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestDenied::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestDenied(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestDenied', $exception, stack: $this->hydrationStack);
        }
    }
    
    private function serializeViaTypeMap(string $accessor, object $object, array $payloadToTypeMap): array
    {
        foreach ($payloadToTypeMap as $payloadType => [$valueType, $method]) {
            if (is_a($object, $valueType)) {
                return [$accessor => $payloadType] + $this->{$method}($object);
            }
        }

        throw new \LogicException('No type mapped for object of class: ' . get_class($object));
    }

    public function serializeObject(object $object): mixed
    {
        return $this->serializeObjectOfType($object, get_class($object));
    }

    /**
     * @template T
     *
     * @param T               $object
     * @param class-string<T> $className
     */
    public function serializeObjectOfType(object $object, string $className): mixed
    {
        try {
            return match($className) {
                'array' => $this->serializeValuearray($object),
            'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
            'DateTime' => $this->serializeValueDateTime($object),
            'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
            'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
            'ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestApproved' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestApproved($object),
            'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($object),
            'ApiClients\Client\Github\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($object),
            'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsAdded' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded($object),
            'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsUpgraded' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded($object),
            'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsResult' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult($object),
            'ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\Repositories' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️Repositories($object),
            'ApiClients\Client\Github\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($object),
            'ApiClients\Client\Github\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($object),
            'ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCancelled' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestCancelled($object),
            'ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCreated' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestCreated($object),
            'ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestDenied' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestDenied($object),
                default => throw new \LogicException('No serialization defined for $className'),
            };
        } catch (\Throwable $exception) {
            throw UnableToSerializeObject::dueToError($className, $exception);
        }
    }
    
    
    private function serializeValuearray(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueRamsey⚡️Uuid⚡️UuidInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeUuidToString(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTime(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeImmutable(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeValueDateTimeInterface(mixed $value): mixed
    {
        static $serializer;
        
        if ($serializer === null) {
            $serializer = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeDateTime(...array (
));
        }
        
        return $serializer->serialize($value, $this);
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestApproved(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestApproved);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $personalAccessTokenRequest = $object->personalAccessTokenRequest;
        $personalAccessTokenRequest = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($personalAccessTokenRequest);
        after_personalAccessTokenRequest:        $result['personal_access_token_request'] = $personalAccessTokenRequest;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $owner = $object->owner;
        $owner = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($owner);
        after_owner:        $result['owner'] = $owner;

        
        $permissionsAdded = $object->permissionsAdded;
        $permissionsAdded = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded($permissionsAdded);
        after_permissionsAdded:        $result['permissions_added'] = $permissionsAdded;

        
        $permissionsUpgraded = $object->permissionsUpgraded;
        $permissionsUpgraded = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded($permissionsUpgraded);
        after_permissionsUpgraded:        $result['permissions_upgraded'] = $permissionsUpgraded;

        
        $permissionsResult = $object->permissionsResult;
        $permissionsResult = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult($permissionsResult);
        after_permissionsResult:        $result['permissions_result'] = $permissionsResult;

        
        $repositorySelection = $object->repositorySelection;
        after_repositorySelection:        $result['repository_selection'] = $repositorySelection;

        
        $repositoryCount = $object->repositoryCount;

        if ($repositoryCount === null) {
            goto after_repositoryCount;
        }
        after_repositoryCount:        $result['repository_count'] = $repositoryCount;

        
        $repositories = $object->repositories;

        if ($repositories === null) {
            goto after_repositories;
        }
        static $repositoriesSerializer0;

        if ($repositoriesSerializer0 === null) {
            $repositoriesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\PersonalAccessTokenRequest\\Repositories',
));
        }
        
        $repositories = $repositoriesSerializer0->serialize($repositories, $this);
        after_repositories:        $result['repositories'] = $repositories;

        
        $createdAt = $object->createdAt;
        after_createdAt:        $result['created_at'] = $createdAt;

        
        $tokenExpired = $object->tokenExpired;
        after_tokenExpired:        $result['token_expired'] = $tokenExpired;

        
        $tokenExpiresAt = $object->tokenExpiresAt;

        if ($tokenExpiresAt === null) {
            goto after_tokenExpiresAt;
        }
        after_tokenExpiresAt:        $result['token_expires_at'] = $tokenExpiresAt;

        
        $tokenLastUsedAt = $object->tokenLastUsedAt;

        if ($tokenLastUsedAt === null) {
            goto after_tokenLastUsedAt;
        }
        after_tokenLastUsedAt:        $result['token_last_used_at'] = $tokenLastUsedAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SimpleUser);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $avatarUrl = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $gravatarId = $object->gravatarId;

        if ($gravatarId === null) {
            goto after_gravatarId;
        }
        after_gravatarId:        $result['gravatar_id'] = $gravatarId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $followersUrl = $object->followersUrl;
        after_followersUrl:        $result['followers_url'] = $followersUrl;

        
        $followingUrl = $object->followingUrl;
        after_followingUrl:        $result['following_url'] = $followingUrl;

        
        $gistsUrl = $object->gistsUrl;
        after_gistsUrl:        $result['gists_url'] = $gistsUrl;

        
        $starredUrl = $object->starredUrl;
        after_starredUrl:        $result['starred_url'] = $starredUrl;

        
        $subscriptionsUrl = $object->subscriptionsUrl;
        after_subscriptionsUrl:        $result['subscriptions_url'] = $subscriptionsUrl;

        
        $organizationsUrl = $object->organizationsUrl;
        after_organizationsUrl:        $result['organizations_url'] = $organizationsUrl;

        
        $reposUrl = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $receivedEventsUrl = $object->receivedEventsUrl;
        after_receivedEventsUrl:        $result['received_events_url'] = $receivedEventsUrl;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $siteAdmin = $object->siteAdmin;
        after_siteAdmin:        $result['site_admin'] = $siteAdmin;

        
        $starredAt = $object->starredAt;

        if ($starredAt === null) {
            goto after_starredAt;
        }
        after_starredAt:        $result['starred_at'] = $starredAt;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsAdded(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsAdded);
        $result = [];

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        after_organization:        $result['organization'] = $organization;

        
        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }
        after_repository:        $result['repository'] = $repository;

        
        $other = $object->other;

        if ($other === null) {
            goto after_other;
        }
        after_other:        $result['other'] = $other;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsUpgraded(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsUpgraded);
        $result = [];

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        after_organization:        $result['organization'] = $organization;

        
        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }
        after_repository:        $result['repository'] = $repository;

        
        $other = $object->other;

        if ($other === null) {
            goto after_other;
        }
        after_other:        $result['other'] = $other;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️PermissionsResult(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\PermissionsResult);
        $result = [];

        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        after_organization:        $result['organization'] = $organization;

        
        $repository = $object->repository;

        if ($repository === null) {
            goto after_repository;
        }
        after_repository:        $result['repository'] = $repository;

        
        $other = $object->other;

        if ($other === null) {
            goto after_other;
        }
        after_other:        $result['other'] = $other;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest⚡️Repositories(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\PersonalAccessTokenRequest\Repositories);
        $result = [];

        $fullName = $object->fullName;
        after_fullName:        $result['full_name'] = $fullName;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $private = $object->private;
        after_private:        $result['private'] = $private;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\OrganizationSimple);
        $result = [];

        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $reposUrl = $object->reposUrl;
        after_reposUrl:        $result['repos_url'] = $reposUrl;

        
        $eventsUrl = $object->eventsUrl;
        after_eventsUrl:        $result['events_url'] = $eventsUrl;

        
        $hooksUrl = $object->hooksUrl;
        after_hooksUrl:        $result['hooks_url'] = $hooksUrl;

        
        $issuesUrl = $object->issuesUrl;
        after_issuesUrl:        $result['issues_url'] = $issuesUrl;

        
        $membersUrl = $object->membersUrl;
        after_membersUrl:        $result['members_url'] = $membersUrl;

        
        $publicMembersUrl = $object->publicMembersUrl;
        after_publicMembersUrl:        $result['public_members_url'] = $publicMembersUrl;

        
        $avatarUrl = $object->avatarUrl;
        after_avatarUrl:        $result['avatar_url'] = $avatarUrl;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\SimpleInstallation);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestCancelled(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCancelled);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $personalAccessTokenRequest = $object->personalAccessTokenRequest;
        $personalAccessTokenRequest = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($personalAccessTokenRequest);
        after_personalAccessTokenRequest:        $result['personal_access_token_request'] = $personalAccessTokenRequest;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestCreated(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestCreated);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $personalAccessTokenRequest = $object->personalAccessTokenRequest;
        $personalAccessTokenRequest = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($personalAccessTokenRequest);
        after_personalAccessTokenRequest:        $result['personal_access_token_request'] = $personalAccessTokenRequest;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️WebhookPersonalAccessTokenRequestDenied(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\WebhookPersonalAccessTokenRequestDenied);
        $result = [];

        $action = $object->action;
        after_action:        $result['action'] = $action;

        
        $personalAccessTokenRequest = $object->personalAccessTokenRequest;
        $personalAccessTokenRequest = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️PersonalAccessTokenRequest($personalAccessTokenRequest);
        after_personalAccessTokenRequest:        $result['personal_access_token_request'] = $personalAccessTokenRequest;

        
        $organization = $object->organization;
        $organization = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $sender = $object->sender;
        $sender = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;

        
        $installation = $object->installation;
        $installation = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;


        return $result;
    }
    
    

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToHydrateObject
     */
    public function hydrateObjects(string $className, iterable $payloads): IterableList
    {
        return new IterableList($this->doHydrateObjects($className, $payloads));
    }

    private function doHydrateObjects(string $className, iterable $payloads): Generator
    {
        foreach ($payloads as $index => $payload) {
            yield $index => $this->hydrateObject($className, $payload);
        }
    }

    /**
     * @template T
     *
     * @param class-string<T> $className
     * @param iterable<array> $payloads;
     *
     * @return IterableList<T>
     *
     * @throws UnableToSerializeObject
     */
    public function serializeObjects(iterable $payloads): IterableList
    {
        return new IterableList($this->doSerializeObjects($payloads));
    }

    private function doSerializeObjects(iterable $objects): Generator
    {
        foreach ($objects as $index => $object) {
            yield $index => $this->serializeObject($object);
        }
    }
}
