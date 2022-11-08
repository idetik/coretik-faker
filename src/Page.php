<?php

namespace Coretik\Faker;

use Faker\Provider\Base;

class Page extends Base
{
    public function page()
    {
        return app()->schema('page')->query()->limit(1)->set('order', 'rand')->results();
    }

    /**
     * Generate page ID.
     * @example 28
     */
    public function pageId()
    {
        $page = $this->page();

        if (empty($page)) {
            return 0;
        }

        return $page[0]->ID;
    }
}
