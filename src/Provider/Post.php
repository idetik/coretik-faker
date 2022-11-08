<?php

namespace Coretik\Faker\Provider;

use Faker\Provider\Base;

class Post extends Base
{
    public function post()
    {
        return app()->schema('post')->query()->limit(1)->set('order', 'rand')->results();
    }

    /**
     * Generate post ID.
     * @example 28
     */
    public function postId()
    {
        $post = $this->post();

        if (empty($post)) {
            return 0;
        }

        return $post[0]->ID;
    }
}
