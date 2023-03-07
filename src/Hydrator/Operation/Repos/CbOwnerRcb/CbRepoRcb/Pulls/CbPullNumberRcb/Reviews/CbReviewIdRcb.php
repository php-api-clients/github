<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb\Pulls\CbPullNumberRcb\Reviews;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class CbReviewIdRcb implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\PullRequestReview' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestReview($payload),
                'ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links($payload),
                'ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links⚡️Html($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationErrorSimple' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestReview(array $payload): \ApiClients\Client\GitHub\Schema\PullRequestReview
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['node_id'] ?? null;
    
                if ($value === null) {
                    $properties['node_id'] = null;
                    goto after_node_id;
                }

                $properties['node_id'] = $value;
    
                after_node_id:

                $value = $payload['user'] ?? null;
    
                if ($value === null) {
                    $properties['user'] = null;
                    goto after_user;
                }

                $properties['user'] = $value;
    
                after_user:

                $value = $payload['body'] ?? null;
    
                if ($value === null) {
                    $properties['body'] = null;
                    goto after_body;
                }

                $properties['body'] = $value;
    
                after_body:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['html_url'] ?? null;
    
                if ($value === null) {
                    $properties['html_url'] = null;
                    goto after_html_url;
                }

                $properties['html_url'] = $value;
    
                after_html_url:

                $value = $payload['pull_request_url'] ?? null;
    
                if ($value === null) {
                    $properties['pull_request_url'] = null;
                    goto after_pull_request_url;
                }

                $properties['pull_request_url'] = $value;
    
                after_pull_request_url:

                $value = $payload['_links'] ?? null;
    
                if ($value === null) {
                    $properties['_links'] = null;
                    goto after__links;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = '_links';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['_links'] = $value;
    
                after__links:

                $value = $payload['submitted_at'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'submitted_at';
                    goto after_submitted_at;
                }

                $properties['submitted_at'] = $value;
    
                after_submitted_at:

                $value = $payload['commit_id'] ?? null;
    
                if ($value === null) {
                    $properties['commit_id'] = null;
                    goto after_commit_id;
                }

                $properties['commit_id'] = $value;
    
                after_commit_id:

                $value = $payload['body_html'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_html';
                    goto after_body_html;
                }

                $properties['body_html'] = $value;
    
                after_body_html:

                $value = $payload['body_text'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'body_text';
                    goto after_body_text;
                }

                $properties['body_text'] = $value;
    
                after_body_text:

                $value = $payload['author_association'] ?? null;
    
                if ($value === null) {
                    $properties['author_association'] = null;
                    goto after_author_association;
                }

                $properties['author_association'] = $value;
    
                after_author_association:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestReview', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\PullRequestReview::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\PullRequestReview(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\PullRequestReview', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links(array $payload): \ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['html'] ?? null;
    
                if ($value === null) {
                    $properties['html'] = null;
                    goto after_html;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'html';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links⚡️Html($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['html'] = $value;
    
                after_html:

                $value = $payload['pull_request'] ?? null;
    
                if ($value === null) {
                    $properties['pull_request'] = null;
                    goto after_pull_request;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'pull_request';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links⚡️Html($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['pull_request'] = $value;
    
                after_pull_request:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links⚡️Html(array $payload): \ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['href'] ?? null;
    
                if ($value === null) {
                    $properties['href'] = null;
                    goto after_href;
                }

                $properties['href'] = $value;
    
                after_href:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\GitHub\Schema\BasicError
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
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

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
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\BasicError::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\BasicError(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\BasicError', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple(array $payload): \ApiClients\Client\GitHub\Schema\ValidationErrorSimple
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
                    $properties['documentation_url'] = null;
                    goto after_documentation_url;
                }

                $properties['documentation_url'] = $value;
    
                after_documentation_url:

                $value = $payload['errors'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'errors';
                    goto after_errors;
                }

                $properties['errors'] = $value;
    
                after_errors:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\ValidationErrorSimple::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\ValidationErrorSimple(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\ValidationErrorSimple', $exception, stack: $this->hydrationStack);
            }
        }
    
    public function serializeObject(object $object): mixed
    {
        try {
            $className = get_class($object);

            return match($className) {
                'array' => $this->serializeValuearray($object),
                'Ramsey\Uuid\UuidInterface' => $this->serializeValueRamsey⚡️Uuid⚡️UuidInterface($object),
                'DateTime' => $this->serializeValueDateTime($object),
                'DateTimeImmutable' => $this->serializeValueDateTimeImmutable($object),
                'DateTimeInterface' => $this->serializeValueDateTimeInterface($object),
                'ApiClients\Client\GitHub\Schema\PullRequestReview' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestReview($object),
                'ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links($object),
                'ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links⚡️Html($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\GitHub\Schema\ValidationErrorSimple' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️PullRequestReview(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\PullRequestReview);
        $result = [];
        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $node_id = $object->node_id;

        if ($node_id === null) {
            goto after_node_id;
        }
        after_node_id:        $result['node_id'] = $node_id;

        
        $user = $object->user;

        if ($user === null) {
            goto after_user;
        }
        after_user:        $result['user'] = $user;

        
        $body = $object->body;

        if ($body === null) {
            goto after_body;
        }
        after_body:        $result['body'] = $body;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $pull_request_url = $object->pull_request_url;

        if ($pull_request_url === null) {
            goto after_pull_request_url;
        }
        after_pull_request_url:        $result['pull_request_url'] = $pull_request_url;

        
        $_links = $object->_links;

        if ($_links === null) {
            goto after__links;
        }
        $_links = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links($_links);
        after__links:        $result['_links'] = $_links;

        
        $submitted_at = $object->submitted_at;
        after_submitted_at:        $result['submitted_at'] = $submitted_at;

        
        $commit_id = $object->commit_id;

        if ($commit_id === null) {
            goto after_commit_id;
        }
        after_commit_id:        $result['commit_id'] = $commit_id;

        
        $body_html = $object->body_html;
        after_body_html:        $result['body_html'] = $body_html;

        
        $body_text = $object->body_text;
        after_body_text:        $result['body_text'] = $body_text;

        
        $author_association = $object->author_association;

        if ($author_association === null) {
            goto after_author_association;
        }
        after_author_association:        $result['author_association'] = $author_association;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links);
        $result = [];
        
        $html = $object->html;

        if ($html === null) {
            goto after_html;
        }
        $html = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links⚡️Html($html);
        after_html:        $result['html'] = $html;

        
        $pull_request = $object->pull_request;

        if ($pull_request === null) {
            goto after_pull_request;
        }
        $pull_request = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links⚡️Html($pull_request);
        after_pull_request:        $result['pull_request'] = $pull_request;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️TimelineReviewedEvent⚡️Links⚡️Html(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\TimelineReviewedEvent\Links\Html);
        $result = [];
        
        $href = $object->href;

        if ($href === null) {
            goto after_href;
        }
        after_href:        $result['href'] = $href;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\BasicError);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationErrorSimple(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationErrorSimple);
        $result = [];
        
        $message = $object->message;

        if ($message === null) {
            goto after_message;
        }
        after_message:        $result['message'] = $message;

        
        $documentation_url = $object->documentation_url;

        if ($documentation_url === null) {
            goto after_documentation_url;
        }
        after_documentation_url:        $result['documentation_url'] = $documentation_url;

        
        $errors = $object->errors;
        static $errorsSerializer0;

        if ($errorsSerializer0 === null) {
            $errorsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $errors = $errorsSerializer0->serialize($errors, $this);
        after_errors:        $result['errors'] = $errors;


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
