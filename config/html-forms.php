<?php

return [
    /**
     * If you have form inputs that require an empty value you can add it here.
     * Otherwise, empty values will be stripped
     */
    'ignore_empty_attributes' => [
        /**
         * Ignore the empty attribute for all
         */
        'all' => [
            'disabled',
            'checked'
        ],

        /**
         * *** DO NOT REMOVE THIS ONE UNLESS YOU KNOW WHAT YOU ARE DOING
         * *** THIS CAN VERY EASILY LEAD TO YOU OUTPUTTING USERS HASHED PASSWORDS
         */
        'password' => ['value'],

        /**
         * ** Special input type "placeholder" **
         * This is required for option placeholders to have a value=""
         * Laravel requires this for requests
         */
        'placeholder' => ['value']
    ],
    /**
     * This disables the functionality above and will add any empty attributes
     */
    'ignore_all_empty_attributes' => false,

    /**
     * If you want to allow value boolean attributes you can add them here, otherwise they will be stripped out
     */
    'allowed_boolean_values' => [
        'radio',
        'checkbox',
        'hidden',
        'option'
    ]
];