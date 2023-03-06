<?php

declare(strict_types=1);

namespace ApiClients\Client\GitHub\Hydrator\Operation\MarketplaceListing\Plans\CbPlanIdRcb;

use EventSauce\ObjectHydrator\IterableList;
use EventSauce\ObjectHydrator\ObjectMapper;
use EventSauce\ObjectHydrator\UnableToHydrateObject;
use EventSauce\ObjectHydrator\UnableToSerializeObject;
use Generator;

class Accounts implements ObjectMapper
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
            'ApiClients\Client\GitHub\Schema\MarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase($payload),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($payload),
                'ApiClients\Client\GitHub\Schema\MarketplaceListingPlan' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($payload),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($payload),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError($payload),
                'ApiClients\Client\GitHub\Schema\ValidationError\Errors' => $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError⚡️Errors($payload),
            default => throw UnableToHydrateObject::noHydrationDefined($className, $this->hydrationStack),
        };
    }
    
            
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase(array $payload): \ApiClients\Client\GitHub\Schema\MarketplacePurchase
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['type'] ?? null;
    
                if ($value === null) {
                    $properties['type'] = null;
                    goto after_type;
                }

                $properties['type'] = $value;
    
                after_type:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['login'] ?? null;
    
                if ($value === null) {
                    $properties['login'] = null;
                    goto after_login;
                }

                $properties['login'] = $value;
    
                after_login:

                $value = $payload['organization_billing_email'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'organization_billing_email';
                    goto after_organization_billing_email;
                }

                $properties['organization_billing_email'] = $value;
    
                after_organization_billing_email:

                $value = $payload['email'] ?? null;
    
                if ($value === null) {
                    $properties['email'] = null;
                    goto after_email;
                }

                $properties['email'] = $value;
    
                after_email:

                $value = $payload['marketplace_pending_change'] ?? null;
    
                if ($value === null) {
                    $properties['marketplace_pending_change'] = null;
                    goto after_marketplace_pending_change;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'marketplace_pending_change';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['marketplace_pending_change'] = $value;
    
                after_marketplace_pending_change:

                $value = $payload['marketplace_purchase'] ?? null;
    
                if ($value === null) {
                    $properties['marketplace_purchase'] = null;
                    goto after_marketplace_purchase;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'marketplace_purchase';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['marketplace_purchase'] = $value;
    
                after_marketplace_purchase:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\MarketplacePurchase(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange(array $payload): \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['is_installed'] ?? null;
    
                if ($value === null) {
                    $properties['is_installed'] = null;
                    goto after_is_installed;
                }

                $properties['is_installed'] = $value;
    
                after_is_installed:

                $value = $payload['effective_date'] ?? null;
    
                if ($value === null) {
                    $properties['effective_date'] = null;
                    goto after_effective_date;
                }

                $properties['effective_date'] = $value;
    
                after_effective_date:

                $value = $payload['unit_count'] ?? null;
    
                if ($value === null) {
                    $properties['unit_count'] = null;
                    goto after_unit_count;
                }

                $properties['unit_count'] = $value;
    
                after_unit_count:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['plan'] ?? null;
    
                if ($value === null) {
                    $properties['plan'] = null;
                    goto after_plan;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'plan';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['plan'] = $value;
    
                after_plan:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan(array $payload): \ApiClients\Client\GitHub\Schema\MarketplaceListingPlan
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['url'] ?? null;
    
                if ($value === null) {
                    $properties['url'] = null;
                    goto after_url;
                }

                $properties['url'] = $value;
    
                after_url:

                $value = $payload['accounts_url'] ?? null;
    
                if ($value === null) {
                    $properties['accounts_url'] = null;
                    goto after_accounts_url;
                }

                $properties['accounts_url'] = $value;
    
                after_accounts_url:

                $value = $payload['id'] ?? null;
    
                if ($value === null) {
                    $properties['id'] = null;
                    goto after_id;
                }

                $properties['id'] = $value;
    
                after_id:

                $value = $payload['number'] ?? null;
    
                if ($value === null) {
                    $properties['number'] = null;
                    goto after_number;
                }

                $properties['number'] = $value;
    
                after_number:

                $value = $payload['name'] ?? null;
    
                if ($value === null) {
                    $properties['name'] = null;
                    goto after_name;
                }

                $properties['name'] = $value;
    
                after_name:

                $value = $payload['description'] ?? null;
    
                if ($value === null) {
                    $properties['description'] = null;
                    goto after_description;
                }

                $properties['description'] = $value;
    
                after_description:

                $value = $payload['monthly_price_in_cents'] ?? null;
    
                if ($value === null) {
                    $properties['monthly_price_in_cents'] = null;
                    goto after_monthly_price_in_cents;
                }

                $properties['monthly_price_in_cents'] = $value;
    
                after_monthly_price_in_cents:

                $value = $payload['yearly_price_in_cents'] ?? null;
    
                if ($value === null) {
                    $properties['yearly_price_in_cents'] = null;
                    goto after_yearly_price_in_cents;
                }

                $properties['yearly_price_in_cents'] = $value;
    
                after_yearly_price_in_cents:

                $value = $payload['price_model'] ?? null;
    
                if ($value === null) {
                    $properties['price_model'] = null;
                    goto after_price_model;
                }

                $properties['price_model'] = $value;
    
                after_price_model:

                $value = $payload['has_free_trial'] ?? null;
    
                if ($value === null) {
                    $properties['has_free_trial'] = null;
                    goto after_has_free_trial;
                }

                $properties['has_free_trial'] = $value;
    
                after_has_free_trial:

                $value = $payload['unit_name'] ?? null;
    
                if ($value === null) {
                    $properties['unit_name'] = null;
                    goto after_unit_name;
                }

                $properties['unit_name'] = $value;
    
                after_unit_name:

                $value = $payload['state'] ?? null;
    
                if ($value === null) {
                    $properties['state'] = null;
                    goto after_state;
                }

                $properties['state'] = $value;
    
                after_state:

                $value = $payload['bullets'] ?? null;
    
                if ($value === null) {
                    $properties['bullets'] = null;
                    goto after_bullets;
                }

                $properties['bullets'] = $value;
    
                after_bullets:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MarketplaceListingPlan::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\MarketplaceListingPlan(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplaceListingPlan', $exception, stack: $this->hydrationStack);
            }
        }

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase(array $payload): \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase
        {
            $properties = []; 
            $missingFields = [];
            try {
                
                $value = $payload['billing_cycle'] ?? null;
    
                if ($value === null) {
                    $properties['billing_cycle'] = null;
                    goto after_billing_cycle;
                }

                $properties['billing_cycle'] = $value;
    
                after_billing_cycle:

                $value = $payload['next_billing_date'] ?? null;
    
                if ($value === null) {
                    $properties['next_billing_date'] = null;
                    goto after_next_billing_date;
                }

                $properties['next_billing_date'] = $value;
    
                after_next_billing_date:

                $value = $payload['is_installed'] ?? null;
    
                if ($value === null) {
                    $properties['is_installed'] = null;
                    goto after_is_installed;
                }

                $properties['is_installed'] = $value;
    
                after_is_installed:

                $value = $payload['unit_count'] ?? null;
    
                if ($value === null) {
                    $properties['unit_count'] = null;
                    goto after_unit_count;
                }

                $properties['unit_count'] = $value;
    
                after_unit_count:

                $value = $payload['on_free_trial'] ?? null;
    
                if ($value === null) {
                    $properties['on_free_trial'] = null;
                    goto after_on_free_trial;
                }

                $properties['on_free_trial'] = $value;
    
                after_on_free_trial:

                $value = $payload['free_trial_ends_on'] ?? null;
    
                if ($value === null) {
                    $properties['free_trial_ends_on'] = null;
                    goto after_free_trial_ends_on;
                }

                $properties['free_trial_ends_on'] = $value;
    
                after_free_trial_ends_on:

                $value = $payload['updated_at'] ?? null;
    
                if ($value === null) {
                    $properties['updated_at'] = null;
                    goto after_updated_at;
                }

                $properties['updated_at'] = $value;
    
                after_updated_at:

                $value = $payload['plan'] ?? null;
    
                if ($value === null) {
                    $properties['plan'] = null;
                    goto after_plan;
                }

                if (is_array($value)) {
                    try {
                        $this->hydrationStack[] = 'plan';
                        $value = $this->hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($value);
                    } finally {
                        array_pop($this->hydrationStack);
                    }
                }

                $properties['plan'] = $value;
    
                after_plan:

            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase', $exception, stack: $this->hydrationStack);
            }
            
            if (count($missingFields) > 0) {
                throw UnableToHydrateObject::dueToMissingFields(\ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase::class, $missingFields, stack: $this->hydrationStack);
            }
            
            try {
                return new \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase(...$properties);
            } catch (\Throwable $exception) {
                throw UnableToHydrateObject::dueToError('ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase', $exception, stack: $this->hydrationStack);
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

        
        private function hydrateApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(array $payload): \ApiClients\Client\GitHub\Schema\ValidationError
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
                    $missingFields[] = 'resource';
                    goto after_resource;
                }

                $properties['resource'] = $value;
    
                after_resource:

                $value = $payload['field'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'field';
                    goto after_field;
                }

                $properties['field'] = $value;
    
                after_field:

                $value = $payload['message'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'message';
                    goto after_message;
                }

                $properties['message'] = $value;
    
                after_message:

                $value = $payload['code'] ?? null;
    
                if ($value === null) {
                    $properties['code'] = null;
                    goto after_code;
                }

                $properties['code'] = $value;
    
                after_code:

                $value = $payload['index'] ?? null;
    
                if ($value === null) {
                    $missingFields[] = 'index';
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
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase($object),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($object),
                'ApiClients\Client\GitHub\Schema\MarketplaceListingPlan' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($object),
                'ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($object),
                'ApiClients\Client\GitHub\Schema\BasicError' => $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️BasicError($object),
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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\MarketplacePurchase);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $type = $object->type;

        if ($type === null) {
            goto after_type;
        }
        after_type:        $result['type'] = $type;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $login = $object->login;

        if ($login === null) {
            goto after_login;
        }
        after_login:        $result['login'] = $login;

        
        $organization_billing_email = $object->organization_billing_email;
        after_organization_billing_email:        $result['organization_billing_email'] = $organization_billing_email;

        
        $email = $object->email;

        if ($email === null) {
            goto after_email;
        }
        after_email:        $result['email'] = $email;

        
        $marketplace_pending_change = $object->marketplace_pending_change;

        if ($marketplace_pending_change === null) {
            goto after_marketplace_pending_change;
        }
        $marketplace_pending_change = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange($marketplace_pending_change);
        after_marketplace_pending_change:        $result['marketplace_pending_change'] = $marketplace_pending_change;

        
        $marketplace_purchase = $object->marketplace_purchase;

        if ($marketplace_purchase === null) {
            goto after_marketplace_purchase;
        }
        $marketplace_purchase = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase($marketplace_purchase);
        after_marketplace_purchase:        $result['marketplace_purchase'] = $marketplace_purchase;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePendingChange(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePendingChange);
        $result = [];
        
        $is_installed = $object->is_installed;

        if ($is_installed === null) {
            goto after_is_installed;
        }
        after_is_installed:        $result['is_installed'] = $is_installed;

        
        $effective_date = $object->effective_date;

        if ($effective_date === null) {
            goto after_effective_date;
        }
        after_effective_date:        $result['effective_date'] = $effective_date;

        
        $unit_count = $object->unit_count;

        if ($unit_count === null) {
            goto after_unit_count;
        }
        after_unit_count:        $result['unit_count'] = $unit_count;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $plan = $object->plan;

        if ($plan === null) {
            goto after_plan;
        }
        $plan = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($plan);
        after_plan:        $result['plan'] = $plan;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\MarketplaceListingPlan);
        $result = [];
        
        $url = $object->url;

        if ($url === null) {
            goto after_url;
        }
        after_url:        $result['url'] = $url;

        
        $accounts_url = $object->accounts_url;

        if ($accounts_url === null) {
            goto after_accounts_url;
        }
        after_accounts_url:        $result['accounts_url'] = $accounts_url;

        
        $id = $object->id;

        if ($id === null) {
            goto after_id;
        }
        after_id:        $result['id'] = $id;

        
        $number = $object->number;

        if ($number === null) {
            goto after_number;
        }
        after_number:        $result['number'] = $number;

        
        $name = $object->name;

        if ($name === null) {
            goto after_name;
        }
        after_name:        $result['name'] = $name;

        
        $description = $object->description;

        if ($description === null) {
            goto after_description;
        }
        after_description:        $result['description'] = $description;

        
        $monthly_price_in_cents = $object->monthly_price_in_cents;

        if ($monthly_price_in_cents === null) {
            goto after_monthly_price_in_cents;
        }
        after_monthly_price_in_cents:        $result['monthly_price_in_cents'] = $monthly_price_in_cents;

        
        $yearly_price_in_cents = $object->yearly_price_in_cents;

        if ($yearly_price_in_cents === null) {
            goto after_yearly_price_in_cents;
        }
        after_yearly_price_in_cents:        $result['yearly_price_in_cents'] = $yearly_price_in_cents;

        
        $price_model = $object->price_model;

        if ($price_model === null) {
            goto after_price_model;
        }
        after_price_model:        $result['price_model'] = $price_model;

        
        $has_free_trial = $object->has_free_trial;

        if ($has_free_trial === null) {
            goto after_has_free_trial;
        }
        after_has_free_trial:        $result['has_free_trial'] = $has_free_trial;

        
        $unit_name = $object->unit_name;

        if ($unit_name === null) {
            goto after_unit_name;
        }
        after_unit_name:        $result['unit_name'] = $unit_name;

        
        $state = $object->state;

        if ($state === null) {
            goto after_state;
        }
        after_state:        $result['state'] = $state;

        
        $bullets = $object->bullets;

        if ($bullets === null) {
            goto after_bullets;
        }
        static $bulletsSerializer0;

        if ($bulletsSerializer0 === null) {
            $bulletsSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $bullets = $bulletsSerializer0->serialize($bullets, $this);
        after_bullets:        $result['bullets'] = $bullets;


        return $result;
    }

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplacePurchase⚡️MarketplacePurchase(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\MarketplacePurchase\MarketplacePurchase);
        $result = [];
        
        $billing_cycle = $object->billing_cycle;

        if ($billing_cycle === null) {
            goto after_billing_cycle;
        }
        after_billing_cycle:        $result['billing_cycle'] = $billing_cycle;

        
        $next_billing_date = $object->next_billing_date;

        if ($next_billing_date === null) {
            goto after_next_billing_date;
        }
        after_next_billing_date:        $result['next_billing_date'] = $next_billing_date;

        
        $is_installed = $object->is_installed;

        if ($is_installed === null) {
            goto after_is_installed;
        }
        after_is_installed:        $result['is_installed'] = $is_installed;

        
        $unit_count = $object->unit_count;

        if ($unit_count === null) {
            goto after_unit_count;
        }
        after_unit_count:        $result['unit_count'] = $unit_count;

        
        $on_free_trial = $object->on_free_trial;

        if ($on_free_trial === null) {
            goto after_on_free_trial;
        }
        after_on_free_trial:        $result['on_free_trial'] = $on_free_trial;

        
        $free_trial_ends_on = $object->free_trial_ends_on;

        if ($free_trial_ends_on === null) {
            goto after_free_trial_ends_on;
        }
        after_free_trial_ends_on:        $result['free_trial_ends_on'] = $free_trial_ends_on;

        
        $updated_at = $object->updated_at;

        if ($updated_at === null) {
            goto after_updated_at;
        }
        after_updated_at:        $result['updated_at'] = $updated_at;

        
        $plan = $object->plan;

        if ($plan === null) {
            goto after_plan;
        }
        $plan = $this->serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️MarketplaceListingPlan($plan);
        after_plan:        $result['plan'] = $plan;


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

    
    private function serializeObjectApiClients⚡️Client⚡️GitHub⚡️Schema⚡️ValidationError(mixed $object): mixed
    {
        \assert($object instanceof \ApiClients\Client\GitHub\Schema\ValidationError);
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
        after_resource:        $result['resource'] = $resource;

        
        $field = $object->field;
        after_field:        $result['field'] = $field;

        
        $message = $object->message;
        after_message:        $result['message'] = $message;

        
        $code = $object->code;

        if ($code === null) {
            goto after_code;
        }
        after_code:        $result['code'] = $code;

        
        $index = $object->index;
        after_index:        $result['index'] = $index;

        
        $value = $object->value;

        if ($value === null) {
            goto after_value;
        }
        static $valueSerializer0;

        if ($valueSerializer0 === null) {
            $valueSerializer0 = new \EventSauce\ObjectHydrator\PropertySerializers\SerializeArrayItems(...array (
));
        }
        
        $value = $valueSerializer0->serialize($value, $this);
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
