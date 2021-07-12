<?php

use Platform\Page\Repositories\Interfaces\PageInterface;
use Platform\Page\Supports\Template;

if (!function_exists('get_featured_pages')) {
    /**
     * @param int $limit
     * @return mixed
     */
    function get_featured_pages($limit)
    {
        return app(PageInterface::class)->getFeaturedPages($limit);
    }
}

if (!function_exists('get_page_by_slug')) {
    /**
     * @param string $slug
     * @return mixed
     */
    function get_page_by_slug($slug)
    {
        return app(PageInterface::class)->getBySlug($slug, true);
    }
}
if (!function_exists('get_slug_by_template')) {
    /**
     * @param $template
     * @return mixed
     *
     */
    function get_slug_by_template($template)
    {
        return app(PageInterface::class)->getByTemplate($template);
    }
}

if (!function_exists('get_all_pages')) {
    /**
     * @param boolean $active
     * @return mixed
     */
    function get_all_pages($active = true)
    {
        return app(PageInterface::class)->getAllPages($active);
    }
}

if (!function_exists('register_page_template')) {
    /**
     * @param array $templates
     * @return void
     */
    function register_page_template(array $templates)
    {
        Template::registerPageTemplate($templates);
    }
}

if (!function_exists('get_page_templates')) {
    /**
     * @return array
     */
    function get_page_templates()
    {
        return Template::getPageTemplates();
    }
}

if (!function_exists('get_slug_about_detail')) {
    /**
     * @return array
     *
     */
    function get_slug_about_detail()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'about-detail']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}
if (!function_exists('get_slug_development_history')) {
    /**
     * @return array
     *
     */
    function get_slug_development_history()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'development-history']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}


if (!function_exists('get_slug_talent_opportunity')) {
    /**
     * @return array
     *
     */
    function get_slug_talent_opportunity()
    {
        $page = app(PageInterface::class)->getFirstBy(['template' => 'talent-opportunity']);
        if(!blank($page)) {
            return $page->slugable->key ?? null;
        }

        return null;
    }
}


