<?php
//
// There4 Authentication test
// =============================================================================
//
// This is a sample class, used in the SlimPHP Unit Testing example
//
// * Author: [Craig Davis](craig.davis@learningstation.com)
// * Since: 10/3/2013
//
// -----------------------------------------------------------------------------
namespace There4\Authentication;

class Cookie
{
    // This is never going to authenticate anyone. However, when we mock this
    // we'll make it pass.
    public function authenticate($token)
    {
        return false;
    }
}

/* End of file authentication.php */
