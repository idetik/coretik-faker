<?php

namespace Coretik\Faker\Provider;

use Faker\Provider\Base;

class Attachment extends Base
{
    public function attachment($type = 'image/jpeg')
    {
        $args = [
            'post_type'      => 'attachment',
            'post_mime_type' => $type,
            'post_status' => 'any',
            'posts_per_page' => 1,
            'orderby'        => 'rand',
        ];
        return (new \WP_Query($args))->posts;
    }

    /**
     * Generate attachment ID.
     * @example 28
     */
    public function attachmentId($type = 'image/jpeg')
    {
        $attachments = $this->attachment($type);

        if (empty($attachments)) {
            return 0;
        }

        return $attachments[0]->ID;
    }
}
