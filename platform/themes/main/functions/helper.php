
<?php 
use Platform\Page\Repositories\Interfaces\PageInterface;
use Platform\Page\Supports\Template;
use Platform\Base\Enums\BaseStatusEnum;
use Platform\Base\Supports\SortItemsWithChildrenHelper;
use Platform\Blog\Repositories\Interfaces\CategoryInterface;
use Platform\Blog\Repositories\Interfaces\PostInterface;
use Platform\Blog\Repositories\Interfaces\TagInterface;
use Platform\Blog\Supports\PostFormat;
use Illuminate\Support\Arr;

if (!function_exists('get_slug_talent_opportunity')) {
    /**
     * @return array
     *
     */
    function get_slug_talent_opportunity()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'Business-Areas']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}
if (!function_exists('get_slug_posts')) {
    /**
     * @return array
     *
     */
    function get_slug_posts()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'Posts']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}
if (!function_exists('get_slug_talent_detail')) {
    /**
     * @return array
     *
     */
    function get_slug_talent_detail()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'talent-opportunity']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}

if (!function_exists('get_post_new')){
    /**
    * @param int $limit
    * @param array $with
    * @return \Illuminate\Support\Collection
    */
   function get_post_new($limit)
   {
       return app(PostInterface::class)->getPostNew($limit);
   }
}


if (!function_exists('get_category_default')) {
    /**
     * @param bool $convertToList
     * @return array
     */
    function get_category_default()
    {
       return app(CategoryInterface::class)->getModel()->where('order', 2)->take(1)->get();
    }
}

if (!function_exists('get_posts_by_category_order')) {
    /**
     * @param int $categoryId
     * @param int $paginate
     * @param int $limit
     * @return \Illuminate\Support\Collection
     */
    function get_posts_by_category_order($categoryId, $paginate = 12, $limit = 0, $order = [])
    {
        return app(PostInterface::class)->getByCategoryOrderBy($categoryId, $paginate, $limit, $order);
    }
}

if (!function_exists('get_category_order')) {
    /**
     * @param bool $convertToList
     * @return array
     */
    function get_category_order()
    {
       return app(CategoryInterface::class)->getModel()->where('order', 1)->take(1)->get();
    }
}

if (!function_exists('get_slug_admin')) {
    /**
     * @return array
     *
     */
    function get_slug_admin()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'Admin-Council']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}

if (!function_exists('get_slug_partner')) {
    /**
     * @return array
     *
     */
    function get_slug_partner()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'Partner']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}

if (!function_exists('get_slug_job')) {
    /**
     * @return array
     *
     */
    function get_slug_job()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'talent-opportunity']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}

