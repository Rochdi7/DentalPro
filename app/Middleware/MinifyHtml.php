<?php

namespace App\Http\Middleware;

use Closure;
use voku\helper\HtmlMin;

class MinifyHtml
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
            $htmlMin = new HtmlMin();
            $htmlMin->doOptimizeAttributes(true);
            $htmlMin->doRemoveComments(true);
            $htmlMin->doRemoveWhitespaceAroundTags(true);

            $output = $htmlMin->minify($response->getContent());
            $response->setContent($output);
        }

        return $response;
    }
}
