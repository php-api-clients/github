<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Issues;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Events implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\IssueEvent' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEvent($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventLabel' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel($payload),
                'ApiClients\Client\GitHub\Schema\Team' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($payload),
                'ApiClients\Client\GitHub\Schema\Team\Permissions' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventDismissedReview' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventMilestone' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventProjectCard' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard($payload),
                'ApiClients\Client\GitHub\Schema\IssueEventRename' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEvent(array $payload): \ApiClients\Client\GitHub\Schema\IssueEvent
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

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['actor'] ?? null;

            if ($value === null) {
                $properties['actor'] = null;
                goto after_actor;
            }

            $properties['actor'] = $value;

            after_actor:

            $value = $payload['event'] ?? null;

            if ($value === null) {
                $missingFields[] = 'event';
                goto after_event;
            }

            $properties['event'] = $value;

            after_event:

            $value = $payload['commit_id'] ?? null;

            if ($value === null) {
                $properties['commit_id'] = null;
                goto after_commit_id;
            }

            $properties['commit_id'] = $value;

            after_commit_id:

            $value = $payload['commit_url'] ?? null;

            if ($value === null) {
                $properties['commit_url'] = null;
                goto after_commit_url;
            }

            $properties['commit_url'] = $value;

            after_commit_url:

            $value = $payload['created_at'] ?? null;

            if ($value === null) {
                $missingFields[] = 'created_at';
                goto after_created_at;
            }

            $properties['created_at'] = $value;

            after_created_at:

            $value = $payload['issue'] ?? null;

            if ($value === null) {
                $properties['issue'] = null;
                goto after_issue;
            }

            $properties['issue'] = $value;

            after_issue:

            $value = $payload['label'] ?? null;

            if ($value === null) {
                $properties['label'] = null;
                goto after_label;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'label';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['label'] = $value;

            after_label:

            $value = $payload['assignee'] ?? null;

            if ($value === null) {
                $properties['assignee'] = null;
                goto after_assignee;
            }

            $properties['assignee'] = $value;

            after_assignee:

            $value = $payload['assigner'] ?? null;

            if ($value === null) {
                $properties['assigner'] = null;
                goto after_assigner;
            }

            $properties['assigner'] = $value;

            after_assigner:

            $value = $payload['review_requester'] ?? null;

            if ($value === null) {
                $properties['review_requester'] = null;
                goto after_review_requester;
            }

            $properties['review_requester'] = $value;

            after_review_requester:

            $value = $payload['requested_reviewer'] ?? null;

            if ($value === null) {
                $properties['requested_reviewer'] = null;
                goto after_requested_reviewer;
            }

            $properties['requested_reviewer'] = $value;

            after_requested_reviewer:

            $value = $payload['requested_team'] ?? null;

            if ($value === null) {
                $properties['requested_team'] = null;
                goto after_requested_team;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'requested_team';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['requested_team'] = $value;

            after_requested_team:

            $value = $payload['dismissed_review'] ?? null;

            if ($value === null) {
                $properties['dismissed_review'] = null;
                goto after_dismissed_review;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'dismissed_review';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['dismissed_review'] = $value;

            after_dismissed_review:

            $value = $payload['milestone'] ?? null;

            if ($value === null) {
                $properties['milestone'] = null;
                goto after_milestone;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'milestone';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['milestone'] = $value;

            after_milestone:

            $value = $payload['project_card'] ?? null;

            if ($value === null) {
                $properties['project_card'] = null;
                goto after_project_card;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'project_card';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['project_card'] = $value;

            after_project_card:

            $value = $payload['rename'] ?? null;

            if ($value === null) {
                $properties['rename'] = null;
                goto after_rename;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'rename';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['rename'] = $value;

            after_rename:

            $value = $payload['author_association'] ?? null;

            if ($value === null) {
                $properties['author_association'] = null;
                goto after_author_association;
            }

            $properties['author_association'] = $value;

            after_author_association:

            $value = $payload['lock_reason'] ?? null;

            if ($value === null) {
                $properties['lock_reason'] = null;
                goto after_lock_reason;
            }

            $properties['lock_reason'] = $value;

            after_lock_reason:

            $value = $payload['performed_via_github_app'] ?? null;

            if ($value === null) {
                $properties['performed_via_github_app'] = null;
                goto after_performed_via_github_app;
            }

            $properties['performed_via_github_app'] = $value;

            after_performed_via_github_app:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEvent', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEvent::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEvent(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEvent', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventLabel
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

            $value = $payload['color'] ?? null;

            if ($value === null) {
                $properties['color'] = null;
                goto after_color;
            }

            $properties['color'] = $value;

            after_color:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventLabel', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventLabel::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventLabel(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventLabel', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team(array $payload): \ApiClients\Client\GitHub\Schema\Team
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

            $value = $payload['description'] ?? null;

            if ($value === null) {
                $properties['description'] = null;
                goto after_description;
            }

            $properties['description'] = $value;

            after_description:

            $value = $payload['privacy'] ?? null;

            if ($value === null) {
                $properties['privacy'] = null;
                goto after_privacy;
            }

            $properties['privacy'] = $value;

            after_privacy:

            $value = $payload['permission'] ?? null;

            if ($value === null) {
                $missingFields[] = 'permission';
                goto after_permission;
            }

            $properties['permission'] = $value;

            after_permission:

            $value = $payload['permissions'] ?? null;

            if ($value === null) {
                $properties['permissions'] = null;
                goto after_permissions;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'permissions';
                    $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['permissions'] = $value;

            after_permissions:

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

            $value = $payload['members_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'members_url';
                goto after_members_url;
            }

            $properties['members_url'] = $value;

            after_members_url:

            $value = $payload['repositories_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'repositories_url';
                goto after_repositories_url;
            }

            $properties['repositories_url'] = $value;

            after_repositories_url:

            $value = $payload['parent'] ?? null;

            if ($value === null) {
                $properties['parent'] = null;
                goto after_parent;
            }

            $properties['parent'] = $value;

            after_parent:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Team::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Team(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions(array $payload): \ApiClients\Client\GitHub\Schema\Team\Permissions
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['pull'] ?? null;

            if ($value === null) {
                $missingFields[] = 'pull';
                goto after_pull;
            }

            $properties['pull'] = $value;

            after_pull:

            $value = $payload['triage'] ?? null;

            if ($value === null) {
                $missingFields[] = 'triage';
                goto after_triage;
            }

            $properties['triage'] = $value;

            after_triage:

            $value = $payload['push'] ?? null;

            if ($value === null) {
                $missingFields[] = 'push';
                goto after_push;
            }

            $properties['push'] = $value;

            after_push:

            $value = $payload['maintain'] ?? null;

            if ($value === null) {
                $missingFields[] = 'maintain';
                goto after_maintain;
            }

            $properties['maintain'] = $value;

            after_maintain:

            $value = $payload['admin'] ?? null;

            if ($value === null) {
                $missingFields[] = 'admin';
                goto after_admin;
            }

            $properties['admin'] = $value;

            after_admin:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\Team\Permissions::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\Team\Permissions(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\Team\Permissions', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventDismissedReview
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['state'] ?? null;

            if ($value === null) {
                $missingFields[] = 'state';
                goto after_state;
            }

            $properties['state'] = $value;

            after_state:

            $value = $payload['review_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'review_id';
                goto after_review_id;
            }

            $properties['review_id'] = $value;

            after_review_id:

            $value = $payload['dismissal_message'] ?? null;

            if ($value === null) {
                $properties['dismissal_message'] = null;
                goto after_dismissal_message;
            }

            $properties['dismissal_message'] = $value;

            after_dismissal_message:

            $value = $payload['dismissal_commit_id'] ?? null;

            if ($value === null) {
                $properties['dismissal_commit_id'] = null;
                goto after_dismissal_commit_id;
            }

            $properties['dismissal_commit_id'] = $value;

            after_dismissal_commit_id:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventDismissedReview', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventDismissedReview::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventDismissedReview(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventDismissedReview', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventMilestone
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['title'] ?? null;

            if ($value === null) {
                $missingFields[] = 'title';
                goto after_title;
            }

            $properties['title'] = $value;

            after_title:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventMilestone', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventMilestone::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventMilestone(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventMilestone', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventProjectCard
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'id';
                goto after_id;
            }

            $properties['id'] = $value;

            after_id:

            $value = $payload['project_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'project_url';
                goto after_project_url;
            }

            $properties['project_url'] = $value;

            after_project_url:

            $value = $payload['project_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'project_id';
                goto after_project_id;
            }

            $properties['project_id'] = $value;

            after_project_id:

            $value = $payload['column_name'] ?? null;

            if ($value === null) {
                $missingFields[] = 'column_name';
                goto after_column_name;
            }

            $properties['column_name'] = $value;

            after_column_name:

            $value = $payload['previous_column_name'] ?? null;

            if ($value === null) {
                $properties['previous_column_name'] = null;
                goto after_previous_column_name;
            }

            $properties['previous_column_name'] = $value;

            after_previous_column_name:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventProjectCard', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventProjectCard::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventProjectCard(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventProjectCard', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename(array $payload): \ApiClients\Client\GitHub\Schema\IssueEventRename
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['from'] ?? null;

            if ($value === null) {
                $missingFields[] = 'from';
                goto after_from;
            }

            $properties['from'] = $value;

            after_from:

            $value = $payload['to'] ?? null;

            if ($value === null) {
                $missingFields[] = 'to';
                goto after_to;
            }

            $properties['to'] = $value;

            after_to:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventRename', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\IssueEventRename::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\IssueEventRename(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\IssueEventRename', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'documentation_url';
                goto after_documentation_url;
            }

            $properties['documentation_url'] = $value;

            after_documentation_url:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError\Errors
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['resource'] ?? null;

            if ($value === null) {
                $properties['resource'] = null;
                goto after_resource;
            }

            $properties['resource'] = $value;

            after_resource:

            $value = $payload['field'] ?? null;

            if ($value === null) {
                $properties['field'] = null;
                goto after_field;
            }

            $properties['field'] = $value;

            after_field:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['code'] ?? null;

            if ($value === null) {
                $missingFields[] = 'code';
                goto after_code;
            }

            $properties['code'] = $value;

            after_code:

            $value = $payload['index'] ?? null;

            if ($value === null) {
                $properties['index'] = null;
                goto after_index;
            }

            $properties['index'] = $value;

            after_index:

            $value = $payload['value'] ?? null;

            if ($value === null) {
                $properties['value'] = null;
                goto after_value;
            }

            $properties['value'] = $value;

            after_value:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\GitHub\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\GitHub\Schema\IssueEvent' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEvent($object),
            'ApiClients\Client\GitHub\Schema\IssueEventLabel' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel($object),
            'ApiClients\Client\GitHub\Schema\Team' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($object),
            'ApiClients\Client\GitHub\Schema\Team\Permissions' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($object),
            'ApiClients\Client\GitHub\Schema\IssueEventDismissedReview' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview($object),
            'ApiClients\Client\GitHub\Schema\IssueEventMilestone' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone($object),
            'ApiClients\Client\GitHub\Schema\IssueEventProjectCard' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard($object),
            'ApiClients\Client\GitHub\Schema\IssueEventRename' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename($object),
            'ApiClients\Client\GitHub\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEvent(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEvent);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $actor = $object->actor;

        if ($actor === null) {
            goto after_actor;
        }
        after_actor:        $result['actor'] = $actor;

        
        $event = $object->event;
        after_event:        $result['event'] = $event;

        
        $commit_id = $object->commit_id;

        if ($commit_id === null) {
            goto after_commit_id;
        }
        after_commit_id:        $result['commit_id'] = $commit_id;

        
        $commit_url = $object->commit_url;

        if ($commit_url === null) {
            goto after_commit_url;
        }
        after_commit_url:        $result['commit_url'] = $commit_url;

        
        $created_at = $object->created_at;
        after_created_at:        $result['created_at'] = $created_at;

        
        $issue = $object->issue;

        if ($issue === null) {
            goto after_issue;
        }
        after_issue:        $result['issue'] = $issue;

        
        $label = $object->label;

        if ($label === null) {
            goto after_label;
        }
        $label = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel($label);
        after_label:        $result['label'] = $label;

        
        $assignee = $object->assignee;

        if ($assignee === null) {
            goto after_assignee;
        }
        after_assignee:        $result['assignee'] = $assignee;

        
        $assigner = $object->assigner;

        if ($assigner === null) {
            goto after_assigner;
        }
        after_assigner:        $result['assigner'] = $assigner;

        
        $review_requester = $object->review_requester;

        if ($review_requester === null) {
            goto after_review_requester;
        }
        after_review_requester:        $result['review_requester'] = $review_requester;

        
        $requested_reviewer = $object->requested_reviewer;

        if ($requested_reviewer === null) {
            goto after_requested_reviewer;
        }
        after_requested_reviewer:        $result['requested_reviewer'] = $requested_reviewer;

        
        $requested_team = $object->requested_team;

        if ($requested_team === null) {
            goto after_requested_team;
        }
        $requested_team = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team($requested_team);
        after_requested_team:        $result['requested_team'] = $requested_team;

        
        $dismissed_review = $object->dismissed_review;

        if ($dismissed_review === null) {
            goto after_dismissed_review;
        }
        $dismissed_review = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview($dismissed_review);
        after_dismissed_review:        $result['dismissed_review'] = $dismissed_review;

        
        $milestone = $object->milestone;

        if ($milestone === null) {
            goto after_milestone;
        }
        $milestone = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone($milestone);
        after_milestone:        $result['milestone'] = $milestone;

        
        $project_card = $object->project_card;

        if ($project_card === null) {
            goto after_project_card;
        }
        $project_card = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard($project_card);
        after_project_card:        $result['project_card'] = $project_card;

        
        $rename = $object->rename;

        if ($rename === null) {
            goto after_rename;
        }
        $rename = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename($rename);
        after_rename:        $result['rename'] = $rename;

        
        $author_association = $object->author_association;

        if ($author_association === null) {
            goto after_author_association;
        }
        after_author_association:        $result['author_association'] = $author_association;

        
        $lock_reason = $object->lock_reason;

        if ($lock_reason === null) {
            goto after_lock_reason;
        }
        after_lock_reason:        $result['lock_reason'] = $lock_reason;

        
        $performed_via_github_app = $object->performed_via_github_app;

        if ($performed_via_github_app === null) {
            goto after_performed_via_github_app;
        }
        after_performed_via_github_app:        $result['performed_via_github_app'] = $performed_via_github_app;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventLabel(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventLabel);
        $result = [];

        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $color = $object->color;

        if ($color === null) {
            goto after_color;
        }
        after_color:        $result['color'] = $color;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Team);
        $result = [];

        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;
        after_node_id:        $result['node_id'] = $node_id;

        
        $name = $object->name;
        after_name:        $result['name'] = $name;

        
        $slug = $object->slug;
        after_slug:        $result['slug'] = $slug;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $privacy = $object->privacy;

        if ($privacy === null) {
            goto after_privacy;
        }
        after_privacy:        $result['privacy'] = $privacy;

        
        $permission = $object->permission;
        after_permission:        $result['permission'] = $permission;

        
        $permissions = $object->permissions;

        if ($permissions === null) {
            goto after_permissions;
        }
        $permissions = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions($permissions);
        after_permissions:        $result['permissions'] = $permissions;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;
        after_html_url:        $result['html_url'] = $html_url;

        
        $members_url = $object->members_url;
        after_members_url:        $result['members_url'] = $members_url;

        
        $repositories_url = $object->repositories_url;
        after_repositories_url:        $result['repositories_url'] = $repositories_url;

        
        $parent = $object->parent;

        if ($parent === null) {
            goto after_parent;
        }
        after_parent:        $result['parent'] = $parent;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️Team⚡️Permissions(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\Team\Permissions);
        $result = [];

        $pull = $object->pull;
        after_pull:        $result['pull'] = $pull;

        
        $triage = $object->triage;
        after_triage:        $result['triage'] = $triage;

        
        $push = $object->push;
        after_push:        $result['push'] = $push;

        
        $maintain = $object->maintain;
        after_maintain:        $result['maintain'] = $maintain;

        
        $admin = $object->admin;
        after_admin:        $result['admin'] = $admin;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventDismissedReview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventDismissedReview);
        $result = [];

        $state = $object->state;
        after_state:        $result['state'] = $state;

        
        $review_id = $object->review_id;
        after_review_id:        $result['review_id'] = $review_id;

        
        $dismissal_message = $object->dismissal_message;

        if ($dismissal_message === null) {
            goto after_dismissal_message;
        }
        after_dismissal_message:        $result['dismissal_message'] = $dismissal_message;

        
        $dismissal_commit_id = $object->dismissal_commit_id;

        if ($dismissal_commit_id === null) {
            goto after_dismissal_commit_id;
        }
        after_dismissal_commit_id:        $result['dismissal_commit_id'] = $dismissal_commit_id;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventMilestone(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventMilestone);
        $result = [];

        $title = $object->title;
        after_title:        $result['title'] = $title;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventProjectCard(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventProjectCard);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $id = $object->id;
        after_id:        $result['id'] = $id;

        
        $project_url = $object->project_url;
        after_project_url:        $result['project_url'] = $project_url;

        
        $project_id = $object->project_id;
        after_project_id:        $result['project_id'] = $project_id;

        
        $column_name = $object->column_name;
        after_column_name:        $result['column_name'] = $column_name;

        
        $previous_column_name = $object->previous_column_name;

        if ($previous_column_name === null) {
            goto after_previous_column_name;
        }
        after_previous_column_name:        $result['previous_column_name'] = $previous_column_name;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️IssueEventRename(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\IssueEventRename);
        $result = [];

        $from = $object->from;
        after_from:        $result['from'] = $from;

        
        $to = $object->to;
        after_to:        $result['to'] = $to;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\GitHub\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError\Errors);
        $result = [];

        $resource = $object->resource;

        if ($resource === null) {
            goto after_resource;
        }
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;

        if ($field === null) {
            goto after_field;
        }
        after_field:        $result['field'] = $field;

        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $code = $object->code;
        after_code:        $result['code'] = $code;

        
        $index = $object->index;

        if ($index === null) {
            goto after_index;
        }
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        after_value:        $result['value'] = $value;


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
