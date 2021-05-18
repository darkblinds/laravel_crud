<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * Indicates whether the XSRF-TOKEN cookie should be set on the response.
     *
     * @var bool
     */
    protected $addHttpCookie = true;

    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '/insert_employer',
        '/edit_employer',
        '/delete_employer',
        '/insert_company',
        '/edit_company',
        '/delete_company',
        '/insert_job',
        '/insert_jobs_company/{company_id}',
        '/insert_jobs_employer/{employer_id}',
        '/edit_job',
        '/delete_job',
    ];
}
