<?php

namespace Phalcon\Validation;

/**
 * Interface for Phalcon\Validation\AbstractValidator
 */
interface ValidatorInterface
{

    /**
     * Returns an option in the validator's options
     * Returns null if the option hasn't set
     *
     * @return mixed
     * @param string $key
     * @param mixed $defaultValue
     */
    public function getOption(string $key, $defaultValue = null);

    /**
     * Checks if an option is defined
     *
     * @return boolean
     * @param string $key
     */
    public function hasOption(string $key): bool;

    /**
     * Executes the validation
     *
     * @return boolean
     * @param \Phalcon\Validation $validation
     * @param mixed $field
     */
    public function validate(\Phalcon\Validation $validation, $field): bool;

    /**
     * Get the template message
     *
     * @return string
     * @throw InvalidArgumentException When the field does not exists
     * @param string $field
     */
    public function getTemplate(string $field): string;

    /**
     * Get message templates
     *
     * @return array
     */
    public function getTemplates(): array;

    /**
     * Clear current template and set new from an array,
     *
     * @return ValidatorInterface
     * @param array $templates
     */
    public function setTemplates(array $templates): ValidatorInterface;

    /**
     * Set a new temlate message
     *
     * @return ValidatorInterface
     * @param string $template
     */
    public function setTemplate(string $template): ValidatorInterface;

}
