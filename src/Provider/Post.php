<?php

namespace Coretik\Faker\Provider;

use Faker\Provider\Base;

class Post extends Base
{
    public function post(string $type = 'post')
    {
        return app()->schema($type)->query()->limit(1)->set('order', 'rand')->results();
    }

    /**
     * Generate post ID.
     * @example 28
     */
    public function postId(string $type = 'post')
    {
        $post = $this->post($type);

        if (empty($post)) {
            return 0;
        }

        return $post[0]->ID;
    }
}
