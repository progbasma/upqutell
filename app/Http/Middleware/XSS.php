<?php

namespace App\Http\Middleware;

use Closure;

class XSS
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!empty($request->get('search'))) {
            return $next($request);
        }

        try {
            if ($request->method() == 'POST' || $request->method() == 'PUT') {
                $input = $request->except('fingerprint', 'serverMemo', 'updates');
                array_walk_recursive($input, function (&$input) {
                    $str = $input;
                    $searchVal = array("<script>", "</script>");
                    $replaceVal = array(" ", " ");
                    $input = null;
                    if ($str) {
                        $input = str_replace($searchVal, $replaceVal, $str);
                    }
                });
                $request->merge($input);
                return $next($request);

            } else {
                $input = $request->except('fingerprint', 'serverMemo', 'updates');
                array_walk_recursive($input, function (&$input) {
                    $input = htmlentities($input);
                });
                $request->merge($input);
                return $next($request);
            }
        } catch (\Exception $exception) {
            return $next($request);
        }


    }
}
