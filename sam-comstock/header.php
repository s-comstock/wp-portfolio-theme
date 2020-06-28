<!DOCTYPE html>
<html <?php language_attributes(); ?> >
  <head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <!--Menu List-->
    <div class="menu">
      <div class="menu__list">
        <ul>
          <?php
            $menuLocations = get_nav_menu_locations();
            $menuID = $menuLocations['mainMenu'];
            $primaryNav = wp_get_nav_menu_items($menuID);
            foreach ( $primaryNav as $navItem ) {
              echo
              '<li>
                  <span class="top"></span><span class="top"></span><span class="top"></span>
                  <span class="bottom"></span><span class="bottom"></span><span class="bottom"></span>
                  <a href="' . $navItem->url . '">' . $navItem->title . '</a>
              </li>';
            }
            ?>
        </ul>
      </div>
    </div>
    <!--Menu Button-->
    <div class="menu-btn">
      <p class="menu-btn__text">MENU</p>
        <div class="menu-btn__icon">
          <span></span>
          <span></span>
          <span></span>
        </div>
    </div>
