<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Merges implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\Commit' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit($payload),
                'ApiClients\Client\Github\Schema\Commit\Commit' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit($payload),
                'ApiClients\Client\Github\Schema\Commit\Commit\Tree' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit⚡️Tree($payload),
                'ApiClients\Client\Github\Schema\Verification' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Verification($payload),
                'ApiClients\Client\Github\Schema\Commit\Parents' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Parents($payload),
                'ApiClients\Client\Github\Schema\Commit\Stats' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Stats($payload),
                'ApiClients\Client\Github\Schema\DiffEntry' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DiffEntry($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\Github\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit(array $payload): \ApiClients\Client\Github\Schema\Commit
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

            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['node_id'] ?? null;

            if ($value === null) {
                $missingFields[] = 'node_id';
                goto after_nodeId;
            }

            $properties['nodeId'] = $value;

            after_nodeId:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'html_url';
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

            $value = $payload['comments_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comments_url';
                goto after_commentsUrl;
            }

            $properties['commentsUrl'] = $value;

            after_commentsUrl:

            $value = $payload['commit'] ?? null;

            if ($value === null) {
                $missingFields[] = 'commit';
                goto after_commit;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'commit';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['commit'] = $value;

            after_commit:

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $properties['committer'] = null;
                goto after_committer;
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['parents'] ?? null;

            if ($value === null) {
                $missingFields[] = 'parents';
                goto after_parents;
            }

            static $parentsCaster1;

            if ($parentsCaster1 === null) {
                $parentsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\Commit\\Parents',
));
            }

            $value = $parentsCaster1->cast($value, $this);

            $properties['parents'] = $value;

            after_parents:

            $value = $payload['stats'] ?? null;

            if ($value === null) {
                $properties['stats'] = null;
                goto after_stats;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'stats';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Stats($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['stats'] = $value;

            after_stats:

            $value = $payload['files'] ?? null;

            if ($value === null) {
                $properties['files'] = null;
                goto after_files;
            }

            static $filesCaster1;

            if ($filesCaster1 === null) {
                $filesCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DiffEntry',
));
            }

            $value = $filesCaster1->cast($value, $this);

            $properties['files'] = $value;

            after_files:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Commit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit(array $payload): \ApiClients\Client\Github\Schema\Commit\Commit
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

            $value = $payload['author'] ?? null;

            if ($value === null) {
                $properties['author'] = null;
                goto after_author;
            }

            $properties['author'] = $value;

            after_author:

            $value = $payload['committer'] ?? null;

            if ($value === null) {
                $properties['committer'] = null;
                goto after_committer;
            }

            $properties['committer'] = $value;

            after_committer:

            $value = $payload['message'] ?? null;

            if ($value === null) {
                $missingFields[] = 'message';
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['comment_count'] ?? null;

            if ($value === null) {
                $missingFields[] = 'comment_count';
                goto after_commentCount;
            }

            $properties['commentCount'] = $value;

            after_commentCount:

            $value = $payload['tree'] ?? null;

            if ($value === null) {
                $missingFields[] = 'tree';
                goto after_tree;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'tree';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit⚡️Tree($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['tree'] = $value;

            after_tree:

            $value = $payload['verification'] ?? null;

            if ($value === null) {
                $properties['verification'] = null;
                goto after_verification;
            }

            if (is_array($value)) {
                try {
                    $this->hydrationStack[] = 'verification';
                    $value = $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Verification($value);
                } finally {
                    array_pop($this->hydrationStack);
                }
            }

            $properties['verification'] = $value;

            after_verification:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Commit\Commit::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Commit\Commit(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit\Commit', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit⚡️Tree(array $payload): \ApiClients\Client\Github\Schema\Commit\Commit\Tree
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Commit\Commit\Tree::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Commit\Commit\Tree(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit\Commit\Tree', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Verification(array $payload): \ApiClients\Client\Github\Schema\Verification
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['verified'] ?? null;

            if ($value === null) {
                $missingFields[] = 'verified';
                goto after_verified;
            }

            $properties['verified'] = $value;

            after_verified:

            $value = $payload['reason'] ?? null;

            if ($value === null) {
                $missingFields[] = 'reason';
                goto after_reason;
            }

            $properties['reason'] = $value;

            after_reason:

            $value = $payload['payload'] ?? null;

            if ($value === null) {
                $properties['payload'] = null;
                goto after_payload;
            }

            $properties['payload'] = $value;

            after_payload:

            $value = $payload['signature'] ?? null;

            if ($value === null) {
                $properties['signature'] = null;
                goto after_signature;
            }

            $properties['signature'] = $value;

            after_signature:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Verification', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Verification::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Verification(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Verification', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Parents(array $payload): \ApiClients\Client\Github\Schema\Commit\Parents
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'url';
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['html_url'] ?? null;

            if ($value === null) {
                $properties['htmlUrl'] = null;
                goto after_htmlUrl;
            }

            $properties['htmlUrl'] = $value;

            after_htmlUrl:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit\Parents', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Commit\Parents::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Commit\Parents(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit\Parents', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Stats(array $payload): \ApiClients\Client\Github\Schema\Commit\Stats
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['additions'] ?? null;

            if ($value === null) {
                $properties['additions'] = null;
                goto after_additions;
            }

            $properties['additions'] = $value;

            after_additions:

            $value = $payload['deletions'] ?? null;

            if ($value === null) {
                $properties['deletions'] = null;
                goto after_deletions;
            }

            $properties['deletions'] = $value;

            after_deletions:

            $value = $payload['total'] ?? null;

            if ($value === null) {
                $properties['total'] = null;
                goto after_total;
            }

            $properties['total'] = $value;

            after_total:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Commit\Stats::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\Commit\Stats(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Commit\Stats', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️DiffEntry(array $payload): \ApiClients\Client\Github\Schema\DiffEntry
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['sha'] ?? null;

            if ($value === null) {
                $missingFields[] = 'sha';
                goto after_sha;
            }

            $properties['sha'] = $value;

            after_sha:

            $value = $payload['filename'] ?? null;

            if ($value === null) {
                $missingFields[] = 'filename';
                goto after_filename;
            }

            $properties['filename'] = $value;

            after_filename:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $missingFields[] = 'status';
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

            $value = $payload['additions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'additions';
                goto after_additions;
            }

            $properties['additions'] = $value;

            after_additions:

            $value = $payload['deletions'] ?? null;

            if ($value === null) {
                $missingFields[] = 'deletions';
                goto after_deletions;
            }

            $properties['deletions'] = $value;

            after_deletions:

            $value = $payload['changes'] ?? null;

            if ($value === null) {
                $missingFields[] = 'changes';
                goto after_changes;
            }

            $properties['changes'] = $value;

            after_changes:

            $value = $payload['blob_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'blob_url';
                goto after_blobUrl;
            }

            $properties['blobUrl'] = $value;

            after_blobUrl:

            $value = $payload['raw_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'raw_url';
                goto after_rawUrl;
            }

            $properties['rawUrl'] = $value;

            after_rawUrl:

            $value = $payload['contents_url'] ?? null;

            if ($value === null) {
                $missingFields[] = 'contents_url';
                goto after_contentsUrl;
            }

            $properties['contentsUrl'] = $value;

            after_contentsUrl:

            $value = $payload['patch'] ?? null;

            if ($value === null) {
                $properties['patch'] = null;
                goto after_patch;
            }

            $properties['patch'] = $value;

            after_patch:

            $value = $payload['previous_filename'] ?? null;

            if ($value === null) {
                $properties['previousFilename'] = null;
                goto after_previousFilename;
            }

            $properties['previousFilename'] = $value;

            after_previousFilename:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DiffEntry', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\DiffEntry::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\DiffEntry(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\DiffEntry', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
    {
        $properties = []; 
        $missingFields = [];
        try {
            $value = $payload['message'] ?? null;

            if ($value === null) {
                $properties['message'] = null;
                goto after_message;
            }

            $properties['message'] = $value;

            after_message:

            $value = $payload['documentation_url'] ?? null;

            if ($value === null) {
                $properties['documentationUrl'] = null;
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['url'] ?? null;

            if ($value === null) {
                $properties['url'] = null;
                goto after_url;
            }

            $properties['url'] = $value;

            after_url:

            $value = $payload['status'] ?? null;

            if ($value === null) {
                $properties['status'] = null;
                goto after_status;
            }

            $properties['status'] = $value;

            after_status:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\BasicError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\BasicError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\Github\Schema\ValidationError
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
                goto after_documentationUrl;
            }

            $properties['documentationUrl'] = $value;

            after_documentationUrl:

            $value = $payload['errors'] ?? null;

            if ($value === null) {
                $properties['errors'] = null;
                goto after_errors;
            }

            static $errorsCaster1;

            if ($errorsCaster1 === null) {
                $errorsCaster1 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\ValidationError\\Errors',
));
            }

            $value = $errorsCaster1->cast($value, $this);

            $properties['errors'] = $value;

            after_errors:

        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ValidationError(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError', $exception, stack: $this->hydrationStack);
        }
    }

        
    private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors(array $payload): \ApiClients\Client\Github\Schema\ValidationError\Errors
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
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
        }

        if (count($missingFields) > 0) {
            throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\ValidationError\Errors::class, $missingFields, stack: $this->hydrationStack);
        }

        try {
            return new \ApiClients\Client\Github\Schema\ValidationError\Errors(...$properties);
        } catch (\Throwable $exception) {
            throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\ValidationError\Errors', $exception, stack: $this->hydrationStack);
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
            'ApiClients\Client\Github\Schema\Commit' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit($object),
            'ApiClients\Client\Github\Schema\Commit\Commit' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit($object),
            'ApiClients\Client\Github\Schema\Commit\Commit\Tree' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit⚡️Tree($object),
            'ApiClients\Client\Github\Schema\Verification' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Verification($object),
            'ApiClients\Client\Github\Schema\Commit\Parents' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Parents($object),
            'ApiClients\Client\Github\Schema\Commit\Stats' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Stats($object),
            'ApiClients\Client\Github\Schema\DiffEntry' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DiffEntry($object),
            'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
            'ApiClients\Client\Github\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($object),
            'ApiClients\Client\Github\Schema\ValidationError\Errors' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors($object),
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


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Commit);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $nodeId = $object->nodeId;
        after_nodeId:        $result['node_id'] = $nodeId;

        
        $htmlUrl = $object->htmlUrl;
        after_htmlUrl:        $result['html_url'] = $htmlUrl;

        
        $commentsUrl = $object->commentsUrl;
        after_commentsUrl:        $result['comments_url'] = $commentsUrl;

        
        $commit = $object->commit;
        $commit = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit($commit);
        after_commit:        $result['commit'] = $commit;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }
        after_committer:        $result['committer'] = $committer;

        
        $parents = $object->parents;
        static $parentsSerializer0;

        if ($parentsSerializer0 === null) {
            $parentsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\Commit\\Parents',
));
        }
        
        $parents = $parentsSerializer0->serialize($parents, $this);
        after_parents:        $result['parents'] = $parents;

        
        $stats = $object->stats;

        if ($stats === null) {
            goto after_stats;
        }
        $stats = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Stats($stats);
        after_stats:        $result['stats'] = $stats;

        
        $files = $object->files;

        if ($files === null) {
            goto after_files;
        }
        static $filesSerializer0;

        if ($filesSerializer0 === null) {
            $filesSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\DiffEntry',
));
        }
        
        $files = $filesSerializer0->serialize($files, $this);
        after_files:        $result['files'] = $files;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Commit\Commit);
        $result = [];

        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $author = $object->author;

        if ($author === null) {
            goto after_author;
        }
        after_author:        $result['author'] = $author;

        
        $committer = $object->committer;

        if ($committer === null) {
            goto after_committer;
        }
        after_committer:        $result['committer'] = $committer;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $commentCount = $object->commentCount;
        after_commentCount:        $result['comment_count'] = $commentCount;

        
        $tree = $object->tree;
        $tree = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit⚡️Tree($tree);
        after_tree:        $result['tree'] = $tree;

        
        $verification = $object->verification;

        if ($verification === null) {
            goto after_verification;
        }
        $verification = $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Verification($verification);
        after_verification:        $result['verification'] = $verification;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Commit⚡️Tree(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Commit\Commit\Tree);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Verification(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Verification);
        $result = [];

        $verified = $object->verified;
        after_verified:        $result['verified'] = $verified;

        
        $reason = $object->reason;
        after_reason:        $result['reason'] = $reason;

        
        $payload = $object->payload;

        if ($payload === null) {
            goto after_payload;
        }
        after_payload:        $result['payload'] = $payload;

        
        $signature = $object->signature;

        if ($signature === null) {
            goto after_signature;
        }
        after_signature:        $result['signature'] = $signature;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Parents(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Commit\Parents);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $url = $object->url;
        after_url:        $result['url'] = $url;

        
        $htmlUrl = $object->htmlUrl;

        if ($htmlUrl === null) {
            goto after_htmlUrl;
        }
        after_htmlUrl:        $result['html_url'] = $htmlUrl;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Commit⚡️Stats(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Commit\Stats);
        $result = [];

        $additions = $object->additions;

        if ($additions === null) {
            goto after_additions;
        }
        after_additions:        $result['additions'] = $additions;

        
        $deletions = $object->deletions;

        if ($deletions === null) {
            goto after_deletions;
        }
        after_deletions:        $result['deletions'] = $deletions;

        
        $total = $object->total;

        if ($total === null) {
            goto after_total;
        }
        after_total:        $result['total'] = $total;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️DiffEntry(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\DiffEntry);
        $result = [];

        $sha = $object->sha;
        after_sha:        $result['sha'] = $sha;

        
        $filename = $object->filename;
        after_filename:        $result['filename'] = $filename;

        
        $status = $object->status;
        after_status:        $result['status'] = $status;

        
        $additions = $object->additions;
        after_additions:        $result['additions'] = $additions;

        
        $deletions = $object->deletions;
        after_deletions:        $result['deletions'] = $deletions;

        
        $changes = $object->changes;
        after_changes:        $result['changes'] = $changes;

        
        $blobUrl = $object->blobUrl;
        after_blobUrl:        $result['blob_url'] = $blobUrl;

        
        $rawUrl = $object->rawUrl;
        after_rawUrl:        $result['raw_url'] = $rawUrl;

        
        $contentsUrl = $object->contentsUrl;
        after_contentsUrl:        $result['contents_url'] = $contentsUrl;

        
        $patch = $object->patch;

        if ($patch === null) {
            goto after_patch;
        }
        after_patch:        $result['patch'] = $patch;

        
        $previousFilename = $object->previousFilename;

        if ($previousFilename === null) {
            goto after_previousFilename;
        }
        after_previousFilename:        $result['previous_filename'] = $previousFilename;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\BasicError);
        $result = [];

        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;

        if ($documentationUrl === null) {
            goto after_documentationUrl;
        }
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError);
        $result = [];

        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $documentationUrl = $object->documentationUrl;
        after_documentationUrl:        $result['documentation_url'] = $documentationUrl;

        
        $errors = $object->errors;

        if ($errors === null) {
            goto after_errors;
        }
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertyCasters\CastListToType(...array (
  0 => 'ApiClients\\Client\\Github\\Schema\\ValidationError\\Errors',
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


        return $result;
    }


    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError⚡️Errors(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError\Errors);
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
