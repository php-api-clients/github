<?php

declare(strict_types=1);

namespace ApiClients\Client\Github\Hydrator\Operation\Repos\CbOwnerRcb\CbRepoRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Import implements ObjectMapper
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
            'ApiClients\Client\Github\Schema\Import' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Import($payload),
                'ApiClients\Client\Github\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️Import(array $payload): \ApiClients\Client\Github\Schema\Import
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['vcs'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'vcs';
                    goto after_vcs;
                }

                $properties['vcs'] = $value;
    
                after_vcs:

                $value = $payload['use_lfs'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'use_lfs';
                    goto after_use_lfs;
                }

                $properties['use_lfs'] = $value;
    
                after_use_lfs:

                $value = $payload['vcs_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'vcs_url';
                    goto after_vcs_url;
                }

                $properties['vcs_url'] = $value;
    
                after_vcs_url:

                $value = $payload['svc_root'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'svc_root';
                    goto after_svc_root;
                }

                $properties['svc_root'] = $value;
    
                after_svc_root:

                $value = $payload['tfvc_project'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'tfvc_project';
                    goto after_tfvc_project;
                }

                $properties['tfvc_project'] = $value;
    
                after_tfvc_project:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
                    goto after_status;
                }

                $properties['status'] = $value;
    
                after_status:

                $value = $payload['status_text'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status_text';
                    goto after_status_text;
                }

                $properties['status_text'] = $value;
    
                after_status_text:

                $value = $payload['failed_step'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'failed_step';
                    goto after_failed_step;
                }

                $properties['failed_step'] = $value;
    
                after_failed_step:

                $value = $payload['error_message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'error_message';
                    goto after_error_message;
                }

                $properties['error_message'] = $value;
    
                after_error_message:

                $value = $payload['import_percent'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'import_percent';
                    goto after_import_percent;
                }

                $properties['import_percent'] = $value;
    
                after_import_percent:

                $value = $payload['commit_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'commit_count';
                    goto after_commit_count;
                }

                $properties['commit_count'] = $value;
    
                after_commit_count:

                $value = $payload['push_percent'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'push_percent';
                    goto after_push_percent;
                }

                $properties['push_percent'] = $value;
    
                after_push_percent:

                $value = $payload['has_large_files'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'has_large_files';
                    goto after_has_large_files;
                }

                $properties['has_large_files'] = $value;
    
                after_has_large_files:

                $value = $payload['large_files_size'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'large_files_size';
                    goto after_large_files_size;
                }

                $properties['large_files_size'] = $value;
    
                after_large_files_size:

                $value = $payload['large_files_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'large_files_count';
                    goto after_large_files_count;
                }

                $properties['large_files_count'] = $value;
    
                after_large_files_count:

                $value = $payload['project_choices'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'project_choices';
                    goto after_project_choices;
                }

                $properties['project_choices'] = $value;
    
                after_project_choices:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['authors_count'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'authors_count';
                    goto after_authors_count;
                }

                $properties['authors_count'] = $value;
    
                after_authors_count:

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

                $value = $payload['authors_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'authors_url';
                    goto after_authors_url;
                }

                $properties['authors_url'] = $value;
    
                after_authors_url:

                $value = $payload['repository_url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'repository_url';
                    goto after_repository_url;
                }

                $properties['repository_url'] = $value;
    
                after_repository_url:

                $value = $payload['svn_root'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'svn_root';
                    goto after_svn_root;
                }

                $properties['svn_root'] = $value;
    
                after_svn_root:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Import', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\Github\Schema\Import::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\Github\Schema\Import(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\Github\Schema\Import', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError(array $payload): \ApiClients\Client\Github\Schema\BasicError
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

                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'url';
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['status'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'status';
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
                'ApiClients\Client\Github\Schema\Import' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Import($object),
                'ApiClients\Client\Github\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️BasicError($object),
                'ApiClients\Client\Github\Schema\ValidationError' => $this->serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️Import(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\Import);
        $result = [];
        
        $vcs = $object->vcs;

        if ($vcs === null) {
            goto after_vcs;
        }
        after_vcs:        $result['vcs'] = $vcs;

        
        $use_lfs = $object->use_lfs;
        after_use_lfs:        $result['use_lfs'] = $use_lfs;

        
        $vcs_url = $object->vcs_url;

        if ($vcs_url === null) {
            goto after_vcs_url;
        }
        after_vcs_url:        $result['vcs_url'] = $vcs_url;

        
        $svc_root = $object->svc_root;
        after_svc_root:        $result['svc_root'] = $svc_root;

        
        $tfvc_project = $object->tfvc_project;
        after_tfvc_project:        $result['tfvc_project'] = $tfvc_project;

        
        $status = $object->status;

        if ($status === null) {
            goto after_status;
        }
        after_status:        $result['status'] = $status;

        
        $status_text = $object->status_text;

        if ($status_text === null) {
            goto after_status_text;
        }
        after_status_text:        $result['status_text'] = $status_text;

        
        $failed_step = $object->failed_step;

        if ($failed_step === null) {
            goto after_failed_step;
        }
        after_failed_step:        $result['failed_step'] = $failed_step;

        
        $error_message = $object->error_message;

        if ($error_message === null) {
            goto after_error_message;
        }
        after_error_message:        $result['error_message'] = $error_message;

        
        $import_percent = $object->import_percent;

        if ($import_percent === null) {
            goto after_import_percent;
        }
        after_import_percent:        $result['import_percent'] = $import_percent;

        
        $commit_count = $object->commit_count;

        if ($commit_count === null) {
            goto after_commit_count;
        }
        after_commit_count:        $result['commit_count'] = $commit_count;

        
        $push_percent = $object->push_percent;

        if ($push_percent === null) {
            goto after_push_percent;
        }
        after_push_percent:        $result['push_percent'] = $push_percent;

        
        $has_large_files = $object->has_large_files;
        after_has_large_files:        $result['has_large_files'] = $has_large_files;

        
        $large_files_size = $object->large_files_size;
        after_large_files_size:        $result['large_files_size'] = $large_files_size;

        
        $large_files_count = $object->large_files_count;
        after_large_files_count:        $result['large_files_count'] = $large_files_count;

        
        $project_choices = $object->project_choices;
        static $project_choicesSerializer0;

        if ($project_choicesSerializer0 === null) {
            $project_choicesSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $project_choices = $project_choicesSerializer0->serialize($project_choices, $this);
        after_project_choices:        $result['project_choices'] = $project_choices;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $authors_count = $object->authors_count;

        if ($authors_count === null) {
            goto after_authors_count;
        }
        after_authors_count:        $result['authors_count'] = $authors_count;

        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $html_url = $object->html_url;

        if ($html_url === null) {
            goto after_html_url;
        }
        after_html_url:        $result['html_url'] = $html_url;

        
        $authors_url = $object->authors_url;

        if ($authors_url === null) {
            goto after_authors_url;
        }
        after_authors_url:        $result['authors_url'] = $authors_url;

        
        $repository_url = $object->repository_url;

        if ($repository_url === null) {
            goto after_repository_url;
        }
        after_repository_url:        $result['repository_url'] = $repository_url;

        
        $svn_root = $object->svn_root;
        after_svn_root:        $result['svn_root'] = $svn_root;


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

    
    private function serializeObjectApiClients⚡️Client⚡️Github⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\Github\Schema\ValidationError);
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
