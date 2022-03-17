<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package underscore
 */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head() ?>
</head>
<body <?php body_class("site") ?> >
<header class="site__header">
    <section class="site__header__titre">
        <h1 class="header__titre"><?php bloginfo('name') ?></h1>
        <h2 class="header__description"> <?php bloginfo('description') ?></h2>
    </section>
    <section class="site__header__util">
        <div class="icone">
        <a href="#" class="icone__lien">
        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path fill-rule="evenodd" d="M10.496 2.132a1 1 0 00-.992 0l-7 4A1 1 0 003 8v7a1 1 0 100 2h14a1 1 0 100-2V8a1 1 0 00.496-1.868l-7-4zM6 9a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1zm3 1a1 1 0 012 0v3a1 1 0 11-2 0v-3zm5-1a1 1 0 00-1 1v3a1 1 0 102 0v-3a1 1 0 00-1-1z" clip-rule="evenodd"></path></svg>
        </a>
        <a href="#" class="icone__lien">
        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000"><path d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zm7 0a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"></path><path d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zm11 3a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707l-2-2A1 1 0 0015 7h-1z"></path></svg>
        </a>
        <a href="" class="icone__lien">
        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zm0 16a3 3 0 01-3-3h6a3 3 0 01-3 3z"></path></svg>
        </a>
        <a href="" class="icone__lien">
        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path d="M5 4a2 2 0 012-2h6a2 2 0 012 2v14l-5-2.5L5 18V4z"></path></svg>   
        </a>
        <a href="" class="icone__lien">
        <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" color="#000000"><path fill-rule="evenodd" d="M18 10c0 3.866-3.582 7-8 7a8.841 8.841 0 01-4.083-.98L2 17l1.338-3.123C2.493 12.767 2 11.434 2 10c0-3.866 3.582-7 8-7s8 3.134 8 7zM7 9H5v2h2V9zm8 0h-2v2h2V9zM9 9h2v2H9V9z" clip-rule="evenodd"></path></svg>
        </a>
        </div>
        <form action="" class="recherche">
            <input type="text" class="recherche__input" placeholder="Recherche">
            <button class="recherche__bouton">
                <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" color="#000"><path d="M0 0h24v24H0z" fill="none"></path><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path></svg>
            </button>
        </form>
        
    </section>

</header>


<section class="site__barre">
    <input type = "checkbox" id = "chk-burger">
    <label for = "chk-burger" id = "burger">
    <svg width="24px" height="24px" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" color="#000"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path></svg></label> 
    <?php wp_nav_menu(array("menu" => "principal",
                            "container" => "nav"));?>
</section>


<!--
<section class="site__barre">
    <nav class="navigation">
        <a href="" class="navigation__lien">mon lien 001</a>
        <a href="" class="navigation__lien">mon lien 002</a>
        <a href="" class="navigation__lien">mon lien 003</a>
        <a href="" class="navigation__lien">mon lien 004</a>
        <a href="" class="navigation__lien">mon lien 005</a>
        <a href="" class="navigation__lien">mon lien 006</a>
        <a href="" class="navigation__lien">mon lien 007</a>
        <a href="" class="navigation__lien">mon lien 008</a>
        <a href="" class="navigation__lien">mon lien 009</a>
        <a href="" class="navigation__lien">mon lien 010</a>
    </nav>
</section>
--> 

