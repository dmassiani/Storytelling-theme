<?php

if (function_exists('icl_get_languages')) {
  if( ICL_LANGUAGE_CODE === 'en' ){
      $menu_language = '?lang=en';
  }else{
    $menu_language = '';
  }

}
function get_url_for_language( $original_url, $language )
{
    $post_id = url_to_postid( $original_url );
    $lang_post_id = icl_object_id( $post_id , 'page', true, $language );
     
    $url = "";
    if($lang_post_id != 0) {
        $url = get_permalink( $lang_post_id );
    }else {
        // No page found, it's most likely the homepage
        global $sitepress;
        $url = $sitepress->language_url( $language );
    }
     
    return $url;
}

// echo get_url_for_language('/docs/', ICL_LANGUAGE_CODE);

?>
<header class="navigation">
  <div class="navigation-wrapper">
    <a id="js-mobile-menu" href="<?php echo esc_url(home_url('/')); ?>" class="navigation-menu-button">MENU</a>
    <div class="nav">
      <ul id="navigation-menu">
        <li class="nav-link">
          <a href="<?php echo get_url_for_language('/blog/', ICL_LANGUAGE_CODE) ?>">Blog</a>
        </li>
        <li class="nav-link">
          <a href="https://github.com/dmassiani/WordPress-Storytelling/archive/master.zip">Download</a>
        </li>
        <li class="nav-link">
          <a href="<?php echo get_url_for_language('/docs/', ICL_LANGUAGE_CODE) ?>">Docs</a>
        </li>
        <li class="nav-link">
          <a href="https://github.com/dmassiani/WordPress-Storytelling">Github</a>
        </li>
      </ul>
    </div>
  </div>
</header>