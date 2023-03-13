<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\WebHook;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Push implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\WebhookPush' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPush\Commits' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Commits($payload),
                'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($payload),
                'ApiClients\Client\GitHub\Schema\Enterprise' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️HeadCommit($payload),
                'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($payload),
                'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($payload),
                'ApiClients\Client\GitHub\Schema\WebhookPush\Pusher' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Pusher($payload),
                'ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository($payload),
                'ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($payload),
                'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($payload),
                'ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPush
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['after'] ?? null;

            if ($value === null) {
                $missingFields[] = 'after';
                goto after_after;
            }

            $properties['after'] = $value;

            after_after:

            $value = $payload['base_ref'] ?? null;

            if ($value === null) {
                $properties['base_ref'] = null;
                goto after_base_ref;
            }

            $properties['base_ref'] = $value;

            after_base_ref:

            $value = $payload['before'] ?? null;

            if ($value === null) {
                $missingFields[] = 'before';
                goto after_before;
            }

            $properties['before'] = $value;

            after_before:

            $value = $payload['commits'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits';
                goto after_commits;
            }

            static $commitsCaster1;

            if ($commitsCaster1 === null) {
                $commitsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Commits',
));
            }

            $value = $commitsCaster1->cast($value, $this);

            $properties['commits'] = $value;

            after_commits:

            $value = $payload['compare'] ?? null;

            if ($value === null) {
                $missingFields[] = 'compare';
                goto after_compare;
            }

            $properties['compare'] = $value;

            after_compare:

            $value = $payload['created'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created';
                goto after_created;
            }

            $properties['created'] = $value;

            after_created:

            $value = $payload['deleted'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deleted';
                goto after_deleted;
            }

            $properties['deleted'] = $value;

            after_deleted:

            $value = $payload['enterprise'] ?? null;

            if ($value === null) {
                $properties['enterprise'] = null;
                goto after_enterprise;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'enterprise';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['enterprise'] = $value;

            after_enterprise:

            $value = $payload['forced'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forced';
                goto after_forced;
            }

            $properties['forced'] = $value;

            after_forced:

            $value = $payload['head_commit'] ?? null;

            if ($value === null) {
                $properties['head_commit'] = null;
                goto after_head_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'head_commit';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️HeadCommit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['head_commit'] = $value;

            after_head_commit:

            $value = $payload['installation'] ?? null;

            if ($value === null) {
                $properties['installation'] = null;
                goto after_installation;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'installation';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['installation'] = $value;

            after_installation:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'organization';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['pusher'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pusher';
                goto after_pusher;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'pusher';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Pusher($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['pusher'] = $value;

            after_pusher:

            $value = $payload['ref'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ref';
                goto after_ref;
            }

            $properties['ref'] = $value;

            after_ref:

            $value = $payload['repository'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repository';
                goto after_repository;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'repository';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['repository'] = $value;

            after_repository:

            $value = $payload['sender'] ?? null;

            if ($value === null) {
                $properties['sender'] = null;
                goto after_sender;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'sender';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['sender'] = $value;

            after_sender:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPush', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPush::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookPush(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPush', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Commits(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPush\Commits
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['added'] ?? null;

            if ($value === null) {
                $properties['added'] = null;
                goto after_added;
            }

            $properties['added'] = $value;

            after_added:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'committer';
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['distinct'] ?? null;

            if ($value === null) {
                $missingFields[] = 'distinct';
                goto after_distinct;
            }

            $properties['distinct'] = $value;

            after_distinct:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['modified'] ?? null;

            if ($value === null) {
                $properties['modified'] = null;
                goto after_modified;
            }

            $properties['modified'] = $value;

            after_modified:

            $value = $payload['removed'] ?? null;

            if ($value === null) {
                $properties['removed'] = null;
                goto after_removed;
            }

            $properties['removed'] = $value;

            after_removed:

            $value = $payload['timestamp'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timestamp';
                goto after_timestamp;
            }

            $properties['timestamp'] = $value;

            after_timestamp:

            $value = $payload['tree_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree_id';
                goto after_tree_id;
            }

            $properties['tree_id'] = $value;

            after_tree_id:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPush\Commits', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPush\Commits::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookPush\Commits(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPush\Commits', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author(array $payload): \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise(array $payload): \ApiClients\Client\GitHub\Schema\Enterprise
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['website_url'] ?? null;

            if ($value === null) {
                $properties['website_url'] = null;
                goto after_website_url;
            }

            $properties['website_url'] = $value;

            after_website_url:

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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['slug'] ?? null;

            if ($value === null) {
                $missingFields[] = 'slug';
                goto after_slug;
            }

            $properties['slug'] = $value;

            after_slug:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $properties['created_at'] = null;
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $properties['updated_at'] = null;
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Enterprise', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Enterprise::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Enterprise(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Enterprise', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️HeadCommit(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['added'] ?? null;

            if ($value === null) {
                $properties['added'] = null;
                goto after_added;
            }

            $properties['added'] = $value;

            after_added:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $missingFields[] = 'author';
                goto after_author;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'author';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $missingFields[] = 'committer';
                goto after_committer;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'committer';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['distinct'] ?? null;

            if ($value === null) {
                $missingFields[] = 'distinct';
                goto after_distinct;
            }

            $properties['distinct'] = $value;

            after_distinct:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['modified'] ?? null;

            if ($value === null) {
                $properties['modified'] = null;
                goto after_modified;
            }

            $properties['modified'] = $value;

            after_modified:

            $value = $payload['removed'] ?? null;

            if ($value === null) {
                $properties['removed'] = null;
                goto after_removed;
            }

            $properties['removed'] = $value;

            after_removed:

            $value = $payload['timestamp'] ?? null;

            if ($value === null) {
                $missingFields[] = 'timestamp';
                goto after_timestamp;
            }

            $properties['timestamp'] = $value;

            after_timestamp:

            $value = $payload['tree_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree_id';
                goto after_tree_id;
            }

            $properties['tree_id'] = $value;

            after_tree_id:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(array $payload): \ApiClients\Client\GitHub\Schema\SimpleInstallation
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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SimpleInstallation::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SimpleInstallation(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleInstallation', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple(array $payload): \ApiClients\Client\GitHub\Schema\OrganizationSimple
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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

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
                goto after_repos_url;
            }

            $properties['repos_url'] = $value;

            after_repos_url:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooks_url;
            }

            $properties['hooks_url'] = $value;

            after_hooks_url:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issues_url;
            }

            $properties['issues_url'] = $value;

            after_issues_url:

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_members_url;
            }

            $properties['members_url'] = $value;

            after_members_url:

            $value = $payload['public_members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'public_members_url';
                goto after_public_members_url;
            }

            $properties['public_members_url'] = $value;

            after_public_members_url:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationSimple', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\OrganizationSimple::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\OrganizationSimple(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\OrganizationSimple', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Pusher(array $payload): \ApiClients\Client\GitHub\Schema\WebhookPush\Pusher
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['date'] ?? null;

            if ($value === null) {
                $properties['date'] = null;
                goto after_date;
            }

            $properties['date'] = $value;

            after_date:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'name';
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['username'] ?? null;

            if ($value === null) {
                $properties['username'] = null;
                goto after_username;
            }

            $properties['username'] = $value;

            after_username:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPush\Pusher', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookPush\Pusher::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookPush\Pusher(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookPush\Pusher', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository(array $payload): \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['allow_auto_merge'] ?? null;

            if ($value === null) {
                $properties['allow_auto_merge'] = null;
                goto after_allow_auto_merge;
            }

            $properties['allow_auto_merge'] = $value;

            after_allow_auto_merge:

            $value = $payload['allow_forking'] ?? null;

            if ($value === null) {
                $properties['allow_forking'] = null;
                goto after_allow_forking;
            }

            $properties['allow_forking'] = $value;

            after_allow_forking:

            $value = $payload['allow_merge_commit'] ?? null;

            if ($value === null) {
                $properties['allow_merge_commit'] = null;
                goto after_allow_merge_commit;
            }

            $properties['allow_merge_commit'] = $value;

            after_allow_merge_commit:

            $value = $payload['allow_rebase_merge'] ?? null;

            if ($value === null) {
                $properties['allow_rebase_merge'] = null;
                goto after_allow_rebase_merge;
            }

            $properties['allow_rebase_merge'] = $value;

            after_allow_rebase_merge:

            $value = $payload['allow_squash_merge'] ?? null;

            if ($value === null) {
                $properties['allow_squash_merge'] = null;
                goto after_allow_squash_merge;
            }

            $properties['allow_squash_merge'] = $value;

            after_allow_squash_merge:

            $value = $payload['allow_update_branch'] ?? null;

            if ($value === null) {
                $properties['allow_update_branch'] = null;
                goto after_allow_update_branch;
            }

            $properties['allow_update_branch'] = $value;

            after_allow_update_branch:

            $value = $payload['archive_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archive_url';
                goto after_archive_url;
            }

            $properties['archive_url'] = $value;

            after_archive_url:

            $value = $payload['archived'] ?? null;

            if ($value === null) {
                $missingFields[] = 'archived';
                goto after_archived;
            }

            $properties['archived'] = $value;

            after_archived:

            $value = $payload['assignees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'assignees_url';
                goto after_assignees_url;
            }

            $properties['assignees_url'] = $value;

            after_assignees_url:

            $value = $payload['blobs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blobs_url';
                goto after_blobs_url;
            }

            $properties['blobs_url'] = $value;

            after_blobs_url:

            $value = $payload['branches_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'branches_url';
                goto after_branches_url;
            }

            $properties['branches_url'] = $value;

            after_branches_url:

            $value = $payload['clone_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'clone_url';
                goto after_clone_url;
            }

            $properties['clone_url'] = $value;

            after_clone_url:

            $value = $payload['collaborators_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'collaborators_url';
                goto after_collaborators_url;
            }

            $properties['collaborators_url'] = $value;

            after_collaborators_url:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_comments_url;
            }

            $properties['comments_url'] = $value;

            after_comments_url:

            $value = $payload['commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commits_url';
                goto after_commits_url;
            }

            $properties['commits_url'] = $value;

            after_commits_url:

            $value = $payload['compare_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'compare_url';
                goto after_compare_url;
            }

            $properties['compare_url'] = $value;

            after_compare_url:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contents_url';
                goto after_contents_url;
            }

            $properties['contents_url'] = $value;

            after_contents_url:

            $value = $payload['contributors_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contributors_url';
                goto after_contributors_url;
            }

            $properties['contributors_url'] = $value;

            after_contributors_url:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['default_branch'] ?? null;

            if ($value === null) {
                $missingFields[] = 'default_branch';
                goto after_default_branch;
            }

            $properties['default_branch'] = $value;

            after_default_branch:

            $value = $payload['delete_branch_on_merge'] ?? null;

            if ($value === null) {
                $properties['delete_branch_on_merge'] = null;
                goto after_delete_branch_on_merge;
            }

            $properties['delete_branch_on_merge'] = $value;

            after_delete_branch_on_merge:

            $value = $payload['deployments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deployments_url';
                goto after_deployments_url;
            }

            $properties['deployments_url'] = $value;

            after_deployments_url:

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['disabled'] ?? null;

            if ($value === null) {
                $properties['disabled'] = null;
                goto after_disabled;
            }

            $properties['disabled'] = $value;

            after_disabled:

            $value = $payload['downloads_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'downloads_url';
                goto after_downloads_url;
            }

            $properties['downloads_url'] = $value;

            after_downloads_url:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['fork'] ?? null;

            if ($value === null) {
                $missingFields[] = 'fork';
                goto after_fork;
            }

            $properties['fork'] = $value;

            after_fork:

            $value = $payload['forks'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks';
                goto after_forks;
            }

            $properties['forks'] = $value;

            after_forks:

            $value = $payload['forks_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_count';
                goto after_forks_count;
            }

            $properties['forks_count'] = $value;

            after_forks_count:

            $value = $payload['forks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'forks_url';
                goto after_forks_url;
            }

            $properties['forks_url'] = $value;

            after_forks_url:

            $value = $payload['full_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'full_name';
                goto after_full_name;
            }

            $properties['full_name'] = $value;

            after_full_name:

            $value = $payload['git_commits_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_commits_url';
                goto after_git_commits_url;
            }

            $properties['git_commits_url'] = $value;

            after_git_commits_url:

            $value = $payload['git_refs_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_refs_url';
                goto after_git_refs_url;
            }

            $properties['git_refs_url'] = $value;

            after_git_refs_url:

            $value = $payload['git_tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_tags_url';
                goto after_git_tags_url;
            }

            $properties['git_tags_url'] = $value;

            after_git_tags_url:

            $value = $payload['git_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'git_url';
                goto after_git_url;
            }

            $properties['git_url'] = $value;

            after_git_url:

            $value = $payload['has_downloads'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_downloads';
                goto after_has_downloads;
            }

            $properties['has_downloads'] = $value;

            after_has_downloads:

            $value = $payload['has_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_issues';
                goto after_has_issues;
            }

            $properties['has_issues'] = $value;

            after_has_issues:

            $value = $payload['has_pages'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_pages';
                goto after_has_pages;
            }

            $properties['has_pages'] = $value;

            after_has_pages:

            $value = $payload['has_projects'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_projects';
                goto after_has_projects;
            }

            $properties['has_projects'] = $value;

            after_has_projects:

            $value = $payload['has_wiki'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_wiki';
                goto after_has_wiki;
            }

            $properties['has_wiki'] = $value;

            after_has_wiki:

            $value = $payload['has_discussions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'has_discussions';
                goto after_has_discussions;
            }

            $properties['has_discussions'] = $value;

            after_has_discussions:

            $value = $payload['homepage'] ?? null;

            if ($value === null) {
                $properties['homepage'] = null;
                goto after_homepage;
            }

            $properties['homepage'] = $value;

            after_homepage:

            $value = $payload['hooks_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'hooks_url';
                goto after_hooks_url;
            }

            $properties['hooks_url'] = $value;

            after_hooks_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['is_template'] ?? null;

            if ($value === null) {
                $properties['is_template'] = null;
                goto after_is_template;
            }

            $properties['is_template'] = $value;

            after_is_template:

            $value = $payload['issue_comment_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_comment_url';
                goto after_issue_comment_url;
            }

            $properties['issue_comment_url'] = $value;

            after_issue_comment_url:

            $value = $payload['issue_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issue_events_url';
                goto after_issue_events_url;
            }

            $properties['issue_events_url'] = $value;

            after_issue_events_url:

            $value = $payload['issues_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'issues_url';
                goto after_issues_url;
            }

            $properties['issues_url'] = $value;

            after_issues_url:

            $value = $payload['keys_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'keys_url';
                goto after_keys_url;
            }

            $properties['keys_url'] = $value;

            after_keys_url:

            $value = $payload['labels_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'labels_url';
                goto after_labels_url;
            }

            $properties['labels_url'] = $value;

            after_labels_url:

            $value = $payload['language'] ?? null;

            if ($value === null) {
                $properties['language'] = null;
                goto after_language;
            }

            $properties['language'] = $value;

            after_language:

            $value = $payload['languages_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'languages_url';
                goto after_languages_url;
            }

            $properties['languages_url'] = $value;

            after_languages_url:

            $value = $payload['license'] ?? null;

            if ($value === null) {
                $properties['license'] = null;
                goto after_license;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'license';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['license'] = $value;

            after_license:

            $value = $payload['master_branch'] ?? null;

            if ($value === null) {
                $properties['master_branch'] = null;
                goto after_master_branch;
            }

            $properties['master_branch'] = $value;

            after_master_branch:

            $value = $payload['merges_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'merges_url';
                goto after_merges_url;
            }

            $properties['merges_url'] = $value;

            after_merges_url:

            $value = $payload['milestones_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'milestones_url';
                goto after_milestones_url;
            }

            $properties['milestones_url'] = $value;

            after_milestones_url:

            $value = $payload['mirror_url'] ?? null;

            if ($value === null) {
                $properties['mirror_url'] = null;
                goto after_mirror_url;
            }

            $properties['mirror_url'] = $value;

            after_mirror_url:

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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['notifications_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'notifications_url';
                goto after_notifications_url;
            }

            $properties['notifications_url'] = $value;

            after_notifications_url:

            $value = $payload['open_issues'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues';
                goto after_open_issues;
            }

            $properties['open_issues'] = $value;

            after_open_issues:

            $value = $payload['open_issues_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'open_issues_count';
                goto after_open_issues_count;
            }

            $properties['open_issues_count'] = $value;

            after_open_issues_count:

            $value = $payload['organization'] ?? null;

            if ($value === null) {
                $properties['organization'] = null;
                goto after_organization;
            }

            $properties['organization'] = $value;

            after_organization:

            $value = $payload['owner'] ?? null;

            if ($value === null) {
                $properties['owner'] = null;
                goto after_owner;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'owner';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['owner'] = $value;

            after_owner:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

            $value = $payload['private'] ?? null;

            if ($value === null) {
                $missingFields[] = 'private';
                goto after_private;
            }

            $properties['private'] = $value;

            after_private:

            $value = $payload['public'] ?? null;

            if ($value === null) {
                $properties['public'] = null;
                goto after_public;
            }

            $properties['public'] = $value;

            after_public:

            $value = $payload['pulls_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pulls_url';
                goto after_pulls_url;
            }

            $properties['pulls_url'] = $value;

            after_pulls_url:

            $value = $payload['pushed_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pushed_at';
                goto after_pushed_at;
            }

            $properties['pushed_at'] = $value;

            after_pushed_at:

            $value = $payload['releases_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'releases_url';
                goto after_releases_url;
            }

            $properties['releases_url'] = $value;

            after_releases_url:

            $value = $payload['role_name'] ?? null;

            if ($value === null) {
                $properties['role_name'] = null;
                goto after_role_name;
            }

            $properties['role_name'] = $value;

            after_role_name:

            $value = $payload['size'] ?? null;

            if ($value === null) {
                $missingFields[] = 'size';
                goto after_size;
            }

            $properties['size'] = $value;

            after_size:

            $value = $payload['ssh_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'ssh_url';
                goto after_ssh_url;
            }

            $properties['ssh_url'] = $value;

            after_ssh_url:

            $value = $payload['stargazers'] ?? null;

            if ($value === null) {
                $properties['stargazers'] = null;
                goto after_stargazers;
            }

            $properties['stargazers'] = $value;

            after_stargazers:

            $value = $payload['stargazers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_count';
                goto after_stargazers_count;
            }

            $properties['stargazers_count'] = $value;

            after_stargazers_count:

            $value = $payload['stargazers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'stargazers_url';
                goto after_stargazers_url;
            }

            $properties['stargazers_url'] = $value;

            after_stargazers_url:

            $value = $payload['statuses_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'statuses_url';
                goto after_statuses_url;
            }

            $properties['statuses_url'] = $value;

            after_statuses_url:

            $value = $payload['subscribers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscribers_url';
                goto after_subscribers_url;
            }

            $properties['subscribers_url'] = $value;

            after_subscribers_url:

            $value = $payload['subscription_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscription_url';
                goto after_subscription_url;
            }

            $properties['subscription_url'] = $value;

            after_subscription_url:

            $value = $payload['svn_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'svn_url';
                goto after_svn_url;
            }

            $properties['svn_url'] = $value;

            after_svn_url:

            $value = $payload['tags_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tags_url';
                goto after_tags_url;
            }

            $properties['tags_url'] = $value;

            after_tags_url:

            $value = $payload['teams_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'teams_url';
                goto after_teams_url;
            }

            $properties['teams_url'] = $value;

            after_teams_url:

            $value = $payload['topics'] ?? null;

            if ($value === null) {
                $missingFields[] = 'topics';
                goto after_topics;
            }

            $properties['topics'] = $value;

            after_topics:

            $value = $payload['trees_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'trees_url';
                goto after_trees_url;
            }

            $properties['trees_url'] = $value;

            after_trees_url:

            $value = $payload['updated_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'updated_at';
                goto after_updated_at;
            }

            $properties['updated_at'] = $value;

            after_updated_at:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['visibility'] ?? null;

            if ($value === null) {
                $missingFields[] = 'visibility';
                goto after_visibility;
            }

            $properties['visibility'] = $value;

            after_visibility:

            $value = $payload['watchers'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers';
                goto after_watchers;
            }

            $properties['watchers'] = $value;

            after_watchers:

            $value = $payload['watchers_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'watchers_count';
                goto after_watchers_count;
            }

            $properties['watchers_count'] = $value;

            after_watchers_count:

            $value = $payload['web_commit_signoff_required'] ?? null;

            if ($value === null) {
                $properties['web_commit_signoff_required'] = null;
                goto after_web_commit_signoff_required;
            }

            $properties['web_commit_signoff_required'] = $value;

            after_web_commit_signoff_required:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License(array $payload): \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['key'] ?? null;

            if ($value === null) {
                $missingFields[] = 'key';
                goto after_key;
            }

            $properties['key'] = $value;

            after_key:

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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['spdx_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'spdx_id';
                goto after_spdx_id;
            }

            $properties['spdx_id'] = $value;

            after_spdx_id:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy(array $payload): \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $properties['avatar_url'] = null;
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

            $value = $payload['deleted'] ?? null;

            if ($value === null) {
                $properties['deleted'] = null;
                goto after_deleted;
            }

            $properties['deleted'] = $value;

            after_deleted:

            $value = $payload['email'] ?? null;

            if ($value === null) {
                $properties['email'] = null;
                goto after_email;
            }

            $properties['email'] = $value;

            after_email:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $properties['events_url'] = null;
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $properties['followers_url'] = null;
                goto after_followers_url;
            }

            $properties['followers_url'] = $value;

            after_followers_url:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $properties['following_url'] = null;
                goto after_following_url;
            }

            $properties['following_url'] = $value;

            after_following_url:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $properties['gists_url'] = null;
                goto after_gists_url;
            }

            $properties['gists_url'] = $value;

            after_gists_url:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatar_id'] = null;
                goto after_gravatar_id;
            }

            $properties['gravatar_id'] = $value;

            after_gravatar_id:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['html_url'] = null;
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['login'] ?? null;

            if ($value === null) {
                $missingFields[] = 'login';
                goto after_login;
            }

            $properties['login'] = $value;

            after_login:

            $value = $payload['name'] ?? null;

            if ($value === null) {
                $properties['name'] = null;
                goto after_name;
            }

            $properties['name'] = $value;

            after_name:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $properties['node_id'] = null;
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $properties['organizations_url'] = null;
                goto after_organizations_url;
            }

            $properties['organizations_url'] = $value;

            after_organizations_url:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $properties['received_events_url'] = null;
                goto after_received_events_url;
            }

            $properties['received_events_url'] = $value;

            after_received_events_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $properties['repos_url'] = null;
                goto after_repos_url;
            }

            $properties['repos_url'] = $value;

            after_repos_url:

            $value = $payload['site_admin'] ?? null;

            if ($value === null) {
                $properties['site_admin'] = null;
                goto after_site_admin;
            }

            $properties['site_admin'] = $value;

            after_site_admin:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $properties['starred_url'] = null;
                goto after_starred_url;
            }

            $properties['starred_url'] = $value;

            after_starred_url:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $properties['subscriptions_url'] = null;
                goto after_subscriptions_url;
            }

            $properties['subscriptions_url'] = $value;

            after_subscriptions_url:

            $value = $payload['type'] ?? null;

            if ($value === null) {
                $properties['type'] = null;
                goto after_type;
            }

            $properties['type'] = $value;

            after_type:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'admin';
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $properties['maintain'] = null;
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:

            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull';
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $missingFields[] = 'push';
                goto after_push;
            }

            $properties['push'] = $value;

            after_push:

            $value = $payload['triage'] ?? null;

            if ($value === null) {
                $properties['triage'] = null;
                goto after_triage;
            }

            $properties['triage'] = $value;

            after_triage:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(array $payload): \ApiClients\Client\GitHub\Schema\SimpleUser
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
                goto after_node_id;
            }

            $properties['node_id'] = $value;

            after_node_id:

            $value = $payload['avatar_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'avatar_url';
                goto after_avatar_url;
            }

            $properties['avatar_url'] = $value;

            after_avatar_url:

            $value = $payload['gravatar_id'] ?? null;

            if ($value === null) {
                $properties['gravatar_id'] = null;
                goto after_gravatar_id;
            }

            $properties['gravatar_id'] = $value;

            after_gravatar_id:

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
                goto after_html_url;
            }

            $properties['html_url'] = $value;

            after_html_url:

            $value = $payload['followers_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'followers_url';
                goto after_followers_url;
            }

            $properties['followers_url'] = $value;

            after_followers_url:

            $value = $payload['following_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'following_url';
                goto after_following_url;
            }

            $properties['following_url'] = $value;

            after_following_url:

            $value = $payload['gists_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'gists_url';
                goto after_gists_url;
            }

            $properties['gists_url'] = $value;

            after_gists_url:

            $value = $payload['starred_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'starred_url';
                goto after_starred_url;
            }

            $properties['starred_url'] = $value;

            after_starred_url:

            $value = $payload['subscriptions_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'subscriptions_url';
                goto after_subscriptions_url;
            }

            $properties['subscriptions_url'] = $value;

            after_subscriptions_url:

            $value = $payload['organizations_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'organizations_url';
                goto after_organizations_url;
            }

            $properties['organizations_url'] = $value;

            after_organizations_url:

            $value = $payload['repos_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repos_url';
                goto after_repos_url;
            }

            $properties['repos_url'] = $value;

            after_repos_url:

            $value = $payload['events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'events_url';
                goto after_events_url;
            }

            $properties['events_url'] = $value;

            after_events_url:

            $value = $payload['received_events_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'received_events_url';
                goto after_received_events_url;
            }

            $properties['received_events_url'] = $value;

            after_received_events_url:

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
                goto after_site_admin;
            }

            $properties['site_admin'] = $value;

            after_site_admin:

            $value = $payload['starred_at'] ?? null;

            if ($value === null) {
                $properties['starred_at'] = null;
                goto after_starred_at;
            }

            $properties['starred_at'] = $value;

            after_starred_at:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\SimpleUser::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\SimpleUser(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\SimpleUser', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\WebhookPush' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush($object),
            'ApiClients\Client\GitHub\Schema\WebhookPush\Commits' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Commits($object),
            'ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($object),
            'ApiClients\Client\GitHub\Schema\Enterprise' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($object),
            'ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️HeadCommit($object),
            'ApiClients\Client\GitHub\Schema\SimpleInstallation' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($object),
            'ApiClients\Client\GitHub\Schema\OrganizationSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($object),
            'ApiClients\Client\GitHub\Schema\WebhookPush\Pusher' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Pusher($object),
            'ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository($object),
            'ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($object),
            'ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($object),
            'ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\SimpleUser' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPush);
        $result = [];

        $after = $object->after;
        after_after:        $result['after'] = $after;

        
        $base_ref = $object->base_ref;

        if ($base_ref === null) {
            goto after_base_ref;
        }
        after_base_ref:        $result['base_ref'] = $base_ref;

        
        $before = $object->before;
        after_before:        $result['before'] = $before;

        
        $commits = $object->commits;
        static $commitsSerializer0;

        if ($commitsSerializer0 === null) {
            $commitsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\WebhookPush\\Commits',
));
        }
        
        $commits = $commitsSerializer0->serialize($commits, $this);
        after_commits:        $result['commits'] = $commits;

        
        $compare = $object->compare;
        after_compare:        $result['compare'] = $compare;

        
        $created = $object->created;
        after_created:        $result['created'] = $created;

        
        $deleted = $object->deleted;
        after_deleted:        $result['deleted'] = $deleted;

        
        $enterprise = $object->enterprise;

        if ($enterprise === null) {
            goto after_enterprise;
        }
        $enterprise = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise($enterprise);
        after_enterprise:        $result['enterprise'] = $enterprise;

        
        $forced = $object->forced;
        after_forced:        $result['forced'] = $forced;

        
        $head_commit = $object->head_commit;

        if ($head_commit === null) {
            goto after_head_commit;
        }
        $head_commit = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️HeadCommit($head_commit);
        after_head_commit:        $result['head_commit'] = $head_commit;

        
        $installation = $object->installation;

        if ($installation === null) {
            goto after_installation;
        }
        $installation = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation($installation);
        after_installation:        $result['installation'] = $installation;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        $organization = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple($organization);
        after_organization:        $result['organization'] = $organization;

        
        $pusher = $object->pusher;
        $pusher = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Pusher($pusher);
        after_pusher:        $result['pusher'] = $pusher;

        
        $ref = $object->ref;
        after_ref:        $result['ref'] = $ref;

        
        $repository = $object->repository;
        $repository = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository($repository);
        after_repository:        $result['repository'] = $repository;

        
        $sender = $object->sender;

        if ($sender === null) {
            goto after_sender;
        }
        $sender = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser($sender);
        after_sender:        $result['sender'] = $sender;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Commits(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPush\Commits);
        $result = [];

        $added = $object->added;

        if ($added === null) {
            goto after_added;
        }
        static $addedSerializer0;

        if ($addedSerializer0 === null) {
            $addedSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $added = $addedSerializer0->serialize($added, $this);
        after_added:        $result['added'] = $added;

        
        $author = $object->author;
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($author);
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;
        $committer = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($committer);
        after_committer:        $result['committer'] = $committer;

        
        $distinct = $object->distinct;
        after_distinct:        $result['distinct'] = $distinct;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $modified = $object->modified;

        if ($modified === null) {
            goto after_modified;
        }
        static $modifiedSerializer0;

        if ($modifiedSerializer0 === null) {
            $modifiedSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $modified = $modifiedSerializer0->serialize($modified, $this);
        after_modified:        $result['modified'] = $modified;

        
        $removed = $object->removed;

        if ($removed === null) {
            goto after_removed;
        }
        static $removedSerializer0;

        if ($removedSerializer0 === null) {
            $removedSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $removed = $removedSerializer0->serialize($removed, $this);
        after_removed:        $result['removed'] = $removed;

        
        $timestamp = $object->timestamp;
        after_timestamp:        $result['timestamp'] = $timestamp;

        
        $tree_id = $object->tree_id;
        after_tree_id:        $result['tree_id'] = $tree_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookCheckSuiteCompleted\CheckSuite\HeadCommit\Author);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }
        after_date:        $result['date'] = $date;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }
        after_username:        $result['username'] = $username;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Enterprise(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Enterprise);
        $result = [];

        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $website_url = $object->website_url;

        if ($website_url === null) {
            goto after_website_url;
        }
        after_website_url:        $result['website_url'] = $website_url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
        $created_at = $object->created_at;

        if ($created_at === null) {
            goto after_created_at;
        }
        after_created_at:        $result['created_at'] = $created_at;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️HeadCommit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPush\HeadCommit);
        $result = [];

        $added = $object->added;

        if ($added === null) {
            goto after_added;
        }
        static $addedSerializer0;

        if ($addedSerializer0 === null) {
            $addedSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $added = $addedSerializer0->serialize($added, $this);
        after_added:        $result['added'] = $added;

        
        $author = $object->author;
        $author = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($author);
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;
        $committer = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookCheckSuiteCompleted⚡️CheckSuite⚡️HeadCommit⚡️Author($committer);
        after_committer:        $result['committer'] = $committer;

        
        $distinct = $object->distinct;
        after_distinct:        $result['distinct'] = $distinct;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $modified = $object->modified;

        if ($modified === null) {
            goto after_modified;
        }
        static $modifiedSerializer0;

        if ($modifiedSerializer0 === null) {
            $modifiedSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $modified = $modifiedSerializer0->serialize($modified, $this);
        after_modified:        $result['modified'] = $modified;

        
        $removed = $object->removed;

        if ($removed === null) {
            goto after_removed;
        }
        static $removedSerializer0;

        if ($removedSerializer0 === null) {
            $removedSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $removed = $removedSerializer0->serialize($removed, $this);
        after_removed:        $result['removed'] = $removed;

        
        $timestamp = $object->timestamp;
        after_timestamp:        $result['timestamp'] = $timestamp;

        
        $tree_id = $object->tree_id;
        after_tree_id:        $result['tree_id'] = $tree_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleInstallation(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleInstallation);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️OrganizationSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\OrganizationSimple);
        $result = [];

        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $repos_url = $object->repos_url;
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $hooks_url = $object->hooks_url;
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $issues_url = $object->issues_url;
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $members_url = $object->members_url;
        after_members_url:        $result['members_url'] = $members_url;

        
        $public_members_url = $object->public_members_url;
        after_public_members_url:        $result['public_members_url'] = $public_members_url;

        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookPush⚡️Pusher(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookPush\Pusher);
        $result = [];

        $date = $object->date;

        if ($date === null) {
            goto after_date;
        }
        after_date:        $result['date'] = $date;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $username = $object->username;

        if ($username === null) {
            goto after_username;
        }
        after_username:        $result['username'] = $username;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookIssuesTransferred⚡️Changes⚡️NewRepository(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookIssuesTransferred\Changes\NewRepository);
        $result = [];

        $allow_auto_merge = $object->allow_auto_merge;

        if ($allow_auto_merge === null) {
            goto after_allow_auto_merge;
        }
        after_allow_auto_merge:        $result['allow_auto_merge'] = $allow_auto_merge;

        
        $allow_forking = $object->allow_forking;

        if ($allow_forking === null) {
            goto after_allow_forking;
        }
        after_allow_forking:        $result['allow_forking'] = $allow_forking;

        
        $allow_merge_commit = $object->allow_merge_commit;

        if ($allow_merge_commit === null) {
            goto after_allow_merge_commit;
        }
        after_allow_merge_commit:        $result['allow_merge_commit'] = $allow_merge_commit;

        
        $allow_rebase_merge = $object->allow_rebase_merge;

        if ($allow_rebase_merge === null) {
            goto after_allow_rebase_merge;
        }
        after_allow_rebase_merge:        $result['allow_rebase_merge'] = $allow_rebase_merge;

        
        $allow_squash_merge = $object->allow_squash_merge;

        if ($allow_squash_merge === null) {
            goto after_allow_squash_merge;
        }
        after_allow_squash_merge:        $result['allow_squash_merge'] = $allow_squash_merge;

        
        $allow_update_branch = $object->allow_update_branch;

        if ($allow_update_branch === null) {
            goto after_allow_update_branch;
        }
        after_allow_update_branch:        $result['allow_update_branch'] = $allow_update_branch;

        
        $archive_url = $object->archive_url;
        after_archive_url:        $result['archive_url'] = $archive_url;

        
        $archived = $object->archived;
        after_archived:        $result['archived'] = $archived;

        
        $assignees_url = $object->assignees_url;
        after_assignees_url:        $result['assignees_url'] = $assignees_url;

        
        $blobs_url = $object->blobs_url;
        after_blobs_url:        $result['blobs_url'] = $blobs_url;

        
        $branches_url = $object->branches_url;
        after_branches_url:        $result['branches_url'] = $branches_url;

        
        $clone_url = $object->clone_url;
        after_clone_url:        $result['clone_url'] = $clone_url;

        
        $collaborators_url = $object->collaborators_url;
        after_collaborators_url:        $result['collaborators_url'] = $collaborators_url;

        
        $comments_url = $object->comments_url;
        after_comments_url:        $result['comments_url'] = $comments_url;

        
        $commits_url = $object->commits_url;
        after_commits_url:        $result['commits_url'] = $commits_url;

        
        $compare_url = $object->compare_url;
        after_compare_url:        $result['compare_url'] = $compare_url;

        
        $contents_url = $object->contents_url;
        after_contents_url:        $result['contents_url'] = $contents_url;

        
        $contributors_url = $object->contributors_url;
        after_contributors_url:        $result['contributors_url'] = $contributors_url;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $default_branch = $object->default_branch;
        after_default_branch:        $result['default_branch'] = $default_branch;

        
        $delete_branch_on_merge = $object->delete_branch_on_merge;

        if ($delete_branch_on_merge === null) {
            goto after_delete_branch_on_merge;
        }
        after_delete_branch_on_merge:        $result['delete_branch_on_merge'] = $delete_branch_on_merge;

        
        $deployments_url = $object->deployments_url;
        after_deployments_url:        $result['deployments_url'] = $deployments_url;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $disabled = $object->disabled;

        if ($disabled === null) {
            goto after_disabled;
        }
        after_disabled:        $result['disabled'] = $disabled;

        
        $downloads_url = $object->downloads_url;
        after_downloads_url:        $result['downloads_url'] = $downloads_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $fork = $object->fork;
        after_fork:        $result['fork'] = $fork;

        
        $forks = $object->forks;
        after_forks:        $result['forks'] = $forks;

        
        $forks_count = $object->forks_count;
        after_forks_count:        $result['forks_count'] = $forks_count;

        
        $forks_url = $object->forks_url;
        after_forks_url:        $result['forks_url'] = $forks_url;

        
        $full_name = $object->full_name;
        after_full_name:        $result['full_name'] = $full_name;

        
        $git_commits_url = $object->git_commits_url;
        after_git_commits_url:        $result['git_commits_url'] = $git_commits_url;

        
        $git_refs_url = $object->git_refs_url;
        after_git_refs_url:        $result['git_refs_url'] = $git_refs_url;

        
        $git_tags_url = $object->git_tags_url;
        after_git_tags_url:        $result['git_tags_url'] = $git_tags_url;

        
        $git_url = $object->git_url;
        after_git_url:        $result['git_url'] = $git_url;

        
        $has_downloads = $object->has_downloads;
        after_has_downloads:        $result['has_downloads'] = $has_downloads;

        
        $has_issues = $object->has_issues;
        after_has_issues:        $result['has_issues'] = $has_issues;

        
        $has_pages = $object->has_pages;
        after_has_pages:        $result['has_pages'] = $has_pages;

        
        $has_projects = $object->has_projects;
        after_has_projects:        $result['has_projects'] = $has_projects;

        
        $has_wiki = $object->has_wiki;
        after_has_wiki:        $result['has_wiki'] = $has_wiki;

        
        $has_discussions = $object->has_discussions;
        after_has_discussions:        $result['has_discussions'] = $has_discussions;

        
        $homepage = $object->homepage;

        if ($homepage === null) {
            goto after_homepage;
        }
        after_homepage:        $result['homepage'] = $homepage;

        
        $hooks_url = $object->hooks_url;
        after_hooks_url:        $result['hooks_url'] = $hooks_url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $is_template = $object->is_template;

        if ($is_template === null) {
            goto after_is_template;
        }
        after_is_template:        $result['is_template'] = $is_template;

        
        $issue_comment_url = $object->issue_comment_url;
        after_issue_comment_url:        $result['issue_comment_url'] = $issue_comment_url;

        
        $issue_events_url = $object->issue_events_url;
        after_issue_events_url:        $result['issue_events_url'] = $issue_events_url;

        
        $issues_url = $object->issues_url;
        after_issues_url:        $result['issues_url'] = $issues_url;

        
        $keys_url = $object->keys_url;
        after_keys_url:        $result['keys_url'] = $keys_url;

        
        $labels_url = $object->labels_url;
        after_labels_url:        $result['labels_url'] = $labels_url;

        
        $language = $object->language;

        if ($language === null) {
            goto after_language;
        }
        after_language:        $result['language'] = $language;

        
        $languages_url = $object->languages_url;
        after_languages_url:        $result['languages_url'] = $languages_url;

        
        $license = $object->license;

        if ($license === null) {
            goto after_license;
        }
        $license = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License($license);
        after_license:        $result['license'] = $license;

        
        $master_branch = $object->master_branch;

        if ($master_branch === null) {
            goto after_master_branch;
        }
        after_master_branch:        $result['master_branch'] = $master_branch;

        
        $merges_url = $object->merges_url;
        after_merges_url:        $result['merges_url'] = $merges_url;

        
        $milestones_url = $object->milestones_url;
        after_milestones_url:        $result['milestones_url'] = $milestones_url;

        
        $mirror_url = $object->mirror_url;

        if ($mirror_url === null) {
            goto after_mirror_url;
        }
        after_mirror_url:        $result['mirror_url'] = $mirror_url;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $notifications_url = $object->notifications_url;
        after_notifications_url:        $result['notifications_url'] = $notifications_url;

        
        $open_issues = $object->open_issues;
        after_open_issues:        $result['open_issues'] = $open_issues;

        
        $open_issues_count = $object->open_issues_count;
        after_open_issues_count:        $result['open_issues_count'] = $open_issues_count;

        
        $organization = $object->organization;

        if ($organization === null) {
            goto after_organization;
        }
        after_organization:        $result['organization'] = $organization;

        
        $owner = $object->owner;

        if ($owner === null) {
            goto after_owner;
        }
        $owner = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy($owner);
        after_owner:        $result['owner'] = $owner;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $private = $object->private;
        after_private:        $result['private'] = $private;

        
        $public = $object->public;

        if ($public === null) {
            goto after_public;
        }
        after_public:        $result['public'] = $public;

        
        $pulls_url = $object->pulls_url;
        after_pulls_url:        $result['pulls_url'] = $pulls_url;

        
        $pushed_at = $object->pushed_at;
        after_pushed_at:        $result['pushed_at'] = $pushed_at;

        
        $releases_url = $object->releases_url;
        after_releases_url:        $result['releases_url'] = $releases_url;

        
        $role_name = $object->role_name;

        if ($role_name === null) {
            goto after_role_name;
        }
        after_role_name:        $result['role_name'] = $role_name;

        
        $size = $object->size;
        after_size:        $result['size'] = $size;

        
        $ssh_url = $object->ssh_url;
        after_ssh_url:        $result['ssh_url'] = $ssh_url;

        
        $stargazers = $object->stargazers;

        if ($stargazers === null) {
            goto after_stargazers;
        }
        after_stargazers:        $result['stargazers'] = $stargazers;

        
        $stargazers_count = $object->stargazers_count;
        after_stargazers_count:        $result['stargazers_count'] = $stargazers_count;

        
        $stargazers_url = $object->stargazers_url;
        after_stargazers_url:        $result['stargazers_url'] = $stargazers_url;

        
        $statuses_url = $object->statuses_url;
        after_statuses_url:        $result['statuses_url'] = $statuses_url;

        
        $subscribers_url = $object->subscribers_url;
        after_subscribers_url:        $result['subscribers_url'] = $subscribers_url;

        
        $subscription_url = $object->subscription_url;
        after_subscription_url:        $result['subscription_url'] = $subscription_url;

        
        $svn_url = $object->svn_url;
        after_svn_url:        $result['svn_url'] = $svn_url;

        
        $tags_url = $object->tags_url;
        after_tags_url:        $result['tags_url'] = $tags_url;

        
        $teams_url = $object->teams_url;
        after_teams_url:        $result['teams_url'] = $teams_url;

        
        $topics = $object->topics;
        static $topicsSerializer0;

        if ($topicsSerializer0 === null) {
            $topicsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $topics = $topicsSerializer0->serialize($topics, $this);
        after_topics:        $result['topics'] = $topics;

        
        $trees_url = $object->trees_url;
        after_trees_url:        $result['trees_url'] = $trees_url;

        
        $updated_at = $object->updated_at;
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $visibility = $object->visibility;
        after_visibility:        $result['visibility'] = $visibility;

        
        $watchers = $object->watchers;
        after_watchers:        $result['watchers'] = $watchers;

        
        $watchers_count = $object->watchers_count;
        after_watchers_count:        $result['watchers_count'] = $watchers_count;

        
        $web_commit_signoff_required = $object->web_commit_signoff_required;

        if ($web_commit_signoff_required === null) {
            goto after_web_commit_signoff_required;
        }
        after_web_commit_signoff_required:        $result['web_commit_signoff_required'] = $web_commit_signoff_required;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️License(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\License);
        $result = [];

        $key = $object->key;
        after_key:        $result['key'] = $key;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $spdx_id = $object->spdx_id;
        after_spdx_id:        $result['spdx_id'] = $spdx_id;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Discussion⚡️AnswerChosenBy(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Discussion\AnswerChosenBy);
        $result = [];

        $avatar_url = $object->avatar_url;

        if ($avatar_url === null) {
            goto after_avatar_url;
        }
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $deleted = $object->deleted;

        if ($deleted === null) {
            goto after_deleted;
        }
        after_deleted:        $result['deleted'] = $deleted;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $events_url = $object->events_url;

        if ($events_url === null) {
            goto after_events_url;
        }
        after_events_url:        $result['events_url'] = $events_url;

        
        $followers_url = $object->followers_url;

        if ($followers_url === null) {
            goto after_followers_url;
        }
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;

        if ($following_url === null) {
            goto after_following_url;
        }
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;

        if ($gists_url === null) {
            goto after_gists_url;
        }
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $login = $object->login;
        after_login:        $result['login'] = $login;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $organizations_url = $object->organizations_url;

        if ($organizations_url === null) {
            goto after_organizations_url;
        }
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $received_events_url = $object->received_events_url;

        if ($received_events_url === null) {
            goto after_received_events_url;
        }
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $repos_url = $object->repos_url;

        if ($repos_url === null) {
            goto after_repos_url;
        }
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $site_admin = $object->site_admin;

        if ($site_admin === null) {
            goto after_site_admin;
        }
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_url = $object->starred_url;

        if ($starred_url === null) {
            goto after_starred_url;
        }
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;

        if ($subscriptions_url === null) {
            goto after_subscriptions_url;
        }
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️WebhookFork⚡️Forkee⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\WebhookFork\Forkee\Permissions);
        $result = [];

        $admin = $object->admin;
        after_admin:        $result['admin'] = $admin;

        
        $maintain = $object->maintain;

        if ($maintain === null) {
            goto after_maintain;
        }
        after_maintain:        $result['maintain'] = $maintain;

        
        $pull = $object->pull;
        after_pull:        $result['pull'] = $pull;

        
        $push = $object->push;
        after_push:        $result['push'] = $push;

        
        $triage = $object->triage;

        if ($triage === null) {
            goto after_triage;
        }
        after_triage:        $result['triage'] = $triage;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️SimpleUser(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\SimpleUser);
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

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $avatar_url = $object->avatar_url;
        after_avatar_url:        $result['avatar_url'] = $avatar_url;

        
        $gravatar_id = $object->gravatar_id;

        if ($gravatar_id === null) {
            goto after_gravatar_id;
        }
        after_gravatar_id:        $result['gravatar_id'] = $gravatar_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $followers_url = $object->followers_url;
        after_followers_url:        $result['followers_url'] = $followers_url;

        
        $following_url = $object->following_url;
        after_following_url:        $result['following_url'] = $following_url;

        
        $gists_url = $object->gists_url;
        after_gists_url:        $result['gists_url'] = $gists_url;

        
        $starred_url = $object->starred_url;
        after_starred_url:        $result['starred_url'] = $starred_url;

        
        $subscriptions_url = $object->subscriptions_url;
        after_subscriptions_url:        $result['subscriptions_url'] = $subscriptions_url;

        
        $organizations_url = $object->organizations_url;
        after_organizations_url:        $result['organizations_url'] = $organizations_url;

        
        $repos_url = $object->repos_url;
        after_repos_url:        $result['repos_url'] = $repos_url;

        
        $events_url = $object->events_url;
        after_events_url:        $result['events_url'] = $events_url;

        
        $received_events_url = $object->received_events_url;
        after_received_events_url:        $result['received_events_url'] = $received_events_url;

        
        $type = $object->type;
        after_type:        $result['type'] = $type;

        
        $site_admin = $object->site_admin;
        after_site_admin:        $result['site_admin'] = $site_admin;

        
        $starred_at = $object->starred_at;

        if ($starred_at === null) {
            goto after_starred_at;
        }
        after_starred_at:        $result['starred_at'] = $starred_at;


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
